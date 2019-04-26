-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2019 a las 22:48:18
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `keiserdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID` int(11) NOT NULL,
  `Areas` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `DepartmentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`ID`, `Areas`, `DepartmentID`) VALUES
(1, 'IT', 1),
(2, 'Admission', 2),
(3, 'Record Office', 5),
(4, 'Financial Aid ', 5),
(5, 'SGA', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_students`
--

CREATE TABLE `area_students` (
  `AreaID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `Working Hours` float NOT NULL,
  `Date` date NOT NULL,
  `Time_In` time NOT NULL,
  `Time_Out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`ID`, `Name`) VALUES
(1, 'IT'),
(2, 'Residence Life'),
(3, 'Admissions'),
(4, 'Marketing'),
(5, 'Business office'),
(6, 'Student Life');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`ID`, `Name`) VALUES
(1, 'Initial'),
(2, 'Approved'),
(3, 'Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `StudentID` int(11) NOT NULL,
  `UserName` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`StudentID`, `UserName`, `Password`) VALUES
(6142568, 'alineramos', '6142568'),
(6208013, 'alejandraarteaga', '6208013'),
(6568470, 'joycenunez', '6568470'),
(6585778, 'marianacordova', '6585778'),
(6931671, 'daxgranados', '6931671'),
(6943822, 'omarrodriguez', '6943822'),
(7001092, 'hanieljarquin', '7001092'),
(7040883, 'moryoripaz', '7040883'),
(7116750, 'mariolopez', '7116750'),
(7352045, 'samirhernandez', '7352045'),
(7356683, 'alejandrolebron', '7356683'),
(7399091, 'michaelvargas', '7399091'),
(7720366, 'joseguadron', '7720366'),
(7735312, 'gersonrodriguez', '7735312'),
(8299653, 'wilfredohernandez', '8299653');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Fk_DepartmentID` (`DepartmentID`);

--
-- Indices de la tabla `area_students`
--
ALTER TABLE `area_students`
  ADD KEY `Fk_StatusID` (`StatusID`),
  ADD KEY `Fk_StudentID` (`StudentID`),
  ADD KEY `Fk_AreaID` (`AreaID`);

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
