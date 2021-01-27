CREATE DATABASE FlowerPower;

USE FlowerPower;

CREATE TABLE Klant (
    Klantcode int NOT NULL AUTO_INCREMENT,
    Voorletters varchar(255),
    Tussenvoegsels varchar(255),
    Achternaam varchar(255),
    Adres varchar(255),
    Postcode varchar(255),
    Woonplaats varchar(255),
    Geboortedatum date,
    PRIMARY KEY(Klantcode)
);

CREATE TABLE factuur (
    Factuurnummer int NOT NULL AUTO_INCREMENT,
    Factuurdatum datetime,
    Klantcode int,
    PRIMARY KEY(Factuurnummer),
    FOREIGN KEY(Klantcode) REFERENCES Klant(Klantcode)
);


CREATE TABLE factuurregel (
    Factuurnummer int,
    Artikelcode int,
    Aantal int,
    Prijs varchar(255),
    FOREIGN KEY(Factuurnummer) REFERENCES factuur(Factuurnummer)
);

CREATE TABLE Medewerker (
    Medewerkercode int NOT NULL AUTO_INCREMENT,
    Voorletters varchar(255),
    Voorvoegsels varchar(255),
    Achternaam varchar(255),
    Gebruikersnaam varchar(255),
    Wachtwoord varchar(255),
    PRIMARY KEY(Medewerkercode)
);

CREATE TABLE Artikel (
    Artikelcode int NOT NULL AUTO_INCREMENT,
    Artikel varchar(255),
    Prijs varchar(255),
    PRIMARY KEY(Artikelcode)
);

CREATE TABLE Winkel (
    Winkelcode int NOT NULL AUTO_INCREMENT,
    Winkelnaam varchar(255),
    Winkeladres varchar(255),
    Winkelpostcode varchar(255),
    vestigingsplaats varchar(255),
    telefoonnummer int,
    PRIMARY KEY(Winkelcode)
);

CREATE TABLE Bestelling (
    Artikelcode int,
    Winkelcode int,
    Aantal int,
    Klantcode int,
    Medewerkercode int,
    afgehaald varchar(255),
    FOREIGN KEY(Artikelcode) REFERENCES Artikel(Artikelcode),
    FOREIGN KEY(Winkelcode) REFERENCES Winkel(Winkelcode),
    FOREIGN KEY(Klantcode) REFERENCES Klant(Klantcode),
    FOREIGN KEY(Medewerkercode) REFERENCES Medewerker(Medewerkercode)
);
