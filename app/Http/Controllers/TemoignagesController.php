<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.temoignages.index', compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.temoignages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée


        $validatedData = $request->validate([
            'nom' => 'required',
            'message' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        // $input = $request->all();
        $temoignages = new Temoignage();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/temoignages/'), $imageName);

                $temoignages->chemin = 'assets/img/temoignages/' . $imageName;
            }
        }

        $temoignages->nom = $validatedData['nom'];
        $temoignages->message = $validatedData['messages'];
        $temoignages->image = $validatedData['image'];
        $temoignages->save();


        return redirect()->route('temoignages.create')->with('success', "Temoignage ajouté avec succès.");
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
        return view('dashboard.temoignages.edit');
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
        //
    }
}
