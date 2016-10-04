<?php
/**
 * Created by PhpStorm.
 * User: arthur
* Date: 22/09/2016
* Time: 14:40
*/

require(dirname(__FILE__) . '/Controllers/HomeController.php');
require(dirname(__FILE__) . '/Controllers/AdminController.php');


session_start();
if ((isset($_GET["Controller"]))&&(isset($_GET["Action"]))) {
    $Controller = $_GET["Controller"] . "Controller";
    $Action = $_GET["Action"];

    if (file_exists(dirname(__FILE__) . '/Controllers/'. $Controller .'.php')) {
        $CurrentCtrl = new $Controller();
        if (method_exists($CurrentCtrl, $Action)) {
            $CurrentCtrl->$Action();
        } else {
            $CurrentCtrl->byDefault();
        }
    } else {
        $CurrentCtrl = new HomeController();
        $CurrentCtrl->render();
    }


} else {
    $CurrentCtrl = new HomeController();
    $CurrentCtrl->render();
}