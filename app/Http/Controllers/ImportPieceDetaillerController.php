<?php

namespace App\Http\Controllers;



use App\Models\Piece;

use PHPExcel;
use PHPExcel_IOFactory;


class ImportPieceDetaillerController extends Controller
{
    public function importExcel()
    {
        
        $filePath = 'chemin/vers/votre/fichier.xlsx';

        // Charger le fichier Excel
        $objPHPExcel = PHPExcel_IOFactory::load($filePath);

        // Sélectionner la première feuille de calcul
        $worksheet = $objPHPExcel->getActiveSheet();

        // Traiter les données du fichier Excel
        foreach ($worksheet->getRowIterator() as $row) {
            // Accéder aux différentes cellules de chaque ligne
            foreach ($row->getCellIterator() as $cell) {
                // Récupérer la valeur de chaque cellule
                $cellValue = $cell->getValue();

                // Faites quelque chose avec la valeur de la cellule
                // Par exemple, enregistrez-la dans une base de données
            }
        }

        // Faire d'autres opérations nécessaires, comme enregistrer les données dans la base de données

        // Rediriger ou afficher un message de confirmation
        return redirect()->back()->with('success', 'Importation du fichier Excel réussie.');

    }
}
