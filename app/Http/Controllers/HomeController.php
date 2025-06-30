<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {

        // ELOQUENT INSERT DATA BASED ON FILLABLE
        // Product::create([
        //     'name' => fake()->name(),
        //     'description' => fake()->paragraph(),
        //     'price' => rand(50, 500)
        // ]);

        // ELOQUENT INSERT MULTIPLE DATA
        // Product::insert([
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        //     [
        //         'name' => fake()->name(),
        //         'description' => fake()->paragraph(),
        //         'price' => rand(50, 500)
        //     ],
        // ]);

        return view('welcome');
    }

    function showAboutPage() {
        return view('about.index');
    }
}
