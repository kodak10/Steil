<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EnginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $engins = Engin::all();
        return view('dashboard.engin.index', compact('engins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.engin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $validatedData = $request->validate([
            'nom' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,PNG,JPG,webp|max:2048',
            'description' => '',
        ]);

        // Création d'un nouvel engin
$imageOriginale = $request->file('image');
$imageOriginaleName = time() . '.' . $imageOriginale->getClientOriginalExtension();

$imageOriginalePath = 'assets/img/engin/' . $imageOriginaleName;
$imageOriginale->move(public_path('assets/img/engin'), $imageOriginaleName);

// Enregistrement des données dans la base de données
$engin = Engin::create([
    'nom' => $request->nom,
    'image' => $imageOriginalePath,
    'description' => $request->description,
]);

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
        $engins = Engin::findOrFail($id);
        return view('dashboard.engin.edit', compact( 'engins'));

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
        ]);

        $engin->nom = $request->input('nom');
        $engin->description = $request->input('description');

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
