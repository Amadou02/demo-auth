<?php ob_start() ?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-jatin-anand-125779.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-marta-branco-1453008.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-mister-mister-380782.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-pixabay-277319.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-pixabay-277460.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-the-lazy-artist-gallery-1342609.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/seiko.webp" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-jatin-anand-125779.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <img src="../assets/images/pexels-jatin-anand-125779.jpg" class="card-img-top" alt="montre de luxe">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-lg" href="">Acheter</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
$title = 'Boutique';

require_once 'template.php';
