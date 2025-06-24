<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {
        //INSERT
        // DB::table('users')->insert([
        //     'name' => fake()->name(),
        //     'email' => fake()->email(),
        //     'password' => 'user123',
        //     'email_verified_at' => now(),
        //     'created_at' => now()
        // ]);

        // GET
        // $users = DB::table('users')->get()->where('id', '>', 4);
        // return $users;

        // GET certain column
        //return DB::table('users')->select(['name', 'email'])->get();

        // UPDATE
        // DB::table('users')->where('id', 12)->update([
        //     'password' => 'user321'
        // ]);

        // DELETE
        // DB::table('users')->where('id', 12)->delete();

        // SOFT DELETE
        // DB::table('users')->where('id', 2)->update([
        //     'delete' => 1
        // ]);

        // aggregator
        // return $products = DB::table('products')->min('price');

        // return view('welcome');
        // return 'this is content from home controller';
    }

    function showAboutPage() {
        return view('about.index');
    }
}
