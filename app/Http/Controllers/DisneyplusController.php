<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisneyplusController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'show_name' => 'required|max:255',
            'series' => 'required|max:255',
            'lead_actor' => 'required|max:255',
        ]);
        Disneyplus::create($validatedData);
   
        return redirect('/disneyplus')->with('success', 'Disney Plus Show is successfully saved');
    }
}
