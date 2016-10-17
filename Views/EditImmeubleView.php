<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 13/10/2016
 * Time: 20:47
 */
class EditImmeubleView
{
    function __construct()
    {

    }

    function display($immeuble, $techs) {
        echo "<html lang='en'>
    <head>
     
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link href=\"css/EditImmeubleStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
            
            <form action='index.php?Controller=Admin&Action=editImmeubleExe' method='post' enctype='multipart/form-data'>
            
                <input type='hidden' name='Id' value='".$immeuble->getImmeubleId()."'>";

                if ($immeuble->getImmeublePathImg() != null) {
                    echo "<img id='photo' src='" . $immeuble->getImmeublePathImg() . "' alt='photo'>";
                } else {
                    echo "<img id='photo' src='img/nonDispo.png' alt='photo'>";
                }

                echo "<p><input type='file' name='img' id='img'></p>
                <p>Secteur :  
                <span class=\"custom-dropdown custom-dropdown--white\">
                    <select name='city' class=\"custom-dropdown__select custom-dropdown__select--white\">";

                        if ($immeuble->getImmeubleCity() == 1) {
                            echo "<option value='1' selected>Fribourg</option>
                            <option value='2'>Vaud</option>";
                        } elseif ($immeuble->getImmeubleCity() == 2) {
                            echo "<option value='1'>Fribourg</option>
                            <option value='2' selected>Vaud</option>";
                        }

                    echo"</select>
                    
                </span></p>
                <p style='margin-bottom: 0px;'>Adresse</p>
                <p style='margin-top: 3px;'><input type='text' name='adress' id='adress' value='".$immeuble->getImmeubleAdress()."'></p>
                <p style='margin-bottom: 0px;'>Description</p>
                <p style='margin-top: 3px;'><textarea name='mess' id='mess' rows='4'>".$immeuble->getImmeubleDescription()."</textarea></p>
                <p>Appartements libres : <span class=\"custom-dropdown custom-dropdown--white\">
                    <select name='freeSlot' class=\"custom-dropdown__select custom-dropdown__select--white\">";
                        $i = 0;
                        while ($i <= 10) {
                            if ($i == $immeuble->getImmeubleFreeSlot()) {
                                echo "<option value='".$i."' selected>".$i."</option>";
                            } else {
                                echo "<option value='".$i."'>".$i."</option>";
                            }
                            $i = $i + 1;
                        }
                    echo "</select>
                    
                </span></p>
                
                <p style='color: #ab4939;'><span class=\"custom-dropdown custom-dropdown--white\">
                    <select name='lvl' class=\"custom-dropdown__select custom-dropdown__select--white\">";
                        $i = 0;
                        while ($i <= 5) {
                            if ($i == $immeuble->getImmeubleLvl()) {
                                echo "<option value='".$i."' selected>".$i."</option>";
                            } else {
                                echo "<option value='".$i."'>".$i."</option>";
                            }
                            $i = $i + 1;
                        }
                    echo "</select>
                    
                </span> &nbsp; <i class=\"fa fa-star\" aria-hidden=\"true\"></i></p>
                <h3>Responsable technique</h3>
                <p style='margin-top: 3px;'><span class=\"custom-dropdown custom-dropdown--white\">
                    <select name='rtId' class=\"custom-dropdown__select custom-dropdown__select--white\">";
                        foreach ($techs as $tech) {
                            if ($tech->getTechId() == $immeuble->getTechId()) {
                                echo "<option value='".$tech->getTechId()."' selected>".$tech->getTechName()."</option>";
                            } else {
                                echo "<option value='".$tech->getTechId()."'>".$tech->getTechName()."</option>";
                            }
                        }
                    echo "</select>
                    
                </span></p>
                
                <p><input type='submit' value='Enregistrer' id='sub'></p>
            </form>
        
        </section>
        </div>
    </body>
    </html>";
    }

}