drop database if exists Pweb1;
create database if not exists Pweb1;
use Pweb1;
create table usuarios(id int not null auto_increment primary key,
						nombre varchar(50) not null,
                        usuario varchar(50) not null,
                        no_cuenta int(10) not null,
                        email varchar(50), 
                        pass varchar(20) not null,                        
                        numero int(15), 
                        credencial int(11) not null default '2');  
insert into usuarios (nombre, usuario, no_cuenta, email, pass, numero, credencial) values('Omar Avendano', 'OmarA', '319011003', 'undeck@gmail.com', 'Omar1234', '5540376746', '2');                                            
insert into usuarios (nombre, usuario, no_cuenta, email, pass, numero, credencial) values('Admin', 'Admin', '1234567890', 'Admin@gmail.com', 'Admin', '1234567890', '1');

select * from usuarios;