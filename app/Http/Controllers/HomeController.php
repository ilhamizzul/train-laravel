<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {

        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'user123',
            'email_verified_at' => now(),
            'created_at' => now()
        ]);

        return view('welcome');
        // return 'this is content from home controller';
    }

    function showAboutPage() {
        return view('about.index');
    }
}
