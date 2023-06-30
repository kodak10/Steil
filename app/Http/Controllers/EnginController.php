<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\CategorieEngin;

class EnginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categorie_engin = CategorieEngin::all();
        // $engin = Engin::find(1);
        $engins = Engin::all();
        // $categories_engins = $engins->categorieEngin;


        return view('dashboard.engin.index', compact('engins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie_engins = CategorieEngin::all();
        return view('dashboard.engin.create' , compact('categorie_engins'));
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
            'id_categories_engin' => 'required',
            'couverture' => 'image|mimes:jpeg,png,jpg,PNG,JPG|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,PNG,JPG|max:2048',


        ]);

        // Création d'un nouvel



        $engins = new Engin();
        $engins->nom = $validatedData['nom'];
        $engins->description = $validatedData['description'];
        $engins->id_categories_engin = $validatedData['id_categories_engin'];

        $imageName_couverture = time() . '_' . $validatedData['couverture']->getClientOriginalName();

        $engins->couverture = 'assets/img/engin/' . $imageName_couverture;
        $engins->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/engin/'), $imageName);

                $photo = new Image();
                $photo->chemin = 'assets/img/engin/' . $imageName;
                $engins->images()->save($photo);
            }
        }


        return redirect()->route('engin.create')->with('success', "Engin créé avec succès.");
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
        $categorie_engins = CategorieEngin::all();
        $engins = Engin::findOrFail($id);
        return view('dashboard.engin.edit', compact('categorie_engins', 'engins'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $engin = Engin::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'id_categories_engin' => 'required',
        ]);

        $engin->nom = $request->input('nom');
        $engin->description = $request->input('description');
        $engin->id_categories_engin = $request->input('id_categories_engin');

        $engin->save();

        return redirect()->route('engin.edit', $engin->id)->with('success', "Engin mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $engin = Engin::findOrFail($id);
        $engin->delete();

        return redirect()->route('engin.index')->with('success', "Engin supprimer avec succès.");
    }



}
