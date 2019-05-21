CREATE DATABASE crud; 
USE crud; 
CREATE TABLE usuarios ( 
id smallint unsigned not null auto_increment,
nombres varchar(20) not null, 
apellidos varchar(20) not null, 
telefonos varchar(20) not null, 
is_active tinyint(1),
constraint pk_users primary key (id) ); 

INSERT INTO usuarios ( nombres, apellidos, telefonos, is_active ) 
VALUES 
( 'Juan Ricardo','Cardenas Bravo','7158943','1'),
( 'Juan Manuel','Martinez','3645214','1'),
( 'Juan Manuel','Martinez','3645214','0');
