create database xxxclusive;
use xxxclusive;
create table pessoas(
idpessoa integer auto_increment,
nome varchar(45) not null,
email varchar(45) not null,
cep integer,
rua varchar(45) not null,
bairro varchar(45) not null,
cidade varchar(45) not null,
uf varchar(45) not null,
data date not null,
telefone varchar(20) not null,
sexo char(1),
gls char(1),
ativo char(1),
primary key(idpessoa)
);
