<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {

        // $product = Product::where([['id' => 1]])->where('price', 303)->get();
        // $product = Product::where('name', 'LIKE', '%labtop%')->orWhere('description', 'LIKE', '%labortosak')->get();
        // $product = Product::whereIn('id', [1, 2, 3, 4, 5])->get();
        $product = Product::whereBetween('price', [100, 200])->get();
        return $product;
        return view('welcome');
    }

    function showAboutPage() {
        return view('about.index');
    }
}
