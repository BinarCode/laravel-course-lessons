<?php

namespace App\Http\Controllers;

class SushiController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function index()
    {
        $ingredient = request('ingredient');

        return view('welcome', [
            'ingredient' => $ingredient,
        ]);
    }
}
