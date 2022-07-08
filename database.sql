use  js22_w2_p2; 

SHOW TABLES FROM js22_w2_p2;

 CREATE TABLE usuarios(
	Id int not null primary key auto_increment     
    ,Nombre varchar(50) not null
    ,Apellidos varchar(100)
    ,Sexo char(1)
    ,Correo varchar(100)
    ,password varchar(200) not null
    ,Telefono varchar(15)
    ,IdEstatu int 
    ,EsAdmin boolean 
    ,FechaRegistro datetime
    ,foreign key (Id) references usuarios(Id)
	
);  

CREATE TABLE eventos(
	Id int not null primary key auto_increment     
    ,Nombre varchar(50) not null
    ,Inicio	datetime
    ,Fin char(1)
    ,IdUsuarioResposable int 
    ,foreign key (Id) references eventos(Id)
  

); 	

CREATE TABLE registros(
	IdEvento int not null
    ,IdUsuario int not null
    ,IdTipoUsuario int not null
    ,FechaRegistro datetime
    ,IdEstatu int not null 
    
  

);  	




SELECT * FROM usuarios;

