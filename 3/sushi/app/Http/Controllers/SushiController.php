<?php

namespace App\Http\Controllers;

use App\Sushi;
use Illuminate\Http\Request;

class SushiController extends Controller
{
    public function index()
    {
        $sushies = Sushi::get();

        return view('welcome', [
            'sushies' => $sushies,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sushi $sushi)
    {
        return view('sushi.single', [
            'sushi' => $sushi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sushi.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'min:5'
            ],

            'price' => 'required',
        ], [
            'name.required' => 'Acest camp este obligatoriu.',
        ]);

        Sushi::create([
            'name' => $request->get('name'),

            'description' => $request->get('description'),

            'price' => $request->get('price'),

            'image' => 'https://en.pimg.jp/009/870/186/1/9870186.jpg',
        ]);

        return redirect(action('SushiController@index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sushi $sushi)
    {
        return view('sushi.edit', [
            'sushi' => $sushi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sushi $sushi)
    {
        $sushi->update([
            'name' => $request->get('name'),

            'description' => $request->get('description'),

            'price' => $request->get('price'),
        ]);

        return redirect(action('SushiController@show', ['sushi' => $sushi->id,]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sushi $sushi)
    {
        $sushi->delete();

        return redirect(action('SushiController@index'));
    }
}
