<?php

namespace App\Http\Controllers;

use App\Mail\ZayContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ZayController extends Controller
{
    public function index()
    {
        return view('zay.index');
    }
    public function about()
    {
        return view('zay.about');
    }
    public function contact()
    {
        return view('zay.contact');
    }
    public function contact_data(Request $request)
    {
        $request->validate([
            'name'=>'required|string|min:3|max:20',
            'email'=>'required|email',
            'subject'=>'required|string|min:3|max:50',
            'message'=>'required|string|min:5|max:1000',

        ]);
        $data = $request->except('_token');
        Mail::to('admin@gmail.com')->queue(new ZayContactMail($data));
        dd($data);

    }
    public function shop()
    {
        return view('zay.shop');
    }
    public function shopSingle()
    {
        return view('zay.shop-single');
    }
}
