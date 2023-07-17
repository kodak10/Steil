<?php

namespace App\Imports;

use App\Models\Piece;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class YourImport implements ToCollection
{

    public function collection(YourImport $rows)
    {
        foreach ($rows as $row) {
            $name = $row[0]; // L'indice 0 représente la colonne du nom
            $reference = $row[1]; // L'indice 1 représente la colonne de la référence

            // Enregistrez les données dans la base de données ou effectuez les actions souhaitées
            $PiecesImporter = new Piece();
            $PiecesImporter->categorie_pieces = "Moteur";
            $PiecesImporter->nom = $name;
            $PiecesImporter->reference = $reference;
            $PiecesImporter->save();
        }
    }
}
