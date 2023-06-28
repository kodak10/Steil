<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieEngin;

class EnginCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories_engins = CategorieEngin::all();
        return view('dashboard.engin.categories.index', compact('categories_engins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.engin.categories.create');
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
        CategorieEngin::create([
            'nom' => $request->input('nom'),
        ]);

        return redirect()->route('categorie_engin.create')->with('success', "Catégorie d'Engin créé avec succès.");
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
        $categorie_engin = CategorieEngin::findOrFail($id);
        return view('dashboard.engin.categories.edit', compact('categorie_engin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorie_engin = CategorieEngin::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
        ]);

        $categorie_engin->nom = $request->input('nom');

        $categorie_engin->save();

        return redirect()->route('categorie_engin.edit', $categorie_engin->id)->with('success', "Catégorie d'engin mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories_engin = CategorieEngin::findOrFail($id);
        $categories_engin->delete();

        return redirect()->route('categorie_engin.index')->with('success', "Catégorie d'engin supprimer avec succès.");
    }
}
