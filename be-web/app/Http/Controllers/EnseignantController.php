<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Enseignant::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'code_enseignant' => 'required|string|max:10',
            'contact' => 'required|string|max:10',
        ]);

        return Enseignant::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignant)
    {
        return $enseignant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'code_enseignant' => 'required|string|max:10',
            'contact' => 'required|string|max:10',
        ]);

        $enseignant->update($validated);

        return $enseignant;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();

        return response()->noContent();
    }
}
