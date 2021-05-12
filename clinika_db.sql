-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-05-2021 a las 06:34:32
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15569091_clinika`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `categoria`, `imagen`) VALUES
(1, 'Gel Purificador Avanzado', 89, 'Desinfectante de manos', 'product 1.jpg\r\n'),
(2, 'AERODiagnóstico Clínico', 321, 'Termómetro IR\r\n', 'product 2.jpg'),
(3, 'Espuma de Aloe Vera', 34, 'Desinfectante de manos', 'product 3.jpg'),
(4, 'Máscara anti-polvo', 35, 'Mascarillas médicas', 'product 4.jpg'),
(5, 'Máscara anti-polvo', 35, 'Mascarillas médicas\r\n', 'product 5.jpg'),
(6, 'BebéAloe VeraSafe', 25, 'Toallitas para manos', 'product 6.jpg'),
(7, 'Cetebe', 18, 'Termómetro IR', 'product 7.jpg'),
(8, 'Gel Obras Limpias', 23, 'Desinfectante de manos', 'product 8.jpg'),
(9, 'Cocon de Serenite', 18, 'Suministros médicos', 'product 9.jpg'),
(10, 'Vendaje cohesivo', 25, 'Médico', 'product 10.jpg'),
(11, 'Tos Sirup', 35, ' Suministros médicos', 'product 11.jpg'),
(12, 'Dr. Original Thermo', 80, 'Termómetro digital', 'product 12.jpg'),
(13, 'Eco pediátrico', 53, 'Mascarillas médicas', 'product 13.jpg'),
(14, 'Fahrenheit Digital', 76, 'Termómetro digital', 'product 14.jpg'),
(15, 'Termómetro de frente', 200, 'Termómetro IR', 'product 15.jpg'),
(16, 'Lote médico fresco', 60, 'Toallitas para manos', 'product 16.jpg'),
(17, 'Huntleigh SR3', 25, 'Mascarillas médicas', 'product 17.jpg'),
(18, 'Desinfección instantánea', 80, 'Toallitas para manos', 'product 18.jpg'),
(19, 'iProven Medical', 60, 'Termómetro digital', 'product 19.jpg'),
(20, 'Pistola de temperatura IR', 156, 'Termómetro IR', 'product 20.jpg'),
(21, 'JBT1 - Sin contacto', 250, 'Termómetro IR', 'product 21.jpg'),
(22, 'Diagnóstico K100', 46, 'Mascarillas médicas', 'product 22.jpg'),
(23, 'Littmann Cardio', 27, 'Mascarillas médicas', 'product 23.jpg'),
(24, 'Infrarrojos médicos', 148, 'Termómetro IR', 'product 24.jpg'),
(25, 'Mirtillo', 20, 'Suministros médicos', 'product 25.jpg'),
(26, 'Guantes de nitrilo para examen', 20, 'Médico', 'product 25.jpg'),
(27, 'Estetoscopio de enfermería', 67, 'Médico', 'product 27.jpg'),
(28, 'Omron básico', 40, 'Mascarillas médicas', 'product 28.jpg'),
(29, 'Fruta de okra', 35, 'Suministros médicos', 'product 29.jpg'),
(30, 'Presedon Cardio', 20, 'Suministros médicos', 'product 30.jpg'),
(31, 'Mono de protección', 25, 'Médico', 'product 31.jpg'),
(32, 'Curación rápida', 160, 'Termómetro digital', 'product 32.jpg'),
(33, 'Relitape Zinc', 30, 'Mascarillas médicas', 'product 33.jpg'),
(34, 'Desinfectante 75 alcohol', 34, 'Toallitas para manos', 'product 34.jpg'),
(35, 'Sinulan Forte', 45, 'Desinfectante de manos', 'product 35.jpg'),
(36, 'Souffle de Liberte', 45, 'Suministros médicos', 'product 36.jpg'),
(37, 'Toallitas de limpieza de superficies', 54, 'Toallitas para manos', 'product 37.jpg'),
(38, 'Pozo del sistema', 65, 'Suministros médicos', 'product 38.jpg'),
(39, 'Toallitas para manos de viaje', 21, 'Toallitas para manos', 'product 39.jpg'),
(40, 'Termómetro digital', 45, 'Médico', 'product 40.jpg'),
(41, 'Desinfectante con vitamina E', 89, 'Desinfectante de manos', 'product 41.jpg'),
(42, 'Protección de higiene contra virus', 67, 'Desinfectante de manos', 'product 42.jpg'),
(43, 'Termo digital impermeable', 43, 'Termómetro digital', 'product 43.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
