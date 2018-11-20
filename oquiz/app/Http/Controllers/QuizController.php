<?php

namespace App\Http\Controllers;

/*
 Pour utiliser / recuperer l'objet Request je doit obligatoirement importer cette classe Lumen
*/

use App\Answers;
use App\App_users;
use App\Levels;
use App\Questions;
use App\Quizzes;
use App\Tags;

use Illuminate\Http\Request;

/*
 Etape 2 : je prepare mon controller sur le modele présenté (ExampleController.php)
*/
class QuizController extends Controller
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
     je prepare egalement l'appel aux views que je crée dans la foulée
    */

    public function quiz(Request $request){

        $quizzId = $request->id;
        // dump($quizzId);

        $quizzList = Quizzes::all();
        $questionsList = Questions::all();
        $answersList = Answers::all();
        $levelsList = Levels::all();
        $tagsList = Tags::all();

        $quizById = Quizzes::find($quizzId);
        // dump($quizById);

        // $questionsForTheID = Questions::select("SELECT * FROM 'questions'")::where("WHERE quizzes_id = $quizzId");
        $questionsForTheID = Questions::where('quizzes_id', '=', $quizzId)->take(10)->get();
       
        // dump($questionsForTheID);
        // dump($levelsList);

        // https://laravel.com/docs/4.2/eloquent
        
        return view('quiz', [
            'quizzId' => $quizzId,
            'listeDesQuizzes' => $quizzList,
            'listeDesQuestions' => $questionsList,
            'listeDesAnswers' => $answersList,
            'listeDesLevels' => $levelsList,
            'listeDesTags' => $tagsList,
            'listeDesQuestionsPourLid' => $questionsForTheID,
            'donneesDuQuizParSonId' => $quizById
        ]);
    }

    public function quizPost(){
        return view('quiz-results', []);
    }
}