-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2014 at 09:21 PM
-- Server version: 5.5.33
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `missing2`
--

-- --------------------------------------------------------

--
-- Table structure for table `objetos`
--

CREATE TABLE `objetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_objeto` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_objeto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `latitud_objeto` decimal(10,6) DEFAULT NULL,
  `longitud_objeto` decimal(10,6) DEFAULT NULL,
  `foto_objeto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_objeto` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoobjeto_id` int(11) NOT NULL,
  `contacto_objeto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `recompensa_objeto` int(11) DEFAULT NULL,
  `tipopublicacion_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_objetos_tipoobjeto_idx` (`tipoobjeto_id`),
  KEY `fk_objetos_tipopublicacion1_idx` (`tipopublicacion_id`),
  KEY `fk_objetos_usuario1_idx` (`usuario_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `objetos`
--

INSERT INTO `objetos` (`id`, `nombre_objeto`, `descripcion_objeto`, `latitud_objeto`, `longitud_objeto`, `foto_objeto`, `direccion_objeto`, `tipoobjeto_id`, `contacto_objeto`, `recompensa_objeto`, `tipopublicacion_id`, `created_at`, `updated_at`, `usuario_id`) VALUES
(36, 'perrito blanco perdito gogan', 'perrito se me perdio ayer bla bla bla', -33.422559, -70.641950, NULL, NULL, 2, NULL, NULL, 1, '2014-07-23 03:24:34', '2014-07-23 03:24:34', 2),
(35, 'perrito lady', 'perrito perdido color blanco\nfavor contactar ', -33.566090, -70.777649, NULL, NULL, 2, NULL, NULL, 1, '2014-07-22 02:08:51', '2014-07-22 02:08:51', 2),
(34, 'lalala', 'lalala', -33.425030, -70.639590, NULL, NULL, 2, NULL, NULL, 1, '2014-07-20 00:05:21', '2014-07-20 00:05:21', 2),
(33, 'asdasd', 'asdasd', -33.425353, -70.637412, NULL, NULL, 2, NULL, NULL, 1, '2014-07-19 23:59:23', '2014-07-19 23:59:23', 2),
(32, 'prueba ', 'prueba', -33.424036, -70.636801, NULL, NULL, 1, NULL, NULL, 1, '2014-07-18 04:56:23', '2014-07-18 04:56:23', 2),
(31, 'prueba', 'prueba', -33.423177, -70.636221, NULL, NULL, 1, NULL, NULL, 1, '2014-07-18 04:53:08', '2014-07-18 04:53:08', 2),
(28, 'kiko', 'lalala', -33.424197, -70.638922, NULL, NULL, 1, NULL, NULL, 1, '2014-06-27 05:31:31', '2014-06-27 05:31:31', 2),
(30, 'dani', 'lalala', -33.422980, -70.637138, NULL, NULL, 2, NULL, NULL, 1, '2014-06-27 06:30:37', '2014-06-27 06:30:37', 2),
(37, 'lala', 'lala', -33.423633, -70.641248, NULL, NULL, 1, NULL, NULL, 1, '2014-07-29 04:45:18', '2014-07-29 04:45:18', 2),
(38, 'Daniel', 'Daniel', -33.424260, -70.641226, NULL, NULL, 2, NULL, NULL, 1, '2014-07-30 02:13:10', '2014-07-30 02:13:10', 9);

-- --------------------------------------------------------

--
-- Table structure for table `perfiles`
--

CREATE TABLE `perfiles` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `avatar_path` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `IdFacebook` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `perfiles`
--

INSERT INTO `perfiles` (`id`, `usuario_id`, `username`, `avatar_path`, `IdFacebook`, `birthday`, `link`, `updated_at`, `created_at`) VALUES
(3, 9, 'Daniel', '', '10153033269332564', NULL, 'https://www.facebook.com/app_scoped_user_id/10153033269332564/', '2014-07-30 01:50:17', '2014-07-30 01:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `tipoobjeto`
--

CREATE TABLE `tipoobjeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipoobjeto`
--

INSERT INTO `tipoobjeto` (`id`, `nombre_tipo`) VALUES
(1, 'Objeto'),
(2, 'Animal'),
(3, 'Persona');

-- --------------------------------------------------------

--
-- Table structure for table `tipopublicacion`
--

CREATE TABLE `tipopublicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipopublicacion`
--

INSERT INTO `tipopublicacion` (`id`, `nombre`) VALUES
(1, 'Buscando'),
(2, 'Encontrado');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `remember_token` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `email`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(2, 'admin', 'admin', '$2a$08$dqH35gWmGuqA5abjjWSWhe6wNj2b1dRWs1IBMskaLtoYIivRVWTr2', '2014-08-01 23:50:26', '2014-05-22 21:26:23', 'Dwf8PAfSXZCbfIeMihmDpKCl10Dg8wFMAtevWLXY5gW6ID0YvDXVKXtKj0Q5'),
(3, NULL, 'dan.avila7@gmail.com', '$2a$08$jgDQ1h7YdqKFETY4UrAFieVIs9DsFw9dQSnZSSbkX4kZ8eQvXhma6', '2014-05-29 21:19:18', '2014-05-29 21:19:18', ''),
(4, NULL, 'car.vegau@gmail.com', '$2a$08$JfS8SIhliUmrvSA0ZqcxA.PaEvTt.fPSascJPAXvdN/5fX56XkkZy', '2014-05-29 21:30:46', '2014-05-29 21:30:46', ''),
(9, 'Daniel Ávila Arias', '', '', '2014-08-01 22:28:19', '2014-07-30 01:50:17', 'Tp59hrth26XaYHm2L0aBcuUgvXnF5BelNeJTqWOxUwdisWi9B9NJg8SUuAOn');
