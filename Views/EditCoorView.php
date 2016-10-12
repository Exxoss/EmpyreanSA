<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 12/10/2016
 * Time: 20:44
 */
class EditCoorView
{
    function __construct()
    {

    }

    function display($tel, $fax) {
        echo "<html lang='en'>
    <head>
     
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link href=\"css/EditHomeStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
            
            <h2>Nos Coordonnées</h2>
            <form action='index.php?Controller=Admin&Action=editExe' method='post'>
                <p><i class=\"fa fa-phone\"></i> &nbsp; <input type='text' name='tel' id='tel' value='".$tel."'></p>
                <p><i class=\"fa fa-fax\"></i> &nbsp; <input type='text' name='fax' id='fax' value='".$fax."'></p>
                <p><input type='submit' value='Enregistrer' id='sub'></p>
            </form>
        
        </section>
        </div>
    </body>
    </html>";
    }
}