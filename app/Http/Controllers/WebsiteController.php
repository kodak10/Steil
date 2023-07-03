<?php

namespace App\Http\Controllers;

use App\Models\CategoriePiece;
use App\Models\Engin;
use App\Models\Image;
use App\Models\Marque;
use App\Models\Piece;
use App\Models\Realisation;
use App\Models\RealisationCategorie;
use App\Models\testimonial;
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

        $testimonials = testimonial::get();

        return view('index', compact('marques', 'engins', 'images', 'pieces_recentes', 'images_engins', 'testimonials'));
    }

    public function eshop()
    {
        $engins = Engin::get();
        $marques = Marque::all();

        $categories_pieces = CategoriePiece::get();
        $categories_pieces = CategoriePiece::with('pieces')->get();
        $pieces = CategoriePiece::with('pieces')->paginate(10);

        $banner_engins = Engin::latest()->take(1)->get();
        $banner_pieces = Piece::latest()->take(2)->get();
        $top_pieces_buys = Piece::orderBy('created_at', 'asc')->take(2)->get();


        return view('pieces', compact('engins', 'marques',  'categories_pieces', 'pieces', 'banner_engins', 'banner_pieces', 'top_pieces_buys'));

    }

    public function reparation()
    {
        $realisations = Realisation::all();
        $realisations_categories = RealisationCategorie::all();
        $testimonials = testimonial::get();

        return view('reparation', compact('realisations', 'realisations_categories', 'testimonials'));

    }

}
