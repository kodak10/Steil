<?php

namespace App\Http\Controllers;

use App\Models\CategoriePiece;
use Illuminate\Http\Request;

class PieceCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories_pieces = CategoriePiece::all();
        return view('dashboard.pieces.categories.index', compact('categories_pieces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pieces.categories.create');
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
        CategoriePiece::create([
            'nom' => $request->input('nom'),
        ]);

        return redirect()->route('categorie_piece.create')->with('success', "Catégorie de pièce créé avec succès.");
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
        $categories_piece = CategoriePiece::findOrFail($id);
        return view('dashboard.pieces.categories.edit', compact('categories_piece'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories_piece = CategoriePiece::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
        ]);

        $categories_piece->nom = $request->input('nom');

        $categories_piece->save();

        return redirect()->route('categorie_piece.edit', $categories_piece->id)->with('success', "Catégorie de pièce mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories_piece = CategoriePiece::findOrFail($id);
        $categories_piece->delete();

        return redirect()->route('categorie_piece.index')->with('success', "Catégorie de pièce supprimer avec succès.");
    }
}
