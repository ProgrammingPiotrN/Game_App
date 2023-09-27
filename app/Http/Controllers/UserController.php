<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('user.index');
    }

    public function show(int $userId)
    {
        $faker = Factory::create();
        $user = [
            'id' => $userId,
            'name' => $faker->name,
            'firstName' => $faker->firstname,
            'lastName' => $faker->lastname,
            'city' => $faker->city,
            'age' => $faker->numberBetween(12, 40),
        ];

        return view('user.show', [
            'user' => $user
        ]);
    }
}
