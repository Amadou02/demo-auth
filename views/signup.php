<?php ob_start() ?>

<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6 p-4 border border-light shadow">
            <h1>Inscription</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="firstname" class="form-label"> Prénom</label>
                    <input id="firstname" name="firstname" type="text" class="form-control" value="<?= $firstname ?>">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label"> Nom</label>
                    <input id="lastname" name="lastname" type="text" class="form-control" value="<?= $lastname ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input id="email" name="email" type="text" class="form-control"  value="<?= $email ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"> Mot de passe</label>
                    <input id="password" name="password" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-lg" type="submit">Se connecter</button>
                    <p class="text-end">Déjà inscrit ? <a class="text-decoration-none text-success" href="../controllers/login-ctrl.php">Se connecter</a></p>
                </div>
            </form>
            <pre>
                <?php var_dump($user); ?>
            </pre>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
$title = 'Connexion';

require_once 'template.php';