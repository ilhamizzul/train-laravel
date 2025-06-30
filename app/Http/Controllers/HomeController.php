<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {

        return Product::withTrashed()->find(1);
        return view('welcome');
    }

    function showAboutPage() {
        return view('about.index');
    }
}
