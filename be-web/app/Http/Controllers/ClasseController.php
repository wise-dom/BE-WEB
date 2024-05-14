<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClasseResource;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Classe::all();
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
        $effectif = $request->input('effectif');

        $classe = Classe::create([
            'libelle' => $libelle,
            'effectif' => $effectif,
        ]);
        return response()->json([
            'data' => new ClasseResource($classe)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        return new ClasseResource($classe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $libelle = $request->input('libelle');
        $effectif = $request->input('effectif');

        $classe->update([
            'libelle' => $libelle,
            'effectif' => $effectif,
        ]);
        return response()->json([
            'data' => new ClasseResource($classe)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();
        return response()->json(null, 204);
    }
}
