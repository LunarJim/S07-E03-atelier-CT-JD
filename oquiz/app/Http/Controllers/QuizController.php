<?php

namespace App\Http\Controllers;

/*
 Pour utiliser / recuperer l'objet Request je doit obligatoirement importer cette classe Lumen
*/
use Illuminate\Http\Request;

/*
 Etape 2 : je prepare mon controller sur le modele présenté (ExampleController.php)
*/
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

    /*
     Etape 3 : Je prepare les methodes associées dans mes routes dans le controller concerné 
     je prepare egalement l'appel aux view que je créé dans la foulée
    */
    public function quiz(Request $request){
        return view('quiz', []);
    }

    public function quizPost(){
        return view('quiz-results', []);
    }
}