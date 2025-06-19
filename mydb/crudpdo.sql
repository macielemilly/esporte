-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Jun-2024 às 13:52
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudpdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `produtos`;
DROP TABLE IF EXISTS `categorias`;
DROP TABLE IF EXISTS `users`;

-- Reativa as restrições
SET FOREIGN_KEY_CHECKS = 1;


CREATE TABLE IF NOT EXISTS `categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'infantil'),
(2, 'feminino'),
(3, 'masculino');  


CREATE TABLE IF NOT EXISTS `produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `qtd_estoque` INT NOT NULL,
  `marca` VARCHAR(45) NOT NULL,
  `id_categorias` INT NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_idx` (`id_categorias`),
  CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `produtos` (`id`, `nome`, `preco`, `qtd_estoque`, `marca`, `id_categorias`) VALUES
(1, 'bola', 50.00, 2, 'adidas', 1),
(2, 'short', 50.00, 4, 'adidas', 2),
(3, 'camisa', 80.00, 10, 'nike', 3); 


CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `users` (`id`, `login`, `senha`) VALUES
(1, 'admin', '123'),
(2, 'maria', '123'),
(3, 'mateus', '123'),
(4, 'davi', '123'),
(5, 'marina', '123'),
(6, 'testecad', '123'),
(7, 'tati', '123'),
(8, 'emilly', '123'),
(9, 'ana', '123'),
(10, 'renan', '123'),
(11, 'sibely', '123');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
