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

        //Product::find(4)->delete();
        // RESTORE
        // $products = Product::withTrashed()->find(1)->restore();

        // FORCE DELETE
        Product::withTrashed()->find(4)->forceDelete();

        return Product::onlyTrashed()->get();
        return view('welcome');
    }

    function showAboutPage() {
        return view('about.index');
    }
}
