<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Image;
use App\Models\Marque;
use App\Models\Piece;
use App\Models\Realisation;
use App\Models\RealisationCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = Marque::all();
        $engins = Engin::get();
        $images = Image::get();
        $pieces_recentes = Piece::latest()->take(8)->get();

        $images_engins = DB::table('images')
            ->join('engins', 'engins.id', '=', 'images.engin_id')
            ->select('images.*')
            ->get();

        return view('index', compact('marques', 'engins', 'images', 'pieces_recentes', 'images_engins'));
    }


    public function reparation()
    {
        $realisations = Realisation::all();
        $realisations_categories = RealisationCategorie::all();
        return view('reparation', compact('realisations', 'realisations_categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
