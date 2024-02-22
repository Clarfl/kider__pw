CREATE DATABASE kider;

USE kider;

CREATE TABLE conta(
login int,
senha varchar(150),
nome varchar (150),
email varchar(150),
telefone int(14)
);

CREATE TABLE newsletter(
email varchar(150)
);

CREATE TABLE pergunta(
nomeCrianca varchar(150),
nomePais varchar (150),
email varchar(150),
idade int(3),
mensagem varchar(700)
);

CREATE TABLE professor(
nomeProf varchar(150),
escola varchar (150),
formacao varchar(150),
tempoE varchar(20),
turnoD varchar(500)
);

