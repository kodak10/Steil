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
// $categorie_engin = CategorieEngin::all();
        // $engin = Engin::find(1);
        $pieces = Piece::all();
        // $categories_engins = $engins->categorieEngin;


        return view('dashboard.pieces.index', compact('pieces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie_pieces = CategoriePiece::all();
        return view('dashboard.pieces.create' , compact('categorie_pieces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $validatedData = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'categorie_piece_id' => 'required',
            'couverture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,webp|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048'



        ]);

        // Création d'un nouvel
        $pieces = new Piece();
        $pieces->nom = $validatedData['nom'];
        $pieces->description = $validatedData['description'];
        $pieces->categorie_piece_id = $validatedData['categorie_piece_id'];
        $imageName_couverture = time() . '_' . $validatedData['couverture']->getClientOriginalName();
        $pieces->couverture = 'assets/img/pieces/' . $imageName_couverture;
        $pieces->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/pieces/'), $imageName);

                $photo = new Image();
                $photo->chemin = 'assets/img/pieces/' . $imageName;
                $pieces->images()->save($photo);
            }
        }



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
        $categorie_pieces = CategoriePiece::all();
        $pieces = Piece::findOrFail($id);
        return view('dashboard.pieces.edit', compact('categorie_pieces', 'pieces'));
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
            'id_categories_pieces' => 'required',
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
