<?= view('header') ?>

            <div class="row">
                <h2> <?=  $donneesDuQuizParSonId->title ?>
                    <span class="badge badge-pill badge-secondary">xx questions</span>
                </h2>
            </div>

            <div class="row">
                <h4><?=  $donneesDuQuizParSonId->description ?></h4>
            </div>

            <div class="row">
                <!-- <//?php foreach($listeDesUsers as $user): ?>
                    <p class="text-white"><//?= $displayUser = $quizz->app_users_id == $user->id ? $user->firstname : null ?></p>
                <//?php endforeach; ?> -->
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
                                    <?= $displayLevel = $questions->levels_id == $level->id ? $level->name : null ?>
                                    <?php endforeach; ?>
                                </span>
                            


                            <div class="p-3 font-weight-bold alert-secondary">
                                <?= $questions->question ?>
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