<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function viewShirts()
    {
        return view('front.shirts');
    }
    public function viewShirt()
    {
        return view('front.shirt');
    }
}
