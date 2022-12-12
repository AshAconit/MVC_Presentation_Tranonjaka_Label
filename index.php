<?php
    session_start();
    const URL = "http://localhost/GitProjectFinal/Presentation_du_tranonjaka_label/";

    include "Controls/Initializer.php";

    Initializer::loadViews("Template-parts/headerPresentation.php");

    Initializer::loadViews("Template-parts/02-nos-services.php");
    Initializer::loadViews("Template-parts/03-shooting.php");
    Initializer::loadViews("Template-parts/05-clip.php");
    Initializer::loadViews("Template-parts/06-conception.php");
    Initializer::loadViews("Template-parts/07-evenement.php");
    Initializer::loadViews("Template-parts/08-Qui-nous-somme.php");
    Initializer::loadViews("Template-parts/09-nous-contacter.php");

    Initializer::loadViews("Template-parts/footerPresentation.php");
    

?>