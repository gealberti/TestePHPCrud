CREATE DATABASE cadastro_de_pedidos;

USE cadastro_de_pedidos;

CREATE TABLE Cliente (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(255),
    Email VARCHAR(255),
    Endereco TEXT,
    Telefone VARCHAR(20)
);

CREATE TABLE Produto (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(255),
    Descricao TEXT,
    Preco DECIMAL(10, 2),
    Categoria VARCHAR(255)
);

CREATE TABLE Pedido (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    DataPedido DATE,
    IDCliente INT,
    Total DECIMAL(10, 2),
    FOREIGN KEY (IDCliente) REFERENCES Cliente(ID)
);

CREATE TABLE ItemPedido (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    IDPedido INT,
    IDProduto INT,
    Quantidade INT,
    PrecoUnitario DECIMAL(10, 2),
    FOREIGN KEY (IDPedido) REFERENCES Pedido(ID),
    FOREIGN KEY (IDProduto) REFERENCES Produto(ID)
);

CREATE TABLE Usuario (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NomeUsuario VARCHAR(255) UNIQUE NOT NULL,
    Senha VARCHAR(255) NOT NULL
);
