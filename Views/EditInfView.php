<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 12/10/2016
 * Time: 20:17
 */
class EditInfView
{
    function __construct()
    {

    }

    function display($inf) {
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
            
            <h2>Information Locataire</h2>
            <form action='index.php?Controller=Admin&Action=editExe' method='post'>
                <p><textarea name='inf' id='mess' rows='4'>".$inf."</textarea></p>
                <p><input type='submit' value='Enregistrer' id='sub'></p>
            </form>
        
        </section>
        </div>
    </body>
    </html>";
    }
}