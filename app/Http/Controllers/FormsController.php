<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form3Request;
use App\Mail\ContactUsMail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    function form1_data(Request $request) {

        // $email = $request->input('name');
        $name = $request->name;  // this is the same as $request->input('name');
        // $email = $request->input('email');
        $name = $request->email; // this is the same as $request->input('email');
        dd($name);

        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name'));

        // $data = $_POST;
        // unset($data['_token']);
        // dd($data);
    }

    function form2()
    {
        $options = [
            'male' => 'Male',
            'female' => 'Female',
            'other' => 'Other',
        ];
        return view('forms.form2', compact('options'));
    }

    function form2_data(Request $request) {
        dd($request->except('_token'));
    }

    function form3()
    {
        return view('forms.form3');
    }

    function form3_data(Form3Request $request) {

        // for all forms follow this steps
        // 1-> make validation
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'message' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png'
        ]);

        $data = $request->except('_token', 'media');
             // 2-> store files

    //    $path = $request->file('media')->store('uploads'); // store in local disk -> storage/private/uploads
    //    $path = $request->file('media')->store('uploads', 'public'); // store in public disk -> storage/public/uploads , you must do -> php artisan storage:link
       $path = $request->file('media')->store('uploads', 'custom'); // the best
        $data['media'] = $path;
    //     return $path;


        // 3-> save in database

        // 4-> redirect to view


        // Mail::to('admin@gmail.com')->send(new TestMail());
        Mail::to('admin@gmail.com')->queue(new ContactUsMail($data));// this is the best way to send email but write in terminal -> php artisan queue:work


        dd($data);


    }
}
