-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2019 a las 03:29:54
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_simulacro_examen3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_registro` int(11) NOT NULL,
  `facultad` varchar(40) NOT NULL,
  `escuela` varchar(40) NOT NULL,
  `universidad` varchar(150) NOT NULL,
  `codigo` char(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apepaterno` varchar(40) NOT NULL,
  `apematerno` varchar(40) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_registro`, `facultad`, `escuela`, `universidad`, `codigo`, `nombres`, `apepaterno`, `apematerno`, `imagen`) VALUES
(1, '', '', '', '', '', '', '', 'img_35b4542aceab8ae30e7148299765fc3d.jpg'),
(2, '', '', '', '', '', '', '', 'img_e28c0d39c64018de5ae3236e3a8d05a3.jpg'),
(3, 'sdfg', 'fghj', 'ghjk', '171cv70528', '', '', '', 'img_f52f75e2c179c58c142776a0767e7161.jpg'),
(4, '', 'asdvfb', 'sdfgh', '123cv67890', 'Paola', 'Cieza', 'Cieza', 'img_be46c8ef52f2d5e58ee06f24d6b2db3a.jpg'),
(5, 'vbhnjmk', 'ghjkl', 'ghjko', '1234512345', 'fghjk', 'gbhnjk', 'lghjkl', 'img_72bd3365b0181e71a0d2628721cb994a.jpg'),
(6, 'fgbhnjkl', 'ghjklÃ±', 'hbnjklÃ±', '1212121212', 'Paola', 'Cieza', 'Cieza', 'img_bdeea648f8613ecdbf9e4c102348bb22.jpg'),
(7, 'fvgbhnjkl', 'ghjklÃ±', 'ghjklÃ±', '1313131313', 'Paola', 'Cieza', 'Cieza', 'img_c0a63a9d995e2228d00995fa920013a0.jpg'),
(8, 'fvgbhnjk', 'vgbhnjmk', ',gbhnjmkl,', '1314131413', 'Paola', 'Cieza', 'Cieza', 'img_f811c36613fec646bf7e833527a4fab2.jpg'),
(9, 'fghjk', 'fgyhj', 'yhujk', '1717171717', 'ghjkk', 'hjk', 'hjk', 'img_404ad518a88a5f022d76e7c16fa80dca.jpg'),
(10, 'fghjk', 'fghjk', 'klÃ±{', '1919191910', 'Paola', 'Cieza', 'Cieza', 'img_e5386b7ce7efc01559efc602fde44764.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
