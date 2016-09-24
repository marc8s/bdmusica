-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Set-2016 às 04:37
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pibiti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adminmusica`
--

CREATE TABLE `adminmusica` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adminmusica`
--

INSERT INTO `adminmusica` (`email`, `senha`) VALUES
('marcus.ecomp@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

CREATE TABLE `questionario` (
  `id` int(11) NOT NULL,
  `escola` varchar(100) NOT NULL,
  `cidade` enum('Feira de Santana','Sobral','','') NOT NULL,
  `data` varchar(30) NOT NULL,
  `q1` varchar(11) NOT NULL,
  `q2` text NOT NULL,
  `q2_outros` varchar(50) NOT NULL,
  `q3` varchar(11) NOT NULL,
  `q4` varchar(11) NOT NULL,
  `q5` varchar(11) NOT NULL,
  `q5_1` text NOT NULL,
  `q5_2` text NOT NULL,
  `q5_2_outros` varchar(50) NOT NULL,
  `q6` varchar(11) NOT NULL,
  `q6_1` varchar(200) NOT NULL,
  `q7` varchar(11) NOT NULL,
  `q7_1` varchar(200) NOT NULL,
  `q7_2` varchar(200) NOT NULL,
  `q8` varchar(11) NOT NULL,
  `q8_1` varchar(200) NOT NULL,
  `q9_1a` varchar(30) NOT NULL,
  `q9_1b` varchar(30) NOT NULL,
  `q9_1c` varchar(30) NOT NULL,
  `q9_2a` varchar(30) NOT NULL,
  `q9_2b` varchar(30) NOT NULL,
  `q9_2c` varchar(30) NOT NULL,
  `q9_3a` varchar(30) NOT NULL,
  `q9_3b` varchar(30) NOT NULL,
  `q9_3c` varchar(30) NOT NULL,
  `q9_4a` varchar(30) NOT NULL,
  `q9_4b` varchar(30) NOT NULL,
  `q9_4c` varchar(30) NOT NULL,
  `q9_5a` varchar(30) NOT NULL,
  `q9_5b` varchar(30) NOT NULL,
  `q9_5c` varchar(30) NOT NULL,
  `q9_6a` varchar(30) NOT NULL,
  `q9_6b` varchar(30) NOT NULL,
  `q9_6c` varchar(30) NOT NULL,
  `q9_complemento` varchar(200) NOT NULL,
  `q10_1a` varchar(30) NOT NULL,
  `q10_1b` varchar(30) NOT NULL,
  `q10_2a` varchar(30) NOT NULL,
  `q10_2b` varchar(30) NOT NULL,
  `q10_2c` varchar(30) NOT NULL,
  `q10_3a` varchar(30) NOT NULL,
  `q10_3b` varchar(30) NOT NULL,
  `q10_4a` varchar(30) NOT NULL,
  `q10_4b` varchar(30) NOT NULL,
  `q10_4c` varchar(30) NOT NULL,
  `q10_5a` varchar(30) NOT NULL,
  `q10_5b` varchar(30) NOT NULL,
  `q10_5c` varchar(30) NOT NULL,
  `q10_6a` varchar(30) NOT NULL,
  `q10_6b` varchar(30) NOT NULL,
  `q10_6c` varchar(30) NOT NULL,
  `q10_7a` varchar(30) NOT NULL,
  `q10_7b` varchar(30) NOT NULL,
  `q10_7c` varchar(30) NOT NULL,
  `q10_8a` varchar(30) NOT NULL,
  `q10_8b` varchar(30) NOT NULL,
  `q10_8c` varchar(30) NOT NULL,
  `q10_9a` varchar(30) NOT NULL,
  `q10_9b` varchar(30) NOT NULL,
  `q10_9c` varchar(30) NOT NULL,
  `q10_10a` varchar(30) NOT NULL,
  `q10_10b` varchar(30) NOT NULL,
  `q10_10c` varchar(30) NOT NULL,
  `q10_11a` varchar(30) NOT NULL,
  `q10_11b` varchar(30) NOT NULL,
  `q10_11c` varchar(30) NOT NULL,
  `q10_12a` varchar(30) NOT NULL,
  `q10_12b` varchar(30) NOT NULL,
  `q10_12c` varchar(30) NOT NULL,
  `q10_complemento` varchar(200) NOT NULL,
  `q11` varchar(30) NOT NULL,
  `q11_1` varchar(30) NOT NULL,
  `q12` varchar(30) NOT NULL,
  `q12_1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questionario`
--

INSERT INTO `questionario` (`id`, `escola`, `cidade`, `data`, `q1`, `q2`, `q2_outros`, `q3`, `q4`, `q5`, `q5_1`, `q5_2`, `q5_2_outros`, `q6`, `q6_1`, `q7`, `q7_1`, `q7_2`, `q8`, `q8_1`, `q9_1a`, `q9_1b`, `q9_1c`, `q9_2a`, `q9_2b`, `q9_2c`, `q9_3a`, `q9_3b`, `q9_3c`, `q9_4a`, `q9_4b`, `q9_4c`, `q9_5a`, `q9_5b`, `q9_5c`, `q9_6a`, `q9_6b`, `q9_6c`, `q9_complemento`, `q10_1a`, `q10_1b`, `q10_2a`, `q10_2b`, `q10_2c`, `q10_3a`, `q10_3b`, `q10_4a`, `q10_4b`, `q10_4c`, `q10_5a`, `q10_5b`, `q10_5c`, `q10_6a`, `q10_6b`, `q10_6c`, `q10_7a`, `q10_7b`, `q10_7c`, `q10_8a`, `q10_8b`, `q10_8c`, `q10_9a`, `q10_9b`, `q10_9c`, `q10_10a`, `q10_10b`, `q10_10c`, `q10_11a`, `q10_11b`, `q10_11c`, `q10_12a`, `q10_12b`, `q10_12c`, `q10_complemento`, `q11`, `q11_1`, `q12`, `q12_1`) VALUES
(23, 'Marechal', 'Feira de Santana', '12/03/2016', 'Sim', 'MÃºsica,Teatro,', 'NÃ£o informado', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o se aplica', 'NÃ£o se aplica', 'NÃ£o informado', 'Sim', 'xxx', 'Sim', 'aa', 'MEC', 'NÃ£o', 'NÃ£o se aplica', 'Sim', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim', 'Sim', 'NÃ£o', 'Sim', 'Sim', 'NÃ£o informado', 'NÃ£o', 'NÃ£o sei responder', 'NÃ£o', 'NÃ£o sei responder', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o sei responder', 'Sim', 'Sim', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'complementar', '', 'Sim', 'Sim', 'Sim'),
(25, 'Lana del Rey', 'Feira de Santana', '23/09/2016', 'Sim', 'MÃºsica,', 'NÃ£o informado', 'Sim', 'Sim', 'Sim', 'Licenciatura,', 'Outros,', 'Sapateado', 'NÃ£o', 'NÃ£o se aplica', 'NÃ£o', 'NÃ£o se aplica', 'NÃ£o se aplica', 'NÃ£o', 'NÃ£o se aplica', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o sei responder', 'NÃ£o', 'Sim', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o informado', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim', 'NÃ£o sei responder', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Sim', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o informado', 'NÃ£o', 'NÃ£o', 'Sim', 'Sim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionario`
--
ALTER TABLE `questionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
