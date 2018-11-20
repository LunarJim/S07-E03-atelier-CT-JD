<?= view('header') ?>

            <div class="row">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>

            <div class="row">
                <?php foreach($listeDesQuizzes as $quizz): ?>
                    
                    <div class="col-sm-4">
                        <div class="bg-info text-white rounded">
                            <a class="text-center" href="<?= route('quiz', ['id' => $quizz->id])?>">
                                <h3 class="text-white"><?= $quizz->title ?></h3>
                                <h5 class="text-white"><?=$quizz->description ?></h5>
                                <p class="text-white">Christophe Hondelatte</p>
                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </main>
    </body>
</html>