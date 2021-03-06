<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 04/10/2016
 * Time: 13:02
 */
class SecurePageView
{
    function __construct()
    {

    }
    function display($tel, $fax, $inf, $mess, $Immeubles, $Techs) {
        echo "<html lang='en'>
    <head>

    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>

    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link href=\"css/AdminStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src='js/SuprConfirm.js'></script>
    <script src='js/bootbox.min.js'></script>

    </head>
    <body>
        <header>
            <a href='index.php' style='outline: none; text-decoration: none; color: #bdc3c7;'><img class='headBloc' src='img/icon.png' alt='Logo'></a>
            <a href='index.php' style='outline: none; text-decoration: none; color: #ecf0f1;'><h1 class='headBloc'>Empyrean SA</h1></a>
            <div class='headBloc' id='admin'>admin</div>
        </header>

        <div id='wrapper'>

            <div id='content' class='bloc'>
                <section id='homeInf'>
                    <article>
                        <a href='index.php?Controller=Admin&Action=editMess'><div class='buttonInf'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></div></a>
                        <h2>Bienvenue</h2>
                        <p>";
                        echo $mess;
                        echo "</p>

                    </article>
                    <article>
                        <a href='index.php?Controller=Admin&Action=editInf'><div class='buttonInf'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></div></a>
                        <h3>Information Locataire</h3>
                        <p>";
                        echo $inf;
                        echo "</p>

                    </article>
                    <article>
                        <a href='index.php?Controller=Admin&Action=editCoor'><div class='buttonInf'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></div></a>
                        <h2>Nos Coordonnées</h2>
                        <p><i class=\"fa fa-phone\"></i> &nbsp; Tel : ";
                        echo $tel;
                        echo "</p>

                        <p><i class=\"fa fa-fax\"></i> &nbsp; Fax : ";
                        echo $fax;
                        echo "</p>

                    </article>
                </section>

                <section>
                    <br/>
                    <a href='index.php?Controller=Admin&Action=editRT' class='buttonMRT' style='color: #ecf0f1;'><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> Responsables technique</a>
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
                            echo "<h5> Disponnibilité : ";
                            if ($Immeuble->getImmeubleFreeSlot() >= 1) {
                              echo "LOUÉ";
                            } else {
                              echo "LIBRE";
                            }
                            echo "</h5>";

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
                                echo "<li><i class=\"fa fa-home\"></i> &nbsp; Immeuble</li>";
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
                            <div class='blocApparts insideBlocButton'>
                                <a href='index.php?Controller=Admin&Action=editImmeuble&Id=".$Immeuble->getImmeubleId()."'><div class='buttonM'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></div></a>
                                <a href='#' onclick='confirmation(".$Immeuble->getImmeubleId().")'><div class='buttonS'><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div></a>
                            </div>

                            </article>";

                }
                echo"<a href='index.php?Controller=Admin&Action=addImmeuble'><article class='addBloc'>
                        <div class='addIm'><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
                    </article></a>



                    </div>

                </section>
            </div>
        </div>
    </body>

</html>";
    }

}
