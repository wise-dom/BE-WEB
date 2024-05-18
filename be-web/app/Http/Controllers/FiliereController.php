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
        // return Filiere::collection(Filiere::with('classes'));
        // return Filiere::all();
        return FiliereResource::collection(Filiere::with('classes')->get());
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
            'libelle' => 'required|string|max:255',
        ]);


        return Filiere::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        // return $filiere;
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
        $validated = $request->validate([
            'libelle' => 'required|string|max:255',
        ]);

        $filiere->update($validated);

        return $filiere;
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
        return response()->noContent();
    }
}
