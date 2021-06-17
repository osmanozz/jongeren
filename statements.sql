CREATE DATABASE jongerenkansrijker;
USE jongerenkansrijker;

CREATE TABLE activiteit(
    activiteitcode INT NOT NULL AUTO_INCREMENT,
    activiteit VARCHAR(40) NOT NULL,
    PRIMARY KEY (activiteitcode)
);

CREATE TABLE jongere(
    jongerecode INT NOT NULL AUTO_INCREMENT,
    naam VARCHAR(20) NOT NULL,
    tussenvoegsel VARCHAR(7),
    achternaam VARCHAR(25) NOT NULL ,
    inschijfdatum DATE NOT NULL,
    PRIMARY KEY (jongerecode)
);

CREATE TABLE jongereactivitetit(
    ID INT NOT NULL AUTO_INCREMENT,
    jongerecode INT NOT NULL,
    actiecode INT NOT NULL,
    startdatum DATE NOT NULL,
    afgerond TINYINT,
    PRIMARY KEY (ID),
    FOREIGN KEY (jongerecode) REFERENCES jongere(jongerecode) ON DELETE CASCADE,
    FOREIGN KEY (actiecode) REFERENCES activiteit(activiteitcode) ON DELETE CASCADE 
    
);

CREATE TABLE instituut(
    instituutcode INT NOT NULL AUTO_INCREMENT,
    instituut VARCHAR(40) NOT NULL,
    instituuttelefoon VARCHAR(15),
    PRIMARY KEY (instituutcode)
);

CREATE TABLE jongereinstituut(
    ID INT NOT NULL AUTO_INCREMENT,
    jongerecode INT NOT NULL,
    instituutscode INT NOT NULL,
    startdatum DATE NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (jongerecode) REFERENCES jongere(jongerecode) ON DELETE CASCADE,
    FOREIGN KEY (instituutscode) REFERENCES instituut(instituutcode) ON DELETE CASCADE
);

CREATE TABLE medewerker(
    ID INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);