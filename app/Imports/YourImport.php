<?php

namespace App\Imports;

use App\Models\Piece;
use App\Models\YourModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use App\Http\Controllers\ImportPieceDetaillerController;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class YourImport implements ToModel, WithHeadingRow, WithEvents{
    private $imagePath;

    public function __construct($imagePath)
    {
        $this->imagePath = $imagePath;
    }



    public function model(array $row)
    {
        // Récupérez les données de chaque ligne du fichier Excel
        $reference = $row['reference'];
        $nom = $row['nom'];
        $description = $row['description'];
        $image = $row['image'];

        if ($image) {
            // Générez un nom de fichier unique pour l'image
            $fileName = Str::random(100) . '.' . $image->getClientOriginalExtension();

            $image->move($this->imagePath, $fileName); // Déplacez l'image vers le dossier de destination

        } else {
            // Si aucune image n'est fournie, vous pouvez définir une valeur par défaut ou gérer cette situation en conséquence
            $fileName = null;
        }

        // Créez une nouvelle instance de votre modèle et enregistrez les données
        $PiecesDetailler = new Piece();
        $PiecesDetailler->categorie_pieces = "moteur";
        $PiecesDetailler->reference = $reference;
        $PiecesDetailler->nom = $nom;
        $PiecesDetailler->description = $description;
        $PiecesDetailler->couverture = $fileName;
        $PiecesDetailler->save();

        return $PiecesDetailler;


    }

    public function registerEvents(): array
    {
        return [
            BeforeImport::class => function (BeforeImport $event) {
                // Avant l'importation, assurez-vous que le dossier de destination des images existe
                if (!File::exists($this->imagePath)) {
                    File::makeDirectory($this->imagePath, 0755, true);
                }
            },
            AfterImport::class => function (AfterImport $event) {
                // Après l'importation, supprimez la barre de progression
                echo"Importantion réussi";
                //$this->getConsoleOutput()->clear();
            },
        ];
    }
}
