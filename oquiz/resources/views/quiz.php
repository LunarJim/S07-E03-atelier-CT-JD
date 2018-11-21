<?= view('header') ?>

            <div class="row">
                <h2> <?=  $donneesDuQuizParSonId->title ?>
                    <span class="badge badge-pill badge-secondary">10 questions</span>
                </h2>
            </div>

            <div class="row">
                <h4><?=  $donneesDuQuizParSonId->description ?></h4>
            </div>

            <div class="pb-5 row font-italic">
                <?php foreach($listeDesUsers as $user): ?>
                    <?php
                        switch ($user->id) {
                            case 0:
                                echo $listeDesUsers[0]->firstname.' '.$listeDesUsers[0]->lastname;
                                break;
                            case 1:
                                echo $listeDesUsers[1]->firstname.' '.$listeDesUsers[1]->lastname;
                                break;
                        }
                    ?>
                <?php endforeach; ?>
            </div>
            

            <form action="" method="">

                <div class="row">
                
                    <?php foreach($listeDesQuestionsPourLid as $questions): ?>
                        <div class="col-sm-3 border p-0">

                                <span <?php
                                if ($questions->levels_id == 1) {
                                    echo 'class="badge badge-success float-right mt-2 mr-2"';
                                 } elseif ($questions->levels_id == 2) {
                                    echo 'class="badge badge-warning float-right mt-2 mr-2"';
                                 } elseif ($questions->levels_id == 3) {
                                    echo 'class="badge badge-danger float-right mt-2 mr-2"';
                                 } ?>>
                                    <?php foreach($listeDesLevels as $level): ?>
                                    <?= $displayLevel = $questions->levels_id == $level->id ? $level->name : '' ?>
                                    <?php endforeach; ?>
                                </span>
                            


                            <div class="p-3 font-weight-bold alert-secondary">
                                <?= $questions->question;
                                //dump($questions) ?>
                            </div>

                            <div class="p-3 question-answer-block">
                                <?php $i=0;
                                // dump($listeDesAnswersPourLid[$questions->id]) ?>
                                <?php foreach($listeDesAnswersPourLid[$questions->id] as $answer): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" 
                                            id="
                                            <?php
                                                switch ($i) {
                                                    case 0:
                                                        echo 'exampleRadios0';
                                                        break;
                                                    case 1:
                                                        echo 'exampleRadios1';
                                                        break;
                                                    case 1:
                                                        echo 'exampleRadios2';
                                                        break;
                                                    case 1:
                                                        echo 'exampleRadios3';
                                                        break;
                                                }
                                            ?>" 
                                            value="
                                            <?php
                                                switch ($i) {
                                                    case 0:
                                                        echo 'option0';
                                                        break;
                                                    case 1:
                                                        echo 'option1';
                                                        break;
                                                    case 1:
                                                        echo 'option2';
                                                        break;
                                                    case 1:
                                                        echo 'option3';
                                                        break;
                                                }
                                            ?>"
                                        >
                                        <label class="form-check-label" for="exampleRadios1">
                                            <?= $answer->description ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                        </div>
                    <?php endforeach; ?>
                    
                    <div class="col-sm-3 offset-sm-1 border p-0">

                            <span class="badge badge-success float-right mt-2 mr-2">Débutant</span>
    
                            <div class="p-3 alert-warning">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                            </div>
                            <div class="p-3 question-answer-block">
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                            Lorem ipsum 
                                    </label> 
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                            Lorem ipsum 
                                    </label> 
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                    <label class="form-check-label" for="exampleRadios3">
                                            Lorem ipsum 
                                    </label> 
                                </div>
                            </div>

                            <div class="p-3 background-grey question-answer-block"> 
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr. [...]
                                    <a href="#">Wikipedia</a>
                            </div>
                        </div>
                    
                </div>
                <div class="row mt-3">
                    <input type="submit" class="btn btn-primary background-blue btn-lg btn-block" value="OK"/>
                </div>
            </form>
        </main>
    </body>
</html>