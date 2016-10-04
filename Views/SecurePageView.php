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
    function display() {
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
    
    </head>
    <body>
        <header>
            <h1><img src='img/icon.png' alt='Logo'> Empyrean SA <div id='admin'>admin</div></h1>
        </header>
        
        <div id='wrapper'>
            <div id='asideBloc' class='bloc'>
                
            </div>
            
            <div id='content' class='bloc'>
            
            </div>
        </div>
    </body>

</html>";
    }

}