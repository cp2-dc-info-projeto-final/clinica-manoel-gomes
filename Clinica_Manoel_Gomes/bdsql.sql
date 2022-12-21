-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2022 às 03:38
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsql`
--
CREATE DATABASE IF NOT EXISTS `bdsql` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdsql`;

DROP  USER IF EXISTS 'admin'@'localhost';
CREATE USER 'admin'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON bdsql.* TO 'admin'@'localhost';

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `cod_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`cod_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`cod_admin`, `nome`, `username`, `telefone`, `data_nasc`, `email`, `senha`) VALUES
(1, 'Larissa Da Silva', 'admin2', '21965892431', '2004-10-07', 'ferreira.larissa@gmail.com', '$2y$10$2NDwnZtccW88KTMhZYpyKecCJ.Sq.cLosCRqZr.QaFcCLKiKkJMre'),
(46, 'JoÃ£o Carvalho Santos', 'joao15', '(21) 99999-5555', '2022-10-05', 'silva.jao@gmail.com', '$2y$10$2ywUtYyOFheT8gdcbJmzx.ZCNl70NCcJYgNU6FFxjqbzKPCBIz4nO'),
(49, 'Manoel Gomes', '@mgomes', '(21) 97564-2413', '1969-12-02', 'gomes.manoel@gmail.com', '$2y$10$8jO7hlbYa8nwUQjQqjkkl.DHEIxszEporDbfBfV32VXGg.6G2x8T2'),
(51, 'Julia Ribeiro', '@ribeiroju', '(21) 95566-4433', '1996-06-24', 'ribeiro.julia@gmail.com', '$2y$10$hnfbT8yZ9hrya.GCc4aiX.D9HecwlJSHgynrfxx25LmtQimKLrJPC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `cod_agendamento` int(11) NOT NULL AUTO_INCREMENT,
  `cod_paciente` int(11) DEFAULT NULL,
  `nome_paciente` varchar(40) DEFAULT NULL,
  `servico` varchar(30) NOT NULL,
  `nome_servico` varchar(50) NOT NULL,
  `tipo_servico` varchar(30) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `horario` varchar(10) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `cod_servico` int(11) NOT NULL,
  PRIMARY KEY (`cod_agendamento`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`cod_agendamento`, `cod_paciente`, `nome_paciente`, `servico`, `nome_servico`, `tipo_servico`, `dia`, `horario`, `responsavel`, `crm`, `cod_servico`) VALUES
(60, NULL, NULL, 'Laboratorial', 'Hemograma', 'Laboratorial', '2023-01-10', '14:30', 'Katia Macedo', '000000-3', 18),
(61, NULL, NULL, 'Clinico', 'Consulta cardiologista', 'Clinico', '2023-02-14', '15:00', 'Gustavo Machado', '000000-1', 12),
(62, NULL, NULL, 'Odontologico', 'Canal', 'Odontologico', '2023-03-24', '16:00', 'Juliano Santos', '000000-2', 21),
(63, NULL, NULL, 'Pediatrico', 'Consulta pediatra', 'Pediatrico', '2022-12-27', '13:00', 'Marcos Monteiro', '000000-0', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
CREATE TABLE IF NOT EXISTS `especialidade` (
  `cod_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_especialidade`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`cod_especialidade`, `especialidade`) VALUES
(1, 'Cardiologista'),
(2, 'Urologista'),
(3, 'Clinico geral'),
(4, 'Pediatra'),
(7, 'Ginecologista'),
(8, 'Ortopedista'),
(9, 'Analista clÃ­nico'),
(10, 'Radiologista'),
(11, 'Dentista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `tipo_servico` varchar(30) NOT NULL,
  `especialidade` varchar(30) NOT NULL,
  `data_nasc` varchar(30) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`cod_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `nome`, `crm`, `tipo_servico`, `especialidade`, `data_nasc`, `telefone`, `email`, `senha`) VALUES
(6, 'Juliano Santos', '000000-2', 'Odontologico', 'Dentista', '1990-03-02', '(21) 92245-3177', 'santosjuliano@gmail.com', '$2y$10$ENh5yK5VobbBT4uzCuyLAeelBVdSTs5R.NtoqwVRL8.8/PnW89nlq'),
(8, 'Katia Macedo', '000000-3', 'Laboratorial', 'Analista', '1987-06-07', '(21) 96641-3789', 'macedokatia@outlook.com', '$2y$10$nEaLk1Kj4qc7H3RkUCfcmOf3DPwJr0.1oUPXPJq4OtsuXwHX7LcjG'),
(5, 'Gustavo Machado', '000000-1', 'Clinico', 'Clinico', '2022-12-29', '(21) 99999-9999', 'machadogusta@gmail.com', '$2y$10$OiqltoVYiiAITwD8oFWC9OShOuASGmGHmLHDxRMv4iWULg9T1fE9a'),
(4, 'Marcos Monteiro', '000000-0', 'Pediatrico', 'Pediatra', '2022-10-04', '(21) 90000-0000', 'monteiro.marcos@gmail.com', '$2y$10$3oCjFruS.j9PcBr4mQ3HquwJ0jlRsHiFQQ0v7RbQE2fXEkkh7.iby');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `cod_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`cod_paciente`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `nome`, `cpf`, `data_nasc`, `telefone`, `email`, `senha`) VALUES
(1, 'Fernanda Souza', '111.222.556-55', '1998-04-16', '(21) 98657-4561', 'souza.fernanda@gmail.com', '$2y$10$szKd2BnvIdH7Xu4gPEdnBuvKNv6yXik9eSeWr9YU7KzeIrrhMufxm'),
(9, 'Pedro Moralles', '211.272.067-88', '2005-08-25', '(21) 96625-3177', 'pedrorodriguesmoralles@gmail.com', '$2y$10$byOuSEGnHRWVyooNVmJx5.bBDbOXl/fOvD/oZyn/lttvsV6zQT.52'),
(10, 'LÃºcia Carvalho', '111.222.333-44', '1978-09-08', '(21) 91122-3344', 'carvalholu@hotmail.com', '$2y$10$TaTkKu40KdVLPdmIl58maOfDvfj0SZW4vfCUPx0kEP7YpDu4Zb5wq');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `cod_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(120) DEFAULT NULL,
  `tipo_servico` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`cod_servico`, `nome`, `descricao`, `tipo_servico`) VALUES
(18, 'Hemograma', '', 'Laboratorial'),
(16, 'Consulta otorrino', '', 'Clinico'),
(12, 'Consulta cardiologista', '', 'Clinico'),
(13, 'Consulta oftalmologista', '', 'Clinico'),
(23, 'Consulta pediatra', '', 'Pediatrico'),
(21, 'Canal', '', 'Odontologico'),
(26, 'Radiografia', '', 'Laboratorial'),
(30, 'Limpeza', '', 'Odontologico');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
