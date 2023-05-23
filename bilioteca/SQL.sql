create database biblioteca;

use biblioteca;

create table livros(
	id_livro INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL, 
	preco INT NOT NULL, 
	classificacao VARCHAR(45) NOT NULL);


create table R_entrada(
  id_entrada INT PRIMARY KEY AUTO_INCREMENT
);

create table R_saida(
	id_saida INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	preco INT NOT NULL,
	classificacao VARCHAR(45) NOT NULL);

create table Emprestimo(
	id INT PRIMARY KEY AUTO_INCREMENT,
	dtEmp VARCHAR(45) NOT NULL,
    hEmp VARCHAR(45) NOT NULL
);




