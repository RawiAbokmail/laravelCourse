<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index()
    {
        return view('site1.index');
    }

    public function about()
    {
        return view('site1.about');
    }

    public function contact()
    {
        return view('site1.contact');
    }

    function students($teacher)
    {

        $all_students = [
            'Rawi' =>['Ziad', 'Ahmed', 'Mohamed'],
            'Mohamed' => ['Abd', 'Ahmed', 'Majd'],
            'Ali' => ['Anas', 'Fady', 'Mohamed'],
        ];

        $students = $all_students[$teacher] ?? [];

        $text = "<p><b>lorem</b>  ipsum dolor <i>sit amet consectetur</i> adipisicing elit. <mark>dolor</mark> voluptatibus.</p>";
        // dd($students);

       return view('site1.students', compact('teacher' ,'students', 'text'));

        // return view('site1.students')->with(['students' => $students]);
        // return view('site1.students', [
        //     'students' => $students
        // ]);

    }

    public function user($name, $age = null)
    {

        return view('site1.user', compact('name', 'age'));

        // return view('site1.user')->with(['name' => $name, 'age' => $age]);
        // return view('site1.user', [
        //     'name' => $name,
        //     'age' => $age
        // ]);

        // dd(compact('name', 'age'));


        // if ($age) {
        //     return view('site1.user', ['name' => $name, 'age' => $age]);
        // }
        // else {
        //     return view('site1.user', ['name' => $name]);
        // }
        // return view('site1.user', ['name' => $name]);
    }
}
