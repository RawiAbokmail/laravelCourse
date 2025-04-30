<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "welcome Teacher index";
    }

    public function marks()
    {
        return "Teacher Marks";
    }

    public function avg()
    {
        return "Teacher Avg";
    }
}
