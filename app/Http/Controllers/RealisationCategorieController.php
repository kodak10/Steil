<?php

namespace App\Http\Controllers;

use App\Models\RealisationCategorie;
use Illuminate\Http\Request;

class RealisationCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories_realisations = RealisationCategorie::all();
        return view('dashboard.realisation.categories.index', compact('categories_realisations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.realisation.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
        ]);

        // Création d'un nouvel utilisateur
        RealisationCategorie::create([
            'nom' => $request->input('nom'),
        ]);

        return redirect()->route('categorie_realisation.create')->with('success', "Catégorie de réalisation créé avec succès.");
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
        $categories_realisation = RealisationCategorie::findOrFail($id);

        return view('dashboard.realisation.categories.edit', compact('categories_realisation'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $categories_realisation = RealisationCategorie::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
        ]);

        $categories_realisation->nom = $request->input('nom');

        $categories_realisation->save();

        return redirect()->route('categorie_realisation.edit', $categories_realisation->id)->with('success', "Catégorie de réalisation mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories_realisation = RealisationCategorie::findOrFail($id);
        $categories_realisation->delete();

        return redirect()->route('categorie_piece.index')->with('success', "Catégorie de pièce supprimer avec succès.");
    }
}
