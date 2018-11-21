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
        $usersList = AppUsers::all();

        // dump($usersList);

        $quizById = Quizzes::find($quizzId);
        // dump($quizById);

        // $questionsForTheID = Questions::select("SELECT * FROM 'questions'")::where("WHERE quizzes_id = $quizzId");
        $questionsForTheID = Questions::where('quizzes_id', '=', $quizzId)->take(10)->get();
       
        // dump($questionsForTheID);
        // dump($levelsList);

        $AnswersForTheID = [];

        foreach($questionsForTheID as $question){
            /*  shuffle fonction utile de l'objet Illuminate\Database\Eloquent\Collection retourné  par Eloquent : https://laravel.com/docs/5.7/collections#method-shuffle
            Il était possible aussi d'effectuer un shuffle en methode native de php
            */
            
            $answers = Answers::where('questions_id', '=', $question->id)->get()->shuffle();

            //on attribue les reponses melangée pour chaque id
            $AnswersForTheID[$question->id]= $answers;
        
        }

        // dump($AnswersForTheID);

        // https://laravel.com/docs/4.2/eloquent
        
        return view('quiz', [
            'quizzId' => $quizzId,
            'listeDesQuizzes' => $quizzList,
            'listeDesQuestions' => $questionsList,
            'listeDesAnswers' => $answersList,
            'listeDesAnswersPourLid' => $AnswersForTheID,
            'listeDesLevels' => $levelsList,
            'listeDesTags' => $tagsList,
            'listeDesUsers' => $usersList,
            'listeDesQuestionsPourLid' => $questionsForTheID,
            'donneesDuQuizParSonId' => $quizById
        ]);
    }

    public function quizPost(){
        return view('quiz-results', []);
    }
}