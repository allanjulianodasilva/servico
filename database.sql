cd C:\xampp\mysql\bin

mysql -u root

CREATE DATABASE servico;
USE servico;

-- #######################################
CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);

INSERT INTO cliente (nome, cpf, endereco, telefone) VALUES ('edison', '123.142.468-24', 'rua odofo', '(95) 98585-8578');

SELECT * FROM cliente;
-- #######################################
CREATE TABLE atendente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    endereco VARCHAR(255) NOT NULL
   
);

INSERT INTO atendente (nome, cpf, endereco) VALUES ('clayson', '177.167.215-36', 'rua aldolf');

SELECT * FROM atendente;
-- #######################################


CREATE TABLE tecnico(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
     telefone VARCHAR(20) NOT NULL
);

INSERT INTO tecnico(nome, cpf, endereco, telefone) VALUES ('romario', '177.167.215-36', 'rua mandituba','(95) 99850-2654');

SELECT * FROM tecnico;

-- #######################################
CREATE TABLE material(
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificacao VARCHAR(255) NOT NULL,
    descricao VARCHAR(14) NOT NULL,
    valor numeric(8.2) NOT NULL
    
);

INSERT INTO material(numero_identificacao , descricao, valor  ) values ('1234-7890', 'azul', 1200.00);

SELECT * FROM material;

-- #######################################
CREATE TABLE solicitacao_servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificacao VARCHAR(255) NOT NULL,
    data_solicitacao DATETIME NOT NULL,
    data_inicio DATETIME NOT NULL,
    data_termino DATETIME NOT NULL,
    cliente int NOT NULL,
    tecnico int NOT NULL,
    atentente int NOT NULL
);

INSERT INTO solicitacao_servico
    (numero_identificacao, data_solicitacao, data_inicio, data_termino, cliente, tecnico, atentente ) 
    values ('1234-7890','2023-08-28', '2023-09-01', '2023-09-03', 1,1,1);

SELECT * FROM solicitacao_servico;

-- #######################################
CREATE TABLE servico(
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificacao VARCHAR(255) NOT NULL,
    descricao VARCHAR(14) NOT NULL,
    valor numeric(8.2) NOT NULL,
    solicitacao_servico int NOT NULL
    
);

INSERT INTO servico(numero_identificacao , descricao, valor, solicitacao_servico  ) values ('1234-7890', 'dfghdsd', 1200.00, 1 );

SELECT * FROM servico;



