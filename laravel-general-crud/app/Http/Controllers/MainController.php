<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MainController extends Controller
{

    //regole di validazione
    private function getValidationRules() {
        return [
            'team1' => 'required|string|min:2|max:255',
            'team2' => 'required|string|min:2|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean',
        ];
    }
    //home
    public function home()
    {
        $matches = Match::all();
        return view('pages.home', compact('matches'));
    }

    //show singolo elemento
    public function show($id)
    {
        $match = Match::findOrFail($id);
        return view('pages.show', compact('match'));
    }

    //crea nuovo elemento
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request) {
        // dd($request -> all());

        $validData = $request -> validate($this -> getValidationRules());

        // dd($validData);
        $match = Match::create($validData);
        return redirect() -> route('show', $match -> id);

    }

    //elimina elemento
    public function destroy($id)
    {
        $match = Match::findOrFail($id);
        $match -> delete();
        return redirect() -> route('home');
    }

    //modifica elemento
    public function edit($id)
    {
        $match = Match::findOrFail($id);
        return view('pages.edit', compact('match'));
    }

    public function update(Request $request, $id)
    {
        $validData = $request -> validate($this -> getValidationRules());

        $match = Match::findOrFail($id);
        $match -> update($validData);
        return redirect() -> route('show', $match -> id);
    }
}
