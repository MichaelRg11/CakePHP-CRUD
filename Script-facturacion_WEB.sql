-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 20:22:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facturacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `descripcion`, `created`, `modified`) VALUES
(1, 'Lacteos', '2020-08-14 00:05:37', '2020-08-14 00:05:37'),
(2, 'Computadores', '2020-08-14 00:05:37', '2020-08-14 00:05:37'),
(3, 'Electrodomésticos', '2020-08-14 00:05:37', '2020-08-14 00:05:37'),
(4, 'Telas111', '2020-09-16 07:24:16', '2020-09-21 08:05:47'),
(5, 'carne lindas', '2020-09-16 07:40:36', '2020-09-16 07:40:36'),
(6, 'Libros', '2020-09-17 01:32:45', '2020-09-17 01:32:45'),
(7, 'Plásticos', '2020-09-17 01:32:45', '2020-09-17 01:32:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(65) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `created`, `modified`) VALUES
(1, '16760923 1498', 'Irene Zocorrosssssssss ', 'Gould', 'Kra 54 No  54 - 45 Apto 1', '057 300 64 77 95', 'imperdiet.erat@magnaetipsum.com', '2019-12-08 19:35:58', '2020-09-03 23:04:22'),
(2, '16900418 6335', 'Louis Manuel', 'Cooper Martinez', '431-4154 Id Avenue', '057 300 15 15 45', 'mollis.lectus.pede@Sednullaante.com', '2020-08-18 09:14:36', '2020-09-04 06:16:25'),
(3, '16900407 8102', 'Regan Matew', 'Yates Antonio', 'P.O. Box 307, 5747 Dignissim Av.', '057 300 48 13 63', 'Suspendisse.dui@risusDuisa.org', '2021-05-10 18:18:11', '2019-10-29 19:04:43'),
(4, '16780303 9788', 'Bert', 'Fernandez', '814-1285 Tristique Av.', '057 300 22 22 51', 'sed.libero.Proin@auctornuncnulla.ca', '2019-12-09 10:44:18', '2021-07-14 21:53:39'),
(7, '16091022 8097', 'Bethany', 'Reid', '390-947 Morbi Road', '057 300 74 64 89', 'molestie@adipiscingfringilla.ca', '2020-07-12 04:44:30', '2021-06-01 21:53:33'),
(20, '16620602 0270', 'Isaac', 'Conway', 'P.O. Box 836, 7659 Egestas. Avenue', '057 300 35 60 27', 'massa.lobortis@eget.ca', '2020-05-18 21:38:07', '2020-11-03 00:44:46'),
(21, '16611208 3206', 'Heidi', 'Martinez', 'Ap #852-3139 Cras Road', '057 300 42 21 77', 'dictum.magna@est.co.uk', '2020-06-26 19:51:13', '2020-03-09 10:25:12'),
(24, '16991206 2065', 'Sage', 'Humphrey', 'Ap #690-963 Sollicitudin Road', '057 300 94 65 08', 'pharetra.Quisque@loremtristiquealiquet.net', '2021-02-25 08:31:56', '2020-04-11 05:45:41'),
(26, '16970313 5542', 'Rosalyn', 'Hinton', '265-1851 Sem Road', '057 300 34 75 12', 'erat@ProinultricesDuis.org', '2021-01-04 22:09:07', '2019-09-20 04:41:44'),
(27, '16070310 3176', 'Fitzgerald', 'Fry', '6137 Commodo Rd.', '057 300 70 78 55', 'odio@metus.co.uk', '2019-08-25 20:58:06', '2020-08-02 21:59:05'),
(28, '16690218 1061', 'Katelyn', 'Mays', '9782 Eu, Rd.', '057 300 10 00 15', 'parturient@loremsemper.net', '2021-05-18 15:19:16', '2019-09-12 12:43:00'),
(29, '16110324 5963', 'Brittany', 'Barnett', 'Ap #463-3231 Eget St.', '057 300 28 57 71', 'lorem.auctor@Nunc.org', '2020-09-13 05:09:51', '2020-01-12 06:30:32'),
(30, '16280410 2263', 'Inez', 'Sparks', '336 Proin St.', '057 300 28 24 56', 'amet.lorem.semper@auctorvitae.net', '2020-06-23 19:08:53', '2021-05-12 10:44:02'),
(31, '16050613 9187', 'Mannix Juliana', 'Beard  Floyd', 'P.O. Box 143, 2871 Eu Road', '057 300 63 71 30', 'convallis.in@congue.net', '2021-04-22 10:28:35', '2020-09-19 14:52:00'),
(32, '16250220 4916', 'Gage', 'Odonnell', 'Ap #239-4511 Sed, St.', '057 300 57 57 30', 'ultrices@sedsapienNunc.edu', '2020-02-05 18:19:17', '2020-06-16 15:34:35'),
(33, '16650827 3387', 'Pamela', 'Moss', '9117 Convallis Road', '057 300 73 45 08', 'Phasellus.dapibus.quam@velit.org', '2020-05-10 00:37:10', '2019-12-07 17:32:25'),
(34, '16920623 4925', 'Dustin', 'Miller', 'Ap #560-5909 Aliquam St.', '057 300 36 60 91', 'molestie@vulputate.edu', '2020-12-24 02:48:27', '2020-02-24 10:41:01'),
(35, '16820622 0678', 'Phillip', 'Travis', 'P.O. Box 606, 291 Nibh. Ave', '057 300 23 74 73', 'vel@nunc.org', '2021-06-21 02:44:58', '2021-01-14 03:31:00'),
(36, '16701108 1689', 'Mohammad', 'Roach', 'P.O. Box 129, 2001 Integer Ave', '057 300 62 42 64', 'lobortis@nuncullamcorpereu.edu', '2020-07-15 06:01:14', '2020-09-17 16:50:41'),
(37, '16911121 6314', 'Jennifer', 'Tate', '324-805 Blandit Avenue', '057 300 51 25 66', 'imperdiet.non@ullamcorpervelitin.com', '2021-07-20 17:43:36', '2021-03-16 02:20:27'),
(38, '16720912 2642', 'Beck', 'Hansen', 'Ap #429-1426 Non, St.', '057 300 10 61 45', 'sit.amet.ante@luctusaliquet.edu', '2021-06-18 12:26:28', '2021-04-22 00:56:08'),
(39, '16890724 0769', 'Chase', 'Mcneil', 'P.O. Box 729, 2589 Praesent Av.', '057 300 70 29 64', 'Morbi.quis.urna@quamafelis.co.uk', '2020-03-07 15:41:08', '2020-11-09 00:29:00'),
(40, '16540411 7631', 'Malik', 'Spears', 'P.O. Box 742, 6429 Scelerisque Rd.', '057 300 73 58 12', 'dictum.magna@dapibus.org', '2019-12-27 14:53:01', '2020-02-20 11:51:24'),
(41, '16501226 5814', 'Jaime', 'Waters', 'Ap #185-9960 Augue St.', '057 300 71 73 11', 'risus.Duis.a@mollisneccursus.edu', '2020-08-07 18:13:48', '2020-08-28 12:07:07'),
(42, '16650713 7088', 'Amaya', 'Parsons', 'P.O. Box 424, 5768 Maecenas Av.', '057 300 20 14 83', 'et.risus.Quisque@Mauris.co.uk', '2020-10-18 17:50:30', '2021-01-13 00:40:21'),
(43, '16791016 3091', 'Colt', 'Nicholson', '9598 Sed Av.', '057 300 23 78 93', 'leo.Morbi@eros.net', '2019-10-25 09:08:48', '2019-09-25 21:07:42'),
(44, '16640309 4979', 'Rooney', 'English', '129-7882 Eget Road', '057 300 32 15 57', 'nibh.Quisque.nonummy@sodalesat.org', '2021-04-11 11:54:55', '2021-01-26 12:35:05'),
(45, '16330529 8600', 'Channing', 'Thompson', 'Ap #868-696 Ultrices. Rd.', '057 300 00 57 36', 'eu.odio.tristique@Sednec.co.uk', '2019-10-15 12:37:56', '2020-02-15 17:43:34'),
(46, '16300919 4519', 'Emily', 'Crane', 'Ap #334-6989 Nunc Avenue', '057 300 49 45 33', 'sodales.Mauris@mattisCraseget.ca', '2019-10-04 18:57:10', '2020-02-18 18:35:39'),
(47, '16941109 1623', 'Jakeem', 'Patel', 'Ap #812-4295 Nascetur St.', '057 300 61 38 76', 'fringilla@infelis.co.uk', '2020-08-07 12:21:02', '2020-02-04 10:38:32'),
(48, '16891106 6127', 'Aurelia', 'Walls', '908 Nec, Rd.', '057 300 38 88 27', 'metus.Aenean.sed@necanteMaecenas.ca', '2021-08-05 03:43:22', '2019-12-28 04:18:00'),
(49, '16590117 9654', 'Madison', 'Curry', '7045 Aliquam Road', '057 300 52 99 79', 'sed@odio.com', '2019-08-30 19:46:30', '2020-11-19 19:31:43'),
(50, '16330110 1824', 'Jordan', 'Vincent', '463-5727 Sit Av.', '057 300 14 91 98', 'auctor.nunc.nulla@Nunccommodo.org', '2020-02-21 07:37:49', '2020-11-14 07:12:47'),
(51, '16590314 7683', 'Timothy', 'Robbins', 'P.O. Box 291, 8601 Torquent Rd.', '057 300 56 55 37', 'lobortis@anteipsumprimis.com', '2019-10-30 08:27:24', '2020-11-29 00:31:50'),
(52, '16430405 4366', 'Allegra', 'Randall', 'P.O. Box 730, 4171 Magnis Street', '057 300 16 60 46', 'ut@vel.edu', '2019-09-22 05:39:36', '2021-06-16 14:13:56'),
(53, '16650905 4638', 'Georgia', 'Calderon', '218-1489 Nam Road', '057 300 10 41 74', 'semper.pretium.neque@ligula.ca', '2020-07-02 20:42:34', '2020-11-01 23:35:46'),
(54, '16050622 6158', 'Baker', 'Rowland', '9965 Arcu Rd.', '057 300 47 61 83', 'porttitor.scelerisque@tristiquepharetra.ca', '2020-01-25 00:29:08', '2020-02-24 07:05:42'),
(55, '16190129 4130', 'Glenna', 'Franco', 'Ap #978-1745 Nunc Rd.', '057 300 38 83 45', 'rutrum.Fusce.dolor@congue.com', '2020-10-06 10:00:40', '2020-09-12 01:42:54'),
(56, '16371121 1619', 'Xena', 'Franklin', '9155 Curae; Road', '057 300 64 91 72', 'placerat@facilisislorem.com', '2021-06-10 19:54:42', '2019-12-17 06:04:49'),
(57, '16700205 9025', 'Risa', 'Puckett', 'Ap #951-2954 Donec Rd.', '057 300 87 67 07', 'libero.est.congue@vulputateeuodio.ca', '2020-02-25 04:39:18', '2021-02-22 10:56:51'),
(58, '16380929 3040', 'Astra', 'Atkinson', 'P.O. Box 576, 9616 Metus. Rd.', '057 300 33 94 98', 'Sed.nec@arcu.ca', '2019-11-27 12:02:44', '2020-06-02 19:41:22'),
(59, '16430208 0017', 'Clark', 'Fields', '9486 Molestie. Av.', '057 300 04 31 35', 'sem@tellusimperdiet.ca', '2021-06-05 17:50:54', '2020-09-03 19:09:48'),
(60, '16320914 0924', 'Baker', 'Velazquez', '479-7142 Felis. Street', '057 300 28 25 80', 'Donec.vitae@sapienmolestieorci.org', '2019-11-17 10:08:52', '2019-12-09 12:32:21'),
(61, '16910115 4335', 'Rhiannon', 'Dominguez', 'Ap #974-8249 Urna Road', '057 300 01 34 75', 'velit@malesuada.org', '2021-02-25 16:50:38', '2020-06-11 17:43:52'),
(62, '16860609 4848', 'Autumn', 'Shepard', '2422 Nunc Av.', '057 300 47 82 79', 'felis@Cumsociis.co.uk', '2019-08-20 02:40:02', '2020-08-19 17:57:46'),
(63, '16910102 6459', 'Deacon', 'Roman', 'P.O. Box 812, 4213 Auctor, Rd.', '057 300 44 50 09', 'enim.Sed.nulla@purusgravidasagittis.ca', '2020-10-15 09:38:03', '2021-01-18 15:36:19'),
(64, '16130707 0407', 'Lee', 'Conrad', '303-3908 Enim, Rd.', '057 300 25 82 45', 'nec.metus@pellentesque.org', '2021-01-04 22:12:36', '2021-04-11 00:50:50'),
(65, '16650804 7559', 'Ariana', 'Kelly', 'P.O. Box 641, 1945 Tincidunt St.', '057 300 45 49 64', 'Pellentesque@euligula.co.uk', '2020-04-07 17:27:00', '2020-11-02 07:51:48'),
(66, '16130904 2370', 'Demetria', 'Nixon', 'P.O. Box 681, 9813 Luctus Road', '057 300 98 15 65', 'cursus.et@at.ca', '2019-11-23 21:15:06', '2019-08-31 17:17:55'),
(67, '16651210 7654', 'Cruz', 'Walsh', '2351 Purus. St.', '057 300 28 12 53', 'tincidunt.nunc@netusetmalesuada.edu', '2021-05-03 19:15:52', '2020-04-14 09:32:38'),
(68, '16980313 0310', 'Abraham', 'Hunt', '3430 Aliquet. Av.', '057 300 32 86 66', 'dui.quis@semper.net', '2020-02-21 02:29:10', '2020-03-14 13:52:50'),
(69, '16440921 1713', 'Casey', 'Banks', '5558 Mi Street', '057 300 17 97 38', 'cursus@imperdieterat.ca', '2020-10-13 06:38:12', '2019-09-29 10:41:13'),
(70, '16950105 0091', 'Mari', 'Delaney', '380-265 Enim Av.', '057 300 11 02 09', 'vehicula@velitjusto.org', '2021-03-01 23:03:38', '2021-04-13 09:10:01'),
(71, '16271114 3137', 'Nyssa', 'Coffey', 'P.O. Box 809, 3066 Vel Av.', '057 300 39 98 55', 'Donec@nullamagnamalesuada.ca', '2021-06-10 18:57:59', '2021-05-23 07:21:12'),
(72, '16100225 3993', 'Kenyon', 'Zamora', 'P.O. Box 276, 1303 Risus St.', '057 300 85 90 24', 'ante@etmagnisdis.com', '2020-07-18 22:38:37', '2021-06-08 02:28:36'),
(73, '16980903 0613', 'Walker', 'Moses', 'Ap #647-5371 Arcu. Street', '057 300 73 98 81', 'et.netus@id.co.uk', '2020-10-26 21:06:30', '2020-02-02 04:07:06'),
(74, '16580714 3622', 'Gage', 'Massey', '2587 Nulla St.', '057 300 97 94 68', 'ac.facilisis@eleifendvitae.ca', '2020-02-15 20:38:55', '2021-05-21 22:50:38'),
(75, '16340408 1592', 'Nerea', 'Joyner', '2746 Eu Rd.', '057 300 27 97 16', 'Quisque.varius.Nam@egetipsum.co.uk', '2019-12-15 06:22:42', '2021-04-21 11:15:44'),
(76, '16990317 9720', 'Deirdre', 'Burton', '579-8669 Sagittis Avenue', '057 300 24 83 26', 'diam.Duis.mi@ornareFusce.org', '2021-06-19 13:46:38', '2020-05-02 20:19:43'),
(77, '16541020 1361', 'Cleo Patra', 'Witt', '943-8793 Tellus Ave', '057 300 16 91 46', 'Proin.eget@nisidictumaugue.edu', '2020-01-15 09:56:06', '2020-09-19 15:07:00'),
(78, '16060411 5907', 'Arsenio', 'Hess', '7671 At Street', '057 300 99 54 06', 'mattis.velit.justo@aarcu.ca', '2019-11-24 11:36:36', '2020-03-12 00:33:23'),
(79, '16550309 6579', 'Yoshi', 'Moreno', 'Ap #665-1427 Adipiscing St.', '057 300 57 29 53', 'hendrerit.neque@commodoat.co.uk', '2020-09-17 07:36:53', '2020-01-07 18:16:29'),
(80, '16761227 4444', 'Cheryl', 'Wong', '4089 Lorem St.', '057 300 26 69 42', 'Proin.sed@malesuada.co.uk', '2021-04-05 03:24:24', '2020-05-31 16:09:05'),
(81, '16831226 8652', 'Cody', 'Wiggins', 'Ap #552-7037 In, Street', '057 300 17 81 95', 'luctus.vulputate.nisi@temporerat.co.uk', '2021-03-07 12:21:36', '2020-01-23 08:17:20'),
(82, '16861201 6496', 'Uma', 'Stokes', '839-4060 A St.', '057 300 27 30 25', 'dapibus.quam.quis@eleifendegestasSed.com', '2019-09-27 16:45:57', '2019-09-24 11:17:31'),
(83, '16860116 0958', 'Zeus', 'Luna', '528-1268 Risus. Road', '057 300 73 48 26', 'fringilla.cursus.purus@estac.com', '2021-04-01 10:11:01', '2020-12-18 16:42:19'),
(85, '16580508 4554', 'Larissa', 'Barrett', 'Ap #468-3209 Nec Avenue', '057 300 67 35 93', 'ut.aliquam.iaculis@pedeetrisus.edu', '2021-05-27 09:32:15', '2020-08-23 14:07:11'),
(86, '16750710 9853', 'Russell', 'Bonner', '834-4617 Facilisis Avenue', '057 300 21 10 79', 'lectus.Nullam@pretiumneque.com', '2020-07-06 08:13:02', '2020-12-16 00:41:09'),
(87, '16301017 8113', 'Shoshana', 'Gay', '2339 Orci St.', '057 300 49 35 09', 'ut.lacus.Nulla@aliquetodio.net', '2020-02-20 15:32:49', '2020-08-18 17:19:38'),
(88, '16470104 2139', 'Ruby', 'Ball', '1612 Sed Rd.', '057 300 52 51 08', 'viverra.Donec.tempus@magna.co.uk', '2020-01-08 05:09:19', '2019-12-21 09:48:44'),
(89, '16590628 3865', 'Camilla', 'Stephenson', 'Ap #809-2970 Non Street', '057 300 48 96 45', 'urna.suscipit.nonummy@Quisqueornaretortor.co.uk', '2020-01-05 11:00:47', '2020-08-13 18:22:16'),
(90, '16110217 1533', 'Leslie', 'Hodge', 'P.O. Box 809, 411 Proin Rd.', '057 300 55 34 04', 'elit.sed.consequat@ProinvelitSed.org', '2021-03-05 07:31:56', '2020-10-05 09:41:30'),
(91, '16300705 2834', 'Tarik', 'Johnston', 'P.O. Box 365, 6837 Vulputate Avenue', '057 300 87 67 44', 'diam.Proin@Etiamvestibulum.org', '2019-09-23 13:25:26', '2021-04-08 18:21:58'),
(92, '16211228 9315', 'Hammett', 'Griffin', '5253 Urna Street', '057 300 37 09 04', 'ac@quamelementum.org', '2020-10-15 21:41:06', '2021-06-10 21:06:47'),
(93, '16770320 5794', 'Malik', 'Todd', '1165 Risus Av.', '057 300 20 05 19', 'adipiscing.non@feugiat.net', '2021-03-08 02:39:00', '2021-06-13 07:17:51'),
(94, '16960420 5147', 'Morgan', 'Kidd', 'Ap #211-6290 Scelerisque Rd.', '057 300 07 78 34', 'aliquet.Proin.velit@luctusetultrices.co.uk', '2021-02-17 14:06:56', '2020-07-05 23:59:18'),
(95, '16700622 0524', 'Xandra', 'Britt', '1271 Ut Rd.', '057 300 43 23 38', 'posuere.at.velit@laoreetlibero.net', '2020-11-11 17:48:32', '2020-04-13 11:48:20'),
(96, '16490507 4367', 'Nayda', 'Cash', 'Ap #413-3341 Vel St.', '057 300 61 92 59', 'eu@gravidanuncsed.net', '2019-12-20 13:34:00', '2021-05-20 08:56:29'),
(101, '1010', 'Sergio Vicente', 'Jimenez Martinez', 'Carrera 19 No 41 - 54', '3114176361', 'sergio_jimenezm@yahoo.com', '2020-08-28 07:27:03', '2020-08-28 07:27:03'),
(110, '16681120 2073', 'Sergio Vicente', 'Jimenez Martinez', 'Carrera 19 No 41 - 54', '3114176361', 'sergio_jimenezm@yahoo.com', '2020-08-28 08:16:12', '2020-08-28 08:16:12'),
(112, '45555', 'Pedro Manuel', 'Carrillo Lopez', 'Carrera 19 No 41 - 54', '3114176361', 'sergio_jimenezm@yahoo.com', '2020-09-04 06:43:25', '2020-09-04 06:43:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id` int(11) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descuento` double NOT NULL,
  `ventas_id` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id`, `precio`, `cantidad`, `descuento`, `ventas_id`, `productos_id`, `created`, `modified`) VALUES
(1, 150000, 1, 0, 1, 2, '2020-09-24 03:42:39', '2020-09-24 03:42:39'),
(2, 15000, 2, 0, 1, 9, '2020-09-24 03:42:39', '2020-09-24 03:42:39'),
(3, 150000, 1, 0, 2, 1, '2020-09-25 16:56:55', '2020-09-25 16:56:55'),
(4, 25000, 5, 0, 6, 1, '2020-10-17 12:07:00', '2020-10-17 12:07:00'),
(5, 130000, 2, 0, 6, 2, '2020-10-17 12:07:00', '2020-10-17 12:07:00'),
(6, 130000, 1, 0, 6, 3, '2020-10-17 12:07:00', '2020-10-17 12:07:00'),
(7, 130000, 1, 0, 7, 4, '2020-10-17 13:05:00', '2020-10-17 13:05:00'),
(8, 130000, 2, 0, 7, 3, '2020-10-17 13:05:00', '2020-10-17 13:05:00'),
(9, 25000, 5, 0, 8, 1, '2020-10-17 13:24:00', '2020-10-17 13:24:00'),
(10, 130000, 2, 0, 8, 3, '2020-10-17 13:24:00', '2020-10-17 13:24:00'),
(11, 130000, 1, 0, 8, 4, '2020-10-17 13:24:00', '2020-10-17 13:24:00'),
(12, 25000, 8, 0, 9, 1, '2020-10-17 13:54:00', '2020-10-17 13:54:00'),
(13, 130000, 4, 0, 9, 3, '2020-10-17 13:54:00', '2020-10-17 13:54:00'),
(14, 25000, 5, 0, 10, 1, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(15, 130000, 1, 0, 10, 2, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(16, 130000, 1, 0, 10, 3, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(17, 130000, 1, 0, 10, 4, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(18, 5000, 2, 0, 10, 7, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(19, 5000, 2, 0, 10, 8, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(20, 50000, 2, 0, 10, 9, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(21, 50000, 2, 0, 10, 10, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(22, 130000, 5, 0, 10, 2, '2020-10-28 01:20:27', '2020-10-28 01:20:27'),
(23, 25000, 1, 0, 16, 1, NULL, NULL),
(24, 130000, 2, 0, 16, 2, NULL, NULL),
(25, 130000, 1, 0, 16, 3, NULL, NULL),
(26, 2500, 1, 0.1, 18, 1, '2020-10-30 01:02:04', '2020-10-30 01:02:04'),
(27, 25000, 11, 0, 20, 1, '2020-10-30 22:49:00', '2020-10-30 22:49:00'),
(28, 25000, 1, 0, 21, 1, '2020-10-31 01:19:00', '2020-10-31 01:19:00'),
(29, 25000, 1, 0, 22, 1, '2020-10-31 01:21:00', '2020-10-31 01:21:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descuento` float NOT NULL DEFAULT 0,
  `iva` float NOT NULL,
  `categorias_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `precio`, `cantidad`, `descuento`, `iva`, `categorias_id`, `created`, `modified`) VALUES
(1, 'Teclado USB Genius', 25000, 8, 0, 0.19, 2, '2020-08-14 00:05:37', '2020-08-14 00:05:37'),
(2, 'Disco Duro Samsung', 130000, 50, 0.1, 0.19, 2, '2020-08-14 00:05:37', '2020-09-16 08:07:27'),
(3, 'Tablet Digitalizadora Wacon intuos 12 pulg', 380000, 4, 0, 0, 1, '2020-09-16 08:26:43', '2020-09-16 08:26:43'),
(4, 'Configuración  servidor dedicado, capacitación  y ', 130000, 5, 5, 0.19, 2, '2020-09-16 08:46:35', '2020-09-16 08:46:35'),
(7, 'Pago se', 5000, 5, 5, 5, 1, '2020-09-16 09:09:15', '2020-09-16 09:09:15'),
(8, 'Pago se', 5000, 5, 5, 5, 3, '2020-09-16 09:27:29', '2020-09-16 09:27:29'),
(9, 'eeee', 50000, 5, 5, 0.19, 2, '2020-09-16 02:30:40', '2020-09-16 02:30:40'),
(10, 'ffffff', 5000, 5, 5, 4, 2, '2020-09-16 09:38:09', '2020-09-16 09:38:09'),
(11, 'CELULAR MOTO G 9 PLUS 8RAM 128 SD', 780000, 5, 0.1, 5, 2, '2020-11-16 05:00:00', '2020-11-16 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(65) COLLATE utf8_spanish_ci DEFAULT NULL,
  `salario` double NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `salario`, `created`, `modified`) VALUES
(1, '1010', 'Sergio Vicente', 'Jimenez Martines', 'Carrera 19 No 41 - 54 apt 1', '3114176361', 'sergio_jimenezm@yahoo.com', 399999, '2020-09-16 07:23:36', '2020-09-16 09:33:26'),
(2, '2020', 'Manuel de jesus', 'Perez Molina', 'Carrera 19 No 41 - 54', '3114176361', 'sergio_jimenezm@yahoo.com', 200000, '2020-09-16 07:39:25', '2020-09-21 08:05:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `numero` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `subtotal` double NOT NULL,
  `iva` double NOT NULL,
  `descuento` double NOT NULL DEFAULT 0,
  `total` double NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `vendedores_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `numero`, `fecha`, `subtotal`, `iva`, `descuento`, `total`, `clientes_id`, `vendedores_id`, `created`, `modified`) VALUES
(1, '1', '2020-09-01', 200000, 19000, 0, 219000, 1, 1, '2020-09-24 03:42:39', '2020-09-24 03:42:39'),
(2, '2', '2020-09-15', 100000, 19000, 0, 119000, 112, 2, '2020-09-24 03:42:39', '2020-09-24 03:42:39'),
(6, '3', '2020-10-17', 1025000, 194750, 0, 1219750, 101, 1, '2020-10-17 12:07:00', '2020-10-17 12:07:00'),
(7, '4', '2020-10-13', 520000, 98800, 0, 618800, 101, 2, '2020-10-17 13:05:00', '2020-10-17 13:05:00'),
(8, '5', '2020-10-17', 1025000, 194750, 0, 1219750, 101, 1, '2020-10-17 13:24:00', '2020-10-17 13:24:00'),
(9, '6', '2020-10-10', 920000, 174800, 0, 1094800, 2, 2, '2020-10-17 13:54:00', '2020-10-17 13:54:00'),
(10, '7', '2020-10-22', 3710000, 704900, 0, 4414900, 101, 1, '2020-10-22 23:10:00', '2020-10-22 23:10:00'),
(15, '1', '2020-10-17', 13717400, 0.19, 0, 5500000, 1, 2, '2020-10-28 01:20:27', '2020-10-28 01:20:27'),
(16, '8', '2020-10-15', 415000, 78850, 0, 493850, 1, 2, NULL, NULL),
(17, '9', '2020-10-23', 30000, 0.19, 0.01, 900000, 2, 2, NULL, NULL),
(18, '10', '2020-10-16', 50000, 0.19, 0.01, 500000, 1, 2, NULL, NULL),
(19, '11', '2020-10-02', 2500, 250, 0.1, 2740, 1, 1, '2020-10-30 01:02:04', '2020-10-30 01:02:04'),
(20, '10', '2020-10-30', 275000, 52250, 0, 327250, 101, 2, '2020-10-30 22:49:00', '2020-10-30 22:49:00'),
(21, '10', '2020-10-30', 25000, 4750, 0, 29750, 101, 2, '2020-10-31 01:19:00', '2020-10-31 01:19:00'),
(22, '10', '2020-10-30', 25000, 4750, 0, 29750, 101, 2, '2020-10-31 01:21:00', '2020-10-31 01:21:00'),
(23, '', '2020-11-05', 260000, 0.19, 0, 260494, 2, 2, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento_UNIQUE` (`documento`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalles_ventas1` (`ventas_id`),
  ADD KEY `fk_detalles_productos1` (`productos_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_categorias` (`categorias_id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento_UNIQUE` (`documento`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ventas_clientes1` (`clientes_id`),
  ADD KEY `fk_ventas_vendedores1` (`vendedores_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `fk_detalles_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalles_ventas1` FOREIGN KEY (`ventas_id`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ventas_vendedores1` FOREIGN KEY (`vendedores_id`) REFERENCES `vendedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
