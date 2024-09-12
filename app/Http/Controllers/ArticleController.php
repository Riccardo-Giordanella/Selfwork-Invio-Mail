<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articoli(){
        $articles = [
            ['name' => 'Trapano avvitatore', 'description' => 'Trapano multiuso e funzionale per ogni evenienza', 'price' => 50],
            ['name' => 'Tagliaerba', 'description' => 'Ottimo per le erbacce in giardino', 'price' => 130],
            ['name' => 'Cacciavite', 'description' => 'Un ottimo alleato contro ogni vite', 'price' => 5],
        ];

        return view('Articoli/articoli', ['articles' => $articles]);
    }
}
