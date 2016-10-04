<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 22/09/2016
 * Time: 15:07
 */
class AppartementsView
{
    function __construct(){

    }
    function display($tel, $fax, $Immeubles, $Techs){
        echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />

    <link href=\"css/AppartementsStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"css/SelectorCSS.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src=\"js/responsiveNav.js\"></script>
</head>
<body>
    <nav>
        <ul>
            <li class='liImg'><img src='img/icon.png' alt='Logo'></li>
            <a href=\"index.php\"><li>Empyrean SA</li></a>
            <a href=\"index.php?Controller=Home&Action=renderAppartements\"><li>Appartements</li></a>
            <a href=\"index.php?Controller=Home&Action=renderContact\"><li>Contact</li></a>
            <!--<input type=\"button\" id=\"responsiveNav\" value=\"\" onclick=\"toogle()\">-->
        </ul>
    </nav>
    
    <div id='wrapper'>
    
        <!-- Apparts-->
        <div class='blocWrapper'>";
        foreach ($Immeubles as $Immeuble) {
            echo "<article>
            <div class='blocApparts insideBlocImg'>";

            if ($Immeuble->getImmeublePathImg() != null) {
                echo "<img src='" . $Immeuble->getImmeublePathImg() . "' alt='photo'>";
            } else {
                echo "<img src='img/nonDispo.png' alt='photo'>";
            }
            echo "</div>
            <div class='blocApparts insideBlocDesc'>";
            echo "<h2>" . $Immeuble->getImmeubleAdress() . "</h2>";
            echo "<p>" . $Immeuble->getImmeubleDescription() . "</p>";
            echo "<h5> Appartement libres : " . $Immeuble->getImmeubleFreeSlot() . "</h5>";

            //gestion des notations
            switch ($Immeuble->getImmeubleLvl()) {
                case 0:
                    echo "<h6><i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i></h6>";
                    break;
                case 1:
                    echo "<h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i></h6>";
                    break;
                case 2:
                    echo "<h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i></h6>";
                    break;
                case 3:
                    echo "<h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i></h6>";
                    break;
                case 4:
                    echo "<h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star-o\"></i></h6>";
                    break;
                case 5:
                    echo "<h6><i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i></h6>";
                    break;
            }

            //gestion Technicien
            foreach ($Techs as $Tech) {
                if ($Immeuble->getTechId() == $Tech->getTechId()) {
                    echo "<div class='rt'>
                        <h4>Responsable Technique</h4>
                        <ul>
                            <li>" . $Tech->getTechName() . "</li>";
                    if ($Tech->getTechAdress() != null) {
                        echo "<li><i class=\"fa fa-home\"></i> &nbsp; " . $Tech->getTechAdress() . "</li>";
                    } else {
                        echo "<li><i class=\"fa fa-home\"></i> &nbsp; Indisponnible</li>";
                    }
                    if ($Tech->getTechPhoneNumber() != null) {
                        echo "<li><i class=\"fa fa-phone\"></i> &nbsp; " . $Tech->getTechPhoneNumber() . "</li>";
                    } else {
                        echo "<li><i class=\"fa fa-phone\"></i> &nbsp; Indisponnible</li>";
                    }

                    echo "</ul>
                    </div>";
                }
            }

            echo "</div>
            </article>";

        }
        echo"</div>
        
        <!-- Docs Filtre-->
        <div class='blocWrapper'>
            <div id='aside'>
                <h3>Filtres</h3>
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
                <h2>Documents</h2>
                <ul class='doc'>
                    <a href=\"doc/Demande de location fribourg.pdf\" download=\"dlf\"><li>Demande de location Fribourg <i class=\"fa fa-download\"></i></li></a>
                    <a href=\"doc/Demande de location vaud.pdf\" download=\"dlv\"><li>Demande de location Vaud <i class=\"fa fa-download\"></i></li></a>
                    <a href=\"doc/remise de logement.pdf\" download=\"rl\"><li>Remise de logement <i class=\"fa fa-download\"></i></li></a>
                </ul>
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
</html>";
    }
}