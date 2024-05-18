<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClasseResource;
use App\Models\Classe;
use App\Models\Filiere;
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
    public function store(Request $request, Filiere $filiere)
    {
        // $libelle = $request->input('libelle');
        // $effectif = $request->input('effectif');
        // $filiere_id = $request->input('filiere_id');

        // $classe = Classe::create([
        //     'libelle' => $libelle,
        //     'effectif' => $effectif,
        //     'filiere_id' => $filiere_id,

        // ]);
        // return response()->json([
        //     'data' => new ClasseResource($classe)
        // ], 201);
        $validated = $request->validate([
            'filiere_id' => 'required|exists:filieres,id',
            'libelle' => 'required|string|max:255',
            'effectif' => 'required|integer',
        ]);

        return Classe::create($validated);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        // return new ClasseResource($classe);
        return $classe;
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
        // $libelle = $request->input('libelle');
        // $effectif = $request->input('effectif');

        // $classe->update([
        //     'libelle' => $libelle,
        //     'effectif' => $effectif,
        // ]);
        // return response()->json([
        //     'data' => new ClasseResource($classe)
        // ], 200);

        $validated = $request->validate([
            'filiere_id' => 'exists:filieres,id',
            'libelle' => 'required|string|max:255',
            'effectif' => 'required|integer',

        ]);

        $classe->update($validated);

        return $classe;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        // $classe->delete();
        // return response()->json(null, 204);
        $classe->delete();

        return response()->noContent();
    }
}
