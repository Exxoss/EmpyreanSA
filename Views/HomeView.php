<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 22/09/2016
 * Time: 14:48
 */
class HomeView
{
    function __construct(){
        
    }

    function display($tel, $fax, $inf, $mess){
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Empyrean SA, agence immobiliaire spécialisé dans la location d'appartement sur Fribourg et Vaud\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta name=\"keywords\" content=\"Empyrean, empyrean, empyréan, Empyréan, EMPYREAN, habitation, sa, Sa, SA, agence, immobiliaire, immobilière, vaud, fribourg, Fribourg, Vaud, appartement, logement, location, officiel, site, suisse, Suisse, loué, louer, louer un appart, loué un appartement, louer un appartement, property, agency, property agency\">

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
    <div id=\"slider\">
    </div>
    <div id=\"phoneNav\" class=\"off\">
        <ul>
            <a href=\"index.php\"><li>Accueil</li></a>
            <a href=\"index.php?Controller=Home&Action=renderFribourg\"><li>Fribourg</li></a>
            <a href=\"index.php?Controller=Home&Action=renderVaud\"><li>Vaud</li></a>
            <a href=\"index.php?Controller=Home&Action=renderContact\"><li>Contact</li></a>
        </ul>
    </div>
    <section>
        <aside id=\"homeAside\" class=\"content\">
            <ul>
                <a href=\"doc/Demande de location fribourg.pdf\" download=\"dlf\"><li>Demande de location Fribourg <i class=\"fa fa-download\"></i></li></a>
                <a href=\"doc/Demande de location vaud.pdf\" download=\"dlv\"><li>Demande de location Vaud <i class=\"fa fa-download\"></i></li></a>
                <a href=\"doc/remise de logement.pdf\" download=\"rl\"><li>Remise de logement <i class=\"fa fa-download\"></i></li></a>
            </ul>
        </aside>
        <div id=\"wrapper\" class=\"content\">
            <article class=\"home\">
                <h3>Bienvenue</h3>
                <p>";
        echo $mess;
        echo "</p>
                <h4>Information Locataires</h4>
                <p>";
        echo $inf;
        echo "</p>
            </article>
            <article class=\"home\">
                <h3>Horaires d'ouverture</h3>
                <table style=\"width:100%\">
                    <tr>
                        <th>Jour</th>
                        <th>Matin</th>
                        <th>Après-midi</th>
                    </tr>
                    <tr>
                        <td>Lundi</td>
                        <td>9h-12h</td>
                        <td>Sur RDV</td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>9h-12h</td>
                        <td>Sur RDV</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>9h-12h</td>
                        <td>Sur RDV</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>9h-12h</td>
                        <td>Sur RDV</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>9h-12h</td>
                        <td>Sur RDV</td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td>Fermée</td>
                        <td>Fermée</td>
                    </tr>
                    <tr>
                        <td>Dimanche</td>
                        <td>Fermée</td>
                        <td>Fermée</td>
                    </tr>
                </table>
            </article>
            <article class=\"home\">
                <h3>A louer</h3>
                <img src='img/vaud1.png' alt='img01' class=\"images\" height=\"218px\" style=\"display: block;\"/>
                <img src='img/vaud2.png' alt='img02' class=\"images\" height=\"218px\" style=\"display: none;\"/>
                <img src='img/vaud3.png' alt='img03' class=\"images\" height=\"218px\" style=\"display: none;\"/>


                <script type=\"text/javascript\">
                    I = 0 ;
                    Imax = document.images.length - 2 ;
                    setTimeout(suivante, 2000) ;

                    function suivante()
                    {
                        document.getElementsByClassName('images')[I].style.display = \"none\" ;
                        if ( I < Imax )
                            I++;
                        else
                            I=0;
                        document.getElementsByClassName('images')[I].style.display = \"block\";
                        setTimeout(suivante, 2000) ;
                    }
                </script>
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