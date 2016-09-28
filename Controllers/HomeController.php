<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 22/09/2016
 * Time: 14:44
 */
require(dirname(__FILE__) . '/../Views/HomeView.php');
require(dirname(__FILE__) . '/../Views/FribourgView.php');
require(dirname(__FILE__) . '/../Views/VaudView.php');
require(dirname(__FILE__) . '/../Views/ContactView.php');

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
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();
        $inf = $home->getHomeInf();
        $mess = $home->getHomeMess();

        $view = new HomeView();
        $view->display($tel, $fax, $inf, $mess);
    }
    
    function renderFribourg() {
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $ImmeubleDAO= new ImmeubleDAO();
        $Immeubles = $ImmeubleDAO->getImmeubleFribourg();

        $TechDAO = new TechDAO();
        $Techs = $TechDAO->getTech();

        $view = new FribourgView();
        $view->display($tel, $fax, $Immeubles, $Techs);
    }

    function renderVaud() {
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $ImmeubleDAO= new ImmeubleDAO();
        $Immeubles = $ImmeubleDAO->getImmeubleVaud();

        $TechDAO = new TechDAO();
        $Techs = $TechDAO->getTech();

        $view = new VaudView();
        $view->display($tel, $fax, $Immeubles, $Techs);
    }

    function renderContact() {
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $view = new ContactView();
        $view->display($tel, $fax);
    }
    
    function byDefault() {
        $this->render();
    }

}