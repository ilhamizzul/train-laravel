<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('welcome');
        // return 'this is content from home controller';
    }

    function showAboutPage() {
        return view('about.index');
    }
}
