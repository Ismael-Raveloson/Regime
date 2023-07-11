CREATE DATABASE Regime;
USE Regime;

CREATE TABLE UTILISATEUR(
    idUtilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25),
    prenom VARCHAR(25),
    dtn Date,
    email VARCHAR(30),
    mdp VARCHAR(40),
    estAdmin INT
);

CREATE TABLE OBJECTIF(
    idObjectif INT PRIMARY KEY AUTO_INCREMENT,
    nomObjectif VARCHAR(30)
);

CREATE TABLE PROFIL(
    idProfil INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    idObjectif INT,
    genre VARCHAR(20),
    taille INT,
    poids INT,
    montantPortefeuille INT,
    FOREIGN KEY (idObjectif) REFERENCES OBJECTIF(idObjectif),
    FOREIGN KEY (idUtilisateur) REFERENCES UTILISATEUR(idUtilisateur)
);

CREATE TABLE PLAT(
    idPlat INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    nomPlat VARCHAR(40),
    photoPlat VARCHAR(20),
    prix INT,
    FOREIGN KEY (idObjectif) REFERENCES OBJECTIF(idObjectif)
);

CREATE TABLE REGIME(
    idRegime INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    duree INT,
    variation FLOAT,
    prix INT,
    FOREIGN KEY (idObjectif) REFERENCES OBJECTIF(idObjectif)
);

CREATE TABLE COMPOSITION_REGIME(
    idCompoRegime INT PRIMARY KEY AUTO_INCREMENT,
    idRegime INT,
    idPlat INT,
    FOREIGN KEY (idPlat) REFERENCES PLAT(idPlat)
);

CREATE TABLE PANIER(
    idUtilisateur INT,
    idRegime INT,
    dateVente Date,
    FOREIGN KEY (idUtilisateur) REFERENCES UTILISATEUR(idUtilisateur)
);

CREATE TABLE SPORT(
    idSport INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    nomSport VARCHAR(25),
    FOREIGN KEY (idObjectif) REFERENCES OBJECTIF(idObjectif)
);

CREATE TABLE CODE(
    idCode INT PRIMARY KEY AUTO_INCREMENT,
    nomCode VARCHAR(25),
    montant INT,
    validite INT
);

CREATE TABLE CODE_UTILISATEUR(
    idCode INT,
    idUtilisateur INT,
    FOREIGN KEY (idCode) REFERENCES CODE(idCode),
    FOREIGN KEY (idUtilisateur) REFERENCES UTILISATEUR(idUtilisateur)
);

INSERT INTO UTILISATEUR(nom,prenom,dtn,email,mdp,estAdmin) VALUES ('Andria','Tsiory','1989-11-28','Tsiory@gmail.com','123',0);
INSERT INTO UTILISATEUR(nom,prenom,dtn,email,mdp,estAdmin) VALUES ('Rabe','Mika','2001-03-15','Mika@gmail.com','6363',0);
INSERT INTO UTILISATEUR(nom,prenom,dtn,email,mdp,estAdmin) VALUES ('Razafy','Irinah','2000-04-14','irinah@gmail.com','000',0);
INSERT INTO UTILISATEUR(nom,prenom,dtn,email,mdp,estAdmin) VALUES ('Ravelo','Fitahiana','1998-12-19','Fita@gmail.com','1219',1);
INSERT INTO UTILISATEUR(nom,prenom,dtn,email,mdp,estAdmin) VALUES ('Randria','Soa','2003-01-01','Soa@gmail.com','789',0);

INSERT INTO OBJECTIF(nomObjectif) VALUES ('Perdre du poids');
INSERT INTO OBJECTIF(nomObjectif) VALUES ('Prise de masse');

INSERT INTO PROFIL(idUtilisateur,idObjectif,genre,taille,poids,montantPortefeuille) VALUES (1,2,'Masculin',165,60,5000);
INSERT INTO PROFIL(idUtilisateur,idObjectif,genre,taille,poids,montantPortefeuille) VALUES (2,1,'Masculin',170,80,20000);
INSERT INTO PROFIL(idUtilisateur,idObjectif,genre,taille,poids,montantPortefeuille) VALUES (3,1,'Feminin',155,70,7000);
INSERT INTO PROFIL(idUtilisateur,idObjectif,genre,taille,poids,montantPortefeuille) VALUES (5,2,'Feminin',162,65,5000);

INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Salade verte avec escalope de poulet','assets/P12.jpg',4500);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Curry de poisson leger','assets/P13.jpg',6000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Salade de thon','assets/P9.jpg',5000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Omelette aux champignons','assets/P3.jpg',3000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Quiche lorraine leger','assets/P11.jpg',6000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Lasagne light sans pates','assets/P2.jpg',4000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (1,'Wrap au poulet','assets/P14.jpg',2700);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Spaghetti bolognaise','assets/P15.jpg',5000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Pomme de terre sautees avec steak','assets/P8.jpg',4500);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Barre proteine et flocon d avoine','assets/P4.jpg',7000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Soupe aux legumes','assets/P1.jpg',4000);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Riz au saumon','assets/P6.jpg',8500);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Cotelettes panees avec pates','assets/P7.jpg',4500);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Tagliatelles au poulet','assets/P10.jpg',6500);
INSERT INTO PLAT(idObjectif,nomPlat,photoPlat,prix) VALUES (2,'Steak Frite','assets/P16.jpg',8000);

INSERT INTO REGIME(idObjectif,duree,variation,prix) VALUES (1,5,2.5,23500);
INSERT INTO REGIME(idObjectif,duree,variation,prix) VALUES (2,2,1.2,11000);
INSERT INTO REGIME(idObjectif,duree,variation,prix) VALUES (1,7,5.0,31200);
INSERT INTO REGIME(idObjectif,duree,variation,prix) VALUES (1,10,10.2,51700);
INSERT INTO REGIME(idObjectif,duree,variation,prix) VALUES (2,7,4.5,41500);

--R1
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (1,2);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (1,1);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (1,5);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (1,4);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (1,6);

--R2
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (2,10);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (2,11);

--R3
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,1);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,2);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,3);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,4);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,5);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,6);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (3,7);

--R4
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,1);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,2);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,3);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,4);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,5);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,6);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,7);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,8);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,10);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (4,12);

--R5
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,8);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,10);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,13);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,11);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,9);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,12);
INSERT INTO COMPOSITION_REGIME(idRegime,idPlat) VALUES (5,15);


INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(1,1,'2023-06-10');
INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(5,2,'2023-06-24');
INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(2,3,'2023-02-10');
INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(3,4,'2023-07-09');
INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(2,5,'2023-07-01');
INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(1,2,'2023-07-10');
INSERT INTO PANIER(idUtilisateur,idRegime,dateVente) VALUES(5,1,'2023-07-01');


INSERT INTO SPORT(idObjectif,nomSport)VALUES(1,'Natation');
INSERT INTO SPORT(idObjectif,nomSport)VALUES(2,'Musculation');
INSERT INTO SPORT(idObjectif,nomSport)VALUES(2,'Cardio');
INSERT INTO SPORT(idObjectif,nomSport)VALUES(2,'Basketball');
INSERT INTO SPORT(idObjectif,nomSport)VALUES(1,'Football');

INSERT INTO CODE(nomCode,montant,validite)VALUES('7410R9650H',1000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('8520AZE741',10000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('1032R74F6G',2000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('654M010D41',5000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('9521SM0741',120000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('002RT7410N',8000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('123H963A69',12000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('7563I851S0',5000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('456K159R02',3000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('963Z741J14',80000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('8046HRZ89M',140000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('TH789462JK',300000,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('74MLOHJA90',500,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('456076KE08',100,0);
INSERT INTO CODE(nomCode,montant,validite)VALUES('260LOPR785',300,0);

INSERT INTO CODE_UTILISATEUR(idCode,idUtilisateur) VALUES (1,2);
ALTER TABLE REGIME ADD COLUMN nomRegime VARCHAR(40);
UPDATE REGIME SET nomRegime= 'Regime minceur' WHERE idRegime=1;
UPDATE REGIME SET nomRegime= 'Regime mediteraneen' WHERE idRegime=2;
UPDATE REGIME SET nomRegime= 'Regime sans gluten' WHERE idRegime=3;
UPDATE REGIME SET nomRegime= 'Regime cetogene' WHERE idRegime=4;
UPDATE REGIME SET nomRegime= 'Regime vegetarien' WHERE idRegime=5;

SELECT p.nomPlat, p.photoPlat, p.prix, o.nomObjectif
FROM composition_regime as co 
JOIN plat p ON p.idPlat=co.idPlat
JOIN objectif o ON o.idObjectif=p.idObjectif
WHERE idRegime=1;