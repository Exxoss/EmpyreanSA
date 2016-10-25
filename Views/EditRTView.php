<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 25/10/2016
 * Time: 14:54
 */
class EditRTView
{

    function __construct()
    {

    }

    function display($techs)
    {
        echo "<html lang='en'>
    <head>
     
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    
    <script src=\"js/jquery.js\"></script>
    <script src=\"js/viewer.js\"></script>
    
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link href=\"css/EditRTStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"css/SelectorCSS.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    
    </head>
    <body>
        <header>
            <img class='headBloc' src='img/icon.png' alt='Logo'>
            <h1 class='headBloc'>Empyrean SA</h1>
            <div class='headBloc' id='admin'>admin</div>
        </header>
        
        
        <a href='index.php?Controller=Admin&Action=renderSecureAdmin'><i id='backer' class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i></a>
        <div id='wrapper'>
        <section>
            
             <form action='index.php?Controller=Admin&Action=editRTExe&Id=".$techs[0]->getTechId()."' method='post'>
                <script>
                    function adapt () {
                        select = document.getElementById(\"rtId\");
                        choice = select.selectedIndex; 
                        valeur_cherchee = select.options[choice].value;
                        
                        window.location = 'index.php?Controller=Admin&Action=editRTSelected&Id='+ valeur_cherchee;
                    }
                </script>
                <a href='index.php?Controller=Admin&Action=delRTExe&Id=".$techs[0]->getTechId()."' style='color: #ecf0f1;'><i class=\"fa fa-times buttonS\" aria-hidden=\"true\"></i></a>
                <h3>Responsable technique</h3>
                <p style='margin-top: 3px;'><span class=\"custom-dropdown custom-dropdown--white\">
                    <select id='rtId' name='rtId' class=\"custom-dropdown__select custom-dropdown__select--white\" onchange='adapt()'>";
                    foreach ($techs as $tech) {

                        echo "<option value='" . $tech->getTechId() . "'>" . $tech->getTechName() . "</option>";

                    }
                    echo "</select>
                    
                </span> <a href='index.php?Controller=Admin&Action=addRT' style='color: #ecf0f1;'><i class=\"fa fa-plus buttonM\" aria-hidden=\"true\"></i></a></p>
                <p style='margin-bottom: 0px;'>Nom</p>
                <p style='margin-top: 3px;'><input type='text' name='nom' id='nom' value='".$techs[0]->getTechName() ."'></p>
                <p style='margin-top: 3px;'><i class=\"fa fa-home\" aria-hidden=\"true\"></i> <input type='text' name='adress' id='adress' value='".$techs[0]->getTechAdress() ."'></p>
                <p style=''><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> <input type='text' name='tel' id='tel' value='".$techs[0]->getTechPhoneNumber() ."'></p>
                <p><input type='submit' value='Enregistrer' id='sub'></p>
             </form>
        
        </section>
        </div>
    </body>
    </html>";
    }

    function displaySelected($techs, $techSelected)
    {
        echo "<html lang='en'>
    <head>
     
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    
    <script src=\"js/jquery.js\"></script>
    <script src=\"js/viewer.js\"></script>
    
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link href=\"css/EditRTStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"css/SelectorCSS.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    
    </head>
    <body>
        <header>
            <img class='headBloc' src='img/icon.png' alt='Logo'>
            <h1 class='headBloc'>Empyrean SA</h1>
            <div class='headBloc' id='admin'>admin</div>
        </header>
        
        
        <a href='index.php?Controller=Admin&Action=renderSecureAdmin'><i id='backer' class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i></a>
        <div id='wrapper'>
        <section>
            
             <form action='index.php?Controller=Admin&Action=editRTExe&Id=".$techSelected->getTechId()."' method='post'>
                <script>
                    function adapt () {
                        select = document.getElementById(\"rtId\");
                        choice = select.selectedIndex; 
                        valeur_cherchee = select.options[choice].value;
                        
                        window.location = 'index.php?Controller=Admin&Action=editRTSelected&Id='+ valeur_cherchee;
                    }
                </script>
                <a href='index.php?Controller=Admin&Action=delRTExe&Id=".$techSelected->getTechId()."' style='color: #ecf0f1;'><i class=\"fa fa-times buttonS\" aria-hidden=\"true\"></i></a>
                <h3>Responsable technique</h3>
                <p style='margin-top: 3px;'><span class=\"custom-dropdown custom-dropdown--white\">
                    <select id='rtId' name='rtId' class=\"custom-dropdown__select custom-dropdown__select--white\" onchange='adapt()'>";
                    foreach ($techs as $tech) {

                        if ($tech->getTechId() == $techSelected->getTechId()) {
                            echo "<option value='".$tech->getTechId()."' selected>".$tech->getTechName()."</option>";
                        } else {
                            echo "<option value='".$tech->getTechId()."'>".$tech->getTechName()."</option>";
                        }

                    }
                    echo "</select>
                    
                </span> <a href='index.php?Controller=Admin&Action=addRT' style='color: #ecf0f1;'><i class=\"fa fa-plus buttonM\" aria-hidden=\"true\"></i></a></p>
                <p style='margin-bottom: 0px;'>Nom</p>
                <p style='margin-top: 3px;'><input type='text' name='nom' id='nom' value='".$techSelected->getTechName() ."'></p>
                <p style='margin-top: 3px;'><i class=\"fa fa-home\" aria-hidden=\"true\"></i> <input type='text' name='adress' id='adress' value='".$techSelected->getTechAdress() ."'></p>
                <p style=''><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> <input type='text' name='tel' id='tel' value='".$techSelected->getTechPhoneNumber() ."'></p>
                <p><input type='submit' value='Enregistrer' id='sub'></p>
             </form>
        
        </section>
        </div>
    </body>
    </html>";
    }

}