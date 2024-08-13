-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2024 a las 16:37:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_inscripciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descripcion`, `texto`, `fecha`, `foto`) VALUES
(4, 'ENCUENTRO DEPORTIVO DEL BMM', 'ENCUENTRO DEPORTIVO JUVENIL DE NUESTRA CASA DE ESTUDIOS', '<p>hhhhhhhhhhhhhhhhhhhhhhhh mmmmmmmmmmmmmmmmmmmmmmmmm</p>', '2022-12-23 16:47:28', '845995.jpg'),
(14, 'CONCURSO DE COMIDAS TÍPICAS', 'ESTE CONCURSO SE HARÁ EN NUESTRAS INSTALACIONES DE BMM', '<p>MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</p>', '2022-12-31 06:21:35', '478823.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE `inscritos` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` char(2) NOT NULL,
  `correo` varchar(130) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `turno` varchar(10) DEFAULT NULL,
  `fechahora` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `texto`, `fecha`, `foto`) VALUES
(15, 'Examen de rezagados para todos', 'IMPRESORA MULTIFUNCIONAL  DE TINTA CONTINUA EPSON L5190', '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhj nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</p>', '2022-12-23 12:34:27', '994197.jpg'),
(18, 'Examen de admisión bmm', 'IMPRESORA MULTIFUNCIONAL  DE TINTA CONTINUA EPSON L5190', '<p>hhhhhhhhhhhhhhh mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>', '2022-12-23 13:46:10', '568799.jpg'),
(23, 'DOCENTES DE NUESTRA CASA DE ESTUDIOS PROMUEVEN LA EDUCACIÓN', 'PROCESOS DE REGISTRO DEL ESTUDIANTE DE LAS DIFERENTES CARRERAS', '<p>DOCENTES DE NUESTRA CASA DE ESTUDIOS PROMUEVEN LA EDUCACIÓN SUPERIOR EN NUEVA CAJAMARCA</p>\r\n', '2022-12-23 17:07:58', '435441.jpg'),
(25, 'Celebración de graduación', 'CELEBRACIÓN DE GRADUACIÓN DE LAS DIFERENTES CARRERAS BMM', '<p>MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</p>', '2022-12-31 01:22:30', '152487.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `contrasena` text NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `perfil` text NOT NULL,
  `foto` text NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `ultimo_login` datetime DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contrasena`, `dni`, `email`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`, `id_empresa`) VALUES
(24, 'GINO VASQUEZ IBERICO', 'webgvi', '$2a$07$usesomesillystringforegLJjRFZYI5f58oVgBvMq4Qo2YLUc97S', '41624947', 'soporte@apifacturacion.com', 'Administrador', 'vistas/img/usuarios/webgvi/602.jpg', 1, '2023-12-01 18:30:03', '2023-12-01 23:30:03', NULL),
(25, 'EDWAR VASQUEZ IBERICO', 'demo', '$2a$07$usesomesillystringforeu2qgiHIguHwnea3N8ulpb2nPKxB5zmS', '42116570', 'soporte@apifacturacion.com', 'Especial', '', 1, '2024-05-02 14:35:39', '2024-05-02 19:35:39', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
