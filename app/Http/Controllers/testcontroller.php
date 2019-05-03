<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function __invoke($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
