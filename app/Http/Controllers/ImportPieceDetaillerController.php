<?php

namespace App\Http\Controllers;

use App\Imports\YourImport;
use App\Models\Piece;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class ImportPieceDetaillerController extends Controller
{

    public function import(Request $request)
    {
        $file = $request->file('excel_file');
        $data = Excel::toArray([], $file);

        $i=1;
        foreach ($data[0] as $column) {


            $name = $column['0'];
            $reference = $column['1'];

            // Créez une instance du modèle et enregistrez les données dans la base de données
            $importData = new Piece();
            $importData->categorie_pieces = "Moteur";
            $importData->nom = $name;
            $importData->reference = $reference;
            $importData->image = 'assets/img/pieces/image' . $i++ . '.jpg';
            $importData->save();
        }

        return redirect()->back()->with('success', 'Importation du fichier Excel réussie.');
}

}
