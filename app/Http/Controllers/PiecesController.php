<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiecesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


    // Categorie

    public function liste_categorie ()
    {
        return view('dashboard.pieces.categories.index');
    }

    public function create_categorie ()
    {
        return view('dashboard.pieces.categories.create');
    }

    public function store_categorie ()
    {
        
    }

    public function edit_categorie ()
    {
        return view('dashboard.pieces.categories.edit');
    }

    public function update_categorie ()
    {
        
    }

    public function destroy_categorie ()
    {
        
    }
}
