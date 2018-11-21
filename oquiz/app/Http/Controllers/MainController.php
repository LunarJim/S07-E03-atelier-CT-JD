<?php

namespace App\Http\Controllers;

/*
 Pour utiliser / recuperer l'objet Request je doit obligatoirement importer cette classe Lumen
*/

use App\Answers;
use App\AppUsers;
use App\Levels;
use App\Questions;
use App\Quizzes;
use App\Tags;

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

        $quizzList = Quizzes::all();
        $usersList = AppUsers::all();

        // dump($usersList);
        // dump($quizzList);

        return view('home', [
            'listeDesQuizzes' => $quizzList,
            'listeDesUsers' => $usersList
        ]);
    }
}