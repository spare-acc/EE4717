CREATE TABLE feedback (
    Personid int NOT NULL AUTO_INCREMENT,
    FirstName varchar(255),
	LastName varchar(255) NOT NULL,
    subject text,
	PRIMARY KEY (Personid)
);

CREATE TABLE cutomers (
    Personid int NOT NULL AUTO_INCREMENT,
    FirstName varchar(255),
	LastName varchar(255) NOT NULL,
    email varchar(255),
    PRIMARY KEY (Personid)
);