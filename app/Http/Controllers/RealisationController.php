<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Models\RealisationCategorie;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categorie_engin = CategorieEngin::all();
        // $engin = Engin::find(1);
        $realisations = Realisation::all();
        // $categories_engins = $engins->categorieEngin;


        return view('dashboard.realisation.index', compact('realisations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie_realisations = RealisationCategorie::all();
        return view('dashboard.realisation.create' , compact('categorie_realisations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $validatedData = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'id_categories_realisations' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,PNG,JPG|max:2048'

        ]);

        // Création d'un nouvel

        $realisations = new Realisation();
        $realisations->titre = $validatedData['titre'];
        $realisations->description = $validatedData['description'];
        $realisations->id_categories_realisations = $validatedData['id_categories_realisations'];
        $realisations->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/realisations/'), $imageName);

                $photo = new Image();
                $photo->chemin = 'assets/img/realisations/' . $imageName;
                $realisations->images()->save($photo);
            }
        }


        return redirect()->route('realisations.create')->with('success', 'Réalisation créé avec succès.');



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
        $categorie_realisations = RealisationCategorie::all();
        $realisations = Realisation::findOrFail($id);
        return view('dashboard.realisation.edit', compact('categorie_realisations', 'realisations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $realisation = Realisation::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'id_categories_realisations' => 'required',
        ]);

        $realisation->titre = $request->input('titre');
        $realisation->description = $request->input('description');
        $realisation->id_categories_realisations = $request->input('id_categories_realisations');

        $realisation->save();

        return redirect()->route('realisations.edit', $realisation->id)->with('success', "Réalisation mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $realisation = Realisation::findOrFail($id);
        $realisation->delete();

        return redirect()->route('realisations.index')->with('success', "Réalisation supprimer avec succès.");
    }
}
