-- db/usuarios.sql
CREATE DATABASE IF NOT EXISTS avaformadora;
USE avaformadora;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(50) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

-- Inserindo usuário fictício
INSERT INTO usuarios (login, senha) VALUES ('aluno123', 'senha123');
