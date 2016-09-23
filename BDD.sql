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


