-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2013 at 07:07 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bq`
--
CREATE DATABASE IF NOT EXISTS `bq` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bq`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `devoluciones`
--

CREATE TABLE IF NOT EXISTS `devoluciones` (
  `id_devolucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido1` varchar(20) NOT NULL,
  `apellido2` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numero_pedido` varchar(10) NOT NULL,
  `producto` int(10) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `motivo` varchar(20) NOT NULL,
  `estado` int(1) DEFAULT NULL COMMENT '0 No revisado, 1 Aceptado, 2 Denegado',
  PRIMARY KEY (`id_devolucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `devoluciones`
--

INSERT INTO `devoluciones` (`id_devolucion`, `nombre`, `apellido1`, `apellido2`, `email`, `numero_pedido`, `producto`, `numero_serie`, `motivo`, `estado`) VALUES
(1, 'Aa', 'Aa', 'Aa', 'aamm@aa.com', 'AAA000', 2, 'AA00000000', 'Sustitucion', 2),
(2, 'Ba', 'Ba', 'Ba', 'bab@ba.com', 'AAA001', 2, 'AA00000001', 'Sustitucion', 1),
(3, 'Ca', 'Ca', 'Ca', 'cac@cac.com', 'AAA002', 1, 'AA00000002', 'Sustitucion', 1),
(4, 'Sa', 'Sa', 'Sa', 'sas@sas.com', 'AAA003', 2, 'AA00000003', 'Sustitucion', 1),
(5, 'Sa', 'Sa', 'Sa', 'sas@sas.com', 'AAA003', 2, 'AA00000003', 'Sustitucion', 2),
(6, 'da', 'da', 'da', 'dad@dad.com', 'AAA004', 1, 'AA00000004', 'Sustitucion', 1),
(7, 'da', 'da', 'da', 'dad@dad.com', 'AAA005', 1, 'AA00000005', 'Sustitucion', 1),
(8, 'Vic', 'Vic', 'Vic', 'vic@vic.com', 'AAA006', 1, 'AA00000006', 'Sustitucion', 2),
(9, 'qa', 'qa', 'qa', 'qaq@qaq.com', 'AAA006', 1, 'AA00000007', 'Sustitucion', 1),
(10, 'yo', 'yo', 'yo', 'yoy@yoy.com', 'AAA007', 2, 'AA00000008', 'Sustitucion', 1),
(11, 'za', 'za', 'za', 'zaz@zaz.com', 'AAA009', 1, 'AA00000010', 'Sustitucion', 1),
(12, 'zu', 'zu', 'zu', 'zuz@zuz.com', 'AAA010', 1, 'AA00000011', 'Sustitucion', 1),
(13, 'zz', 'zz', 'zz', 'zzz@zzz.com', 'AAA020', 1, 'AA00000012', 'Sustitucion', 2),
(14, 'xa', 'xa', 'xa', 'xax@xax.com', 'AAA021', 2, 'AA00000100', 'Sustitucion', 1),
(15, 'ca', 'ca', 'ca', 'cac@cac.com', 'AAA060', 1, 'AA00000300', 'Sustitucion', 1),
(16, 'de', 'de', 'de', 'ded@ded.com', 'AAA600', 1, 'AA00000600', 'Sustitucion', 1),
(17, 'cd', 'cd', 'cd', 'cddc@cdc.com', 'AAA700', 2, 'AA00003000', 'Sustitucion', 2),
(18, 'zx', 'zx', 'zx', 'zxx@zxx.com', 'AAA666', 2, 'AA00000033', 'Sustitucion', 1),
(19, 'mmm', 'mm', 'mm', 'mmn@mm.com', 'AAA036', 1, 'AA20000000', 'Sustitucion', 1),
(20, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Sustitucion', 1),
(21, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Sustitucion', 1),
(22, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Sustitucion', 1),
(23, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Sustitucion', 1),
(24, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Sustitucion', 2),
(25, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(26, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(27, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(28, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(29, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(30, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(31, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 1),
(32, 'bb', 'bb', 'bb', 'bbb@bb.com', 'BBB000', 1, 'AA00000045', 'Cambio', 2),
(33, 'Victor', 'Me', 'Me', 'djpeta@gmail.com', 'AAA096', 1, 'AA05000000', 'Cambio', 1),
(34, 'Vic', 'Tor', 'Nado', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(35, 'Vic', 'Tor', 'Nado', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000001', 'Cambio', 1),
(36, 'Vic', 'Tor', 'Nado', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000001', 'Cambio', 1),
(37, 'Vic', 'Tor', 'Nado', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000001', 'Cambio', 1),
(38, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(39, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 2),
(40, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(41, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(42, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(43, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(44, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(45, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(46, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(47, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 2),
(48, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(49, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(50, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(51, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(52, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(53, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(54, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(55, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(56, 'Victor', 'Merino', 'García', 'djpeta@gmail.com', 'AAA006', 1, 'AA00000000', 'Cambio', 1),
(57, 'Davoles', 'Vic', 'Naranja', 'djpeta@gmail.com', 'DEE332', 2, 'DE00008821', 'Sustitucion', 2),
(58, 'Yo', 'Yo', 'Y Yo', 'djpeta@gmail.com', 'AAA006', 7, 'AA00000000', 'Cambio', 0),
(59, 'Yo', 'Yo', 'Y Yo', 'djpeta@gmail.com', 'AAA006', 7, 'AA00000000', 'Cambio', 0),
(60, 'Yo', 'Yo', 'Y Yo', 'djpeta@gmail.com', 'AAA006', 7, 'AA00000000', 'Devolucion', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion`) VALUES
(1, 'Edison', 'Tablet Edison Plus'),
(2, 'Curie', 'Tablet Curie'),
(7, 'Fnac', 'Tablet Fnac');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
