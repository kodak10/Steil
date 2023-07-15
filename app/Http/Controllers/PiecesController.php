<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Piece;
use Illuminate\Http\Request;
use App\Models\CategoriePiece;

class PiecesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pieces = Piece::all();
        return view('dashboard.pieces.index', compact('pieces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pieces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $validatedData = $request->validate([
            'categorie_pieces' => 'required',
            'nom' => 'required',
            'reference' => 'required',
            'image' => 'required', 'image|mimes:jpeg,png,jpg,PNG,JPG,webp|max:2048',
            'images.*' =>  'image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'max:225',

        ]);
        // Création d'un nouvel engin
        $imageOriginale = $request->file('image');
        $imageOriginaleName = time() . '.' . $imageOriginale->getClientOriginalExtension();

        $imageOriginalePath = 'assets/img/pieces/' . $imageOriginaleName;
        $imageOriginale->move(public_path('assets/img/pieces'), $imageOriginaleName);

        // Enregistrement des données dans la base de données
        $pieces = Piece::create([
            'categorie_pieces' => $request->categorie_pieces,
            'nom' => $request->nom,
            'reference' => $request->reference,
            'image' => $imageOriginalePath,
            'description' => $request->description,
        ]);







        return redirect()->route('pieces.create')->with('success', "Pièces créé avec succès.");
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
        $pieces = Piece::findOrFail($id);
        return view('dashboard.pieces.edit', compact('pieces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $piece = Piece::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'id_categories_piece' => 'required',
        ]);

        $piece->nom = $request->input('nom');
        $piece->description = $request->input('description');
        $piece->id_categories_pieces = $request->input('id_categories_pieces');

        $piece->save();

        return redirect()->route('pieces.edit', $piece->id)->with('success', "Pièce mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pieces = Piece::findOrFail($id);
        $pieces->delete();

        return redirect()->route('pieces.index')->with('success', "Pièce supprimer avec succès.");
    }

}
