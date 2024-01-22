-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-01-2024 a las 17:54:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anothersaes_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `boleta` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`boleta`, `id_persona`, `estatus`) VALUES
(348920, 10, 'activo'),
(20180001, 16, 'activo'),
(20180002, 16, 'activo'),
(20180003, 16, 'activo'),
(20180004, 16, 'activo'),
(20180005, 16, 'activo'),
(202079248, 21, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_grupo`
--

CREATE TABLE `alumno_grupo` (
  `id_agrupo` int(11) NOT NULL,
  `boleta` int(11) DEFAULT NULL,
  `id_grupo` varchar(100) DEFAULT NULL,
  `url_certificado` varchar(250) DEFAULT 'Aun no reunes los requisitos para solicitar certificado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL,
  `id_grupo` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_cierre` date DEFAULT NULL,
  `hora_cierre` time DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `id_grupo`, `titulo`, `descripcion`, `fecha_cierre`, `hora_cierre`, `tipo`, `url`) VALUES
(1, '2HD4', 'Título de la Asignación', 'Descripción de la Asignación', '2024-01-30', '18:00:00', 'video', 'No aplica'),
(15, '2HD4', 'xseuwhjcsd', 'dqwQW', '2024-02-02', '07:19:00', 'pdf', 'wq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_alumno`
--

CREATE TABLE `asignacion_alumno` (
  `id_asignacion_alumno` int(11) NOT NULL,
  `id_asignacion` int(11) DEFAULT NULL,
  `boleta` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT 'no has hecho esta asignacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre`, `precio`) VALUES
(1, 'Matemáticas', 100),
(2, 'Historia', 80),
(3, 'Inglés', 120),
(4, 'Programación', 150),
(5, 'Ciencias', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pago`
--

CREATE TABLE `detalle_pago` (
  `id_pago` int(11) NOT NULL,
  `boleta` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `comprobante_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `num_empleado` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `especialidad` varchar(100) DEFAULT NULL,
  `grado_academico` varchar(100) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`num_empleado`, `id_persona`, `cedula`, `especialidad`, `grado_academico`, `estatus`) VALUES
(0, 29, 'dwesxwe', 'wedcs', 'ewds', 'activo'),
(101, 11, 'ABC123', 'Matemáticas', 'Maestro en ciencias', 'Activo'),
(102, 12, 'decswe', 'koñldewoñl,', 'kñl,oñl,lñ', 'Activo'),
(103, 13, 'DEF789', 'Inglés', 'Licenciatura', 'Activo'),
(104, 14, 'GHI012', 'Programación', 'Doctorado', 'Activo'),
(105, 15, 'JKL345', 'Ciencias', 'Licenciatura', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` varchar(100) NOT NULL,
  `num_empleado` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `cupoMax` int(11) NOT NULL,
  `cupoDisponible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `num_empleado`, `id_curso`, `cupoMax`, `cupoDisponible`) VALUES
('2H7D4', 103, 4, 40, 40),
('2HD4', 101, 3, 40, 40),
('G1', 102, 1, 30, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `id_grupo` varchar(100) DEFAULT NULL,
  `dia_semana` varchar(20) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `id_grupo`, `dia_semana`, `hora_inicio`, `hora_fin`) VALUES
(1, '2HD4', 'Lunes', '08:00:00', '10:00:00'),
(2, '2HD4', 'Miércoles', '10:30:00', '12:30:00'),
(3, '2HD4', 'Viernes', '14:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `aPaterno` varchar(100) DEFAULT NULL,
  `aMaterno` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `fecha_na` date DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `rol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `aPaterno`, `aMaterno`, `nombre`, `genero`, `fecha_na`, `contrasenia`, `rol`) VALUES
(10, 'keflmdcnkj', 'jkdws', 'jkjdwjkls', 'O', '2000-01-31', 'okldspo', 'alumno'),
(11, 'Gómez', 'Pérezzzz', 'Juan Manuel', 'M', '1980-01-15', 'contraseña123', 'docente'),
(12, 'deosl', 'kpoe,frdcop', 'okdk,lskol', 'M', '2022-02-24', '2wsxioajkn34r', 'administrador'),
(13, 'Martínez', 'García', 'Carlos', 'M', '1975-09-10', 'segura789', 'docente'),
(14, 'Hernández', 'Vargas', 'Laura', 'M', '1982-11-25', 'clave123', 'coordinador'),
(15, 'Sánchez', 'Ramírez', 'Pedro', 'M', '1978-07-08', 'secreto456', 'docente'),
(16, 'Gomez', 'Perez', 'Carlos', 'M', '1995-03-15', 'clave123', 'alumno'),
(17, 'Lopez', 'Martinez', 'Ana', 'F', '1998-07-22', 'pass456', 'alumno'),
(18, 'Rodriguez', 'Fernandez', 'Javier', 'M', '1997-11-08', 'secret789', 'alumno'),
(19, 'Hernandez', 'Gutierrez', 'Sofia', 'F', '1996-05-30', 'password123', 'alumno'),
(20, 'Ramirez', 'Gonzalez', 'Diego', 'M', '1999-02-12', 'key789', 'alumno'),
(21, 'Juan', 'Perez', 'Calabaza', 'M', '1999-11-17', '1234567', 'alumno'),
(22, 'Fuentes', 'López', 'Eva Melisa', 'F', '2009-06-16', '1234', 'Docente'),
(23, 'Fuentes', 'López', 'Eva Melisa', 'F', '2009-06-16', '1234', 'Docente'),
(24, 'Fuentes', 'López', 'Eva Melisa', 'F', '2009-06-16', '1234', 'Docente'),
(25, 'Fuentes', 'López', 'Eva Melisa', 'F', '2009-06-16', '1234', 'Docente'),
(26, 'Fuentes', 'López', 'Eva Melisa', 'M', '2024-01-26', 'deswsa', 'Docente'),
(27, 'Fuentes', 'López', 'Eva Melisa', 'M', '2024-01-26', 'deswsa', 'Docente'),
(28, 'Fuentes', 'López', 'Eva Melisa', 'M', '2024-01-26', 'deswsa', 'Docente'),
(29, 'Fuentes', 'López', 'Eva Melisa', 'M', '2024-01-26', 'deswsa', 'Docente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`boleta`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  ADD PRIMARY KEY (`id_agrupo`),
  ADD KEY `boleta` (`boleta`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `asignacion_alumno`
--
ALTER TABLE `asignacion_alumno`
  ADD PRIMARY KEY (`id_asignacion_alumno`),
  ADD KEY `boleta` (`boleta`),
  ADD KEY `id_asignacion` (`id_asignacion`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `boleta` (`boleta`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`num_empleado`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `num_empleado` (`num_empleado`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  MODIFY `id_agrupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `asignacion_alumno`
--
ALTER TABLE `asignacion_alumno`
  MODIFY `id_asignacion_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  ADD CONSTRAINT `alumno_grupo_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `alumno` (`boleta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_grupo_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_alumno`
--
ALTER TABLE `asignacion_alumno`
  ADD CONSTRAINT `asignacion_alumno_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `alumno` (`boleta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_alumno_ibfk_2` FOREIGN KEY (`id_asignacion`) REFERENCES `asignacion` (`id_asignacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  ADD CONSTRAINT `detalle_pago_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `alumno` (`boleta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_pago_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`num_empleado`) REFERENCES `docente` (`num_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
