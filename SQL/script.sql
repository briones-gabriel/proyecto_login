CREATE DATABASE IF NOT EXISTS briones;

DROP TABLE clients;

CREATE TABLE IF NOT EXISTS clients (
    clientID INT NOT NULL AUTO_INCREMENT,
    status INT NOT NULL,
    email varchar(30) NOT NULL,
    password varchar(255) NOT NULL,
    firstName varchar(20) NOT NULL,
    lastName varchar(20) NOT NULL,
    birthDate DATE NOT NULL,
    PRIMARY KEY (clientID)
);

SELECT * FROM clients;