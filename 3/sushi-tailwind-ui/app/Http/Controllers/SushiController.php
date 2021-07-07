<?php

namespace App\Http\Controllers;

use App\Sushi;
use Illuminate\Http\Request;

class SushiController extends Controller
{
    public function index()
    {
        $sushi = Sushi::get();

        return view('welcome', [
            'sushi' => $sushi,
        ]);
    }

    public function show(Sushi $sushi)
    {
        return view('sushi.details', [
            'sushi' => $sushi,
        ]);
    }

    public function create()
    {
        return view('sushi.create', []);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        Sushi::create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image' => $request->get('image'),
        ]);

        return redirect(action('SushiController@index'));
    }

    public function edit($id)
    {
        $sushi = Sushi::find($id);

        if (!$sushi) {
            return view('404');
        }

        return view('sushi.edit', [
            'sushi' => $sushi,
        ]);
    }

    public function update(Request $request, Sushi $sushi)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $sushi->update([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image' => $request->get('image'),
        ]);

        return redirect(action('SushiController@show', ['sushi' => $sushi->id]));
    }

    public function destroy($id)
    {
        $sushi = Sushi::find($id);

        if (!$sushi) {
            return view('404');
        }

        $sushi->delete();

        return redirect(action('SushiController@index'));
    }
}
