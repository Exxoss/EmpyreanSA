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
                $homeDAO= new HomePageDAO();
                $home = $homeDAO->getHomeData();

                $tel = $home->getHomeTel();
                $fax = $home->getHomeFax();
                $inf = $home->getHomeInf();
                $mess = $home->getHomeMess();

                $ImmeubleDAO= new ImmeubleDAO();
                $Immeubles = $ImmeubleDAO->getImmeubleAll();

                $TechDAO = new TechDAO();
                $Techs = $TechDAO->getTech();

                $view = new SecurePageView();
                $view->display($tel, $fax, $inf, $mess, $Immeubles, $Techs);
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

    function editMess() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $homeDAO= new HomePageDAO();
                $home = $homeDAO->getHomeData();

                $tel = $home->getHomeTel();
                $fax = $home->getHomeFax();
                $inf = $home->getHomeInf();
                $mess = $home->getHomeMess();

                $view = new EditMessView();
                $view->display($mess);
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
    function editInf() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $homeDAO= new HomePageDAO();
                $home = $homeDAO->getHomeData();

                $tel = $home->getHomeTel();
                $fax = $home->getHomeFax();
                $inf = $home->getHomeInf();
                $mess = $home->getHomeMess();

                $view = new EditInfView();
                $view->display($inf);
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
    function editCoor() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $homeDAO= new HomePageDAO();
                $home = $homeDAO->getHomeData();

                $tel = $home->getHomeTel();
                $fax = $home->getHomeFax();
                $inf = $home->getHomeInf();
                $mess = $home->getHomeMess();

                $view = new EditCoorView();
                $view->display($tel, $fax);
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

    function editImmeuble() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $immeubleDAO= new ImmeubleDAO();
                $immeuble = $immeubleDAO->getImmeubleById($_GET['Id']);

                $techDAO = new TechDAO();
                $techs = $techDAO->getTech();

                $view = new EditImmeubleView();
                $view->display($immeuble, $techs);

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

    function editExe() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $homeDAO= new HomePageDAO();
                $home = $homeDAO->getHomeData();


                if (isset($_POST['mess'])) {
                    $home->setHomeMess($_POST['mess']);
                }
                if (isset($_POST['inf'])) {
                    $home->setHomeInf($_POST['inf']);
                }
                if (isset($_POST['tel'])) {
                    $home->setHomeTel($_POST['tel']);
                }
                if (isset($_POST['fax'])) {
                    $home->setHomeFax($_POST['fax']);
                }

                $DB = new DataBase();

                try {
                    $DB->updateHomeData($home);
                } catch (mysqli_sql_exception $e) {
                    echo $e;
                }

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