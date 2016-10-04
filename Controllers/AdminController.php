<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 04/10/2016
 * Time: 21:42
 */
class AdminController
{
    function renderSecureAdmin() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $view = new SecurePageView();
                $view->display();
            } else {
                echo "password incorrect";
                $ctrl = new HomeController();
                $ctrl->admin();
            }
        } else {
            $ctrl = new HomeController();
            $ctrl->admin();
        }


    }
    function validatePwd() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        unset($_SESSION['adminPwd']);
        
        if (isset($_POST['pwd'])) {

            if (md5($_POST['pwd']) == $pwd) {
                $_SESSION['adminPwd'] = $_POST['pwd'];
                $this->renderSecureAdmin();
            } else {
                echo "password incorrect";
                $ctrl = new HomeController();
                $ctrl->admin();
            }
        } else {
            $ctrl = new HomeController();
            $ctrl->admin();
        }
    }

}