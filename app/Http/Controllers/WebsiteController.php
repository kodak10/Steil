<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Image;
use App\Models\Piece;
use App\Models\Marque;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Realisation;
use App\Models\testimonial;
use Illuminate\Http\Request;
use App\Models\CategoriePiece;
use Illuminate\Support\Facades\DB;
use App\Models\RealisationCategorie;


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

    public function eshop($type = null)
    {
        $engins = Engin::get();
        $marques = Marque::all();
        //$pieces = Piece::paginate(9);
        $banner_engins = Engin::latest()->take(1)->get();
        $banner_pieces = Piece::latest()->take(2)->get();
        $top_pieces_buys = Piece::orderBy('created_at', 'asc')->take(2)->get();


        $query = Piece::query();

        // Appliquer des conditions basées sur le type sélectionné
        if ($type) {
            $query->where('categorie_pieces', $type);
        }

        $pieces = $query->paginate(9);

        // Renvoyer les résultats à la vue
        return view('pieces', compact('engins', 'marques', 'pieces', 'banner_engins', 'banner_pieces', 'top_pieces_buys'));

    }
    public function search(Request $request)
    {
        $engins = Engin::get();
        $marques = Marque::all();
        //$pieces = Piece::paginate(9);
        $banner_engins = Engin::latest()->take(1)->get();
        $banner_pieces = Piece::latest()->take(2)->get();
        $top_pieces_buys = Piece::orderBy('created_at', 'asc')->take(2)->get();

        $query = DB::table('pieces');

        $category = $request->input('category');
        $keyword = $request->input('keyword');


        if (!empty($category)) {
            $query->where('categorie_pieces', $category);
        }

        if (!empty($keyword)) {
            $query->where('nom', 'like', '%' . $keyword . '%');
        }

        $pieces = $query->paginate(9);


        //$pieces = Piece::where('nom', 'like', '%' . $searchTerm . '%')->paginate(9);

        return view('pieces', compact('engins', 'marques', 'pieces', 'banner_engins', 'banner_pieces', 'top_pieces_buys'));



    }

    public function search_cat($categorie)
    {
        $engins = Engin::get();
        $marques = Marque::all();
        $pieces = Piece::where('categorie_pieces', $categorie)->paginate(9);
        return view('pieces', compact('pieces', 'engins', 'marques'));
    }


    public function select_catgeories_pieces($type = null)
    {
        $query = Piece::query();

        // Appliquer des conditions basées sur le type sélectionné
        if ($type) {
            $query->where('categorie_pieces', $type);
        }

        $pieces = $query->paginate(9);

        // Renvoyer les résultats à la vue
        return view('pieces', compact('pieces'));
    }







    public function reparation()
    {
        $realisations = Realisation::all();
        $realisations_categories = RealisationCategorie::all();
        $testimonials = testimonial::get();

        return view('reparation', compact('realisations', 'realisations_categories', 'testimonials'));

    }

    public function send_mail(Request $request)
    {
        // Validez les données du formulaire ici

        $data = [
            'name' => $request->input('nom'),
            'number' => $request->input('phone'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        Mail::to('infos@steilautomobile.com')->send(new ContactMail($data));

        // Redirigez l'utilisateur après l'envoi du message

        return redirect('/contact')->with('success', 'Votre message a été envoyé avec succès !');
    }
}
