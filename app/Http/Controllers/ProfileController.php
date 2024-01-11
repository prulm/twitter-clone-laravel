<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $users = [
            [
                'name' => 'Jared',
                'age' => 23,
            ],
            [
                'name' => 'Prulm',
                'age' => 22,
            ],
        ];

        return view('users.profile', ['users' => $users]);
    }
}
