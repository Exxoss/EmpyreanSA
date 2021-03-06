<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 22/09/2016
 * Time: 14:44
 */
require(dirname(__FILE__) . '/../Views/HomeView.php');
require(dirname(__FILE__) . '/../Views/AppartementsView.php');
require(dirname(__FILE__) . '/../Views/ContactView.php');
require(dirname(__FILE__) . '/../Views/AdminLogView.php');
require(dirname(__FILE__) . '/../Views/SecurePageView.php');
require(dirname(__FILE__) . '/../Views/EditMessView.php');
require(dirname(__FILE__) . '/../Views/EditInfView.php');
require(dirname(__FILE__) . '/../Views/EditCoorView.php');
require(dirname(__FILE__) . '/../Views/EditImmeubleView.php');
require(dirname(__FILE__) . '/../Views/AddImmeubleView.php');
require(dirname(__FILE__) . '/../Views/EditRTView.php');
require(dirname(__FILE__) . '/../Views/AddRTView.php');


require(dirname(__FILE__) . '/../Models/Home.php');
require(dirname(__FILE__) . '/../Models/Immeuble.php');
require(dirname(__FILE__) . '/../Models/Tech.php');

require(dirname(__FILE__) . '/../DAO/DataBase.php');
require(dirname(__FILE__) . '/../DAO/HomePageDAO.php');
require(dirname(__FILE__) . '/../DAO/ImmeubleDAO.php');
require(dirname(__FILE__) . '/../DAO/TechDAO.php');

class HomeController
{
    function __construct()
    {

    }

    function render() {
        unset($_SESSION['adminPwd']);
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();
        $inf = $home->getHomeInf();
        $mess = $home->getHomeMess();

        $view = new HomeView();
        $view->display($tel, $fax, $inf, $mess);
    }

    function renderAppartements() {
        unset($_SESSION['adminPwd']);
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $ImmeubleDAO= new ImmeubleDAO();
        $Immeubles = $ImmeubleDAO->getImmeubleAll();

        $TechDAO = new TechDAO();
        $Techs = $TechDAO->getTech();

        $view = new AppartementsView();
        $view->display($tel, $fax, $Immeubles, $Techs);
    }
    
    function renderFribourg() {
        unset($_SESSION['adminPwd']);
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $ImmeubleDAO= new ImmeubleDAO();
        $Immeubles = $ImmeubleDAO->getImmeubleFribourg();

        $TechDAO = new TechDAO();
        $Techs = $TechDAO->getTech();

        $view = new AppartementsView();
        $view->display($tel, $fax, $Immeubles, $Techs);
    }

    function renderVaud() {
        unset($_SESSION['adminPwd']);
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $ImmeubleDAO= new ImmeubleDAO();
        $Immeubles = $ImmeubleDAO->getImmeubleVaud();

        $TechDAO = new TechDAO();
        $Techs = $TechDAO->getTech();

        $view = new AppartementsView();
        $view->display($tel, $fax, $Immeubles, $Techs);
    }

    function renderContact() {
        unset($_SESSION['adminPwd']);
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $view = new ContactView();
        $view->display($tel, $fax);
    }
    
    function admin() {
        unset($_SESSION['adminPwd']);
        $view = new AdminLogView();
        $view->display();
    }
    
    
    
    function byDefault() {
        $this->render();
    }

}