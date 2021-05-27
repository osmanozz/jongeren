CREATE DATABASE jongerenkansrijker;
USE jongerenkansrijker;

CREATE TABLE activiteit(
    activiteitcode INT NOT NULL AUTO_INCREMENT,
    activiteit VARCHAR(40),
    PRIMARY KEY (activiteitcode)
);
CREATE TABLE jongere(
    jongerecode INT NOT NULL AUTO_INCREMENT,
    roepnaam VARCHAR(20),
    tussenvoegsel VARCHAR(7),
    achternaam VARCHAR(25),
    inschijfdatum DATE,
    PRIMARY KEY (jongerecode)
);
CREATE TABLE jongereactivitetit(
    jongerecode INT NOT NULL,
    actiecode INT NOT NULL,
    startdatum DATE,
    afgerond TINYINT(1),
    FOREIGN KEY (jongerecode) REFERENCES jongere(jongerecode),
    FOREIGN KEY (actiecode) REFERENCES activiteit(activiteitcode)
);
CREATE TABLE instituut(
    instituutcode INT NOT NULL AUTO_INCREMENT,
    instituut VARCHAR(40),
    instituuttelefoon VARCHAR(11),
    PRIMARY KEY (instituutcode)
);
CREATE TABLE jongereinstituut(
    jongerecode INT NOT NULL,
    instituutscode INT NOT NULL,
    startdatum DATE,
    FOREIGN KEY (jongerecode) REFERENCES jongere(jongerecode),
    FOREIGN KEY (instituutscode) REFERENCES instituut(instituutcode)
);
CREATE TABLE medewerker(
    ID INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    PRIMARY KEY (ID)
);