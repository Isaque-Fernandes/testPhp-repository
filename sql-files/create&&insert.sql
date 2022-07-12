/*
testPhp-database
*/
drop database if exists testPhp;
create database if not exists testPhp;
use testPhp;

create table pessoa(
id_pessoa int auto_increment primary key,
cpf varchar(255) not null unique,
nome varchar(255) not null,
idade int not null
);

insert into pessoa(cpf, nome, idade) values
('171270807-47', 'Isaque', 23);

/*
testJava-database
*/
drop database if exists testJava;
create database if not exists testJava;
use testJava;

create table pessoa(
id_pessoa int auto_increment primary key,
cpf varchar(255) not null unique,
nome varchar(255) not null,
idade int not null
);

insert into pessoa(cpf, nome, idade) values
('171270807-47', 'Isaque', 23);


