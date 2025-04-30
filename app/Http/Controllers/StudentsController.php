<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return "welcome Student index";
    }

    public function marks(){
        return "Students Marks";
    }

    public function grades(){
        return "Students Grades";
    }

}
