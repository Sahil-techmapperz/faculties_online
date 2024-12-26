<?php

namespace App\Controllers;

use App\Models\MentorModel;

class Tutorcontroller extends BaseController
{
    public function index(): string
    {
        $mentorModel = new MentorModel();

        // Get sorting criteria from query parameters
        $sort = $this->request->getVar('sort') ?? 'popular';

        // Set sorting order
        switch ($sort) {
            case 'price':
                $orderBy = 'price ASC';
                break;
            case 'rating':
                $orderBy = 'rating DESC';
                break;
            default:
                $orderBy = 'popularity DESC';
        }

        // Pagination setup
        $perPage = 4; // Number of mentors per page
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch mentors based on sorting and pagination
        $mentors = $mentorModel
            ->orderBy($orderBy)
            ->paginate($perPage, 'mentors', $currentPage);

        // Get the total number of results
        $totalResults = $mentorModel->countAllResults(); 

        // Calculate total pages
        $totalPages = ceil($totalResults / $perPage); 

         // Get the total number of results
         $totalResults = $mentorModel->countAllResults();

        // Prepare query parameters for pagination links
        $queryParams = $this->request->getVar();
        unset($queryParams['page']); // Remove page from query parameters to prevent duplicates
        $queryParams['sort'] = $sort; // Ensure sort is passed

        return view('tutor', [
            'mentors' => $mentors,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'currentSort' => $sort,
            'queryParams' => $queryParams, // Pass query parameters for pagination
            'totalResults' => $totalResults, // Pass total mentors to the view
        ]);
    }
}
