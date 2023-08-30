CREATE DATABASE test_entrevista CHARACTER SET utf8 COLLATE utf8_general_ci;

use test_entrevista;

CREATE TABLE contact_message(
    id int NOT NULL AUTO_INCREMENT,
    fullname varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    telephone varchar(15) NOT NULL,
    comments text NOT NULL,
    date_creation datetime default now(),
    CONSTRAINT PK_contact_message PRIMARY KEY (id)
)
