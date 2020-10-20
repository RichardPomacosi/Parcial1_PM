--BASE DE DATOS
create table identificador
(
    ci integer primary key not null,
    nombre varchar(50),
    paterno varchar(50),
    materno varchar(50),
    residencia varchar(10)
);

create table usuario
(
    ci integer primary key not null,
    clave varchar (50)
);

create table materia
(
    codmat varchar(30) primary key not null,
    materia varchar(50)
);

create table inscrito
(
    ci integer not null,
    codmat varchar(30) not null,
    nota integer,
    primary key(ci,codmat), 
    foreign key (ci) references identificador,
    foreign key(codmat) references materia
);


--ADICIONANDO DATOS
insert into identificador values (1,'Jose', 'Fernandez','Lopez','01');
insert into identificador values (2,'Maria', 'Melendez','Blanco','03');
insert into identificador values (3,'Andrea', 'Palenque','Quispe','01');
insert into identificador values (4,'Carlos', 'Zuñagua','Andrade','05');
insert into identificador values (5,'Andres', 'Velasco','Apaza','04');
insert into identificador values (6,'Antonio', 'Paredes','Candia','06');
insert into identificador values (7,'Federico', 'Osinaga','Gutierrez','02');
insert into identificador values (8,'Sara', 'Velasco','Osinaga','04');
insert into identificador values (9,'Carla', 'Perez','Vargas','04');
insert into identificador values (10,'Andrea', 'Loma','Camacho','08');
insert into identificador values (11,'Carme', 'Poma','Vargas','09');

--ADICIONANDO USUARIOS
insert into usuario values (1,'123');
insert into usuario values (2,'123');
insert into usuario values (3,'123');
insert into usuario values (4,'123');
insert into usuario values (5,'123');
insert into usuario values (6,'123');
insert into usuario values (7,'123');
insert into usuario values (8,'123');
insert into usuario values (9,'123');
insert into usuario values (10,'123');
insert into usuario values (11,'123');

--ADICIONANDO MATERIAS
insert into materia values ('1','Ciencias de la computacion');
insert into materia values ('2','Telematica');
insert into materia values ('3','Ingles');
insert into materia values ('4','Estadistica');
insert into materia values ('5','Calculo');

--INSCRITO
insert into inscrito values(1,'1',50);
insert into inscrito values(1,'2',60);
insert into inscrito values(1,'3',90);
insert into inscrito values(2,'2',67);
insert into inscrito values(2,'3',80);
insert into inscrito values(3,'4',45);
insert into inscrito values(4,'4',30);
insert into inscrito values(5,'4',89);
insert into inscrito values(6,'4',51);
insert into inscrito values(7,'5',55);
insert into inscrito values(8,'5',78);
insert into inscrito values(9,'5',95);
insert into inscrito values(10,'3',100);
insert into inscrito values(11,'2',65);



;


