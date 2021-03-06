<?= view('header') ?>

<div class="row ">
    <div class="pl-0 font-weight-bold alert alert-light">
        <p class="mb-1">Si vous possédez déjà un compte, veuillez cliquer ici :</p>
        <div class="text-center alert alert-secondary">
            <a href="<?= route('connexion') ?>">Connection</a>
        </div>
    </div>
</div>

<div class="row">
        <form>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="votre e-mail">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="password1" placeholder="votre mot de passe">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirmez votre mot de passe</label>
            <input type="password" class="form-control" id="password2" placeholder="votre mot de passe">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" id="lastname" placeholder="votre nom">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Prénom</label>
            <input type="text" class="form-control" id="firstname" placeholder="votre prénom">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Validez votre inscription en cliquant fort sur le bouton</button>
        </form>
</div>

        </main>
    </body>
</html>