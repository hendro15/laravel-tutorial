<?php

namespace latihan01\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
        return view('layouts.welcome');
    }
}
