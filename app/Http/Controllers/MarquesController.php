<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = Marque::all();
        return view ('dashboard.marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.marques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $validatedData = $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048'

        ]);

        // Création d'un nouvel

        // $marques = new Marque();
        // $marques->nom = $validatedData['nom'];
        // $marques->description = $validatedData['description'];
        // $marques->id_categories_engin = $validatedData['id_categories_engin'];
        // $marques->save();

        // if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/marques/'), $imageName);

                $marques = new Marque();
                $marques->chemin = 'assets/img/marques/' . $imageName;
                $marques->save();
            }
        // }


        return redirect()->route('marques.create')->with('success', "Marque créé avec succès.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //return view ('dashboard.marques.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marques = Marque::findOrFail($id);
        $marques->delete();

        return redirect()->route('marques.index')->with('success', "Marque supprimer avec succès.");
    }
}
