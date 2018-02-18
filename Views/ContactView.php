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

    <link href=\"css/ContactStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>

    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src=\"js/mail.js\"></script>
    <script src=\"js/jquery.js\"></script>
    <script src=\"js/toogle.js\"></script>
</head>
<body>
    <nav>
        <ul>
            <li class='liImg'><img src='img/icon.png' alt='Logo'> <i onclick='slideMenu()' id='toogle' class=\"fa fa-bars\" aria-hidden=\"true\"></i></li>
            <div id='menuLink'>
                <a href=\"index.php\"><li>Empyrean SA</li></a>
                <a href=\"index.php?Controller=Home&Action=renderAppartements\"><li>Appartements</li></a>
                <a href=\"index.php?Controller=Home&Action=renderContact\"><li>Contact</li></a>
            </div>
        </ul>
    </nav>
    <div id='wrapper'>
    <div id='filtre'>
        <div id=\"contact\">
            <div id='notif'>
                <div id=\"verif\" class=\"verifoff\">
                    <p>Votre message a été envoyé <img src=\"img/check.png\" width=\"30px\" alt=\"check\"></p>
                </div>
                <div id=\"fail\" class=\"failoff\">
                    <p>Votre message n'a pas été envoyé <img src=\"img/cross.png\" width=\"30px\" alt=\"cross\"></p>
                </div>
                <div id=\"wrong\" class=\"wrongoff\">
                    <p>Champs manquant ou incorrecte <img src=\"img/cross.png\" width=\"30px\" alt=\"cross\"></p>
                </div>
            </div>
            <form id=\"mailing\">
                <section>
                    <h2>Contactez-nous</h2>
                    <p>Rentrez directement en contact avec nous pour toutes demandes de renseignement.</p>
                </section>
               
                <p class=\"capter\"><input type=\"text\" id=\"nom\" name=\"nom\" class=\"area\" placeholder=\"Nom\" required /></p>
                <p class=\"capter\"><input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"area\" placeholder=\"Prénom\" required /></p>
                <p class=\"capter\"><input type=\"email\" id=\"email\" name=\"email\" class=\"area\" placeholder=\"youremail@exemple.com\" required /></p>
                <p class=\"capter\"><input type=\"tel\" id=\"tel\" name=\"tel\" class=\"area\" placeholder=\"Phone number\" required /></p>
                <p class=\"capter\"><textarea rows=\"5\" id=\"message\" placeholder=\"Message\" class=\"areaB\" name=\"message\" required ></textarea></p>
                <p><input id=\"send\" type=\"button\" value=\"Envoyer\" onclick=\"envoyer()\"/></p>
            </form>
        </div>
    </div>
    </div>
    
    <div id='footer'>
    
        <!-- coordonnées -->
        <article class='blocFooter'>
            <h2>Nos Coordonnées</h2>
            <p><i class=\"fa fa-phone\"></i> &nbsp; Tel : ";
            echo $tel;
            echo "</p>

            <p><i class=\"fa fa-fax\"></i> &nbsp; Fax : ";
            echo $fax;
            echo "</p>
        </article>
        
        <!-- liens sociaux -->
        <article class='blocFooter'>
            <h2>Suivez-nous</h2>
            <a href='https://www.facebook.com/Empyrean-SA-697203737084497'><i class=\"fa fa-facebook-square\"></i></a>
        </article>
        
    </div>
    
    <div id='copyright'>
        <p>Copyright &copy; Empyrean SA 2016</p>
    </div>
</body>
</html>

";
    }
}