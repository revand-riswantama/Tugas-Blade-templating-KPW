<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function form()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return view('welcome', compact('firstName', 'lastName'));
    }

    public function data()
    {
        return view('data');
    }
}
