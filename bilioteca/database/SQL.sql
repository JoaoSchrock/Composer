create database biblioteca;

use biblioteca;

create table livros(
	 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(45) NOT NULL,  
 classificacao VARCHAR(155) NOT NULL,
 preco FLOAT NOT NULL,  
 quantidade INT NOT NULL); 


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





