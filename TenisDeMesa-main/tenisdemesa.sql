create database TenisDeMesa
use TenisDeMesa

CREATE TABLE ranking_tenis_de_mesa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nacao VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    pontuacao INT
);

INSERT INTO ranking_tenis_de_mesa (nacao, nome, pontuacao) VALUES 
	('Brasil', 'Hugo Calderano', 2575);
    
select * from ranking_tenis_de_mesa;

create table usuario (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

select * from usuario;