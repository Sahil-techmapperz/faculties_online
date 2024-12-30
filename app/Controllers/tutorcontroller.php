<?php

namespace App\Controllers;

use App\Models\MentorModel;

class Tutorcontroller extends BaseController
{
    public function index()
    {
        $mentorModel = new MentorModel();

        // Get sorting criteria and orderBy from query parameters
        $sort = $this->request->getVar('sort') ?? 'popular';
        $orderBy = $this->request->getVar('orderBy') ?? 'ASC'; // Default to ASC for price

        // Ensure valid values for `orderBy`
        $orderBy = strtoupper($orderBy) === 'DESC' ? 'DESC' : 'ASC';

        // Determine the column to sort by
        switch ($sort) {
            case 'price':
                // Extract the minimum value from the price range for sorting
                $orderColumn = 'CAST(SUBSTRING_INDEX(price, "-", 1) AS UNSIGNED)';
                break;
            case 'rating':
                $orderColumn = 'rating';
                break;
            default:
                $orderColumn = 'popularity';
        }

        // Build the complete orderBy query
        $orderQuery = "$orderColumn $orderBy";

        // Pagination setup
        $perPage = 4; // Number of mentors per page
        $currentPage = (int)($this->request->getVar('page') ?? 1);

        // Fetch mentors based on sorting and pagination
        $mentors = $mentorModel
            ->orderBy($orderQuery)
            ->paginate($perPage, 'mentors', $currentPage);

        // Total results for all mentors
        $totalResults = $mentorModel->countAllResults(false); // Avoid re-querying

        // Calculate total pages
        $totalPages = (int)ceil($totalResults / $perPage);

        // Prepare query parameters for pagination links
        $queryParams = $this->request->getVar();
        unset($queryParams['page']); // Remove the page key
        $queryParams['sort'] = $sort;
        $queryParams['orderBy'] = $orderBy;

        return view('tutor', [
            'mentors' => $mentors,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'currentSort' => $sort,
            'currentOrderBy' => $orderBy,
            'queryParams' => $queryParams, // Pass query parameters for pagination
            'totalResults' => $totalResults, // Pass total mentors to the view
        ]);
    }
}
