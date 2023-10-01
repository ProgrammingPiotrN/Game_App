<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = [];
        //$users = collect();

        $faker = Factory::create();

        $count = $faker->numberBetween(3, 15);

        for ($i=0; $i < $count; $i++) {
            $users[$i] = [
                'id' => $faker->numberBetween(1, 1000),
                'name' => $faker->firstName
            ];
            //$users bez []
            // $users->push($user);
        }

        return view('user.index', [
            'users' => $users
        ]);

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
            'age' => $faker->numberBetween(12, 25),
        ];

        return view('user.show', [
            'user' => $user
        ]);
    }
}
