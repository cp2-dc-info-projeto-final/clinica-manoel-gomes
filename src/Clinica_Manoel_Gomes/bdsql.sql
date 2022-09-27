-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2022 às 20:46
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_funcionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `especialidade` varchar(30) NOT NULL,
  `data_nasc` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `nome`, `crm`, `especialidade`, `data_nasc`, `telefone`, `email`, `senha`) VALUES
(2, 'Armando Cardoso', '', 'Cardiologista', '24/11/1996', '21766786', 'armando@gmail.com', '23415463'),
(3, 'Ricardo Millos', '45654754', 'Neurologista', '08/07/1972', '212587876', 'millos@gmail.com', '54776757'),
(4, 'Maria Aparecida', '45566667', 'Ginecologista', '20/08/1975', '21566667', 'maria@gmail.com', '424543535'),
(5, 'Camilo Dantas', '7567788', 'Ortopedista', '03/04/1990', '214546567', 'dantas@gmail.com', '56578699');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `cod_paciente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `nome`, `cpf`, `data_nasc`, `telefone`, `email`, `senha`) VALUES
(1, 'Amanda Lima', '1223344567', '27/06/1985', '218869688', 'amanda@gmail.com', '123456'),
(3, 'Suzana Mendes', '345546566', '08/07/1972', '214345455', 'suzana@gmail.com', '4443455'),
(4, 'Roberto Carelli', '43253453534', '04/02/1980', '21688788', 'roberto@gmail.com', '343557'),
(5, 'JoÃ£o Reis', '546789800', '08/09/2002', '21788999', 'reis@gmail.com', '24343245537');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_funcionario`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`cod_paciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `cod_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
