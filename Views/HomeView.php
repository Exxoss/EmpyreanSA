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

    <link href=\"css/HomeStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"css/SelectorCSS.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src=\"js/responsiveNav.js\"></script>
</head>
<body>
    <header>
        <!-- home search-->
        <form action='index.php' method='get'>
            <input name='Controller' value='Home' style='display: none;'>
            <span class=\"custom-dropdown custom-dropdown--white\">
                <select name='Action' class=\"custom-dropdown__select custom-dropdown__select--white\">
                    <option value='renderFribourg'>Fribourg</option>
                    <option value='renderVaud'>Vaud</option>
                </select>
                
            </span>
            
            <input id='Button' type='submit' value='GO'/>
        </form>
        
    </header>
    
    <nav>
        <ul>
            <li class='liImg'><img src='img/icon.png' alt='Logo'></li>
            <a href=\"index.php\"><li>Empyrean SA</li></a>
            <a href=\"index.php?Controller=Home&Action=renderAppartements\"><li>Appartements</li></a>
            <a href=\"index.php?Controller=Home&Action=renderContact\"><li>Contact</li></a>
            <!--<input type=\"button\" id=\"responsiveNav\" value=\"\" onclick=\"toogle()\">-->
        </ul>
    </nav>
    
    <div id='homeInf'>
    
        <!-- telechargement des documents de locations-->
        <article class='blocInf'>
            <h2>Documents</h2>
            <ul class='doc'>
                <a href=\"doc/Demande de location fribourg.pdf\" download=\"dlf\"><li>Demande de location Fribourg <i class=\"fa fa-download\"></i></li></a>
                <a href=\"doc/Demande de location vaud.pdf\" download=\"dlv\"><li>Demande de location Vaud <i class=\"fa fa-download\"></i></li></a>
                <a href=\"doc/remise de logement.pdf\" download=\"rl\"><li>Remise de logement <i class=\"fa fa-download\"></i></li></a>
            </ul>
        </article>
        
        <!-- Message d'accueil et infos locataire-->
        <article class='blocInf'>
            <h2>Bienvenue</h2>
            <p>";
            echo $mess;
            echo "</p>
            <h3>Information Locataire</h3>
            <p>";
            echo $inf;
            echo "</p>
        </article>
        
        <!-- slider d'image d'apparte-->
        <article class='blocInf'>
            <h2>A louer</h2>
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
</html>";
    }
}