<?php

namespace App\Http\Controllers;

use App\Imports\YourImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ImportPieceDetaillerController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        // Spécifiez le chemin de destination pour les images
        $imagePath = public_path('assets/img/pieces');

        // Importez le fichier Excel
        Excel::import(new YourImport($imagePath), $file);

        return redirect()->back()->with('success', 'Importation réussie.');
    }
}
