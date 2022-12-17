-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Dez-2022 às 05:23
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
DROP DATABASE IF EXISTS `bdsql`;
CREATE DATABASE IF NOT EXISTS `bdsql` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdsql`;

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
  `servico` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `horario` varchar(10) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `cod_servico` int(11) NOT NULL,
  PRIMARY KEY (`cod_agendamento`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`cod_agendamento`, `cod_paciente`, `servico`, `nome`, `dia`, `horario`, `crm`, `cod_servico`) VALUES
(35, NULL, 'Clinico', 'Consulta oftalmologista', '2023-01-06', '06:30', '06300630', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
CREATE TABLE IF NOT EXISTS `especialidade` (
  `cod_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_especialidade`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`cod_especialidade`, `especialidade`) VALUES
(1, 'Cardiologista'),
(2, 'Urologista'),
(3, 'Clinico geral'),
(4, 'Pediatra'),
(7, 'Ginecologista'),
(8, 'Ortopedista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `especialidade` varchar(30) NOT NULL,
  `data_nasc` varchar(30) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`cod_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `nome`, `crm`, `especialidade`, `data_nasc`, `telefone`, `email`, `senha`) VALUES
(1, 'Pedro Moralles', '025655-1', 'Cardiologista', '2005-08-25', '(21) 96625-3177', 'pedro.moralles23@gmail.com', '$2y$10$G.DRM7WYihEdO.cazbsNueTBAQwTxVOCJrmLQJZlqtGyZJ0w2Knbm'),
(2, 'ClÃ©cio C Santos', '111155-5', 'Cardiologista', '1992-08-01', '(21) 97845-5562', 'cleciocsantos@gmail.com', '$2y$10$UzJx3bR18UUvZmrN9.b1cOeVMMD9zeDoziImwZwRTvADNi78iykjq'),
(4, 'Marcos Monteiro', '000000-0', 'Urologista', '2022-10-04', '(21) 90000-0000', 'monteiro.marcos@gmail.com', '$2y$10$3oCjFruS.j9PcBr4mQ3HquwJ0jlRsHiFQQ0v7RbQE2fXEkkh7.iby');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `nome`, `cpf`, `data_nasc`, `telefone`, `email`, `senha`) VALUES
(1, 'Fernanda Souza', '111.222.556-55', '1998-04-16', '(21) 98657-4561', 'souza.fernanda@gmail.com', '$2y$10$szKd2BnvIdH7Xu4gPEdnBuvKNv6yXik9eSeWr9YU7KzeIrrhMufxm'),
(4, 'Leonardo Campos', '111.111.222-22', '2022-10-05', '(21) 98888-8888', 'leo.campos@gmail.com', '$2y$10$fwIApoD8p2sYtjE3diAE6Oz7.PUGKUI39HMJHZ/aktOvCsNyU2Kxi'),
(5, 'Marcos Teixeira', '222.333.444-44', '2022-10-05', '(21) 96666-4444', 'teixeira.marcos@gmail.com', '$2y$10$rZ3jzRi9Bs/jKpZU4xIJAOBJpbTsEf/AzHvPcZADNPm8bIujrZSvW'),
(9, 'Pedro Moralles', '211.272.067-88', '2005-08-25', '(21) 96625-3177', 'pedrorodriguesmoralles@gmail.com', '$2y$10$U8nL1djlnGOCNUupoklEq.8.rr11/Fl0Hf6DX3NT.p02.jlSngS1C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `cod_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `tipo_servico` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`cod_servico`, `nome`, `descricao`, `tipo_servico`) VALUES
(16, 'Consulta otorrino', '', 'Clinico'),
(12, 'Consulta cardiologista', '', 'Clinico'),
(13, 'Consulta oftalmologista', '', 'Clinico');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
