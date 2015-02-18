-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2014 at 10:39 PM
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
  `descripcion_objeto` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `latitud_objeto` decimal(10,6) DEFAULT NULL,
  `longitud_objeto` decimal(10,6) DEFAULT NULL,
  `foto_objeto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_objeto` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoobjeto_id` int(11) NOT NULL,
  `contacto_objeto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `recompensa_objeto` int(11) DEFAULT NULL,
  `tipopublicacion_id` int(11) NOT NULL,
  `fecha_perdida` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_objetos_tipoobjeto_idx` (`tipoobjeto_id`),
  KEY `fk_objetos_tipopublicacion1_idx` (`tipopublicacion_id`),
  KEY `fk_objetos_usuario1_idx` (`usuario_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=127 ;

--
-- Dumping data for table `objetos`
--

INSERT INTO `objetos` (`id`, `nombre_objeto`, `descripcion_objeto`, `latitud_objeto`, `longitud_objeto`, `foto_objeto`, `direccion_objeto`, `tipoobjeto_id`, `contacto_objeto`, `recompensa_objeto`, `tipopublicacion_id`, `fecha_perdida`, `created_at`, `updated_at`, `usuario_id`, `estado`) VALUES
(36, 'perrito blanco perdito gogan', 'perrito se me perdio ayer bla bla bla', -33.422559, -70.641950, NULL, NULL, 2, NULL, NULL, 1, NULL, '2014-07-23 03:24:34', '2014-08-14 02:08:46', 2, 0),
(35, 'perrito lady', 'perrito perdido color blanco\nfavor contactar ', -33.566090, -70.777649, NULL, NULL, 2, NULL, NULL, 1, NULL, '2014-07-22 02:08:51', '2014-08-14 02:45:48', 2, 0),
(34, 'lalala', 'lalala', -33.425030, -70.639590, NULL, NULL, 2, NULL, NULL, 1, NULL, '2014-07-20 00:05:21', '2014-08-14 02:07:58', 2, 0),
(33, 'asdasd', 'asdasd', -33.425353, -70.637412, NULL, NULL, 2, NULL, NULL, 1, NULL, '2014-07-19 23:59:23', '2014-08-14 02:07:09', 2, 0),
(31, 'prueba', 'prueba', -33.423177, -70.636221, NULL, NULL, 1, NULL, NULL, 1, NULL, '2014-07-18 04:53:08', '2014-08-14 02:08:28', 2, 0),
(30, 'dani', 'lalala', -33.422980, -70.637138, NULL, NULL, 2, NULL, NULL, 1, NULL, '2014-06-27 06:30:37', '2014-08-14 02:09:12', 2, 0),
(37, 'lala', 'lala', -33.423633, -70.641248, NULL, NULL, 1, NULL, NULL, 1, NULL, '2014-07-29 04:45:18', '2014-08-14 02:09:34', 2, 0),
(38, 'Daniel', 'Daniel', -33.424260, -70.641226, NULL, NULL, 2, NULL, NULL, 1, NULL, '2014-07-30 02:13:10', '2014-08-14 02:09:39', 9, 0),
(39, 'prueba', 'prueba', -33.423195, -70.638238, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-07 02:50:43', '2014-08-14 02:09:22', 23, 0),
(40, 'prueba 2', 'prueba 2', -33.423007, -70.639440, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-07 02:52:02', '2014-08-14 02:08:57', 23, 0),
(41, 'prueba persona', 'persona', -33.422666, -70.640931, '', NULL, 3, NULL, NULL, 1, NULL, '2014-08-07 02:52:43', '2014-08-14 02:08:42', 23, 0),
(43, 'dfsdfs', 'dfdsfs', -33.421511, -70.642970, '', NULL, 2, NULL, NULL, 1, NULL, '2014-08-07 02:55:53', '2014-08-14 02:07:47', 24, 0),
(44, 'prueba', 'dasd asd  dsa dasdasd asd  dsad as dasd asd a', -33.419846, -70.646403, '', NULL, 3, NULL, NULL, 1, NULL, '2014-08-07 05:14:50', '2014-08-14 02:07:43', 24, 0),
(46, 'prueba 123', 'prueba 123', -33.419640, -70.644536, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-07 14:46:49', '2014-08-14 02:07:41', 25, 0),
(47, 'prueba', 'prueba', -33.419980, -70.644525, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-08 19:04:07', '2014-08-14 02:07:40', 2, 0),
(48, 'prueba', 'lalla', -33.420598, -70.644547, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-08 19:04:57', '2014-08-14 02:07:38', 2, 0),
(49, 'lalal', 'lala', -33.420965, -70.644772, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-08 19:05:21', '2014-08-14 02:07:36', 2, 0),
(50, 'asd', 'asd', -33.424350, -70.637466, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-08 19:05:36', '2014-08-14 02:08:25', 2, 0),
(52, 'asd', '', -33.423696, -70.640180, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-08 19:12:13', '2014-08-14 02:09:30', 2, 0),
(53, 'ddd', '', -33.421860, -70.638442, '', NULL, 1, NULL, NULL, 1, NULL, '2014-08-08 19:12:23', '2014-08-14 02:08:50', 2, 0),
(54, 'asd', 'asaaa', -33.422398, -70.639526, '', '', 1, NULL, NULL, 1, NULL, '2014-08-08 19:16:30', '2014-08-14 02:08:55', 2, 0),
(55, 'asdasd', 'asaaaa', -33.422407, -70.636446, '', 'Santiago,, Chile', 1, NULL, NULL, 1, NULL, '2014-08-08 19:21:11', '2014-08-14 02:09:08', 2, 0),
(56, 'ddd', 'aaa', -33.422657, -70.636275, '', 'Santiago,, Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-08 19:22:24', '2014-08-14 02:09:10', 2, 0),
(57, 'ddd', 'dddd', -33.422792, -70.640363, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-08 19:23:37', '2014-08-14 02:08:40', 2, 0),
(58, 'daniel', 'lalalala', -33.424278, -70.642648, '', 'Santiago,Región Metropolitana de Santiago, Chile', 3, NULL, NULL, 1, NULL, '2014-08-08 21:12:02', '2014-08-14 02:09:41', 27, 0),
(59, 'aasd', 'asd', -33.425138, -70.637648, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 02:13:24', '2014-08-14 02:07:16', 28, 0),
(60, 'asd', 'aaa', -33.424045, -70.639247, '', 'Santiago,Región Metropolitana de Santiago, Chile', 0, NULL, NULL, 1, NULL, '2014-08-09 03:22:41', '2014-08-14 02:08:07', 28, 0),
(61, 'asdasd', 'yyyyy', -33.423311, -70.637723, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 04:14:55', '2014-08-14 02:09:49', 28, 0),
(62, 'asdasd', 'yyyyy', -33.423311, -70.637723, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 04:14:57', '2014-08-14 02:09:45', 28, 0),
(63, 'asdasd', 'yyyyy', -33.423311, -70.637723, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 04:16:01', '2014-08-14 02:09:14', 28, 0),
(64, 'llll', 'pppp', -33.422451, -70.637852, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 04:17:17', '2014-08-14 02:09:03', 28, 0),
(66, 'fff', 'fff', -33.423812, -70.637219, '', 'Santiago,Región Metropolitana de Santiago, Chile', 3, NULL, NULL, 1, NULL, '2014-08-09 04:38:46', '2014-08-14 02:09:24', 28, 0),
(67, 'qqq', 'www', -33.423642, -70.636457, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 04:43:31', '2014-08-14 02:07:01', 28, 0),
(68, 'yyy', 'uuuu', -33.423795, -70.636607, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 04:48:03', '2014-08-14 02:06:57', 28, 0),
(70, 'qqq', 'qqq', -33.424529, -70.640073, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 04:52:31', '2014-08-14 02:08:05', 28, 0),
(71, 'qqq', 'qqq', -33.425075, -70.639032, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:03:32', '2014-08-14 02:08:00', 28, 0),
(72, 'ff', 'ff', -33.424090, -70.640159, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:06:29', '2014-08-14 02:08:11', 28, 0),
(73, 'asdasdas', 'asad', -33.425478, -70.637670, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:08:15', '2014-08-14 02:07:14', 28, 0),
(74, 'qwqwq', 'qwqw', -33.421914, -70.640019, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:09:53', '2014-08-14 02:08:38', 28, 0),
(75, 'fafd', 'afsf', -33.424484, -70.641274, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:10:33', '2014-08-14 02:09:36', 28, 0),
(76, 'fdadfs', 'fdsfd', -33.424645, -70.637584, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:12:11', '2014-08-14 02:08:22', 28, 0),
(78, 'gfdgfdg', 'gfdgfd', -33.423311, -70.636232, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:14:09', '2014-08-14 02:07:05', 28, 0),
(79, 'dsads', 'dsads', -33.422057, -70.637101, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:16:29', '2014-08-14 02:09:06', 28, 0),
(80, 'ewqew', 'ewqewq', -33.422227, -70.636779, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:17:14', '2014-08-14 02:09:05', 28, 0),
(81, 'dasd', 'asdasd', -33.423947, -70.637305, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:18:59', '2014-08-14 02:08:26', 28, 0),
(82, 'dasd', 'dsad', -33.423195, -70.640212, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:23:51', '2014-08-14 02:09:27', 28, 0),
(83, 'dsads', 'dsad', -33.423078, -70.639086, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:25:07', '2014-08-14 02:08:33', 28, 0),
(84, 'dsada', 'dsad', -33.423141, -70.638678, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:25:58', '2014-08-14 02:08:31', 28, 0),
(85, 'dsad', 'dsad', -33.422630, -70.637509, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:27:37', '2014-08-14 02:09:01', 28, 0),
(86, 'dasds', 'dsads', -33.423195, -70.638045, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-09 05:29:47', '2014-08-14 02:09:20', 28, 0),
(87, 'dsads', 'dsada', -33.422290, -70.640255, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:30:22', '2014-08-14 02:08:52', 28, 0),
(88, 'dsads', 'dsads', -33.422729, -70.637444, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:30:57', '2014-08-14 02:08:59', 28, 0),
(89, 'dsads', 'dsads', -33.422854, -70.639923, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:36:13', '2014-08-14 02:09:28', 28, 0),
(90, 'ddssd', 'dsdsds', -33.425084, -70.639998, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:37:42', '2014-08-14 02:09:47', 28, 0),
(91, 'ddssd', 'dsdsds', -33.425084, -70.639998, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:37:56', '2014-08-14 02:08:09', 28, 0),
(92, 'ddssd', 'dsdsds', -33.425084, -70.639998, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:38:49', '2014-08-14 02:08:02', 28, 0),
(93, 'ddssd', 'dsdsds', -33.425084, -70.639998, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:39:10', '2014-08-14 02:07:56', 28, 0),
(94, 'ccc', 'xxxccc', -33.423633, -70.640996, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-09 05:42:50', '2014-08-14 02:09:32', 28, 0),
(95, 'adsd', 'asd', -33.424000, -70.645373, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-12 06:01:05', '2014-08-14 02:07:29', 29, 0),
(96, 'dsa', 'dsa', -33.423024, -70.643474, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 06:03:23', '2014-08-14 02:07:50', 29, 0),
(97, 'dsa', 'dsa', -33.425254, -70.642798, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 06:06:02', '2014-08-14 02:07:24', 29, 0),
(98, 'dsa', 'asd', -33.424403, -70.640899, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 06:08:32', '2014-08-14 02:09:38', 29, 0),
(99, 'dsa', 'dsa', -33.424690, -70.642712, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-12 06:09:26', '2014-08-14 02:09:43', 29, 0),
(100, 'dsa', 'dsa', -33.423302, -70.642358, '', 'Santiago,Región Metropolitana de Santiago, Chile', 3, NULL, NULL, 1, NULL, '2014-08-12 06:11:53', '2014-08-14 02:08:48', 29, 0),
(101, 'ret', 'tre', -33.422801, -70.642154, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-12 06:17:24', '2014-08-14 02:08:44', 29, 0),
(102, 'ddd', 'aaa', -33.422308, -70.643173, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 06:22:10', '2014-08-14 02:07:49', 29, 0),
(103, 'dsa', 'dsa', -33.423257, -70.645201, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 19:02:43', '2014-08-14 02:07:33', 30, 0),
(104, 'dsads', 'asdsad', -33.425970, -70.643098, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 19:07:19', '2014-08-14 02:07:22', 30, 0),
(105, 'dsads', 'ddd', -33.423275, -70.643517, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-12 19:10:19', '2014-08-14 02:07:53', 30, 0),
(106, 'dsads', 'dsad', -33.424547, -70.645652, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-12 19:15:06', '2014-08-14 02:07:27', 30, 0),
(107, 'ddd', 'aaaa', -33.423472, -70.645190, '', 'Santiago,Región Metropolitana de Santiago, Chile', 3, NULL, NULL, 1, NULL, '2014-08-12 19:15:42', '2014-08-14 02:07:31', 30, 0),
(108, 'dsads', 'dsads', -33.423418, -70.639322, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-12 19:17:00', '2014-08-14 02:08:35', 30, 0),
(109, 'ddd', 'sss', -33.426544, -70.637777, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-12 21:56:30', '2014-08-14 02:07:11', 2, 0),
(110, 'dsads', 'asdasd', -33.427296, -70.642229, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-13 16:02:50', '2014-08-14 02:07:20', 2, 0),
(111, 'dsads', 'dsads', -33.424018, -70.636790, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-14 01:40:28', '2014-08-14 02:06:54', 2, 0),
(112, 'adsad', 'asdasd', -33.424296, -70.637455, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-08-14 02:55:22', '2014-09-15 23:49:53', 2, 0),
(118, 'celular', 'prueba', -36.716122, -73.119754, '', 'Talcahuano,Región del Biobío, Chile', 2, NULL, NULL, 1, NULL, '2014-08-18 05:32:26', '2014-08-18 05:32:26', 31, 1),
(115, 'prueba persona', 'persona', -33.422433, -70.638013, '', 'Santiago,Región Metropolitana de Santiago, Chile', 3, NULL, NULL, 1, NULL, '2014-08-15 16:01:55', '2014-08-19 15:01:28', 31, 0),
(116, 'carcaza', 'bonita rosada con flores de color celeste ', -36.722641, -73.113778, '', 'Talcahuano,Región del Biobío, Chile', 1, NULL, NULL, 1, NULL, '2014-08-15 16:07:38', '2014-08-15 16:07:38', 2, 1),
(119, 'perrito', 'lalallaa', -33.424180, -70.640137, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-18 16:14:49', '2014-08-19 15:03:57', 2, 0),
(117, 'carcaza', 'bonita rosada con flores de color celeste ', -36.722641, -73.113778, '', 'Talcahuano,Región del Biobío, Chile', 1, NULL, NULL, 1, NULL, '2014-08-15 16:07:38', '2014-08-15 16:07:38', 2, 1),
(113, 'prueba', 'prueba', -33.517319, -70.702032, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-15 15:18:46', '2014-08-15 15:18:46', 2, 1),
(120, 'perrito tayson', 'se perdio perrito', -36.819351, -73.051400, '', 'Concepción,Región del Biobío, Chile', 2, NULL, NULL, 1, NULL, '2014-08-18 16:17:07', '2014-08-18 16:17:07', 2, 1),
(114, 'prueba facebook ', 'prueba facebook', -33.423374, -70.636908, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-15 15:31:15', '2014-09-15 23:49:57', 31, 0),
(121, 'hhhhh', 'bbbbb', -33.423266, -70.640223, '', 'Santiago,Región Metropolitana de Santiago, Chile', 3, NULL, NULL, 1, NULL, '2014-08-19 15:00:53', '2014-09-15 23:50:04', 31, 0),
(122, 'ooooo', 'nnnnn', -33.423195, -70.638549, '', 'Santiago,Región Metropolitana de Santiago, Chile', 2, NULL, NULL, 1, NULL, '2014-08-19 15:03:29', '2014-09-15 23:50:01', 31, 0),
(123, 'Primer Missing', 'descripción prueba', -33.423893, -70.639933, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-09-26 17:59:43', '2014-09-26 18:00:54', 37, 0),
(124, 'Primer Missing', 'desc', -33.423983, -70.639933, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-09-26 18:01:11', '2014-09-29 02:05:14', 37, 0),
(125, 'Objeto 12', 'objeto', -33.424162, -70.639225, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-09-29 02:06:31', '2014-09-29 02:06:31', 44, 1),
(126, 'dato 1', 'dato 2', -33.422998, -70.639429, '', 'Santiago,Región Metropolitana de Santiago, Chile', 1, NULL, NULL, 1, NULL, '2014-10-21 02:06:15', '2014-10-21 02:06:15', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `perfiles`
--

CREATE TABLE `perfiles` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `avatar_path` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `idFacebook` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `perfiles`
--

INSERT INTO `perfiles` (`id`, `usuario_id`, `username`, `avatar_path`, `birthday`, `idFacebook`, `link`, `genero`, `updated_at`, `created_at`) VALUES
(30, 44, 'Daniel', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/c0.0.50.50/p50x50/10259749_10153208072147564_1616465227341399290_n.jpg?oh=3403cc00b2defa27f5c548df95be8b6d&oe=54C0DD57&__gda__=1421768323_5048ebfcb3c90c21c2f21e39850b8ce3', NULL, '10153033269332564', NULL, 'male', '2014-09-27 01:03:55', '2014-09-27 01:03:55');

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
  `email` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `realpassword` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `esCreado` tinyint(1) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `remember_token` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `email`, `password`, `realpassword`, `esCreado`, `updated_at`, `created_at`, `remember_token`) VALUES
(2, 'admin', 'admin', '$2a$08$dqH35gWmGuqA5abjjWSWhe6wNj2b1dRWs1IBMskaLtoYIivRVWTr2', NULL, NULL, '2014-08-15 15:27:12', '2014-05-22 21:26:23', 'G42Tb22xxJLJHUKyJEuKEC8rl2ezyAtKWc9WWO7pKzF86mpPkYCMzNRaYn52'),
(44, 'Daniel  ', 'dan.avila7@gmail.com', '$2y$10$/Cm.rnczzolhV.2UJk.kcuiBqIOY5DLTqBpiFRPNYqrr6wOuLJ/F6', 'mk73a9o3dani', 1, '2014-10-21 01:50:33', '2014-09-27 01:03:55', 'NFhEOVRXE0nFQuffOr2mklJPWpk9ZXwNeE8IupJFyJtOwkgisRclhFeJRrZm');
