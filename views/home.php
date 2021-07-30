<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 my-2">
            <h1 class="text-center">Produit </h1>
            <p class="lh-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla id error modi debitis inventore blanditiis dicta, nostrum iusto exercitationem magnam aliquid adipisci, aperiam, suscipit quo assumenda illo eos minima impedit?</p>
            <p class="lh-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla id error modi debitis inventore blanditiis dicta, nostrum iusto exercitationem magnam aliquid adipisci, aperiam, suscipit quo assumenda illo eos minima impedit?</p>
            <p class="lh-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla id error modi debitis inventore blanditiis dicta, nostrum iusto exercitationem magnam aliquid adipisci, aperiam, suscipit quo assumenda illo eos minima impedit?</p>
        </div>
        <div class="col-md-6 my-2">
            <img class="img-fluid" src="../assets/images/pexels-felix-mittermeier-325871.jpg" alt="">
        </div>
        <div class="col-md-6 my-2">
            <img class="img-fluid" src="../assets/images/pexels-castorly-stock-3829441.jpg" alt="">
        </div>
        <div class="col-md-6 my-2">
            <h1 class="text-center">Welcome</h1>
            <p class="lh-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla id error modi debitis inventore blanditiis dicta, nostrum iusto exercitationem magnam aliquid adipisci, aperiam, suscipit quo assumenda illo eos minima impedit?</p>
            <p class="lh-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla id error modi debitis inventore blanditiis dicta, nostrum iusto exercitationem magnam aliquid adipisci, aperiam, suscipit quo assumenda illo eos minima impedit?</p>
            <p class="lh-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla id error modi debitis inventore blanditiis dicta, nostrum iusto exercitationem magnam aliquid adipisci, aperiam, suscipit quo assumenda illo eos minima impedit?</p>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
$title = 'Accueil';

require_once 'template.php';
