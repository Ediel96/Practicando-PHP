CREATE TABLE proyecto (
    idProyecto int NOT NULL AUTO_INCREMENT,
    modulos varchar(255),
    tituloProy varchar(255),
    qwProy varchar(255),
    Observaciones varchar(500),
    PRIMARY KEY (idProyecto) 
);


CREATE table task (
	id int NOT NULL AUTO_INCREMENT,
    name varchar (150),
    description varchar (250),
    PRIMARY key (id)
);