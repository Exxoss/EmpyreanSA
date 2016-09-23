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

        $view = new FribourgView();
        $view->display($tel, $fax);
    }

    function renderVaud() {
        $homeDAO= new HomePageDAO();
        $home = $homeDAO->getHomeData();

        $tel = $home->getHomeTel();
        $fax = $home->getHomeFax();

        $view = new VaudView();
        $view->display($tel, $fax);
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