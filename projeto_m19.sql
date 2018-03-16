-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16-Mar-2018 às 11:08
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto_m19`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `Dat` date NOT NULL,
  `Texto` varchar(1000) NOT NULL,
`Cod_comentario` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`Dat`, `Texto`, `Cod_comentario`, `Email`) VALUES
('2018-01-01', ' asdfghj ', 5, ' qwertyu '),
('2018-05-06', ' waadwdawdasdf ', 4, ' asfdfxc '),
('2018-02-02', ' zxcvbnm ', 6, ' outrew '),
('2018-03-03', ' mnbgfdreew ', 7, ' wdfvb ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `Email` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`Cod_comentario`), ADD KEY `Email` (`Email`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
 ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `Cod_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
