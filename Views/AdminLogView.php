<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 04/10/2016
 * Time: 12:36
 */
class AdminLogView
{
    function __construct(){

    }
    function display(){
        echo "<html lang='en'>
    <head>
     
    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"Arthur Quemard\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Empyrean SA</title>
    
    <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link href=\"css/LogStyle.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
    
    </head>
    <body>
        
        <section>
            <h2>Admin</h2>
            <p style='color: #4E6A80;'>Toute personne se trouvant sur cette page sans y être habilité, s'expose à des poursuites judiciares graves.</p>
            <form action='index.php?Controller=Home&Action=renderSecureAdmin' method='post'>
            
                <p style='font-size: 24px;'><i class=\"fa fa-key\" aria-hidden=\"true\"></i> <input id='textPwd' type='password' name='pwd' placeholder='Password'></p>
                <p><input id='subPwd' type='submit'></p>
            </form>   
        </section>
        
    </body>

</html>";
    }

}