-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Out-2016 às 20:53
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `autoescola`
--
CREATE DATABASE IF NOT EXISTS `autoescola` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `autoescola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_aula` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `dt_aula` date NOT NULL,
  `dt_prova` date NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `fk_agenda_funcionario1_idx` (`id_funcionario`),
  KEY `fk_agenda_cliente1_idx` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE IF NOT EXISTS `agendamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `horario` varchar(50) NOT NULL,
  `id_cliente` varchar(50) NOT NULL,
  `id_funcionario` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `data`, `horario`, `id_cliente`, `id_funcionario`) VALUES
(1, '2016-10-19', '08:00-09:00', '1', '1'),
(2, '2016-10-19', '09:00-10:00', '1', '1'),
(3, '2016-10-19', '10:00-11:00', '1', '1'),
(4, '2016-10-20', '08:00-09:00', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `datadenascimento` date NOT NULL,
  `cpf` bigint(14) NOT NULL,
  `telefone` bigint(14) NOT NULL,
  `celular` bigint(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `datadenascimento`, `cpf`, `telefone`, `celular`, `endereco`, `bairro`, `cidade`, `estado`, `email`) VALUES
(1, 'Jairo', '1989-08-04', 74185179120, 6136137536, 61991312557, 'qd 02 lt 06', 'Park 2', 'Aguas City', 'GO', 'jairobruno@hotmail.com'),
(3, 'Diego', '1996-10-12', 4392182177, 5454, 54545, 'qd 07 lt56', 'setor 09', 'aguas', 'DF', 'ag@ag'),
(4, 'Marcelo', '2000-10-12', 99999999999, 5454, 54545, 'qd 07 lt90', 'Bar. 06', 'aguas', 'PA', 'mr@mr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `datadenascimento` date NOT NULL,
  `cpf` bigint(14) NOT NULL,
  `telefone` bigint(14) NOT NULL,
  `celular` bigint(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` bigint(50) NOT NULL,
  `confirmarsenha` bigint(50) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome`, `datadenascimento`, `cpf`, `telefone`, `celular`, `endereco`, `bairro`, `cidade`, `estado`, `email`, `senha`, `confirmarsenha`) VALUES
(1, 'Ernandes', '1989-08-04', 99999999999, 6136137536, 61991312557, 'qd 02 lt 06', 'Park 2', 'Aguas City', 'DF', 'ernandes@ernandes.com', 123, 123),
(2, 'Jairo', '2000-09-09', 12345678910, 54, 54, 'qd', 'ag', 'aguas', 'AC', 'j@j', 123, 123),
(3, 'Marcelo', '1999-07-09', 23456789025, 34, 12, 'lt', 'amaz', 'aguas', 'DF', 'm@m', 123, 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `08:00-09:00` varchar(50) NOT NULL,
  `09:00-10:00` varchar(50) NOT NULL,
  `10:00-11:00` varchar(50) NOT NULL,
  `11:00-12:00` varchar(50) NOT NULL,
  `12:00-13:00` varchar(50) NOT NULL,
  `13:00-14:00` varchar(50) NOT NULL,
  `14:00-15:00` varchar(50) NOT NULL,
  `15:00-16:00` varchar(50) NOT NULL,
  `16:00-17:00` varchar(50) NOT NULL,
  `17:00-18:00` varchar(50) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT '1' COMMENT 'Normal (1) e Administrador (2)',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_login`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `niveis` (`nivel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `nome`, `usuario`, `senha`, `nivel`, `ativo`, `cadastro`) VALUES
(1, 'Jairo Almeida', 'jairo', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2016-09-24 08:32:53'),
(2, 'Marcelo Monteiro', 'marcelo', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2016-09-24 00:00:00'),
(3, 'Ernandes Silva', 'ernandes', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2016-09-24 00:00:00'),
(4, 'Colaborador', 'colaborador', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2016-09-24 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE IF NOT EXISTS `pagamento` (
  `id_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `datadevencimento` date NOT NULL,
  PRIMARY KEY (`id_pagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `descricao`, `valor`, `datadevencimento`) VALUES
(6, 'Conta de Agua', 'R$ 37,80', '2016-10-10'),
(7, 'Boleto Bradesco', 'R$ 1000,00', '2016-10-10');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_cliente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agenda_funcionario1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_agenda`) REFERENCES `agenda` (`id_agenda`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
