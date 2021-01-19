create database jarditout;

use users;

CREATE TABLE users(
	id  		int PRIMARY KEY auto_increment,
	nom 		varchar(50) NOT NULL,
	prenom 		varchar(50) NOT NULL,
    email       varchar(100) NOT NULL,
    logi        varchar(100) NOT NULL,
    passwor     varchar(50) NOT NULL,
	dateinscrip 	datetime NOT NULL,
	lastconnexion	datetime NOT NULL,
);


