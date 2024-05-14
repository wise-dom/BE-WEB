<?php

namespace App\Http\Controllers;

use App\Http\Resources\FiliereResource;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Filiere::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libelle = $request->input('libelle');

        $filiere = Filiere::create([
            'libelle' => $libelle,
        ]);
        return response()->json([
            'data' => new FiliereResource($filiere)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        return new FiliereResource($filiere);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {
        $libelle = $request->input('libelle');

        $filiere->update([
            'libelle' => $libelle,
        ]);
        return response()->json([
            'data' => new FiliereResource($filiere)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
        return response()->json(null, 204);
    }
}
