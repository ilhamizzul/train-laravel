<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {

        // ELOQUENT INSERT DATA
        // $user = new User();
        // $user->name = fake()->name();
        // $user->email = fake()->freeEmail();
        // $user->password = '12345';
        // $user->save();

        // $product = new Product();
        // $product->name = fake()->sentence(rand(1, 3));
        // $product->description = fake()->paragraph();
        // $product->price = rand(100, 400);
        // $product->save();

        // ELOQUENT GET DATA
        // $users = User::all()->where('delete', '==', 0);
        // return dd($users);

        // ELOQUENT UPDATE DATA
        // $users = User::where('id', 1)->first();
        // $users->name = 'Ilham Izzul2';
        // $users->email = 'ilham@gmail.com';
        // $users->save();
        // return $users;

        // ELOQUENT DELETE DATA
        // $users = User::where('id', 2)->first();
        // $users->delete();

        return view('welcome');
    }

    function showAboutPage() {
        return view('about.index');
    }
}
