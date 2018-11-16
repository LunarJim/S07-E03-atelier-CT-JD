<?php

namespace App\Http\Controllers;

// use App\JeuVideo;
// use App\Platform;
/*
 Pour utiliser / recuperer l'objet Request je doit obligatoirement importer cette classe Lumen
*/
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function home(Request $request){

        // $videoGameList = JeuVideo::all();

        // $order = $request->input('order');
        
      
        return view('home', [
         //   'maSuperListeDeJeu' => $videoGameList
        ]);
    }
}