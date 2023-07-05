<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('dashboard.temoignages.index', compact('testimonials'));
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
            'fonction' => '',
            'message' => '',
            'image' => 'image|mimes:jpeg,png,jpg,PNG,JPG|max:2048',


        ]);

        // Création d'un nouvel



        $testimonials = new Testimonial();
        $testimonials->nom = $validatedData['nom'];
        $testimonials->fonction = $validatedData['fonction'];
        $testimonials->message = $validatedData['message'];

        $testimonials->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/temoignages/'), $imageName);

                $testimonials->image = 'assets/img/temoignages/' . $imageName;
                $testimonials->save();
            }
        }

        return redirect()->route('temoignages.create')->with('success', "Témoignage créé avec succès.");

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
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.temoignages.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required',
            'fonction' => 'required',
            'message' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,PNG,JPG|max:2048',
        ]);

        $testimonial->nom = $request->input('nom');
        $testimonial->fonction = $request->input('fonction');
        $testimonial->message = $request->input('message');

        $testimonial->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/temoignages/'), $imageName);

                $testimonial->image = 'assets/img/temoignages/' . $imageName;
                $testimonial->save();
            }
        }

        return redirect()->route('temoignages.edit', $testimonial->id)->with('success', "Témoignage mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('temoignages.index')->with('success', "Témoignage supprimer avec succès.");
    }
}
