CREATE DATABASE pwii;
USE pwii;

CREATE TABLE alunoconcluinte (
  idalunoconcluinte INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  nota1 FLOAT NOT NULL,
  nota2 FLOAT NOT NULL,
  nota3 FLOAT NOT NULL,
  nota4 FLOAT NOT NULL,
  PRIMARY KEY (idalunoconcluinte)
);

INSERT INTO alunoconcluinte (nome, nota1, nota2, nota3, nota4) VALUES
(1, 'Eduarda', 10, 9, 8, 10),
(2, 'Paulo', 9, 8, 9, 8),
(3, 'Igor', 5, 6, 5, 4),
(4, 'Nilson', 8, 7, 8, 8),
(5, 'Ana', 5, 5, 5, 4),
(6, 'Carlos', 5, 6, 5, 4),
(7, 'Pedro', 7, 8, 7, 9),
(8, 'Amanda', 4, 5, 6, 4),
(9, 'Henrique', 6, 6, 5, 6),
(10, 'Guilherme', 7, 7, 7, 7);