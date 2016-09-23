<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 22/09/2016
 * Time: 15:34
 */
class ContactView
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
    <script src=\"js/mail.js\"></script>
    <script src=\"js/jquery.js\"></script>
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
    <section id=\"contact\" style=\"background-color: rgb(211, 211, 211); min-height: 503px;\" >
        <div id=\"verif\" class=\"verifoff\">
            <p>Votre message a été envoyé <img src=\"img/check.png\" width=\"30px\" alt=\"check\"></p>
        </div>
        <div id=\"fail\" class=\"failoff\">
            <p>Votre message n'a pas été envoyé <img src=\"img/cross.png\" width=\"30px\" alt=\"cross\"></p>
        </div>
        <div id=\"wrong\" class=\"wrongoff\">
            <p>Champs manquant ou incorrecte <img src=\"img/cross.png\" width=\"30px\" alt=\"cross\"></p>
        </div>
        <form id=\"mailing\">
            <p style=\"margin-top: 0px;\" class=\"label\">Nom</p>
            <p class=\"capter\"><input type=\"text\" id=\"nom\" name=\"nom\" class=\"area\" placeholder=\"Nom\" required /></p>
            <p class=\"label\">Prénom</p>
            <p class=\"capter\"><input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"area\" placeholder=\"Prénom\" required /></p>
            <p class=\"label\">e-mail</p>
            <p class=\"capter\"><input type=\"email\" id=\"email\" name=\"email\" class=\"area\" placeholder=\"youremail@exemple.com\" required /></p>
            <p class=\"label\">Tel</p>
            <p class=\"capter\"><input type=\"tel\" id=\"tel\" name=\"tel\" class=\"area\" placeholder=\"Phone number\" required /></p>
            <p class=\"label\">Message</p>
            <p class=\"capter\"><textarea rows=\"5\" id=\"message\" placeholder=\"Message\" class=\"areaB\" name=\"message\" required ></textarea></p>
            <p style=\"text-align: center\"><input id=\"send\" type=\"button\" value=\"Envoyer\" onclick=\"envoyer()\"/></p>
        </form>
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
        <div id=\"copyr\" style=\"height: 50px;\">
            <p>Copyright &copy; Empyrean SA 2016</p>
        </div>
    </footer>
</body>
</html>

";
    }
}