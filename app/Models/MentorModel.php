<?php

namespace App\Models;

use CodeIgniter\Model;

class MentorModel extends Model
{
    protected $table = 'tutor';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'location', 'rating', 'price', 'popularity', 'image'];
}
