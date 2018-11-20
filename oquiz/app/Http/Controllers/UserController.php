<?php

namespace App\Http\Controllers;

/*
 Pour utiliser / recuperer l'objet Request je doit obligatoirement importer cette classe Lumen
*/

// use App\Answers;
// use App\App_users;
// use App\Levels;
// use App\Questions;
// use App\Quizzes;
// use App\Tags;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function signup(Request $request){

        // $quizzList = Quizzes::all();

        // dump($quizzList);

        return view('signup', [
            // 'listeDesQuizzes' => $quizzList
        ]);
    }

    public function signupPost(Request $request){

        // $quizzList = Quizzes::all();

        // dump($quizzList);

        return view('home', [
            // 'listeDesQuizzes' => $quizzList
        ]);
    }

    public function signin(Request $request){

       

        return view('signin', [
            // 'listeDesQuizzes' => $quizzList
        ]);
    }

    public function signinPost(Request $request){

        // $quizzList = Quizzes::all();

        // dump($quizzList);

        return view('home', [
            // 'listeDesQuizzes' => $quizzList
        ]);
    }

}