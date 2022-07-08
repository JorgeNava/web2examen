use  js22_w2_p2; 

SHOW TABLES FROM js22_w2_p2;

CREATE TABLE usuarios( Id int not null primary key auto_increment, Nombre varchar(50) not null, Apellidos varchar(100), Sexo char(1), Correo varchar(100), password varchar(200) not null, Telefono varchar(15), IdEstatu int , EsAdmin boolean , FechaRegistro datetime, INDEX fk_usuarios_id (Id));

CREATE TABLE eventos( Id int not null primary key auto_increment, Nombre varchar(50) not null, Inicio datetime, Fin char(1), IdUsuarioResposable int, INDEX fk_eventos_id (Id));


INSERT INTO `usuarios`(`Nombre`, `Apellidos`, `Sexo`, `Correo`, `password`, `Telefono`, `IdEstatu`, `EsAdmin`) VALUES ('superadministrador','prueba','M','admin@mail.com','p2','1234567',1,TRUE);

SELECT * FROM usuarios;

