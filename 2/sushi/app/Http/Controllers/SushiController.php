<?php

namespace App\Http\Controllers;

use App\Sushi;

class SushiController extends Controller
{
    public function index()
    {
        $sushies = Sushi::get();

        return view('welcome', [
            'sushies' => $sushies,
        ]);
    }
}
