<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- css custom -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title><?= $title ?? ''; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-sm-0 navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav h-100 ms-auto mb-2 mb-lg-0 w-sm-75 justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../controllers/shop-ctrl.php">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Contact</a>
                    </li>
                    <?php if (!isset($_SESSION['auth'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/signup-ctrl.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/login-ctrl.php">Connexion</a>
                        </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../controllers/login-ctrl.php"><?= ucfirst($_SESSION['auth']['lastname'])[0]; ?></a>
                            </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <main id="site-content">
        <?= $content ?>
    </main>
    <footer id="site-footer">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <p class="mb-0">&copy 2021</p>
            <ul class="nav">
                <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
            </ul>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>