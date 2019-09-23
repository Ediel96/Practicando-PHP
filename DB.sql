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

UPDATE mdl_xbase_grupo_de_trabajo SET firstname = 'Hamilton', lastname = 'Acevedo', id_tipo_proyecto = 1, tipo_nombre_proyecto = 'aa',
opcion = 'aa', tipo_modulo = '1', nombre_modulo = 'aa', number_grupo = '4', modelo_proyecto = 'Q', archivo = 'file', id_curso = 3 Where id = 1;

INSERT INTO mdl_xbase_grupo_de_trabajo (id_usuario, firstname, lastname, id_tipo_proyecto, tipo_nombre_proyecto, opcion, tipo_modulo, nombre_modulo, number_grupo, modelo_proyecto, archivo) VALUES ('2', 'Paula', 'Acevedo', '1', 'Nombre de proyecto', '1', '3', 'Critico', '3', 'QW ', 'file');


SELECT * FROM mdl_xbase_grupo_de_trabajo;

DELETE FROM mdl_xbase_grupo_de_trabajo WHERE id = 3;
