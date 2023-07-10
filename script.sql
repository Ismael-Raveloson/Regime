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
    FOREIGN KEY idObjectif REFERENCES OBJECTIF(idObjectif),
    FOREIGN KEY idUtilisateur REFERENCES UTILISATEUR(idUtilisateur)
);

CREATE TABLE PLAT(
    idPlat INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    nomPlat VARCHAR(40),
    photoPlat VARCHAR(20),
    prix INT,
    FOREIGN KEY idObjectif REFERENCES OBJECTIF(idObjectif)
);

CREATE TABLE REGIME(
    idRegime INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    duree INT,
    variation FLOAT,
    prix INT,
    FOREIGN KEY idObjectif REFERENCES OBJECTIF(idObjectif)
);

CREATE TABLE COMPOSITION_REGIME(
    idCompoRegime INT PRIMARY KEY AUTO_INCREMENT,
    idRegime INT,
    idPlat INT,
    FOREIGN KEY idPlat REFERENCES PLAT(idPlat)
);

CREATE TABLE PANIER(
    idUtilisateur INT,
    idRegime INT,
    dateVente Date,
    FOREIGN KEY idUtilisateur REFERENCES UTILISATEUR(idUtilisateur)
);

CREATE TABLE SPORT(
    idSport INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    nomSport VARCHAR(25),
    FOREIGN KEY idObjectif REFERENCES OBJECTIF(idObjectif)
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
    FOREIGN KEY idCode REFERENCES CODE(idCode),
    FOREIGN KEY idUtilisateur REFERENCES UTILISATEUR(idUtilisateur)
);