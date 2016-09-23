<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 22/09/2016
 * Time: 15:34
 */
class VaudView
{
    function __construct(){

    }
    function display($tel, $fax){
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />

    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src=\"js/responsiveNav.js\"></script>
</head>
<body>
<div id=\"controlBar\">

</div>
<header>
    <img src=\"img/logo.png\" alt=\"Logo\" height=\"100%\">
</header>
<nav>
    <ul id=\"menu\">
        <a href=\"index.php\"><li>Accueil</li></a>
            <a href=\"index.php?Controller=Home&Action=renderFribourg\"><li>Fribourg</li></a>
            <a href=\"index.php?Controller=Home&Action=renderVaud\"><li>Vaud</li></a>
            <a href=\"index.php?Controller=Home&Action=renderContact\"><li>Contact</li></a>
        <input type=\"button\" id=\"responsiveNav\" value=\"\" onclick=\"toogle()\">
    </ul>
</nav>
<div id=\"phoneNav\" class=\"off\">
    <ul>
        <a href=\"index.php\"><li>Accueil</li></a>
            <a href=\"index.php?Controller=Home&Action=renderFribourg\"><li>Fribourg</li></a>
            <a href=\"index.php?Controller=Home&Action=renderVaud\"><li>Vaud</li></a>
            <a href=\"index.php?Controller=Home&Action=renderContact\"><li>Contact</li></a>
    </ul>
</div>
<section style=\"background-color: rgb(211, 211, 211);\">
    <aside class=\"content\">
        <ul>
            <a href=\"doc/Demande de location fribourg.pdf\" download=\"dlf\"><li>Demande de location Fribourg <i class=\"fa fa-download\"></i></li></a>
            <a href=\"doc/Demande de location vaud.pdf\" download=\"dlv\"><li>Demande de location Vaud <i class=\"fa fa-download\"></i></li></a>
            <a href=\"doc/remise de logement.pdf\" download=\"rl\"><li>Remise de logement <i class=\"fa fa-download\"></i></li></a>
        </ul>
    </aside>
    <div id=\"wrapper\" class=\"content\">
        <article class=\"details\">
            <img src=\"img/vaud1.png\" alt=\"photo\">
            <h2>Rue de la Rouvenettaz 2, 3, 4, 5, 5bis à 1820 Montreux</h2>
            <p>description des appartements à louer</p>
            <h5>Appartements libres : 0</h5>
            <h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i></h6>
            <div class=\"rt\">
                <h4>Responsable technique</h4>
                <ul>
                    <li>Monsieur Philippe Delez</li>
                    <li><i class=\"fa fa-phone\"></i> &nbsp; 079 219 24 47</li>
                </ul>
            </div>
        </article>

        <article class=\"details\">
            <img src=\"img/vaud2.png\" alt=\"photo\">
            <h2>Avenue des Alpes 60, 62 à 1820 Montreux</h2>
            <p>description des appartements à louer</p>
            <h5>Appartements libres : 0</h5>
            <h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i></h6>
            <div class=\"rt\">
                <h4>Responsable technique</h4>
                <ul>
                    <li>Monsieur Philippe Delez</li>
                    <li><i class=\"fa fa-phone\"></i> &nbsp; 079 219 24 47</li>
                </ul>
            </div>
        </article>

        <article class=\"details\">
            <img src=\"img/vaud3.png\" alt=\"photo\">
            <h2>Rue du Lac 40 à 1815 Clarens / Rue du Port 2, 4 à 1815 Clarens</h2>
            <p>description des appartements à louer</p>
            <h5>Appartements libres : 0</h5>
            <h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i></h6>
            <div class=\"rt\">
                <h4>Responsable technique</h4>
                <ul>
                    <li>Monsieur Philippe Delez</li>
                    <li><i class=\"fa fa-phone\"></i> &nbsp; 079 219 24 47</li>
                </ul>
            </div>
        </article>

        <article class=\"details\">
            <img src=\"img/vaud4.png\" alt=\"photo\">
            <h2>Avenue de Belmont 29 à 1820 Montreux</h2>
            <p>description des appartements à louer</p>
            <h5>Appartements libres : 0</h5>
            <h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i></h6>
            <div class=\"rt\">
                <h4>Responsable technique</h4>
                <ul>
                    <li>Monsieur Philippe Delez</li>
                    <li><i class=\"fa fa-phone\"></i> &nbsp; 079 219 24 47</li>
                </ul>
            </div>
        </article>

        <article class=\"details\">
            <img src=\"img/vaud5.png\" alt=\"photo\">
            <h2>Avenue de Collonge 15 à 1820 Territet</h2>
            <p>description des appartements à louer</p>
            <h5>Appartements libres : 0</h5>
            <h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i></h6>
            <div class=\"rt\">
                <h4>Responsable technique</h4>
                <ul>
                    <li>Monsieur Philippe Delez</li>
                    <li><i class=\"fa fa-phone\"></i> &nbsp; 079 219 24 47</li>
                </ul>
            </div>
        </article>
    </div>

</section>
<footer>
    <div id=\"footer\">
        <div id=\"coor\" class=\"footPart\">
            <h3>Nos Coordonnées</h3>
            <ul>
                <li><i class=\"fa fa-phone\"></i> &nbsp; Tel : ";
        echo $tel;
        echo "</li>
                <li><i class=\"fa fa-fax\"></i> &nbsp; Fax : ";
        echo $fax;
        echo "</li>
            </ul>
        </div>
        <div id=\"follow\" class=\"footPart\">
            <h3>Suivez nous</h3>
            <ul>
                <li><a href=\"https://www.facebook.com/Empyrean-SA-697203737084497/\"><i class=\"fa fa-facebook-square\"></i></a></li>
            </ul>
        </div>

    </div>
    <div id=\"copyr\">
        <p>Copyright &copy; Empyrean SA 2016</p>
    </div>
</footer>

</body>
</html>";
    }
}