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

    function editImmeubleExe() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if ((md5($_SESSION['adminPwd']) == $pwd)&&(isset($_POST['Id']))) {

                $immeubleDAO= new ImmeubleDAO();
                $immeuble = $immeubleDAO->getImmeubleById($_POST['Id']);


                if ($_FILES['img']['name'] != "") {
                    $maxsize = 10000000;
                    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

                    if ($_FILES['img']['error'] == 0) {
                        if ($_FILES['img']['size'] < $maxsize) {
                            $extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
                            if ( in_array($extension_upload,$extensions_valides) ) {
                                $newFileName = md5(uniqid(rand(),true));
                                $newFileName = "img/".$newFileName.$extension_upload;
                                $resultat = move_uploaded_file($_FILES['img']['tmp_name'],$newFileName);
                                if ($resultat) {
                                    $immeuble->setImmeublePathImg($newFileName);
                                }
                                else {
                                    //transfert srv echec
                                    echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Erreur lors transfert de l'image</div>";
                                }
                            }
                            else {
                                //extension incorrect
                                echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Type d'image incorrect</div>";
                            }
                        }
                        else {
                            //fichier trop volumineu
                            echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Image trop volumineuse</div>";
                        }
                    }
                    else {
                        //erreur d'upload du fichier
                        echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Erreur lors transfert de l'image</div>";
                    }
                }

                $immeuble->setImmeubleCity($_POST['city']);
                $immeuble->setImmeubleAdress($_POST['adress']);
                $immeuble->setImmeubleDescription($_POST['mess']);
                $immeuble->setImmeubleFreeSlot($_POST['freeSlot']);
                $immeuble->setImmeubleLvl($_POST['lvl']);
                $immeuble->setTechId($_POST['rtId']);

                $DB = new DataBase();

                try {
                    $DB->updateImmeubleOne($immeuble);
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
    function addImmeuble() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {

                $techDAO = new TechDAO();
                $techs = $techDAO->getTech();

                $view = new AddImmeubleView();
                $view->display($techs);

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

    function addImmeubleExe() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {


                $immeuble = new Immeuble();


                if ($_FILES['img']['name'] != "") {
                    $maxsize = 10000000;
                    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

                    if ($_FILES['img']['error'] == 0) {
                        if ($_FILES['img']['size'] < $maxsize) {
                            $extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
                            if ( in_array($extension_upload,$extensions_valides) ) {
                                $newFileName = md5(uniqid(rand(),true));
                                $newFileName = "img/".$newFileName.$extension_upload;
                                $resultat = move_uploaded_file($_FILES['img']['tmp_name'],$newFileName);
                                if ($resultat) {
                                    $immeuble->setImmeublePathImg($newFileName);
                                }
                                else {
                                    //transfert srv echec
                                    echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Erreur lors transfert de l'image</div>";
                                }
                            }
                            else {
                                //extension incorrect
                                echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Type d'image incorrect</div>";
                            }
                        }
                        else {
                            //fichier trop volumineu
                            echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Image trop volumineuse</div>";
                        }
                    }
                    else {
                        //erreur d'upload du fichier
                        echo "<div style='background-color: #2c3e50; color: #bdc3c7; width: 100%; height: 30px; padding-top: 10px; text-align: center;'><i style='color: #A12E22; font-size: 18px;' class=\"fa fa-times\" aria-hidden=\"true\"></i> Erreur lors transfert de l'image</div>";
                    }
                }

                $immeuble->setImmeubleCity($_POST['city']);
                $immeuble->setImmeubleAdress($_POST['adress']);
                $immeuble->setImmeubleDescription($_POST['mess']);
                $immeuble->setImmeubleFreeSlot($_POST['freeSlot']);
                $immeuble->setImmeubleLvl($_POST['lvl']);
                $immeuble->setTechId($_POST['rtId']);

                $DB = new DataBase();

                try {
                    $DB->addImmeuble($immeuble);
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
    function delImmeuble () {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {
                $DB = new DataBase();
                
                $DB->DelImmeuble($_GET['IdSupr']);

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

    function editRT () {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {

                $techDAO = new TechDAO();
                $techs = $techDAO->getTech();

                $view = new EditRTView();
                $view->display($techs);

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
    function editRTSelected () {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {

                $techDAO = new TechDAO();
                $techs = $techDAO->getTech();

                foreach ($techs as $tech) {
                    if ($tech->getTechId() == $_GET['Id']) {
                        $techSelected = $tech;
                    }
                }

                $view = new EditRTView();
                $view->displaySelected($techs, $techSelected);

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
    function editRTExe() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {

                $techDAO = new TechDAO();
                $techs = $techDAO->getTech();
                
                foreach ($techs as $tech) {
                    if ($tech->getTechId() == $_GET['Id']) {
                        $techSelected = $tech;
                    }
                }

                //passer les post dans l'objet tech selected + liens (id $GET) dans les deux formulaire d'édition RT
                $techSelected->setTechId($_POST['rtId']);
                $techSelected->setTechName($_POST['nom']);
                $techSelected->setTechAdress($_POST['adress']);
                $techSelected->setTechPhoneNumber($_POST['tel']);

                $DB = new DataBase();
                $DB->updateRT($techSelected);
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
    function addRT() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {

                $view = new AddRTView();
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
    function delRTExe() {
        $homeDAO= new HomePageDAO();
        $pwd = $homeDAO->getAdminPwd();
        if (isset($_SESSION['adminPwd'])) {

            if (md5($_SESSION['adminPwd']) == $pwd) {

                $DB = new DataBase();
                $DB->delRT($_GET['Id']);

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