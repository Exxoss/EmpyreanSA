<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 25/10/2016
 * Time: 21:06
 */
class AddRTView
{
    function __construct()
    {

    }

    function display()
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
        
        
        <a href='index.php?Controller=Admin&Action=editRT'><i id='backer' class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i></a>
        <div id='wrapper'>
        <section>
            
             <form action='index.php?Controller=Admin&Action=addRTExe' method='post'>
               
                    
                </span></p>
                <p style='margin-bottom: 0px;'>Nom</p>
                <p style='margin-top: 3px;'><input type='text' name='nom' id='nom' value=''></p>
                <p style='margin-top: 3px;'><i class=\"fa fa-home\" aria-hidden=\"true\"></i> <input type='text' name='adress' id='adress' value=''></p>
                <p style=''><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> <input type='text' name='tel' id='tel' value=''></p>
                <p><input type='submit' value='Ajouter' id='sub'></p>
             </form>
        
        </section>
        </div>
    </body>
    </html>";
    }

}