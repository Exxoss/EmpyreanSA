#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Home
#------------------------------------------------------------

CREATE TABLE Home(
        HomeId   int (11) Auto_increment  NOT NULL ,
        HomeMess Varchar (400) ,
        HomeInf  Varchar (400) ,
        HomeTel  Varchar (25) ,
        HomeFax  Varchar (25) ,
        HomePwd  Varchar (200) ,
        PRIMARY KEY (HomeId )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Tech
#------------------------------------------------------------

CREATE TABLE Tech(
        TechId          int (11) Auto_increment  NOT NULL ,
        TechName        Varchar (100) ,
        TechAdress      Varchar (100) ,
        TechPhoneNumber Varchar (25) ,
        PRIMARY KEY (TechId )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Immeuble
#------------------------------------------------------------

CREATE TABLE Immeuble(
        ImmeubleId          int (11) Auto_increment  NOT NULL ,
        ImmeubleCity        Int NOT NULL ,
        ImmeubleAdress      Varchar (100) ,
        ImmeubleDescription Varchar (400) ,
        ImmeubleFreeSlot    Int NOT NULL ,
        ImmeublePathImg     Varchar (200) ,
        ImmeubleLvl         Int ,
        TechId              Int NOT NULL ,
        PRIMARY KEY (ImmeubleId )
)ENGINE=InnoDB;

ALTER TABLE Immeuble ADD CONSTRAINT FK_Immeuble_TechId FOREIGN KEY (TechId) REFERENCES Tech(TechId);

INSERT INTO `Tech` (`TechId`, `TechName`, `TechAdress`, `TechPhoneNumber`) VALUES
(1, 'Julio Simao', 'Av. de Beauregard 9, 1700 Fribourg', '079 325 26 83'),
(2, 'André Rody', NULL, '079 326 27 54'),
(3, 'Jean-Pierre Morel', NULL, '026 475 39 09'),
(4, 'Emilia Pereira Rodrigues', NULL, '079 505 73 01'),
(5, 'Philippe Delez', NULL, '079 219 24 47');

INSERT INTO `Home` (`HomeId`, `HomeMess`, `HomeInf`, `HomeTel`, `HomeFax`, `HomePwd`) VALUES
(1, 'Empyrean SA est une agence immobilière spécialisée dans la location d''appartement sur Fribourg et Vaud.', 'En cas d''urgence ou pour toutes demandes administratives particulières veuillez contacter le responsable technique en charge de votre immeuble', '+41 26 413 38 34', '+41 26 413 38 54', '46c29f691732b3d0240629329a2d0fe9');

INSERT INTO `Immeuble` (`ImmeubleId`, `ImmeubleCity`, `ImmeubleAdress`, `ImmeubleDescription`, `ImmeubleFreeSlot`, `ImmeublePathImg`, `ImmeubleLvl`, `TechId`) VALUES
(1, 1, 'Route du Centre 21, 23 à 1723 Marly', 'description des appartement à louer', 1, 'img/fribourg2.png', 4, 1),
(2, 1, 'Route du Châtelet 1-3-5 à 1700 Fribourg', 'description des appartements à louer', 0, NULL, 3, 1),
(3, 1, 'Route de Villars 44 à 1700 Fribourg', 'description des appartements à louer', 0, NULL, 4, 1),
(4, 1, 'Impasse de la Grangette 11, 15 à 1752 Villars-sur-Glâne', 'description des appartements à louer', 0, NULL, 3, 2),
(5, 1, 'Route du Sablion 7 à 1772 Grolley', 'description des appartements à louer', 1, NULL, 4, 3),
(6, 1, 'Route du Chasseral 1-3-5 1470 Estavayer-le-lac', 'description des appartements à louer', 0, 'img/fribourg1.png', 4, 4),
(7, 2, 'Rue de la Rouvenettaz 2-3-4-5-5bis à 1820 Montreux', 'description des appartements à louer', 0, 'img/vaud1.png', 4, 5),
(8, 2, 'Avenue des Alpes 60-62 à 1820 Montreux', 'description des appartements à louer', 0, 'img/vaud2.png', 4, 5),
(9, 2, 'Rue du Lac 40 1815 Clarens / Rue du Port 2-4 à 1815 Clarens', 'description des appartements à louer', 0, 'img/vaud3.png', 4, 5),
(10, 2, 'Avenue de Belmont 29 à 1820 Montreux', 'description des appartements à louer', 0, 'img/vaud4.png', 4, 5),
(11, 2, 'Avenue de Collonge 15 à 1820 Territet', 'description des appartements à louer', 0, 'img/vaud5.png', 4, 5);

