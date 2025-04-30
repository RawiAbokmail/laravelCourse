<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return "home page";

        $name = "Ali";
        $age = "20";
        return view('index');
    }

    public function about()
    {
        // return view('about');
        return "about us";
    }

    public function contact()
    {
        // return view('contact');
        return "contact us";
    }

    public function team()
    {
        // return view('team');
        return "team page";
    }

    public function blog()
    {
        // return view('blog');
        return "blog page";
    }

    public function courses($name = null){
        return $name . " courses page";
    }

}
