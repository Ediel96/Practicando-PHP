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

create table mdl_xbase_grupo_de_trabajo(
id int NOT NULL AUTO_INCREMENT,
id_usuario int (50),
firstname varchar (150),
lastname varchar (150),
id_tipo_proyecto int (50),
tipo_nombre_proyecto varchar (150),
nombre_opcion varchar(150),
tipo_modulo  int (50),
nombre_modulo varchar (150),
number_grupo int (100),
modelo_proyecto varchar (150),
archivo varchar (300),
id_curso int (50),
primary key(id)
);
