<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatorsController extends Controller
{
    public function chiSiamo(){

        $creators = [
            ['name' => 'Riccardo', 'surname' => 'Giordanella', 'description' => 'Il migliore, fidatevi'],
            ['name' => 'Mario', 'surname' => 'Rossi', 'description' => 'Uno a caso'],
            ['name' => 'Federico', 'surname' => 'Bianchi', 'description' => 'Purtroppo anche lui è uno a caso']
        ];

        return view('chi-siamo', ['creators' => $creators]);
    }

    public function dettaglio($name){
        $creators = [
            ['name' => 'Riccardo', 'surname' => 'Giordanella', 'description' => 'Il migliore, fidatevi'],
            ['name' => 'Mario', 'surname' => 'Rossi', 'description' => 'Uno a caso'],
            ['name' => 'Federico', 'surname' => 'Bianchi', 'description' => 'Purtroppo anche lui è uno a caso']
        ];

        foreach ($creators as $creator) {
            if ($name == $creator['name']) {
                return view('Creators/dettaglioCreators', ['creator' => $creator]);

            }
        }
    }

}
