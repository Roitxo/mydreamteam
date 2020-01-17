-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2020 a las 15:36:12
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydreamteam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `Id` int(5) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `Media` int(3) NOT NULL,
  `Imagen` varchar(50) COLLATE utf8_bin NOT NULL,
  `Pos` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`Id`, `Nombre`, `Media`, `Imagen`, `Pos`) VALUES
(2, 'Sergio Agüero', 89, 'img/delanteros/Aguero.jpg', 'delantero'),
(3, 'Marco Asensio', 83, 'img/delanteros/Asensio.jpg', 'delantero'),
(4, 'André Ayew', 76, 'img/delanteros/Ayew.jpg', 'delantero'),
(5, 'Karim Benzema', 87, 'img/delanteros/Benzema.jpg', 'delantero'),
(6, 'Bernardo Silva', 87, 'img/delanteros/BernardoSilva.jpg', 'delantero'),
(7, 'Brahim Díaz', 73, 'img/delanteros/Brahim.jpg', 'delantero'),
(8, 'Felipe Caicedo', 78, 'img/delanteros/Caicedo.jpg', 'delantero'),
(9, 'Cristiano Ronaldo', 93, 'img/delanteros/Cristiano.jpg', 'delantero'),
(10, 'Johan Cruyff', 94, 'img/delanteros/Cruyff.jpg', 'delantero'),
(11, 'Kasper Dolberg', 76, 'img/delanteros/Dolberg.jpg', 'delantero'),
(12, 'Radamel Falcao', 83, 'img/delanteros/Falcao.jpg', 'delantero'),
(13, 'Eden Hazard', 91, 'img/delanteros/Hazard.jpg', 'delantero'),
(14, 'Ciro Immobile', 86, 'img/delanteros/Immobile.jpg', 'delantero'),
(15, 'Jese Rodriguez', 75, 'img/delanteros/Jese.jpg', 'delantero'),
(16, 'Joselu', 74, 'img/delanteros/Joselu.jpg', 'delantero'),
(17, 'Stevan Jovetic', 78, 'img/delanteros/Jovetic.jpg', 'delantero'),
(18, 'Lautaro Martínez', 81, 'img/delanteros/Lautaro.jpg', 'delantero'),
(19, 'Loren Moron', 80, 'img/delanteros/Loren.jpg', 'delantero'),
(20, 'Lionel Messi', 94, 'img/delanteros/Messi.jpg', 'delantero'),
(21, 'Moise Kean', 76, 'img/delanteros/Kean.jpg', 'delantero'),
(22, 'Neymar JR', 92, 'img/delanteros/Neymar.jpg', 'delantero'),
(23, 'Martin Odegaard', 78, 'img/delanteros/Odergaard.jpg', 'delantero'),
(24, 'Marcus Rashford', 83, 'img/delanteros/Rashford.jpg', 'delantero'),
(25, 'Raúl González', 92, 'img/delanteros/Raul.jpg', 'delantero'),
(26, 'Ronaldinho', 94, 'img/delanteros/Ronaldinho.jpg', 'delantero'),
(27, 'Ronaldo Nazario', 96, 'img/delanteros/Ronaldo.jpg', 'delantero'),
(28, 'Leroy Sané', 86, 'img/delanteros/Sane.jpg', 'delantero'),
(29, 'Luis Suarez', 89, 'img/delanteros/Suarez.jpg', 'delantero'),
(30, 'Sam Vokes', 73, 'img/delanteros/Vokes.jpg', 'delantero'),
(55, 'Sergio Busquets', 89, 'img/centrocampistas/Busquets.jpg', 'centrocampista'),
(56, 'Dani Ceballos', 81, 'img/centrocampistas/Ceballos.jpg', 'centrocampista'),
(57, 'Kevin De Bruyne', 91, 'img/centrocampistas/DeBruyne.jpg', 'centrocampista'),
(58, 'Frenkie De Jong', 85, 'img/centrocampistas/DeJong.jpg', 'centrocampista'),
(59, 'Julian Draxler', 83, 'img/centrocampistas/Draxler.jpg', 'centrocampista'),
(60, 'Mohamed Elneny', 77, 'img/centrocampistas/Elneny.jpg', 'centrocampista'),
(61, 'Ricardo Kaká', 91, 'img/centrocampistas/Kaka.jpg', 'centrocampista'),
(62, 'N\'Golo Kanté', 89, 'img/centrocampistas/Kante.jpg', 'centrocampista'),
(63, 'Toni Kroos', 89, 'img/centrocampistas/Kroos.jpg', 'centrocampista'),
(64, 'Frank Lampard', 90, 'img/centrocampistas/Lampard.jpg', 'centrocampista'),
(65, 'Micheal Laudrup', 91, 'img/centrocampistas/Laudrup.jpg', 'centrocampista'),
(66, 'Diego Maradona', 97, 'img/centrocampistas/Maradona.jpg', 'centrocampista'),
(67, 'Juan Mata', 82, 'img/centrocampistas/Mata.jpg', 'centrocampista'),
(68, 'Scott McTominay', 77, 'img/centrocampistas/Mctominay.jpg', 'centrocampista'),
(69, 'Luka Modric', 90, 'img/centrocampistas/Modric.jpg', 'centrocampista'),
(70, 'Jesus Navas', 82, 'img/centrocampistas/Navas.jpg', 'centrocampista'),
(71, 'Nolito', 78, 'img/centrocampistas/Nolito.jpg', 'centrocampista'),
(72, 'Tomás Pina', 77, 'img/centrocampistas/Pina.jpg', 'centrocampista'),
(73, 'Andrea Pirlo', 92, 'img/centrocampistas/Pirlo.jpg', 'centrocampista'),
(74, 'Ivan Rakitic', 86, 'img/centrocampistas/Rakitic.jpg', 'centrocampista'),
(75, 'Saul', 85, 'img/centrocampistas/Saul.jpg', 'centrocampista'),
(76, 'Clarence Seedorf', 91, 'img/centrocampistas/Seedorf.jpg', 'centrocampista'),
(77, 'Patrick Vieira', 91, 'img/centrocampistas/Vieira.jpg', 'centrocampista'),
(78, 'Zinedine Zidane', 96, 'img/centrocampistas/Zidane.jpg', 'centrocampista'),
(79, 'Marcos Alonso', 81, 'img/defensas/Alonso.jpg', 'defensa'),
(80, 'Eric Bailly', 80, 'img/defensas/Bailly.jpg', 'defensa'),
(81, 'Franco Baresi', 93, 'img/defensas/Baresi.jpg', 'defensa'),
(82, 'Fabio Cannavaro', 92, 'img/defensas/Cannavaro.jpg', 'defensa'),
(83, 'Giorgio Chiellini', 89, 'img/defensas/Chiellini.jpg', 'defensa'),
(84, 'Matthijs de Ligt', 85, 'img/defensas/DeLigt.jpg', 'defensa'),
(85, 'Dakonam Djené', 83, 'img/defensas/Djene.jpg', 'defensa'),
(86, 'Junior Firpo', 79, 'img/defensas/Firpo.jpg', 'defensa'),
(87, 'Mario Gaspar', 79, 'img/defensas/Gaspar.jpg', 'defensa'),
(88, 'Gusito', 99, 'img/defensas/Gusito.jpeg', 'defensa'),
(89, 'Vincent Kompany', 83, 'img/defensas/Kompany.jpg', 'defensa'),
(90, 'Paolo Maldini', 94, 'img/defensas/Maldini.jpg', 'defensa'),
(91, 'Marcelo', 85, 'img/defensas/Marcelo.jpg', 'defensa'),
(92, 'Ferland Mendy', 80, 'img/defensas/Mendy.jpg', 'defensa'),
(93, 'Nacho Fernández', 82, 'img/defensas/Nacho.jpg', 'defensa'),
(94, 'Gerard Pique', 88, 'img/defensas/Pique.jpg', 'defensa'),
(95, 'Carles Puyol', 92, 'img/defensas/Puyol.jpg', 'defensa'),
(96, 'Sergio Ramos', 89, 'img/defensas/Ramos.jpg', 'defensa'),
(97, 'Sergio Reguilón', 77, 'img/defensas/Reguilon.jpg', 'defensa'),
(98, 'Roberto Carlos', 91, 'img/defensas/RobertoCarlos.jpg', 'defensa'),
(99, 'Marcel Schmelzer', 76, 'img/defensas/Schmelzer.jpg', 'defensa'),
(100, 'Nelson Semedo', 82, 'img/defensas/Semedo.jpg', 'defensa'),
(101, 'Thiago Silva', 87, 'img/defensas/Silva.jpg', 'defensa'),
(102, 'Dimitrios Siovas', 76, 'img/defensas/Siovas.jpg', 'defensa'),
(103, 'Kieran Trippier', 80, 'img/defensas/Trippier.jpg', 'defensa'),
(104, 'Virgil van Dijk', 90, 'img/defensas/VanDijk.jpg', 'defensa'),
(105, 'Raphaël Varane', 85, 'img/defensas/Varane.jpg', 'defensa'),
(106, 'Antonio Adán', 81, 'img/porteros/Adan.jpg', 'portero'),
(107, 'Igor Akinfeev', 80, 'img/porteros/Akinfeev.jpg', 'portero'),
(108, 'Alisson Becker', 89, 'img/porteros/Alisson.jpg', 'portero'),
(109, 'Alphonse Areola', 82, 'img/porteros/Areola.jpg', 'portero'),
(110, 'Diego Benaglio', 74, 'img/porteros/Benaglio.jpg', 'portero'),
(111, 'Claudio Bravo', 77, 'img/porteros/Bravo.jpg', 'portero'),
(112, 'Cifuentes', 73, 'img/porteros/Cifuentes.jpg', 'portero'),
(113, 'Dani Giménez', 74, 'img/porteros/DaniGimenez.jpg', 'portero'),
(114, 'David De Gea', 89, 'img/porteros/DeGea.jpg', 'portero'),
(115, 'Gianluigi Donnarumma', 85, 'img/porteros/Donnarumma.jpg', 'portero'),
(116, 'Fabricio', 76, 'img/porteros/Fabricio.jpg', 'portero'),
(117, 'Oliver Kahn', 94, 'img/porteros/Kahn.jpg', 'portero'),
(118, 'Jens Lehmann', 90, 'img/porteros/Lehmann.jpg', 'portero'),
(119, 'Lopes', 85, 'img/porteros/Lopes.jpg', 'portero'),
(120, 'Manuel Neuer', 88, 'img/porteros/Neuer.jpg', 'portero'),
(121, 'Jan Oblak', 91, 'img/porteros/Oblak.jpg', 'portero'),
(122, 'Peter Schmeichel', 92, 'img/porteros/PeterSchmeichel.jpg', 'portero'),
(123, 'Marc-André ter Stegen', 90, 'img/porteros/TerStegen.jpg', 'portero'),
(124, 'Edwin van der Sar', 91, 'img/porteros/VanDerSar.jpg', 'portero'),
(125, 'Lev Yashin', 94, 'img/porteros/Yashin.jpg', 'portero'),
(126, 'Pelé', 98, 'img/delanteros/Pele.jpg', 'delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillas`
--

CREATE TABLE `plantillas` (
  `Id` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  `formacion` varchar(20) COLLATE utf8_bin NOT NULL,
  `equipo` varchar(20000) COLLATE utf8_bin NOT NULL,
  `valoracion` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `plantillas`
--

INSERT INTO `plantillas` (`Id`, `idUsuario`, `formacion`, `equipo`, `valoracion`, `fecha`) VALUES
(5, 1, '433', '{\"delanteros\":[{\"nombre\":\"Felipe Caicedo\",\"media\":78,\"Imagen\":\"img/delanteros/Caicedo.jpg\"},{\"nombre\":\"Ronaldinho\",\"media\":94,\"Imagen\":\"img/delanteros/Ronaldinho.jpg\"},{\"nombre\":\"Sam Vokes\",\"media\":73,\"Imagen\":\"img/delanteros/Vokes.jpg\"}],\"centrocampistas\":[{\"nombre\":\"Dani Ceballos\",\"media\":81,\"Imagen\":\"img/centrocampistas/Ceballos.jpg\"},{\"nombre\":\"Kevin De Bruyne\",\"media\":91,\"Imagen\":\"img/centrocampistas/DeBruyne.jpg\"},{\"nombre\":\"Sergio Busquets\",\"media\":89,\"Imagen\":\"img/centrocampistas/Busquets.jpg\"}],\"defensas\":[{\"nombre\":\"Franco Baresi\",\"media\":93,\"Imagen\":\"img/defensas/Baresi.jpg\"},{\"nombre\":\"Dakonam Djené\",\"media\":83,\"Imagen\":\"img/defensas/Djene.jpg\"},{\"nombre\":\"Nelson Semedo\",\"media\":82,\"Imagen\":\"img/defensas/Semedo.jpg\"},{\"nombre\":\"Nacho Fernández\",\"media\":82,\"Imagen\":\"img/defensas/Nacho.jpg\"}],\"porteros\":null,\"form\":\"433\",\"portero\":{\"nombre\":\"Alisson Becker\",\"media\":89,\"Imagen\":\"img/porteros/Alisson.jpg\"}}', 85, '2020-01-16'),
(6, 1, '433', '{\"delanteros\":[{\"nombre\":\"Leroy Sané\",\"media\":86,\"Imagen\":\"img/delanteros/Sane.jpg\"},{\"nombre\":\"Bernardo Silva\",\"media\":87,\"Imagen\":\"img/delanteros/BernardoSilva.jpg\"},{\"nombre\":\"Neymar JR\",\"media\":92,\"Imagen\":\"img/delanteros/Neymar.jpg\"}],\"centrocampistas\":[{\"nombre\":\"Frank Lampard\",\"media\":90,\"Imagen\":\"img/centrocampistas/Lampard.jpg\"},{\"nombre\":\"Frenkie De Jong\",\"media\":85,\"Imagen\":\"img/centrocampistas/DeJong.jpg\"},{\"nombre\":\"Mohamed Elneny\",\"media\":77,\"Imagen\":\"img/centrocampistas/Elneny.jpg\"}],\"defensas\":[{\"nombre\":\"Marcel Schmelzer\",\"media\":76,\"Imagen\":\"img/defensas/Schmelzer.jpg\"},{\"nombre\":\"Gusito\",\"media\":99,\"Imagen\":\"img/defensas/Gusito.jpeg\"},{\"nombre\":\"Franco Baresi\",\"media\":93,\"Imagen\":\"img/defensas/Baresi.jpg\"},{\"nombre\":\"Giorgio Chiellini\",\"media\":89,\"Imagen\":\"img/defensas/Chiellini.jpg\"}],\"porteros\":null,\"form\":\"433\",\"portero\":{\"nombre\":\"Antonio Adán\",\"media\":81,\"Imagen\":\"img/porteros/Adan.jpg\"}}', 86.82, '2020-01-16'),
(7, 2, '433', '{\"delanteros\":[{\"nombre\":\"Eden Hazard\",\"media\":91,\"Imagen\":\"img/delanteros/Hazard.jpg\"},{\"nombre\":\"Lionel Messi\",\"media\":94,\"Imagen\":\"img/delanteros/Messi.jpg\"},{\"nombre\":\"Marcus Rashford\",\"media\":83,\"Imagen\":\"img/delanteros/Rashford.jpg\"}],\"centrocampistas\":[{\"nombre\":\"Patrick Vieira\",\"media\":91,\"Imagen\":\"img/centrocampistas/Vieira.jpg\"},{\"nombre\":\"Clarence Seedorf\",\"media\":91,\"Imagen\":\"img/centrocampistas/Seedorf.jpg\"},{\"nombre\":\"Ricardo Kaká\",\"media\":91,\"Imagen\":\"img/centrocampistas/Kaka.jpg\"}],\"defensas\":[{\"nombre\":\"Paolo Maldini\",\"media\":94,\"Imagen\":\"img/defensas/Maldini.jpg\"},{\"nombre\":\"Franco Baresi\",\"media\":93,\"Imagen\":\"img/defensas/Baresi.jpg\"},{\"nombre\":\"Gusito\",\"media\":99,\"Imagen\":\"img/defensas/Gusito.jpeg\"},{\"nombre\":\"Virgil van Dijk\",\"media\":90,\"Imagen\":\"img/defensas/VanDijk.jpg\"}],\"porteros\":null,\"form\":\"433\",\"portero\":{\"nombre\":\"Edwin van der Sar\",\"media\":91,\"Imagen\":\"img/porteros/VanDerSar.jpg\"}}', 91.64, '2020-01-16'),
(8, 2, '433', '{\"delanteros\":[{\"nombre\":\"Karim Benzema\",\"media\":87,\"Imagen\":\"img/delanteros/Benzema.jpg\"},{\"nombre\":\"Cristiano Ronaldo\",\"media\":93,\"Imagen\":\"img/delanteros/Cristiano.jpg\"},{\"nombre\":\"Neymar JR\",\"media\":92,\"Imagen\":\"img/delanteros/Neymar.jpg\"}],\"centrocampistas\":[{\"nombre\":\"Zinedine Zidane\",\"media\":96,\"Imagen\":\"img/centrocampistas/Zidane.jpg\"},{\"nombre\":\"Frank Lampard\",\"media\":90,\"Imagen\":\"img/centrocampistas/Lampard.jpg\"},{\"nombre\":\"Andrea Pirlo\",\"media\":92,\"Imagen\":\"img/centrocampistas/Pirlo.jpg\"}],\"defensas\":[{\"nombre\":\"Roberto Carlos\",\"media\":91,\"Imagen\":\"img/defensas/RobertoCarlos.jpg\"},{\"nombre\":\"Carles Puyol\",\"media\":92,\"Imagen\":\"img/defensas/Puyol.jpg\"},{\"nombre\":\"Franco Baresi\",\"media\":93,\"Imagen\":\"img/defensas/Baresi.jpg\"},{\"nombre\":\"Fabio Cannavaro\",\"media\":92,\"Imagen\":\"img/defensas/Cannavaro.jpg\"}],\"porteros\":null,\"form\":\"433\",\"portero\":{\"nombre\":\"David De Gea\",\"media\":89,\"Imagen\":\"img/porteros/DeGea.jpg\"}}', 91.55, '2020-01-16'),
(9, 1, '433', '{\"delanteros\":[{\"nombre\":\"Cristiano Ronaldo\",\"media\":93,\"Imagen\":\"img/delanteros/Cristiano.jpg\"},{\"nombre\":\"Lionel Messi\",\"media\":94,\"Imagen\":\"img/delanteros/Messi.jpg\"},{\"nombre\":\"Ciro Immobile\",\"media\":86,\"Imagen\":\"img/delanteros/Immobile.jpg\"}],\"centrocampistas\":[{\"nombre\":\"Clarence Seedorf\",\"media\":91,\"Imagen\":\"img/centrocampistas/Seedorf.jpg\"},{\"nombre\":\"Frenkie De Jong\",\"media\":85,\"Imagen\":\"img/centrocampistas/DeJong.jpg\"},{\"nombre\":\"Diego Maradona\",\"media\":97,\"Imagen\":\"img/centrocampistas/Maradona.jpg\"}],\"defensas\":[{\"nombre\":\"Fabio Cannavaro\",\"media\":92,\"Imagen\":\"img/defensas/Cannavaro.jpg\"},{\"nombre\":\"Carles Puyol\",\"media\":92,\"Imagen\":\"img/defensas/Puyol.jpg\"},{\"nombre\":\"Gusito\",\"media\":99,\"Imagen\":\"img/defensas/Gusito.jpeg\"},{\"nombre\":\"Virgil van Dijk\",\"media\":90,\"Imagen\":\"img/defensas/VanDijk.jpg\"}],\"porteros\":null,\"form\":\"433\",\"portero\":{\"nombre\":\"Peter Schmeichel\",\"media\":92,\"Imagen\":\"img/porteros/PeterSchmeichel.jpg\"}}', 91.91, '2020-01-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(5) NOT NULL,
  `Pass` blob NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Pass`, `Nombre`, `fecha`) VALUES
(1, 0x41a6cc00028372a0ca40b22bf33cee5f, 'juanes', '2020-01-15'),
(2, 0x41a6cc00028372a0ca40b22bf33cee5f, 'ruben', '2020-01-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
