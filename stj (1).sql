-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2018 a las 21:19:33
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_silabos`
--

CREATE TABLE `actividad_silabos` (
  `id` int(10) UNSIGNED NOT NULL,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semana` int(11) NOT NULL,
  `horario_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_silabos`
--

INSERT INTO `actividad_silabos` (`id`, `actividad`, `semana`, `horario_id`, `created_at`, `updated_at`) VALUES
(1, 'Actividad 1', 1, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(2, 'Actividad 2', 1, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(3, 'Actividad 3', 1, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(4, 'Actividad 4', 2, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(5, 'Actividad 5', 2, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(6, 'Actividad 6', 3, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(7, 'Actividad 7', 3, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(8, 'Actividad 8', 4, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(9, 'Actividad 9', 4, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(10, 'Actividad 10', 5, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(11, 'Actividad 11', 5, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(12, 'Actividad 12', 6, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(13, 'Actividad 13', 6, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_no_lectivas`
--

CREATE TABLE `act_no_lectivas` (
  `id` int(10) UNSIGNED NOT NULL,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `act_no_lectivas`
--

INSERT INTO `act_no_lectivas` (`id`, `actividad`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Investigación', 'Horas dedicadas a la semana al desarrollo de la Investigación', '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(2, 'Responsabilidad Social', 'Horas dedicadas a la semana al desarrollo de la Responsabilidad Social', '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(3, 'Tutoría y Consejería', 'Horas dedicadas a la semana al desarrollo de la Tutoría y Consejería', '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(4, 'Producción Intelectual', 'Horas dedicadas a la semana al desarrollo de su Producción Intelectual', '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(5, 'Comisiones', 'Horas dedicadas a la semana al desarrollo de las actividades y responsabilidades como miembro de alguna comisión', '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(6, 'Capacitaciones', 'Horas dedicadas a la semana al desarrollo de capacitaciones de fortalecimiento de capacidades', '2018-06-05 21:40:30', '2018-06-05 21:40:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE `ambientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `ambiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `ubicación` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependencia_id` int(10) UNSIGNED NOT NULL,
  `tipo_ambiente_id` int(10) UNSIGNED NOT NULL,
  `pabellon_id` int(10) UNSIGNED NOT NULL,
  `es_aula` int(11) DEFAULT NULL,
  `es_taller` int(11) DEFAULT NULL,
  `es_laboratorio` int(11) DEFAULT NULL,
  `es_biblioteca` int(11) DEFAULT NULL,
  `es_centro_computo` int(11) DEFAULT NULL,
  `es_auditorio` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `ambiente`, `descripcion`, `capacidad`, `ubicación`, `dependencia_id`, `tipo_ambiente_id`, `pabellon_id`, `es_aula`, `es_taller`, `es_laboratorio`, `es_biblioteca`, `es_centro_computo`, `es_auditorio`, `created_at`, `updated_at`) VALUES
(1, 'Aula 504', 'Aula de clases de 5to año', 40, NULL, 11, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(2, 'Aula 304', 'Aula de clases de 2do año', 40, NULL, 11, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(3, 'Laboratorio de Lengua', 'Laborartorio de canto y percución', 20, NULL, 11, 3, 1, NULL, NULL, 1, NULL, NULL, NULL, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(4, 'Taller de Musica', 'Se realiza practicas con instrumentos musicales', 20, NULL, 11, 2, 1, NULL, 1, NULL, NULL, NULL, NULL, '2018-06-05 21:40:31', '2018-06-05 21:40:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendarios`
--

CREATE TABLE `calendarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escuela_id` int(10) UNSIGNED DEFAULT NULL,
  `es_general` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cale_cursos`
--

CREATE TABLE `cale_cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `actividad_lectiva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `carga_lectiva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_pregra_gens`
--

CREATE TABLE `cal_pregra_gens` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_lectivas`
--

CREATE TABLE `carga_lectivas` (
  `id` int(10) UNSIGNED NOT NULL,
  `semestre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `anio` int(11) NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `docente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carga_lectivas`
--

INSERT INTO `carga_lectivas` (`id`, `semestre`, `estado`, `anio`, `curso_id`, `docente_id`, `created_at`, `updated_at`) VALUES
(1, 'I', '1', 2018, 1, 26, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(2, 'I', '1', 2018, 2, 27, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(3, 'I', '1', 2018, 3, 28, '2018-06-05 21:40:31', '2018-06-05 21:40:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_no_lectivas`
--

CREATE TABLE `carga_no_lectivas` (
  `id` int(10) UNSIGNED NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docente_id` int(10) UNSIGNED NOT NULL,
  `act_no_lectiva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE `colegios` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo_modular` int(11) NOT NULL,
  `colegio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colegio_tipo` int(11) DEFAULT NULL,
  `distrito_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`id`, `codigo_modular`, `colegio`, `direccion`, `colegio_tipo`, `distrito_id`, `created_at`, `updated_at`) VALUES
(1, 597443, 'HELLEN KELLER', 'JIRON GUZMAN BARRON 471', 1, 88, NULL, NULL),
(2, 411736, '86001 SANTA ROSA DE VITERBO', 'JIRON RAMON CASTILLA 1219', 1, 84, NULL, NULL),
(3, 735688, 'CENTRO DE EDUCACION ESPECIAL', 'AVENIDA SANCHEZ DULANTO 700', 2, 109, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_pagos`
--

CREATE TABLE `control_pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `inscripcion_ncgt_id` int(11) DEFAULT NULL,
  `postulacion_id` int(11) DEFAULT NULL,
  `pago_id` int(10) UNSIGNED NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `control_pagos`
--

INSERT INTO `control_pagos` (`id`, `inscripcion_ncgt_id`, `postulacion_id`, `pago_id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 3, 1, NULL, NULL),
(2, 1, NULL, 4, 2, NULL, NULL),
(3, 1, NULL, 5, 3, NULL, NULL),
(4, 2, NULL, 6, 1, NULL, NULL),
(5, 2, NULL, 7, 2, NULL, NULL),
(6, 3, NULL, 10, 1, NULL, NULL),
(7, 3, NULL, 11, 2, NULL, NULL),
(8, 4, NULL, 12, 1, NULL, NULL),
(9, 4, NULL, 13, 2, NULL, NULL),
(10, 4, NULL, 14, 2, NULL, NULL),
(11, 5, NULL, 15, 1, NULL, NULL),
(12, 5, NULL, 16, 2, NULL, NULL),
(13, 5, NULL, 17, 2, NULL, NULL),
(14, 6, NULL, 18, 1, NULL, NULL),
(15, 6, NULL, 19, 2, NULL, NULL),
(16, 6, NULL, 20, 2, NULL, NULL),
(17, 7, NULL, 21, 1, NULL, NULL),
(18, 7, NULL, 22, 2, NULL, NULL),
(19, 8, NULL, 26, 1, NULL, NULL),
(20, NULL, 1, 24, 1, NULL, NULL),
(21, NULL, 2, 25, 1, NULL, NULL),
(22, NULL, 3, 27, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciclo` int(11) NOT NULL,
  `creditos` int(11) NOT NULL,
  `hteoria` int(11) NOT NULL,
  `hpractica` int(11) NOT NULL,
  `es_general` int(11) DEFAULT NULL,
  `es_especifico` int(11) DEFAULT NULL,
  `es_especialidad` int(11) DEFAULT NULL,
  `es_electivo` int(11) DEFAULT NULL,
  `comp_investigacion` int(11) DEFAULT NULL,
  `comp_ciudadania` int(11) DEFAULT NULL,
  `comp_responsabilidad_soc` int(11) DEFAULT NULL,
  `comp_experiencia_pre_prof` int(11) DEFAULT NULL,
  `plan_estudio_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `codigo`, `nombre`, `ciclo`, `creditos`, `hteoria`, `hpractica`, `es_general`, `es_especifico`, `es_especialidad`, `es_electivo`, `comp_investigacion`, `comp_ciudadania`, `comp_responsabilidad_soc`, `comp_experiencia_pre_prof`, `plan_estudio_id`, `created_at`, `updated_at`) VALUES
(1, '1101', 'Ortografía y sintaxis básica', 1, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(2, '1102', 'Lógica Matemática', 1, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(3, '1103', 'Tecnología de la información en el contexto del trabajo universitario', 1, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(4, '1104', 'Neurociencia del aprendizaje', 1, 4, 3, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(5, '1105', 'Proceso histórico del Perú y del Mundo', 1, 4, 2, 4, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(6, '1106', 'Teorías y fundamentos de la Educación Inicial', 1, 4, 2, 4, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(7, '1107', 'Liderazgo pedagógico y desarrollo emocional', 1, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(8, '1108', 'Animación y coreografía infantil', 1, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(9, '1201', 'Comprensión Lectora y Lexicología', 2, 4, 2, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(10, '1202', 'Matemática básica', 2, 4, 2, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(11, '1203', 'Ciencias Naturales y Geográficas para la Defensa Nacional', 2, 3, 2, 2, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(12, '1204', 'Introducción a la Filosofía', 2, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(13, '1205', 'Educación Ambiental', 2, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(14, '1206', 'Psicomotricidad y Juegos Infantiles', 2, 4, 3, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(15, '1207', 'Expresión musical y canto', 2, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(16, '1208', 'Danzas peruanas aplicadas a la Educación Inicial', 2, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(17, '2101', 'Redacción y Producción de Textos', 3, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(18, '2102', 'Ética y responsabilidad social', 3, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(19, '2103', 'Psicología del Desarrollo y del Aprendizaje', 3, 4, 2, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(20, '2104', 'Educación y Ciencias Agógicas', 3, 4, 2, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(21, '2105', 'Atención y prevención de la Salud Infantil', 3, 4, 3, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(22, '2106', 'Educación Musical', 3, 4, 3, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(23, '2107', 'Juegos y rondas infantiles', 3, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(24, '2108', 'Teatro infantil', 3, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(25, '2201', 'Didáctica General', 4, 3, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(26, '2202', 'Diseño y Programación Curricular', 4, 4, 2, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(27, '2203', 'Proyectos Educativos', 4, 3, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(28, '2204', 'Educación para la convivencia y la paz', 4, 4, 2, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(29, '2205', 'Psicología del Desarrollo Infantil', 4, 4, 3, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(30, '2206', 'Nutrición Infantil', 4, 3, 1, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(31, '2207', 'Dibujo y pintura', 4, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(32, '2208', 'Marketing de eventos culturales', 4, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(33, '3101', 'Metodología de la Investigación Científica', 5, 3, 2, 2, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(34, '3102', 'Gestión y legislación educativa', 5, 3, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(35, '3103', 'Didáctica en Educación Inicial I', 5, 4, 2, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(36, '3104', 'Gestión Curricular para el I Ciclo', 5, 5, 4, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(37, '3105', 'Práctica Pre Profesional I', 5, 2, 1, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(38, '3106', 'Educación Temprana I', 5, 4, 3, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(39, '3107', 'Idioma extranjero', 5, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(40, '3108', 'Gestión y administración de PYMES', 5, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(41, '3201', 'Análisis de la Realidad nacional y Mundial', 6, 3, 2, 2, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(42, '3202', 'Formulación de Proyectos de Investigación Educativa', 6, 4, 3, 2, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(43, '3203', 'Didáctica en Educación Inicial II', 6, 4, 2, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(44, '3204', 'Gestión Curricular para el II Ciclo', 6, 3, 2, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(45, '3205', 'Práctica Pre Profesional II', 6, 2, 1, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(46, '3206', 'Educación Temprana II', 6, 4, 3, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(47, '3207', 'Gestión de servicios de atención infantil', 6, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(48, '3208', 'Liderazgo pedagógico y Desarrollo Emocional', 6, 2, 0, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(49, '4101', 'Estadística Descriptiva e Inferencial aplicada a la Educación', 7, 4, 2, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(50, '4102', 'Neurociencia en el Desarrollo de la Primera Infancia', 7, 3, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(51, '4103', 'Taller de Elaboración de Material Didáctico', 7, 3, 2, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(52, '4104', 'Iniciación al Pensamiento Lógico Matemático', 7, 3, 1, 4, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(53, '4105', 'Práctica Pre Profesional III', 7, 2, 1, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(54, '4106', 'Expresión Dramática y Títeres', 7, 3, 2, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(55, '4201', 'Creatividad y Expresión Grafico Plástica', 8, 3, 1, 4, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(56, '4202', 'Desarrollo de la Comunicación Oral y Escrita', 8, 3, 2, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(57, '4203', 'Desarrollo del Pensamiento Científico y Conciencia Ecológica en la Infancia', 8, 3, 1, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(58, '4204', 'Evaluación Educacional: medición y calidad educativa', 8, 3, 1, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(59, '4205', 'Práctica Pre Profesional IV', 8, 2, 1, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(60, '4206', 'Literatura Infantil', 8, 3, 1, 4, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(61, '5101', 'Tesis I', 9, 4, 2, 4, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(62, '5102', 'Orientación Familiar y Comunal', 9, 2, 0, 4, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(63, '5103', 'Gestión y Administración de Instituciones Educativas y Programas Infantiles', 9, 4, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(64, '5104', 'Práctica Pre Profesional V', 9, 3, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(65, '5105', 'Tratamiento Pedagógico de los Proble- mas de Desarrollo del Niño', 9, 3, 1, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(66, '5201', 'Tesis II', 10, 3, 2, 2, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(67, '5202', 'Seguridad Ciudadana y Defensa Civil', 10, 2, 0, 4, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(68, '5203', 'Informática Aplicada a la Educación Inicial', 10, 4, 3, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(69, '5204', 'Práctica Pre Profesional VI', 10, 3, 2, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-06-05 21:40:30', '2018-06-05 21:40:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`, `created_at`, `updated_at`) VALUES
(1, 'AMAZONAS', NULL, NULL),
(2, 'ANCASH', NULL, NULL),
(3, 'APURIMAC', NULL, NULL),
(4, 'AREQUIPA', NULL, NULL),
(5, 'AYACUCHO', NULL, NULL),
(6, 'CAJAMARCA', NULL, NULL),
(7, 'CALLAO', NULL, NULL),
(8, 'CUSCO', NULL, NULL),
(9, 'HUANCAVELICA', NULL, NULL),
(10, 'HUÁNUCO', NULL, NULL),
(11, 'ICA', NULL, NULL),
(12, 'JUNÍN', NULL, NULL),
(13, 'LA LIBERTAD', NULL, NULL),
(14, 'LAMBAYEQUE', NULL, NULL),
(15, 'LIMA', NULL, NULL),
(16, 'LORETO', NULL, NULL),
(17, 'MADRE DE DIOS', NULL, NULL),
(18, 'MOQUEGUA', NULL, NULL),
(19, 'PASCO', NULL, NULL),
(20, 'PIURA', NULL, NULL),
(21, 'PUNO', NULL, NULL),
(22, 'SAN MARTÍN', NULL, NULL),
(23, 'TACNA', NULL, NULL),
(24, 'TUMBES', NULL, NULL),
(25, 'UCAYALI', NULL, NULL),
(26, 'Extranjero', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id` int(10) UNSIGNED NOT NULL,
  `dependencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id_representante` int(11) DEFAULT NULL,
  `anexo` int(11) DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organiza_diplomado` int(11) DEFAULT NULL,
  `es_facultad` int(11) DEFAULT NULL,
  `es_escuela` int(11) DEFAULT NULL,
  `es_posgrado` int(11) DEFAULT NULL,
  `es_direccion` int(11) DEFAULT NULL,
  `es_oficina` int(11) DEFAULT NULL,
  `es_dep_ac` int(11) DEFAULT NULL,
  `es_centro_generador` int(11) DEFAULT NULL,
  `dependencia_id` int(11) DEFAULT NULL,
  `departamento_dependencia_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id`, `dependencia`, `usuario_id_representante`, `anexo`, `cargo`, `organiza_diplomado`, `es_facultad`, `es_escuela`, `es_posgrado`, `es_direccion`, `es_oficina`, `es_dep_ac`, `es_centro_generador`, `dependencia_id`, `departamento_dependencia_id`, `created_at`, `updated_at`) VALUES
(1, 'Vicerrectorado Academico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Facultad de Ciencias Agrarias', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(3, 'Facultad de Medicina', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(4, 'Facultad de Psicología', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(5, 'Facultad de Enfermería', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(6, 'Facultad de Obstetricia', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(7, 'Facultad de Ciencias Administrativas y Turismo', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(8, 'Facultad de Ciencias Contables y Financieras', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(9, 'Facultad de Economía', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(10, 'Facultad de Ciencias Sociales', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(11, 'Facultad de Ciencias de la Educación', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(12, 'Facultad de Derecho y Ciencias Políticas', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(13, 'Facultad de Ingeniería Civil y Arquitectura', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(14, 'Facultad de Ingeniería Industrial y de Sistemas', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(15, 'Facultad de Medicina Veterinaria y Zootecnia', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(16, 'Escuela Profesional INGENIERIA AGRONOMICA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 2, 44, NULL, NULL),
(17, 'Escuela Profesional INGENIERIA AGROINDUSTRIAL', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 2, 45, NULL, NULL),
(18, 'Escuela Profesional INGENIERIA AGROPECUARIA FORESTAL', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(19, 'Escuela Profesional MEDICINA HUMANA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 3, 46, NULL, NULL),
(20, 'Escuela Profesional ODONTOLOGIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 3, 46, NULL, NULL),
(21, 'Escuela Profesional PSICOLOGIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 4, 47, NULL, NULL),
(22, 'Escuela Profesional ENFERMERIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 5, 48, NULL, NULL),
(23, 'Escuela Profesional OBSTETRICIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 6, 49, NULL, NULL),
(24, 'Escuela Profesional CIENCIAS ADMINISTRATIVAS', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 7, 50, NULL, NULL),
(25, 'Escuela Profesional TURISMO Y HOTELERIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 7, 50, NULL, NULL),
(26, 'Escuela Profesional CIENCIAS CONTABLES Y FINANCIERAS', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 8, 51, NULL, NULL),
(27, 'Escuela Profesional ECONOMIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 9, 52, NULL, NULL),
(28, 'Escuela Profesional SOCIOLOGIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 10, 53, NULL, NULL),
(29, 'Escuela Profesional CIENCIAS DE LA COMUNICACION SOCIAL', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 10, 53, NULL, NULL),
(30, 'Escuela Profesional EDUCACION INICIAL', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 55, NULL, NULL),
(31, 'Escuela Profesional EDUCACION PRIMARIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 55, NULL, NULL),
(32, 'Escuela Profesional EDUCACION FISICA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 54, NULL, NULL),
(33, 'Escuela Profesional FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 55, NULL, NULL),
(34, 'Escuela Profesional LENGUA Y LITERATURA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 55, NULL, NULL),
(35, 'Escuela Profesional CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 55, NULL, NULL),
(36, 'Escuela Profesional MATEMATICA Y FISICA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 54, NULL, NULL),
(37, 'Escuela Profesional BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 11, 54, NULL, NULL),
(38, 'Escuela Profesional DERECHO Y CIENCIAS POLITICAS', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 12, 56, NULL, NULL),
(39, 'Escuela Profesional INGENIERIA CIVIL', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 13, 57, NULL, NULL),
(40, 'Escuela Profesional ARQUITECTURA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 13, 57, NULL, NULL),
(41, 'Escuela Profesional INGENIERIA INDUSTRIAL', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 14, 58, NULL, NULL),
(42, 'Escuela Profesional INGENIERIA DE SISTEMAS', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 14, 58, NULL, NULL),
(43, 'Escuela Profesional MEDICINA VETERINARIA', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, 15, 59, NULL, NULL),
(44, 'Departamento Académico de Ingeniería Agronómica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL),
(45, 'Departamento Académico de Ingeniería Agroindustrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL),
(46, 'Departamento Académico de Medicina y Odontología', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, NULL, NULL, NULL),
(47, 'Departamento Académico de Psicología', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, NULL, NULL, NULL),
(48, 'Departamento Académico de Enfermería', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, NULL, NULL, NULL),
(49, 'Departamento Académico de Obstetricia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, NULL, NULL, NULL),
(50, 'Departamento Académico de Ciencias Admisnistrativas y Turismo y Hotelería', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 7, NULL, NULL, NULL),
(51, 'Departamento Académico de Ciencas Contables y Financieras', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 8, NULL, NULL, NULL),
(52, 'Departamento Académico de Economía', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 9, NULL, NULL, NULL),
(53, 'Departamento Académico de Sociología y Ciencias de la Comunicación', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 10, NULL, NULL, NULL),
(54, 'Departamento Académico Pedagógico de Ciencias Formales y Naturales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 11, NULL, NULL, NULL),
(55, 'Departamento Académico Pedagógico de Ciencias Sociales y Humanidades', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 11, NULL, NULL, NULL),
(56, 'Departamento Académico de Derecho y Ciencias Políticas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 12, NULL, NULL, NULL),
(57, 'Departamento Académico de Ingeniería Civil y Arquitectura', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 13, NULL, NULL, NULL),
(58, 'Departamento Académico de Ingeniería Industrial y de Sistemas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 14, NULL, NULL, NULL),
(59, 'Departamento Académico de Medicina Veterinaría', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 15, NULL, NULL, NULL),
(60, 'Dirección de Admisión', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, 1, NULL, NULL, NULL),
(61, 'CEPREVAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL),
(62, 'Escuela de Posgrado', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(63, 'PROCAPT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, NULL, NULL),
(64, 'PROMASTER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 44, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dep_academicos`
--

CREATE TABLE `dep_academicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_academico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facultad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dep_academicos`
--

INSERT INTO `dep_academicos` (`id`, `dep_academico`, `facultad_id`, `created_at`, `updated_at`) VALUES
(1, 'INGENIERIA AGRONOMICA', 1, NULL, NULL),
(2, 'INGENIERIA AGROINDUSTRIAL', 1, NULL, NULL),
(3, 'INGENIERIA AGROPECUARIA FORESTAL', 1, NULL, NULL),
(4, 'MEDICINA HUMANA', 2, NULL, NULL),
(5, 'ODONTOLOGIA', 2, NULL, NULL),
(6, 'PSICOLOGIA', 3, NULL, NULL),
(7, 'ENFERMERIA', 4, NULL, NULL),
(8, 'OBSTETRICIA', 5, NULL, NULL),
(9, 'CIENCIAS ADMINISTRATIVAS', 6, NULL, NULL),
(10, 'TURISMO Y HOTELERIA', 6, NULL, NULL),
(11, 'CIENCIAS CONTABLES Y FINANCIERAS', 7, NULL, NULL),
(12, 'ECONOMIA', 8, NULL, NULL),
(13, 'SOCIOLOGIA', 9, NULL, NULL),
(14, 'CIENCIAS DE LA COMUNICACION SOCIAL', 9, NULL, NULL),
(15, 'EDUCACION INICIAL', 10, NULL, NULL),
(16, 'EDUCACION PRIMARIA', 10, NULL, NULL),
(17, 'EDUCACION FISICA', 10, NULL, NULL),
(18, 'FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 10, NULL, NULL),
(19, 'LENGUA Y LITERATURA', 10, NULL, NULL),
(20, 'CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 10, NULL, NULL),
(21, 'MATEMATICA Y FISICA', 10, NULL, NULL),
(22, 'BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 10, NULL, NULL),
(23, 'DERECHO Y CIENCIAS POLITICAS', 11, NULL, NULL),
(24, 'INGENIERIA CIVIL', 12, NULL, NULL),
(25, 'ARQUITECTURA', 12, NULL, NULL),
(26, 'INGENIERIA INDUSTRIAL', 13, NULL, NULL),
(27, 'INGENIERIA DE SISTEMAS', 13, NULL, NULL),
(28, 'MEDICINA VETERINARIA', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `id` int(10) UNSIGNED NOT NULL,
  `distrito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`id`, `distrito`, `provincia_id`) VALUES
(1, 'CHACHAPOYAS', 1),
(2, 'ASUNCION', 1),
(3, 'BALSAS', 1),
(4, 'CHETO', 1),
(5, 'CHILIQUIN', 1),
(6, 'CHUQUIBAMBA', 1),
(7, 'GRANADA', 1),
(8, 'HUANCAS', 1),
(9, 'LA JALCA', 1),
(10, 'LEIMEBAMBA', 1),
(11, 'LEVANTO', 1),
(12, 'MAGDALENA', 1),
(13, 'MARISCAL CASTILLA', 1),
(14, 'MOLINOPAMPA', 1),
(15, 'MONTEVIDEO', 1),
(16, 'OLLEROS', 1),
(17, 'QUINJALCA', 1),
(18, 'SAN FRANCISCO DE DAGUAS', 1),
(19, 'SAN ISIDRO DE MAINO', 1),
(20, 'SOLOCO', 1),
(21, 'SONCHE', 1),
(22, 'LA PECA', 2),
(23, 'ARAMANGO', 2),
(24, 'COPALLIN', 2),
(25, 'EL PARCO', 2),
(26, 'IMAZA', 2),
(27, 'JUMBILLA', 3),
(28, 'CHISQUILLA', 3),
(29, 'CHURUJA', 3),
(30, 'COROSHA', 3),
(31, 'CUISPES', 3),
(32, 'FLORIDA', 3),
(33, 'JAZAN', 3),
(34, 'RECTA', 3),
(35, 'SAN CARLOS', 3),
(36, 'SHIPASBAMBA', 3),
(37, 'VALERA', 3),
(38, 'YAMBRASBAMBA', 3),
(39, 'NIEVA', 4),
(40, 'EL CENEPA', 4),
(41, 'RIO SANTIAGO', 4),
(42, 'LAMUD', 5),
(43, 'CAMPORREDONDO', 5),
(44, 'COCABAMBA', 5),
(45, 'COLCAMAR', 5),
(46, 'CONILA', 5),
(47, 'INGUILPATA', 5),
(48, 'LONGUITA', 5),
(49, 'LONYA CHICO', 5),
(50, 'LUYA', 5),
(51, 'LUYA VIEJO', 5),
(52, 'MARIA', 5),
(53, 'OCALLI', 5),
(54, 'OCUMAL', 5),
(55, 'PISUQUIA', 5),
(56, 'PROVIDENCIA', 5),
(57, 'SAN CRISTOBAL', 5),
(58, 'SAN FRANCISCO DEL YESO', 5),
(59, 'SAN JERONIMO', 5),
(60, 'SAN JUAN DE LOPECANCHA', 5),
(61, 'SANTA CATALINA', 5),
(62, 'SANTO TOMAS', 5),
(63, 'TINGO', 5),
(64, 'TRITA', 5),
(65, 'SAN NICOLAS', 6),
(66, 'CHIRIMOTO', 6),
(67, 'COCHAMAL', 6),
(68, 'HUAMBO', 6),
(69, 'LIMABAMBA', 6),
(70, 'LONGAR', 6),
(71, 'MARISCAL BENAVIDES', 6),
(72, 'MILPUC', 6),
(73, 'OMIA', 6),
(74, 'SANTA ROSA', 6),
(75, 'TOTORA', 6),
(76, 'VISTA ALEGRE', 6),
(77, 'BAGUA GRANDE', 7),
(78, 'CAJARURO', 7),
(79, 'CUMBA', 7),
(80, 'EL MILAGRO', 7),
(81, 'JAMALCA', 7),
(82, 'LONYA GRANDE', 7),
(83, 'YAMON', 7),
(84, 'HUARAZ', 8),
(85, 'COCHABAMBA', 8),
(86, 'COLCABAMBA', 8),
(87, 'HUANCHAY', 8),
(88, 'INDEPENDENCIA', 8),
(89, 'JANGAS', 8),
(90, 'LA LIBERTAD', 8),
(91, 'OLLEROS', 8),
(92, 'PAMPAS', 8),
(93, 'PARIACOTO', 8),
(94, 'PIRA', 8),
(95, 'TARICA', 8),
(96, 'AIJA', 9),
(97, 'CORIS', 9),
(98, 'HUACLLAN', 9),
(99, 'LA MERCED', 9),
(100, 'SUCCHA', 9),
(101, 'LLAMELLIN', 10),
(102, 'ACZO', 10),
(103, 'CHACCHO', 10),
(104, 'CHINGAS', 10),
(105, 'MIRGAS', 10),
(106, 'SAN JUAN DE RONTOY', 10),
(107, 'CHACAS', 11),
(108, 'ACOCHACA', 11),
(109, 'CHIQUIAN', 12),
(110, 'ABELARDO PARDO LEZAMETA', 12),
(111, 'ANTONIO RAYMONDI', 12),
(112, 'AQUIA', 12),
(113, 'CAJACAY', 12),
(114, 'CANIS', 12),
(115, 'COLQUIOC', 12),
(116, 'HUALLANCA', 12),
(117, 'HUASTA', 12),
(118, 'HUAYLLACAYAN', 12),
(119, 'LA PRIMAVERA', 12),
(120, 'MANGAS', 12),
(121, 'PACLLON', 12),
(122, 'SAN MIGUEL DE CORPANQUI', 12),
(123, 'TICLLOS', 12),
(124, 'CARHUAZ', 13),
(125, 'ACOPAMPA', 13),
(126, 'AMASHCA', 13),
(127, 'ANTA', 13),
(128, 'ATAQUERO', 13),
(129, 'MARCARA', 13),
(130, 'PARIAHUANCA', 13),
(131, 'SAN MIGUEL DE ACO', 13),
(132, 'SHILLA', 13),
(133, 'TINCO', 13),
(134, 'YUNGAR', 13),
(135, 'SAN LUIS', 14),
(136, 'SAN NICOLAS', 14),
(137, 'YAUYA', 14),
(138, 'CASMA', 15),
(139, 'BUENA VISTA ALTA', 15),
(140, 'COMANDANTE NOEL', 15),
(141, 'YAUTAN', 15),
(142, 'CORONGO', 16),
(143, 'ACO', 16),
(144, 'BAMBAS', 16),
(145, 'CUSCA', 16),
(146, 'LA PAMPA', 16),
(147, 'YANAC', 16),
(148, 'YUPAN', 16),
(149, 'HUARI', 17),
(150, 'ANRA', 17),
(151, 'CAJAY', 17),
(152, 'CHAVIN DE HUANTAR', 17),
(153, 'HUACACHI', 17),
(154, 'HUACCHIS', 17),
(155, 'HUACHIS', 17),
(156, 'HUANTAR', 17),
(157, 'MASIN', 17),
(158, 'PAUCAS', 17),
(159, 'PONTO', 17),
(160, 'RAHUAPAMPA', 17),
(161, 'RAPAYAN', 17),
(162, 'SAN MARCOS', 17),
(163, 'SAN PEDRO DE CHANA', 17),
(164, 'UCO', 17),
(165, 'HUARMEY', 18),
(166, 'COCHAPETI', 18),
(167, 'CULEBRAS', 18),
(168, 'HUAYAN', 18),
(169, 'MALVAS', 18),
(170, 'CARAZ', 19),
(171, 'HUALLANCA', 19),
(172, 'HUATA', 19),
(173, 'HUAYLAS', 19),
(174, 'MATO', 19),
(175, 'PAMPAROMAS', 19),
(176, 'PUEBLO LIBRE', 19),
(177, 'SANTA CRUZ', 19),
(178, 'SANTO TORIBIO', 19),
(179, 'YURACMARCA', 19),
(180, 'PISCOBAMBA', 20),
(181, 'CASCA', 20),
(182, 'ELEAZAR GUZMAN BARRON', 20),
(183, 'FIDEL OLIVAS ESCUDERO', 20),
(184, 'LLAMA', 20),
(185, 'LLUMPA', 20),
(186, 'LUCMA', 20),
(187, 'MUSGA', 20),
(188, 'OCROS', 21),
(189, 'ACAS', 21),
(190, 'CAJAMARQUILLA', 21),
(191, 'CARHUAPAMPA', 21),
(192, 'COCHAS', 21),
(193, 'CONGAS', 21),
(194, 'LLIPA', 21),
(195, 'SAN CRISTOBAL DE RAJAN', 21),
(196, 'SAN PEDRO', 21),
(197, 'SANTIAGO DE CHILCAS', 21),
(198, 'CABANA', 22),
(199, 'BOLOGNESI', 22),
(200, 'CONCHUCOS', 22),
(201, 'HUACASCHUQUE', 22),
(202, 'HUANDOVAL', 22),
(203, 'LACABAMBA', 22),
(204, 'LLAPO', 22),
(205, 'PALLASCA', 22),
(206, 'PAMPAS', 22),
(207, 'SANTA ROSA', 22),
(208, 'TAUCA', 22),
(209, 'POMABAMBA', 23),
(210, 'HUAYLLAN', 23),
(211, 'PAROBAMBA', 23),
(212, 'QUINUABAMBA', 23),
(213, 'RECUAY', 24),
(214, 'CATAC', 24),
(215, 'COTAPARACO', 24),
(216, 'HUAYLLAPAMPA', 24),
(217, 'LLACLLIN', 24),
(218, 'MARCA', 24),
(219, 'PAMPAS CHICO', 24),
(220, 'PARARIN', 24),
(221, 'TAPACOCHA', 24),
(222, 'TICAPAMPA', 24),
(223, 'CHIMBOTE', 25),
(224, 'CACERES DEL PERU', 25),
(225, 'COISHCO', 25),
(226, 'MACATE', 25),
(227, 'MORO', 25),
(228, 'NEPEÑA', 25),
(229, 'SAMANCO', 25),
(230, 'SANTA', 25),
(231, 'NUEVO CHIMBOTE', 25),
(232, 'SIHUAS', 26),
(233, 'ACOBAMBA', 26),
(234, 'ALFONSO UGARTE', 26),
(235, 'CASHAPAMPA', 26),
(236, 'CHINGALPO', 26),
(237, 'HUAYLLABAMBA', 26),
(238, 'QUICHES', 26),
(239, 'RAGASH', 26),
(240, 'SAN JUAN', 26),
(241, 'SICSIBAMBA', 26),
(242, 'YUNGAY', 27),
(243, 'CASCAPARA', 27),
(244, 'MANCOS', 27),
(245, 'MATACOTO', 27),
(246, 'QUILLO', 27),
(247, 'RANRAHIRCA', 27),
(248, 'SHUPLUY', 27),
(249, 'YANAMA', 27),
(250, 'ABANCAY', 28),
(251, 'CHACOCHE', 28),
(252, 'CIRCA', 28),
(253, 'CURAHUASI', 28),
(254, 'HUANIPACA', 28),
(255, 'LAMBRAMA', 28),
(256, 'PICHIRHUA', 28),
(257, 'SAN PEDRO DE CACHORA', 28),
(258, 'TAMBURCO', 28),
(259, 'ANDAHUAYLAS', 29),
(260, 'ANDARAPA', 29),
(261, 'CHIARA', 29),
(262, 'HUANCARAMA', 29),
(263, 'HUANCARAY', 29),
(264, 'HUAYANA', 29),
(265, 'KISHUARA', 29),
(266, 'PACOBAMBA', 29),
(267, 'PACUCHA', 29),
(268, 'PAMPACHIRI', 29),
(269, 'POMACOCHA', 29),
(270, 'SAN ANTONIO DE CACHI', 29),
(271, 'SAN JERONIMO', 29),
(272, 'SAN MIGUEL DE CHACCRAMPA', 29),
(273, 'SANTA MARIA DE CHICMO', 29),
(274, 'TALAVERA', 29),
(275, 'TUMAY HUARACA', 29),
(276, 'TURPO', 29),
(277, 'KAQUIABAMBA', 29),
(278, 'ANTABAMBA', 30),
(279, 'EL ORO', 30),
(280, 'HUAQUIRCA', 30),
(281, 'JUAN ESPINOZA MEDRANO', 30),
(282, 'OROPESA', 30),
(283, 'PACHACONAS', 30),
(284, 'SABAINO', 30),
(285, 'CHALHUANCA', 31),
(286, 'CAPAYA', 31),
(287, 'CARAYBAMBA', 31),
(288, 'CHAPIMARCA', 31),
(289, 'COLCABAMBA', 31),
(290, 'COTARUSE', 31),
(291, 'HUAYLLO', 31),
(292, 'JUSTO APU SAHUARAURA', 31),
(293, 'LUCRE', 31),
(294, 'POCOHUANCA', 31),
(295, 'SAN JUAN DE CHACÑA', 31),
(296, 'SAÑAYCA', 31),
(297, 'SORAYA', 31),
(298, 'TAPAIRIHUA', 31),
(299, 'TINTAY', 31),
(300, 'TORAYA', 31),
(301, 'YANACA', 31),
(302, 'TAMBOBAMBA', 32),
(303, 'COTABAMBAS', 32),
(304, 'COYLLURQUI', 32),
(305, 'HAQUIRA', 32),
(306, 'MARA', 32),
(307, 'CHALLHUAHUACHO', 32),
(308, 'CHINCHEROS', 33),
(309, 'ANCO-HUALLO', 33),
(310, 'COCHARCAS', 33),
(311, 'HUACCANA', 33),
(312, 'OCOBAMBA', 33),
(313, 'ONGOY', 33),
(314, 'URANMARCA', 33),
(315, 'RANRACANCHA', 33),
(316, 'CHUQUIBAMBILLA', 34),
(317, 'CURPAHUASI', 34),
(318, 'GAMARRA', 34),
(319, 'HUAYLLATI', 34),
(320, 'MAMARA', 34),
(321, 'MICAELA BASTIDAS', 34),
(322, 'PATAYPAMPA', 34),
(323, 'PROGRESO', 34),
(324, 'SAN ANTONIO', 34),
(325, 'SANTA ROSA', 34),
(326, 'TURPAY', 34),
(327, 'VILCABAMBA', 34),
(328, 'VIRUNDO', 34),
(329, 'CURASCO', 34),
(330, 'AREQUIPA', 35),
(331, 'ALTO SELVA ALEGRE', 35),
(332, 'CAYMA', 35),
(333, 'CERRO COLORADO', 35),
(334, 'CHARACATO', 35),
(335, 'CHIGUATA', 35),
(336, 'JACOBO HUNTER', 35),
(337, 'LA JOYA', 35),
(338, 'MARIANO MELGAR', 35),
(339, 'MIRAFLORES', 35),
(340, 'MOLLEBAYA', 35),
(341, 'PAUCARPATA', 35),
(342, 'POCSI', 35),
(343, 'POLOBAYA', 35),
(344, 'QUEQUEÑA', 35),
(345, 'SABANDIA', 35),
(346, 'SACHACA', 35),
(347, 'SAN JUAN DE SIGUAS', 35),
(348, 'SAN JUAN DE TARUCANI', 35),
(349, 'SANTA ISABEL DE SIGUAS', 35),
(350, 'SANTA RITA DE SIGUAS', 35),
(351, 'SOCABAYA', 35),
(352, 'TIABAYA', 35),
(353, 'UCHUMAYO', 35),
(354, 'VITOR', 35),
(355, 'YANAHUARA', 35),
(356, 'YARABAMBA', 35),
(357, 'YURA', 35),
(358, 'JOSE LUIS BUSTAMANTE Y RIVERO', 35),
(359, 'CAMANA', 36),
(360, 'JOSE MARIA QUIMPER', 36),
(361, 'MARIANO NICOLAS VALCARCEL', 36),
(362, 'MARISCAL CACERES', 36),
(363, 'NICOLAS DE PIEROLA', 36),
(364, 'OCOÑA', 36),
(365, 'QUILCA', 36),
(366, 'SAMUEL PASTOR', 36),
(367, 'CARAVELI', 37),
(368, 'ACARI', 37),
(369, 'ATICO', 37),
(370, 'ATIQUIPA', 37),
(371, 'BELLA UNION', 37),
(372, 'CAHUACHO', 37),
(373, 'CHALA', 37),
(374, 'CHAPARRA', 37),
(375, 'HUANUHUANU', 37),
(376, 'JAQUI', 37),
(377, 'LOMAS', 37),
(378, 'QUICACHA', 37),
(379, 'YAUCA', 37),
(380, 'APLAO', 38),
(381, 'ANDAGUA', 38),
(382, 'AYO', 38),
(383, 'CHACHAS', 38),
(384, 'CHILCAYMARCA', 38),
(385, 'CHOCO', 38),
(386, 'HUANCARQUI', 38),
(387, 'MACHAGUAY', 38),
(388, 'ORCOPAMPA', 38),
(389, 'PAMPACOLCA', 38),
(390, 'TIPAN', 38),
(391, 'UÑON', 38),
(392, 'URACA', 38),
(393, 'VIRACO', 38),
(394, 'CHIVAY', 39),
(395, 'ACHOMA', 39),
(396, 'CABANACONDE', 39),
(397, 'CALLALLI', 39),
(398, 'CAYLLOMA', 39),
(399, 'COPORAQUE', 39),
(400, 'HUAMBO', 39),
(401, 'HUANCA', 39),
(402, 'ICHUPAMPA', 39),
(403, 'LARI', 39),
(404, 'LLUTA', 39),
(405, 'MACA', 39),
(406, 'MADRIGAL', 39),
(407, 'SAN ANTONIO DE CHUCA', 39),
(408, 'SIBAYO', 39),
(409, 'TAPAY', 39),
(410, 'TISCO', 39),
(411, 'TUTI', 39),
(412, 'YANQUE', 39),
(413, 'MAJES', 39),
(414, 'CHUQUIBAMBA', 40),
(415, 'ANDARAY', 40),
(416, 'CAYARANI', 40),
(417, 'CHICHAS', 40),
(418, 'IRAY', 40),
(419, 'RIO GRANDE', 40),
(420, 'SALAMANCA', 40),
(421, 'YANAQUIHUA', 40),
(422, 'MOLLENDO', 41),
(423, 'COCACHACRA', 41),
(424, 'DEAN VALDIVIA', 41),
(425, 'ISLAY', 41),
(426, 'MEJIA', 41),
(427, 'PUNTA DE BOMBON', 41),
(428, 'COTAHUASI', 42),
(429, 'ALCA', 42),
(430, 'CHARCANA', 42),
(431, 'HUAYNACOTAS', 42),
(432, 'PAMPAMARCA', 42),
(433, 'PUYCA', 42),
(434, 'QUECHUALLA', 42),
(435, 'SAYLA', 42),
(436, 'TAURIA', 42),
(437, 'TOMEPAMPA', 42),
(438, 'TORO', 42),
(439, 'AYACUCHO', 43),
(440, 'ACOCRO', 43),
(441, 'ACOS VINCHOS', 43),
(442, 'CARMEN ALTO', 43),
(443, 'CHIARA', 43),
(444, 'OCROS', 43),
(445, 'PACAYCASA', 43),
(446, 'QUINUA', 43),
(447, 'SAN JOSE DE TICLLAS', 43),
(448, 'SAN JUAN BAUTISTA', 43),
(449, 'SANTIAGO DE PISCHA', 43),
(450, 'SOCOS', 43),
(451, 'TAMBILLO', 43),
(452, 'VINCHOS', 43),
(453, 'JESUS NAZARENO', 43),
(454, 'CANGALLO', 44),
(455, 'CHUSCHI', 44),
(456, 'LOS MOROCHUCOS', 44),
(457, 'MARIA PARADO DE BELLIDO', 44),
(458, 'PARAS', 44),
(459, 'TOTOS', 44),
(460, 'SANCOS', 45),
(461, 'CARAPO', 45),
(462, 'SACSAMARCA', 45),
(463, 'SANTIAGO DE LUCANAMARCA', 45),
(464, 'HUANTA', 46),
(465, 'AYAHUANCO', 46),
(466, 'HUAMANGUILLA', 46),
(467, 'IGUAIN', 46),
(468, 'LURICOCHA', 46),
(469, 'SANTILLANA', 46),
(470, 'SIVIA', 46),
(471, 'LLOCHEGUA', 46),
(472, 'SAN MIGUEL', 47),
(473, 'ANCO', 47),
(474, 'AYNA', 47),
(475, 'CHILCAS', 47),
(476, 'CHUNGUI', 47),
(477, 'LUIS CARRANZA', 47),
(478, 'SANTA ROSA', 47),
(479, 'TAMBO', 47),
(480, 'PUQUIO', 48),
(481, 'AUCARA', 48),
(482, 'CABANA', 48),
(483, 'CARMEN SALCEDO', 48),
(484, 'CHAVIÑA', 48),
(485, 'CHIPAO', 48),
(486, 'HUAC-HUAS', 48),
(487, 'LARAMATE', 48),
(488, 'LEONCIO PRADO', 48),
(489, 'LLAUTA', 48),
(490, 'LUCANAS', 48),
(491, 'OCAÑA', 48),
(492, 'OTOCA', 48),
(493, 'SAISA', 48),
(494, 'SAN CRISTOBAL', 48),
(495, 'SAN JUAN', 48),
(496, 'SAN PEDRO', 48),
(497, 'SAN PEDRO DE PALCO', 48),
(498, 'SANCOS', 48),
(499, 'SANTA ANA DE HUAYCAHUACHO', 48),
(500, 'SANTA LUCIA', 48),
(501, 'CORACORA', 49),
(502, 'CHUMPI', 49),
(503, 'CORONEL CASTAÑEDA', 49),
(504, 'PACAPAUSA', 49),
(505, 'PULLO', 49),
(506, 'PUYUSCA', 49),
(507, 'SAN FRANCISCO DE RAVACAYCO', 49),
(508, 'UPAHUACHO', 49),
(509, 'PAUSA', 50),
(510, 'COLTA', 50),
(511, 'CORCULLA', 50),
(512, 'LAMPA', 50),
(513, 'MARCABAMBA', 50),
(514, 'OYOLO', 50),
(515, 'PARARCA', 50),
(516, 'SAN JAVIER DE ALPABAMBA', 50),
(517, 'SAN JOSE DE USHUA', 50),
(518, 'SARA SARA', 50),
(519, 'QUEROBAMBA', 51),
(520, 'BELEN', 51),
(521, 'CHALCOS', 51),
(522, 'CHILCAYOC', 51),
(523, 'HUACAÑA', 51),
(524, 'MORCOLLA', 51),
(525, 'PAICO', 51),
(526, 'SAN PEDRO DE LARCAY', 51),
(527, 'SAN SALVADOR DE QUIJE', 51),
(528, 'SANTIAGO DE PAUCARAY', 51),
(529, 'SORAS', 51),
(530, 'HUANCAPI', 52),
(531, 'ALCAMENCA', 52),
(532, 'APONGO', 52),
(533, 'ASQUIPATA', 52),
(534, 'CANARIA', 52),
(535, 'CAYARA', 52),
(536, 'COLCA', 52),
(537, 'HUAMANQUIQUIA', 52),
(538, 'HUANCARAYLLA', 52),
(539, 'HUAYA', 52),
(540, 'SARHUA', 52),
(541, 'VILCANCHOS', 52),
(542, 'VILCAS HUAMAN', 53),
(543, 'ACCOMARCA', 53),
(544, 'CARHUANCA', 53),
(545, 'CONCEPCION', 53),
(546, 'HUAMBALPA', 53),
(547, 'INDEPENDENCIA', 53),
(548, 'SAURAMA', 53),
(549, 'VISCHONGO', 53),
(550, 'CAJAMARCA', 54),
(551, 'CAJAMARCA', 54),
(552, 'ASUNCION', 54),
(553, 'CHETILLA', 54),
(554, 'COSPAN', 54),
(555, 'ENCAÑADA', 54),
(556, 'JESUS', 54),
(557, 'LLACANORA', 54),
(558, 'LOS BAÑOS DEL INCA', 54),
(559, 'MAGDALENA', 54),
(560, 'MATARA', 54),
(561, 'NAMORA', 54),
(562, 'SAN JUAN', 54),
(563, 'CAJABAMBA', 55),
(564, 'CACHACHI', 55),
(565, 'CONDEBAMBA', 55),
(566, 'SITACOCHA', 55),
(567, 'CELENDIN', 56),
(568, 'CHUMUCH', 56),
(569, 'CORTEGANA', 56),
(570, 'HUASMIN', 56),
(571, 'JORGE CHAVEZ', 56),
(572, 'JOSE GALVEZ', 56),
(573, 'MIGUEL IGLESIAS', 56),
(574, 'OXAMARCA', 56),
(575, 'SOROCHUCO', 56),
(576, 'SUCRE', 56),
(577, 'UTCO', 56),
(578, 'LA LIBERTAD DE PALLAN', 56),
(579, 'CHOTA', 57),
(580, 'ANGUIA', 57),
(581, 'CHADIN', 57),
(582, 'CHIGUIRIP', 57),
(583, 'CHIMBAN', 57),
(584, 'CHOROPAMPA', 57),
(585, 'COCHABAMBA', 57),
(586, 'CONCHAN', 57),
(587, 'HUAMBOS', 57),
(588, 'LAJAS', 57),
(589, 'LLAMA', 57),
(590, 'MIRACOSTA', 57),
(591, 'PACCHA', 57),
(592, 'PION', 57),
(593, 'QUEROCOTO', 57),
(594, 'SAN JUAN DE LICUPIS', 57),
(595, 'TACABAMBA', 57),
(596, 'TOCMOCHE', 57),
(597, 'CHALAMARCA', 57),
(598, 'CONTUMAZA', 58),
(599, 'CHILETE', 58),
(600, 'CUPISNIQUE', 58),
(601, 'GUZMANGO', 58),
(602, 'SAN BENITO', 58),
(603, 'SANTA CRUZ DE TOLED', 58),
(604, 'TANTARICA', 58),
(605, 'YONAN', 58),
(606, 'CUTERVO', 59),
(607, 'CALLAYUC', 59),
(608, 'CHOROS', 59),
(609, 'CUJILLO', 59),
(610, 'LA RAMADA', 59),
(611, 'PIMPINGOS', 59),
(612, 'QUEROCOTILLO', 59),
(613, 'SAN ANDRES DE CUTERVO', 59),
(614, 'SAN JUAN DE CUTERVO', 59),
(615, 'SAN LUIS DE LUCMA', 59),
(616, 'SANTA CRUZ', 59),
(617, 'SANTO DOMINGO DE LA CAPILLA', 59),
(618, 'SANTO TOMAS', 59),
(619, 'SOCOTA', 59),
(620, 'TORIBIO CASANOVA', 59),
(621, 'BAMBAMARCA', 60),
(622, 'CHUGUR', 60),
(623, 'HUALGAYOC', 60),
(624, 'JAEN', 61),
(625, 'BELLAVISTA', 61),
(626, 'CHONTALI', 61),
(627, 'COLASAY', 61),
(628, 'HUABAL', 61),
(629, 'LAS PIRIAS', 61),
(630, 'POMAHUACA', 61),
(631, 'PUCARA', 61),
(632, 'SALLIQUE', 61),
(633, 'SAN FELIPE', 61),
(634, 'SAN JOSE DEL ALTO', 61),
(635, 'SANTA ROSA', 61),
(636, 'SAN IGNACIO', 62),
(637, 'CHIRINOS', 62),
(638, 'HUARANGO', 62),
(639, 'LA COIPA', 62),
(640, 'NAMBALLE', 62),
(641, 'SAN JOSE DE LOURDES', 62),
(642, 'TABACONAS', 62),
(643, 'PEDRO GALVEZ', 63),
(644, 'CHANCAY', 63),
(645, 'EDUARDO VILLANUEVA', 63),
(646, 'GREGORIO PITA', 63),
(647, 'ICHOCAN', 63),
(648, 'JOSE MANUEL QUIROZ', 63),
(649, 'JOSE SABOGAL', 63),
(650, 'SAN MIGUEL', 64),
(651, 'SAN MIGUEL', 64),
(652, 'BOLIVAR', 64),
(653, 'CALQUIS', 64),
(654, 'CATILLUC', 64),
(655, 'EL PRADO', 64),
(656, 'LA FLORIDA', 64),
(657, 'LLAPA', 64),
(658, 'NANCHOC', 64),
(659, 'NIEPOS', 64),
(660, 'SAN GREGORIO', 64),
(661, 'SAN SILVESTRE DE COCHAN', 64),
(662, 'TONGOD', 64),
(663, 'UNION AGUA BLANCA', 64),
(664, 'SAN PABLO', 65),
(665, 'SAN BERNARDINO', 65),
(666, 'SAN LUIS', 65),
(667, 'TUMBADEN', 65),
(668, 'SANTA CRUZ', 66),
(669, 'ANDABAMBA', 66),
(670, 'CATACHE', 66),
(671, 'CHANCAYBAÑOS', 66),
(672, 'LA ESPERANZA', 66),
(673, 'NINABAMBA', 66),
(674, 'PULAN', 66),
(675, 'SAUCEPAMPA', 66),
(676, 'SEXI', 66),
(677, 'UTICYACU', 66),
(678, 'YAUYUCAN', 66),
(679, 'CALLAO', 67),
(680, 'BELLAVISTA', 67),
(681, 'CARMEN DE LA LEGUA REYNOSO', 67),
(682, 'LA PERLA', 67),
(683, 'LA PUNTA', 67),
(684, 'VENTANILLA', 67),
(685, 'CUSCO', 67),
(686, 'CCORCA', 67),
(687, 'POROY', 67),
(688, 'SAN JERONIMO', 67),
(689, 'SAN SEBASTIAN', 67),
(690, 'SANTIAGO', 67),
(691, 'SAYLLA', 67),
(692, 'WANCHAQ', 67),
(693, 'ACOMAYO', 68),
(694, 'ACOPIA', 68),
(695, 'ACOS', 68),
(696, 'MOSOC LLACTA', 68),
(697, 'POMACANCHI', 68),
(698, 'RONDOCAN', 68),
(699, 'SANGARARA', 68),
(700, 'ANTA', 69),
(701, 'ANCAHUASI', 69),
(702, 'CACHIMAYO', 69),
(703, 'CHINCHAYPUJIO', 69),
(704, 'HUAROCONDO', 69),
(705, 'LIMATAMBO', 69),
(706, 'MOLLEPATA', 69),
(707, 'PUCYURA', 69),
(708, 'ZURITE', 69),
(709, 'CALCA', 70),
(710, 'COYA', 70),
(711, 'LAMAY', 70),
(712, 'LARES', 70),
(713, 'PISAC', 70),
(714, 'SAN SALVADOR', 70),
(715, 'TARAY', 70),
(716, 'YANATILE', 70),
(717, 'YANAOCA', 71),
(718, 'CHECCA', 71),
(719, 'KUNTURKANKI', 71),
(720, 'LANGUI', 71),
(721, 'LAYO', 71),
(722, 'PAMPAMARCA', 71),
(723, 'QUEHUE', 71),
(724, 'TUPAC AMARU', 71),
(725, 'SICUANI', 72),
(726, 'CHECACUPE', 72),
(727, 'COMBAPATA', 72),
(728, 'MARANGANI', 72),
(729, 'PITUMARCA', 72),
(730, 'SAN PABLO', 72),
(731, 'SAN PEDRO', 72),
(732, 'TINTA', 72),
(733, 'SANTO TOMAS', 73),
(734, 'CAPACMARCA', 73),
(735, 'CHAMACA', 73),
(736, 'COLQUEMARCA', 73),
(737, 'LIVITACA', 73),
(738, 'LLUSCO', 73),
(739, 'QUIÑOTA', 73),
(740, 'VELILLE', 73),
(741, 'ESPINAR', 74),
(742, 'CONDOROMA', 74),
(743, 'COPORAQUE', 74),
(744, 'OCORURO', 74),
(745, 'PALLPATA', 74),
(746, 'PICHIGUA', 74),
(747, 'SUYCKUTAMBO', 74),
(748, 'ALTO PICHIGUA', 74),
(749, 'SANTA ANA', 75),
(750, 'ECHARATE', 75),
(751, 'HUAYOPATA', 75),
(752, 'MARANURA', 75),
(753, 'OCOBAMBA', 75),
(754, 'QUELLOUNO', 75),
(755, 'KIMBIRI', 75),
(756, 'SANTA TERESA', 75),
(757, 'VILCABAMBA', 75),
(758, 'PICHARI', 75),
(759, 'PARURO', 76),
(760, 'ACCHA', 76),
(761, 'CCAPI', 76),
(762, 'COLCHA', 76),
(763, 'HUANOQUITE', 76),
(764, 'OMACHA', 76),
(765, 'PACCARITAMBO', 76),
(766, 'PILLPINTO', 76),
(767, 'YAURISQUE', 76),
(768, 'PAUCARTAMBO', 77),
(769, 'CAICAY', 77),
(770, 'CHALLABAMBA', 77),
(771, 'COLQUEPATA', 77),
(772, 'HUANCARANI', 77),
(773, 'KOSÑIPATA', 77),
(774, 'URCOS', 78),
(775, 'ANDAHUAYLILLAS', 78),
(776, 'CAMANTI', 78),
(777, 'CCARHUAYO', 78),
(778, 'CCATCA', 78),
(779, 'CUSIPATA', 78),
(780, 'HUARO', 78),
(781, 'LUCRE', 78),
(782, 'MARCAPATA', 78),
(783, 'OCONGATE', 78),
(784, 'OROPESA', 78),
(785, 'QUIQUIJANA', 78),
(786, 'URUBAMBA', 79),
(787, 'CHINCHERO', 79),
(788, 'HUAYLLABAMBA', 79),
(789, 'MACHUPICCHU', 79),
(790, 'MARAS', 79),
(791, 'OLLANTAYTAMBO', 79),
(792, 'YUCAY', 79),
(793, 'HUANCAVELICA', 80),
(794, 'ACOBAMBILLA', 80),
(795, 'ACORIA', 80),
(796, 'CONAYCA', 80),
(797, 'CUENCA', 80),
(798, 'HUACHOCOLPA', 80),
(799, 'HUAYLLAHUARA', 80),
(800, 'IZCUCHACA', 80),
(801, 'LARIA', 80),
(802, 'MANTA', 80),
(803, 'MARISCAL CACERES', 80),
(804, 'MOYA', 80),
(805, 'NUEVO OCCORO', 80),
(806, 'PALCA', 80),
(807, 'PILCHACA', 80),
(808, 'VILCA', 80),
(809, 'YAULI', 80),
(810, 'ASCENSION', 80),
(811, 'HUANDO', 80),
(812, 'ACOBAMBA', 81),
(813, 'ANDABAMBA', 81),
(814, 'ANTA', 81),
(815, 'CAJA', 81),
(816, 'MARCAS', 81),
(817, 'PAUCARA', 81),
(818, 'POMACOCHA', 81),
(819, 'ROSARIO', 81),
(820, 'LIRCAY', 82),
(821, 'ANCHONGA', 82),
(822, 'CALLANMARCA', 82),
(823, 'CCOCHACCASA', 82),
(824, 'CHINCHO', 82),
(825, 'CONGALLA', 82),
(826, 'HUANCA-HUANCA', 82),
(827, 'HUAYLLAY GRANDE', 82),
(828, 'JULCAMARCA', 82),
(829, 'SAN ANTONIO DE ANTAPARCO', 82),
(830, 'SANTO TOMAS DE PATA', 82),
(831, 'SECCLLA', 82),
(832, 'CASTROVIRREYNA', 83),
(833, 'ARMA', 83),
(834, 'AURAHUA', 83),
(835, 'CAPILLAS', 83),
(836, 'CHUPAMARCA', 83),
(837, 'COCAS', 83),
(838, 'HUACHOS', 83),
(839, 'HUAMATAMBO', 83),
(840, 'MOLLEPAMPA', 83),
(841, 'SAN JUAN', 83),
(842, 'SANTA ANA', 83),
(843, 'TANTARA', 83),
(844, 'TICRAPO', 83),
(845, 'CHURCAMPA', 84),
(846, 'ANCO', 84),
(847, 'CHINCHIHUASI', 84),
(848, 'EL CARMEN', 84),
(849, 'LA MERCED', 84),
(850, 'LOCROJA', 84),
(851, 'PAUCARBAMBA', 84),
(852, 'SAN MIGUEL DE MAYOCC', 84),
(853, 'SAN PEDRO DE CORIS', 84),
(854, 'PACHAMARCA', 84),
(855, 'HUAYTARA', 85),
(856, 'AYAVI', 85),
(857, 'CORDOVA', 85),
(858, 'HUAYACUNDO ARMA', 85),
(859, 'LARAMARCA', 85),
(860, 'OCOYO', 85),
(861, 'PILPICHACA', 85),
(862, 'QUERCO', 85),
(863, 'QUITO-ARMA', 85),
(864, 'SAN ANTONIO DE CUSICANCHA', 85),
(865, 'SAN FRANCISCO DE SANGAYAICO', 85),
(866, 'SAN ISIDRO', 85),
(867, 'SANTIAGO DE CHOCORVOS', 85),
(868, 'SANTIAGO DE QUIRAHUARA', 85),
(869, 'SANTO DOMINGO DE CAPILLAS', 85),
(870, 'TAMBO', 85),
(871, 'PAMPAS', 86),
(872, 'ACOSTAMBO', 86),
(873, 'ACRAQUIA', 86),
(874, 'AHUAYCHA', 86),
(875, 'COLCABAMBA', 86),
(876, 'DANIEL HERNANDEZ', 86),
(877, 'HUACHOCOLPA', 86),
(878, 'HUARIBAMBA', 86),
(879, 'ÑAHUIMPUQUIO', 86),
(880, 'PAZOS', 86),
(881, 'QUISHUAR', 86),
(882, 'SALCABAMBA', 86),
(883, 'SALCAHUASI', 86),
(884, 'SAN MARCOS DE ROCCHAC', 86),
(885, 'SURCUBAMBA', 86),
(886, 'TINTAY PUNCU', 86),
(887, 'HUANUCO', 87),
(888, 'AMARILIS', 87),
(889, 'CHINCHAO', 87),
(890, 'CHURUBAMBA', 87),
(891, 'MARGOS', 87),
(892, 'QUISQUI', 87),
(893, 'SAN FRANCISCO DE CAYRAN', 87),
(894, 'SAN PEDRO DE CHAULAN', 87),
(895, 'SANTA MARIA DEL VALLE', 87),
(896, 'YARUMAYO', 87),
(897, 'PILLCO MARCA', 87),
(898, 'AMBO', 88),
(899, 'CAYNA', 88),
(900, 'COLPAS', 88),
(901, 'CONCHAMARCA', 88),
(902, 'HUACAR', 88),
(903, 'SAN FRANCISCO', 88),
(904, 'SAN RAFAEL', 88),
(905, 'TOMAY KICHWA', 88),
(906, 'LA UNION', 89),
(907, 'CHUQUIS', 89),
(908, 'MARIAS', 89),
(909, 'PACHAS', 89),
(910, 'QUIVILLA', 89),
(911, 'RIPAN', 89),
(912, 'SHUNQUI', 89),
(913, 'SILLAPATA', 89),
(914, 'YANAS', 89),
(915, 'HUACAYBAMBA', 90),
(916, 'CANCHABAMBA', 90),
(917, 'COCHABAMBA', 90),
(918, 'PINRA', 90),
(919, 'LLATA', 91),
(920, 'ARANCAY', 91),
(921, 'CHAVIN DE PARIARCA', 91),
(922, 'JACAS GRANDE', 91),
(923, 'JIRCAN', 91),
(924, 'MIRAFLORES', 91),
(925, 'MONZON', 91),
(926, 'PUNCHAO', 91),
(927, 'PUÑOS', 91),
(928, 'SINGA', 91),
(929, 'TANTAMAYO', 91),
(930, 'RUPA-RUPA', 92),
(931, 'DANIEL ALOMIA ROBLES', 92),
(932, 'HERMILIO VALDIZAN', 92),
(933, 'JOSE CRESPO Y CASTILLO', 92),
(934, 'LUYANDO', 92),
(935, 'MARIANO DAMASO BERAUN', 92),
(936, 'HUACRACHUCO', 93),
(937, 'CHOLON', 93),
(938, 'SAN BUENAVENTURA', 93),
(939, 'PANAO', 94),
(940, 'CHAGLLA', 94),
(941, 'MOLINO', 94),
(942, 'UMARI', 94),
(943, 'PUERTO INCA', 95),
(944, 'CODO DEL POZUZO', 95),
(945, 'HONORIA', 95),
(946, 'TOURNAVISTA', 95),
(947, 'YUYAPICHIS', 95),
(948, 'JESUS', 96),
(949, 'BAÑOS', 96),
(950, 'JIVIA', 96),
(951, 'QUEROPALCA', 96),
(952, 'RONDOS', 96),
(953, 'SAN FRANCISCO DE ASIS', 96),
(954, 'SAN MIGUEL DE CAURI', 96),
(955, 'CHAVINILLO', 97),
(956, 'CAHUAC', 97),
(957, 'CHACABAMBA', 97),
(958, 'APARICIO POMARES', 97),
(959, 'JACAS CHICO', 97),
(960, 'OBAS', 97),
(961, 'PAMPAMARCA', 97),
(962, 'CHORAS', 97),
(963, 'ICA', 98),
(964, 'LA TINGUIÑA', 98),
(965, 'LOS AQUIJES', 98),
(966, 'OCUCAJE', 98),
(967, 'PACHACUTEC', 98),
(968, 'PARCONA', 98),
(969, 'PUEBLO NUEVO', 98),
(970, 'SALAS', 98),
(971, 'SAN JOSE DE LOS MOLINOS', 98),
(972, 'SAN JUAN BAUTISTA', 98),
(973, 'SANTIAGO', 98),
(974, 'SUBTANJALLA', 98),
(975, 'TATE', 98),
(976, 'YAUCA DEL ROSARIO', 98),
(977, 'CHINCHA ALTA', 99),
(978, 'ALTO LARAN', 99),
(979, 'CHAVIN', 99),
(980, 'CHINCHA BAJA', 99),
(981, 'EL CARMEN', 99),
(982, 'GROCIO PRADO', 99),
(983, 'PUEBLO NUEVO', 99),
(984, 'SAN JUAN DE YANAC', 99),
(985, 'SAN PEDRO DE HUACARPANA', 99),
(986, 'SUNAMPE', 99),
(987, 'TAMBO DE MORA', 99),
(988, 'NAZCA', 100),
(989, 'CHANGUILLO', 100),
(990, 'EL INGENIO', 100),
(991, 'MARCONA', 100),
(992, 'VISTA ALEGRE', 100),
(993, 'PALPA', 101),
(994, 'LLIPATA', 101),
(995, 'RIO GRANDE', 101),
(996, 'SANTA CRUZ', 101),
(997, 'TIBILLO', 101),
(998, 'PISCO', 102),
(999, 'HUANCANO', 102),
(1000, 'HUMAY', 102),
(1001, 'INDEPENDENCIA', 102),
(1002, 'PARACAS', 102),
(1003, 'SAN ANDRES', 102),
(1004, 'SAN CLEMENTE', 102),
(1005, 'TUPAC AMARU INCA', 102),
(1006, 'HUANCAYO', 103),
(1007, 'CARHUACALLANGA', 103),
(1008, 'CHACAPAMPA', 103),
(1009, 'CHICCHE', 103),
(1010, 'CHILCA', 103),
(1011, 'CHONGOS ALTO', 103),
(1012, 'CHUPURO', 103),
(1013, 'COLCA', 103),
(1014, 'CULLHUAS', 103),
(1015, 'EL TAMBO', 103),
(1016, 'HUACRAPUQUIO', 103),
(1017, 'HUALHUAS', 103),
(1018, 'HUANCAN', 103),
(1019, 'HUASICANCHA', 103),
(1020, 'HUAYUCACHI', 103),
(1021, 'INGENIO', 103),
(1022, 'PARIAHUANCA', 103),
(1023, 'PILCOMAYO', 103),
(1024, 'PUCARA', 103),
(1025, 'QUICHUAY', 103),
(1026, 'QUILCAS', 103),
(1027, 'SAN AGUSTIN', 103),
(1028, 'SAN JERONIMO DE TUNAN', 103),
(1029, 'SAÑO', 103),
(1030, 'SAPALLANGA', 103),
(1031, 'SICAYA', 103),
(1032, 'SANTO DOMINGO DE ACOBAMBA', 103),
(1033, 'VIQUES', 103),
(1034, 'CONCEPCION', 103),
(1035, 'ACO', 103),
(1036, 'ANDAMARCA', 104),
(1037, 'CHAMBARA', 104),
(1038, 'COCHAS', 104),
(1039, 'COMAS', 104),
(1040, 'HEROINAS TOLEDO', 104),
(1041, 'MANZANARES', 104),
(1042, 'MARISCAL CASTILLA', 104),
(1043, 'MATAHUASI', 104),
(1044, 'MITO', 104),
(1045, 'NUEVE DE JULIO', 104),
(1046, 'ORCOTUNA', 104),
(1047, 'SAN JOSE DE QUERO', 104),
(1048, 'SANTA ROSA DE OCOPA', 104),
(1049, 'CHANCHAMAYO', 105),
(1050, 'PERENE', 105),
(1051, 'PICHANAQUI', 105),
(1052, 'SAN LUIS DE SHUARO', 105),
(1053, 'SAN RAMON', 105),
(1054, 'VITOC', 105),
(1055, 'JAUJA', 106),
(1056, 'ACOLLA', 106),
(1057, 'APATA', 106),
(1058, 'ATAURA', 106),
(1059, 'CANCHAYLLO', 106),
(1060, 'CURICACA', 106),
(1061, 'EL MANTARO', 106),
(1062, 'HUAMALI', 106),
(1063, 'HUARIPAMPA', 106),
(1064, 'HUERTAS', 106),
(1065, 'JANJAILLO', 106),
(1066, 'JULCAN', 106),
(1067, 'LEONOR ORDOÑEZ', 106),
(1068, 'LLOCLLAPAMPA', 106),
(1069, 'MARCO', 106),
(1070, 'MASMA', 106),
(1071, 'MASMA CHICCHE', 106),
(1072, 'MOLINOS', 106),
(1073, 'MONOBAMBA', 106),
(1074, 'MUQUI', 106),
(1075, 'MUQUIYAUYO', 106),
(1076, 'PACA', 106),
(1077, 'PACCHA', 106),
(1078, 'PANCAN', 106),
(1079, 'PARCO', 106),
(1080, 'POMACANCHA', 106),
(1081, 'RICRAN', 106),
(1082, 'SAN LORENZO', 106),
(1083, 'SAN PEDRO DE CHUNAN', 106),
(1084, 'SAUSA', 106),
(1085, 'SINCOS', 106),
(1086, 'TUNAN MARCA', 106),
(1087, 'YAULI', 106),
(1088, 'YAUYOS', 106),
(1089, 'JUNIN', 107),
(1090, 'CARHUAMAYO', 107),
(1091, 'ONDORES', 107),
(1092, 'ULCUMAYO', 107),
(1093, 'SATIPO', 108),
(1094, 'COVIRIALI', 108),
(1095, 'LLAYLLA', 108),
(1096, 'MAZAMARI', 108),
(1097, 'PAMPA HERMOSA', 108),
(1098, 'PANGOA', 108),
(1099, 'RIO NEGRO', 108),
(1100, 'RIO TAMBO', 108),
(1101, 'TARMA', 109),
(1102, 'ACOBAMBA', 109),
(1103, 'HUARICOLCA', 109),
(1104, 'HUASAHUASI', 109),
(1105, 'LA UNION', 109),
(1106, 'PALCA', 109),
(1107, 'PALCAMAYO', 109),
(1108, 'SAN PEDRO DE CAJAS', 109),
(1109, 'TAPO', 109),
(1110, 'LA OROYA', 110),
(1111, 'CHACAPALPA', 110),
(1112, 'HUAY-HUAY', 110),
(1113, 'MARCAPOMACOCHA', 110),
(1114, 'MOROCOCHA', 110),
(1115, 'PACCHA', 110),
(1116, 'SANTA BARBARA DE CARHUACAYAN', 110),
(1117, 'SANTA ROSA DE SACCO', 110),
(1118, 'SUITUCANCHA', 110),
(1119, 'YAULI', 110),
(1120, 'CHUPACA', 111),
(1121, 'AHUAC', 111),
(1122, 'CHONGOS BAJO', 111),
(1123, 'HUACHAC', 111),
(1124, 'HUAMANCACA CHICO', 111),
(1125, 'SAN JUAN DE ISCOS', 111),
(1126, 'SAN JUAN DE JARPA', 111),
(1127, 'TRES DE DICIEMBRE', 111),
(1128, 'YANACANCHA', 111),
(1129, 'TRUJILLO', 112),
(1130, 'EL PORVENIR', 112),
(1131, 'FLORENCIA DE MORA', 112),
(1132, 'HUANCHACO', 112),
(1133, 'LA ESPERANZA', 112),
(1134, 'LAREDO', 112),
(1135, 'MOCHE', 112),
(1136, 'POROTO', 112),
(1137, 'SALAVERRY', 112),
(1138, 'SIMBAL', 112),
(1139, 'VICTOR LARCO HERRERA', 112),
(1140, 'ASCOPE', 113),
(1141, 'CHICAMA', 113),
(1142, 'CHOCOPE', 113),
(1143, 'MAGDALENA DE CAO', 113),
(1144, 'PAIJAN', 113),
(1145, 'RAZURI', 113),
(1146, 'SANTIAGO DE CAO', 113),
(1147, 'CASA GRANDE', 113),
(1148, 'BOLIVAR', 114),
(1149, 'BAMBAMARCA', 114),
(1150, 'CONDORMARCA', 114),
(1151, 'LONGOTEA', 114),
(1152, 'UCHUMARCA', 114),
(1153, 'UCUNCHA', 114),
(1154, 'CHEPEN', 115),
(1155, 'PACANGA', 115),
(1156, 'PUEBLO NUEVO', 115),
(1157, 'JULCAN', 116),
(1158, 'CALAMARCA', 116),
(1159, 'CARABAMBA', 116),
(1160, 'HUASO', 116),
(1161, 'OTUZCO', 117),
(1162, 'AGALLPAMPA', 117),
(1163, 'CHARAT', 117),
(1164, 'HUARANCHAL', 117),
(1165, 'LA CUESTA', 117),
(1166, 'MACHE', 117),
(1167, 'PARANDAY', 117),
(1168, 'SALPO', 117),
(1169, 'SINSICAP', 117),
(1170, 'USQUIL', 117),
(1171, 'SAN PEDRO DE LLOC', 118),
(1172, 'GUADALUPE', 118),
(1173, 'JEQUETEPEQUE', 118),
(1174, 'PACASMAYO', 118),
(1175, 'SAN JOSE', 118),
(1176, 'TAYABAMBA', 119),
(1177, 'BULDIBUYO', 119),
(1178, 'CHILLIA', 119),
(1179, 'HUANCASPATA', 119),
(1180, 'HUAYLILLAS', 119),
(1181, 'HUAYO', 119),
(1182, 'ONGON', 119),
(1183, 'PARCOY', 119),
(1184, 'PATAZ', 119),
(1185, 'PIAS', 119),
(1186, 'SANTIAGO DE CHALLAS', 119),
(1187, 'TAURIJA', 119),
(1188, 'URPAY', 119),
(1189, 'HUAMACHUCO', 120),
(1190, 'CHUGAY', 120),
(1191, 'COCHORCO', 120),
(1192, 'CURGOS', 120),
(1193, 'MARCABAL', 120),
(1194, 'SANAGORAN', 120),
(1195, 'SARIN', 120),
(1196, 'SARTIMBAMBA', 120),
(1197, 'SANTIAGO DE CHUCO', 121),
(1198, 'ANGASMARCA', 121),
(1199, 'CACHICADAN', 121),
(1200, 'MOLLEBAMBA', 121),
(1201, 'MOLLEPATA', 121),
(1202, 'QUIRUVILCA', 121),
(1203, 'SANTA CRUZ DE CHUCA', 121),
(1204, 'SITABAMBA', 121),
(1205, 'GRAN CHIMU', 122),
(1206, 'CASCAS', 122),
(1207, 'LUCMA', 122),
(1208, 'MARMOT', 122),
(1209, 'SAYAPULLO', 122),
(1210, 'VIRU', 123),
(1211, 'CHAO', 123),
(1212, 'GUADALUPITO', 123),
(1213, 'CHICLAYO', 124),
(1214, 'CHONGOYAPE', 124),
(1215, 'ETEN', 124),
(1216, 'ETEN PUERTO', 124),
(1217, 'JOSE LEONARDO ORTIZ', 124),
(1218, 'LA VICTORIA', 124),
(1219, 'LAGUNAS', 124),
(1220, 'MONSEFU', 124),
(1221, 'NUEVA ARICA', 124),
(1222, 'OYOTUN', 124),
(1223, 'PICSI', 124),
(1224, 'PIMENTEL', 124),
(1225, 'REQUE', 124),
(1226, 'SANTA ROSA', 124),
(1227, 'SAÑA', 124),
(1228, 'CAYALTI', 124),
(1229, 'PATAPO', 124),
(1230, 'POMALCA', 124),
(1231, 'PUCALA', 124),
(1232, 'TUMAN', 124),
(1233, 'FERREÑAFE', 125),
(1234, 'CAÑARIS', 125),
(1235, 'INCAHUASI', 125),
(1236, 'MANUEL ANTONIO MESONES MURO', 125),
(1237, 'PITIPO', 125),
(1238, 'PUEBLO NUEVO', 125),
(1239, 'LAMBAYEQUE', 126),
(1240, 'CHOCHOPE', 126),
(1241, 'ILLIMO', 126),
(1242, 'JAYANCA', 126),
(1243, 'MOCHUMI', 126),
(1244, 'MORROPE', 126),
(1245, 'MOTUPE', 126),
(1246, 'OLMOS', 126),
(1247, 'PACORA', 126),
(1248, 'SALAS', 126),
(1249, 'SAN JOSE', 126),
(1250, 'TUCUME', 126),
(1251, 'LIMA', 127),
(1252, 'ANCON', 127),
(1253, 'ATE', 127),
(1254, 'BARRANCO', 127),
(1255, 'BREÑA', 127),
(1256, 'CARABAYLLO', 127),
(1257, 'CHACLACAYO', 127),
(1258, 'CHORRILLOS', 127),
(1259, 'CIENEGUILLA', 127),
(1260, 'COMAS', 127),
(1261, 'EL AGUSTINO', 127),
(1262, 'INDEPENDENCIA', 127),
(1263, 'JESUS MARIA', 127),
(1264, 'LA MOLINA', 127),
(1265, 'LA VICTORIA', 127),
(1266, 'LINCE', 127),
(1267, 'LOS OLIVOS', 127),
(1268, 'LURIGANCHO', 127),
(1269, 'LURIN', 127),
(1270, 'MAGDALENA DEL MAR', 127),
(1271, 'MAGDALENA VIEJA', 127),
(1272, 'MIRAFLORES', 127),
(1273, 'PACHACAMAC', 127),
(1274, 'PUCUSANA', 127),
(1275, 'PUENTE PIEDRA', 127),
(1276, 'PUNTA HERMOSA', 127),
(1277, 'PUNTA NEGRA', 127),
(1278, 'RIMAC', 127),
(1279, 'SAN BARTOLO', 127),
(1280, 'SAN BORJA', 127),
(1281, 'SAN ISIDRO', 127),
(1282, 'SAN JUAN DE LURIGANCHO', 127),
(1283, 'SAN JUAN DE MIRAFLORES', 127),
(1284, 'SAN LUIS', 127),
(1285, 'SAN MARTIN DE PORRES', 127),
(1286, 'SAN MIGUEL', 127),
(1287, 'SANTA ANITA', 127),
(1288, 'SANTA MARIA DEL MAR', 127),
(1289, 'SANTA ROSA', 127),
(1290, 'SANTIAGO DE SURCO', 127),
(1291, 'SURQUILLO', 127),
(1292, 'VILLA EL SALVADOR', 127),
(1293, 'VILLA MARIA DEL TRIUNFO', 127),
(1294, 'BARRANCA', 128),
(1295, 'PARAMONGA', 128),
(1296, 'PATIVILCA', 128),
(1297, 'SUPE', 128),
(1298, 'SUPE PUERTO', 128),
(1299, 'CAJATAMBO', 129),
(1300, 'COPA', 129),
(1301, 'GORGOR', 129),
(1302, 'HUANCAPON', 129),
(1303, 'MANAS', 129),
(1304, 'CANTA', 130),
(1305, 'ARAHUAY', 130),
(1306, 'HUAMANTANGA', 130),
(1307, 'HUAROS', 130),
(1308, 'LACHAQUI', 130),
(1309, 'SAN BUENAVENTURA', 130),
(1310, 'SANTA ROSA DE QUIVES', 130),
(1311, 'SAN VICENTE DE CAÑETE', 131),
(1312, 'ASIA', 131),
(1313, 'CALANGO', 131),
(1314, 'CERRO AZUL', 131),
(1315, 'CHILCA', 131),
(1316, 'COAYLLO', 131),
(1317, 'IMPERIAL', 131),
(1318, 'LUNAHUANA', 131),
(1319, 'MALA', 131),
(1320, 'NUEVO IMPERIAL', 131),
(1321, 'PACARAN', 131),
(1322, 'QUILMANA', 131),
(1323, 'SAN ANTONIO', 131),
(1324, 'SAN LUIS', 131),
(1325, 'SANTA CRUZ DE FLORES', 131),
(1326, 'ZUÑIGA', 131),
(1327, 'HUARAL', 132),
(1328, 'ATAVILLOS ALTO', 132),
(1329, 'ATAVILLOS BAJO', 132),
(1330, 'AUCALLAMA', 132),
(1331, 'CHANCAY', 132),
(1332, 'IHUARI', 132),
(1333, 'LAMPIAN', 132),
(1334, 'PACARAOS', 132),
(1335, 'SAN MIGUEL DE ACOS', 132),
(1336, 'SANTA CRUZ DE ANDAMARCA', 132),
(1337, 'SUMBILCA', 132),
(1338, 'VEINTISIETE DE NOVIEMBRE', 132),
(1339, 'MATUCANA', 133),
(1340, 'ANTIOQUIA', 133),
(1341, 'CALLAHUANCA', 133),
(1342, 'CARAMPOMA', 133),
(1343, 'CHICLA', 133),
(1344, 'CUENCA', 133),
(1345, 'HUACHUPAMPA', 133),
(1346, 'HUANZA', 133),
(1347, 'HUAROCHIRI', 133),
(1348, 'LAHUAYTAMBO', 133),
(1349, 'LANGA', 133),
(1350, 'LARAOS', 133),
(1351, 'MARIATANA', 133),
(1352, 'RICARDO PALMA', 133),
(1353, 'SAN ANDRES DE TUPICOCHA', 133),
(1354, 'SAN ANTONIO', 133),
(1355, 'SAN BARTOLOME', 133),
(1356, 'SAN DAMIAN', 133),
(1357, 'SAN JUAN DE IRIS', 133),
(1358, 'SAN JUAN DE TANTARANCHE', 133),
(1359, 'SAN LORENZO DE QUINTI', 133),
(1360, 'SAN MATEO', 133),
(1361, 'SAN MATEO DE OTAO', 133),
(1362, 'SAN PEDRO DE CASTA', 133),
(1363, 'SAN PEDRO DE HUANCAYRE', 133),
(1364, 'SANGALLAYA', 133),
(1365, 'SANTA CRUZ DE COCACHACRA', 133),
(1366, 'SANTA EULALIA', 133),
(1367, 'SANTIAGO DE ANCHUCAYA', 133),
(1368, 'SANTIAGO DE TUNA', 133),
(1369, 'SANTO DOMINGO DE LOS OLLEROS', 133),
(1370, 'SURCO', 133),
(1371, 'HUACHO', 134),
(1372, 'AMBAR', 134),
(1373, 'CALETA DE CARQUIN', 134),
(1374, 'CHECRAS', 134),
(1375, 'HUALMAY', 134),
(1376, 'HUAURA', 134),
(1377, 'LEONCIO PRADO', 134),
(1378, 'PACCHO', 134),
(1379, 'SANTA LEONOR', 134),
(1380, 'SANTA MARIA', 134),
(1381, 'SAYAN', 134),
(1382, 'VEGUETA', 134),
(1383, 'OYON', 135),
(1384, 'ANDAJES', 135),
(1385, 'CAUJUL', 135),
(1386, 'COCHAMARCA', 135),
(1387, 'NAVAN', 135),
(1388, 'PACHANGARA', 135),
(1389, 'YAUYOS', 136),
(1390, 'ALIS', 136),
(1391, 'AYAUCA', 136),
(1392, 'AYAVIRI', 136),
(1393, 'AZANGARO', 136),
(1394, 'CACRA', 136),
(1395, 'CARANIA', 136),
(1396, 'CATAHUASI', 136),
(1397, 'CHOCOS', 136),
(1398, 'COCHAS', 136),
(1399, 'COLONIA', 136),
(1400, 'HONGOS', 136),
(1401, 'HUAMPARA', 136),
(1402, 'HUANCAYA', 136),
(1403, 'HUANGASCAR', 136),
(1404, 'HUANTAN', 136),
(1405, 'HUAÑEC', 136),
(1406, 'LARAOS', 136),
(1407, 'LINCHA', 136),
(1408, 'MADEAN', 136),
(1409, 'MIRAFLORES', 136),
(1410, 'OMAS', 136),
(1411, 'PUTINZA', 136),
(1412, 'QUINCHES', 136),
(1413, 'QUINOCAY', 136),
(1414, 'SAN JOAQUIN', 136),
(1415, 'SAN PEDRO DE PILAS', 136),
(1416, 'TANTA', 136),
(1417, 'TAURIPAMPA', 136),
(1418, 'TOMAS', 136),
(1419, 'TUPE', 136),
(1420, 'VIÑAC', 136),
(1421, 'VITIS', 136),
(1422, 'IQUITOS', 137),
(1423, 'ALTO NANAY', 137),
(1424, 'FERNANDO LORES', 137),
(1425, 'INDIANA', 137),
(1426, 'LAS AMAZONAS', 137),
(1427, 'MAZAN', 137),
(1428, 'NAPO', 137),
(1429, 'PUNCHANA', 137),
(1430, 'PUTUMAYO', 137),
(1431, 'TORRES CAUSANA', 137),
(1432, 'BELEN', 137),
(1433, 'SAN JUAN BAUTISTA', 137),
(1434, 'YURIMAGUAS', 138),
(1435, 'BALSAPUERTO', 138),
(1436, 'BARRANCA', 138),
(1437, 'CAHUAPANAS', 138),
(1438, 'JEBEROS', 138),
(1439, 'LAGUNAS', 138),
(1440, 'MANSERICHE', 138),
(1441, 'MORONA', 138),
(1442, 'PASTAZA', 138),
(1443, 'SANTA CRUZ', 138),
(1444, 'TENIENTE CESAR LOPEZ ROJAS', 138),
(1445, 'NAUTA', 139),
(1446, 'PARINARI', 139),
(1447, 'TIGRE', 139),
(1448, 'TROMPETEROS', 139),
(1449, 'URARINAS', 139),
(1450, 'RAMON CASTILLA', 140),
(1451, 'PEBAS', 140),
(1452, 'YAVARI', 140),
(1453, 'SAN PABLO', 140),
(1454, 'REQUENA', 141),
(1455, 'ALTO TAPICHE', 141),
(1456, 'CAPELO', 141),
(1457, 'EMILIO SAN MARTIN', 141),
(1458, 'MAQUIA', 141),
(1459, 'PUINAHUA', 141),
(1460, 'SAQUENA', 141),
(1461, 'SOPLIN', 141),
(1462, 'TAPICHE', 141),
(1463, 'JENARO HERRERA', 141),
(1464, 'YAQUERANA', 141),
(1465, 'CONTAMANA', 142),
(1466, 'INAHUAYA', 142),
(1467, 'PADRE MARQUEZ', 142),
(1468, 'PAMPA HERMOSA', 142),
(1469, 'SARAYACU', 142),
(1470, 'VARGAS GUERRA', 142),
(1471, 'TAMBOPATA', 143),
(1472, 'INAMBARI', 143),
(1473, 'LAS PIEDRAS', 143),
(1474, 'LABERINTO', 143),
(1475, 'MANU', 144),
(1476, 'FITZCARRALD', 144),
(1477, 'MADRE DE DIOS', 144),
(1478, 'HUEPETUHE', 144),
(1479, 'IÑAPARI', 145),
(1480, 'IBERIA', 145),
(1481, 'TAHUAMANU', 145),
(1482, 'MOQUEGUA', 146),
(1483, 'CARUMAS', 146),
(1484, 'CUCHUMBAYA', 146),
(1485, 'SAMEGUA', 146),
(1486, 'SAN CRISTOBAL', 146),
(1487, 'TORATA', 146),
(1488, 'OMATE', 147),
(1489, 'CHOJATA', 147),
(1490, 'COALAQUE', 147),
(1491, 'ICHUÑA', 147),
(1492, 'LA CAPILLA', 147),
(1493, 'LLOQUE', 147),
(1494, 'MATALAQUE', 147),
(1495, 'PUQUINA', 147),
(1496, 'QUINISTAQUILLAS', 147),
(1497, 'UBINAS', 147),
(1498, 'YUNGA', 147),
(1499, 'ILO', 148),
(1500, 'EL ALGARROBAL', 148),
(1501, 'PACOCHA', 148),
(1502, 'CHAUPIMARCA', 149),
(1503, 'HUACHON', 149),
(1504, 'HUARIACA', 149),
(1505, 'HUAYLLAY', 149),
(1506, 'NINACACA', 149),
(1507, 'PALLANCHACRA', 149),
(1508, 'PAUCARTAMBO', 149),
(1509, 'SAN FCO.DE ASIS DE YARUSYACAN', 149),
(1510, 'SIMON BOLIVAR', 149),
(1511, 'TICLACAYAN', 149),
(1512, 'TINYAHUARCO', 149),
(1513, 'VICCO', 149),
(1514, 'YANACANCHA', 149),
(1515, 'YANAHUANCA', 150),
(1516, 'CHACAYAN', 150),
(1517, 'GOYLLARISQUIZGA', 150),
(1518, 'PAUCAR', 150),
(1519, 'SAN PEDRO DE PILLAO', 150),
(1520, 'SANTA ANA DE TUSI', 150),
(1521, 'TAPUC', 150),
(1522, 'VILCABAMBA', 150),
(1523, 'OXAPAMPA', 151),
(1524, 'CHONTABAMBA', 151),
(1525, 'HUANCABAMBA', 151),
(1526, 'PALCAZU', 151),
(1527, 'POZUZO', 151),
(1528, 'PUERTO BERMUDEZ', 151),
(1529, 'VILLA RICA', 151),
(1530, 'PIURA', 152),
(1531, 'CASTILLA', 152),
(1532, 'CATACAOS', 152),
(1533, 'CURA MORI', 152),
(1534, 'EL TALLAN', 152),
(1535, 'LA ARENA', 152),
(1536, 'LA UNION', 152),
(1537, 'LAS LOMAS', 152),
(1538, 'TAMBO GRANDE', 152),
(1539, 'AYABACA', 153),
(1540, 'FRIAS', 153),
(1541, 'JILILI', 153),
(1542, 'LAGUNAS', 153),
(1543, 'MONTERO', 153),
(1544, 'PACAIPAMPA', 153),
(1545, 'PAIMAS', 153),
(1546, 'SAPILLICA', 153),
(1547, 'SICCHEZ', 153),
(1548, 'SUYO', 153),
(1549, 'HUANCABAMBA', 154),
(1550, 'CANCHAQUE', 154),
(1551, 'EL CARMEN DE LA FRONTERA', 154),
(1552, 'HUARMACA', 154),
(1553, 'LALAQUIZ', 154),
(1554, 'SAN MIGUEL DE EL FAIQUE', 154),
(1555, 'SONDOR', 154),
(1556, 'SONDORILLO', 154),
(1557, 'CHULUCANAS', 155),
(1558, 'BUENOS AIRES', 155),
(1559, 'CHALACO', 155),
(1560, 'LA MATANZA', 155),
(1561, 'MORROPON', 155),
(1562, 'SALITRAL', 155),
(1563, 'SAN JUAN DE BIGOTE', 155),
(1564, 'SANTA CATALINA DE MOSSA', 155),
(1565, 'SANTO DOMINGO', 155),
(1566, 'YAMANGO', 155),
(1567, 'PAITA', 155),
(1568, 'AMOTAPE', 156),
(1569, 'ARENAL', 156),
(1570, 'COLAN', 156),
(1571, 'LA HUACA', 156),
(1572, 'TAMARINDO', 156),
(1573, 'VICHAYAL', 156),
(1574, 'SULLANA', 157),
(1575, 'BELLAVISTA', 157),
(1576, 'IGNACIO ESCUDERO', 157),
(1577, 'LANCONES', 157),
(1578, 'MARCAVELICA', 157),
(1579, 'MIGUEL CHECA', 157),
(1580, 'QUERECOTILLO', 157),
(1581, 'SALITRAL', 157),
(1582, 'PARIÑAS', 158),
(1583, 'EL ALTO', 158),
(1584, 'LA BREA', 158),
(1585, 'LOBITOS', 158),
(1586, 'LOS ORGANOS', 158),
(1587, 'MANCORA', 158),
(1588, 'SECHURA', 159),
(1589, 'BELLAVISTA DE LA UNION', 159),
(1590, 'BERNAL', 159),
(1591, 'CRISTO NOS VALGA', 159),
(1592, 'VICE', 159),
(1593, 'RINCONADA LLICUAR', 159),
(1594, 'PUNO', 160),
(1595, 'ACORA', 160),
(1596, 'AMANTANI', 160),
(1597, 'ATUNCOLLA', 160),
(1598, 'CAPACHICA', 160),
(1599, 'CHUCUITO', 160),
(1600, 'COATA', 160),
(1601, 'HUATA', 160),
(1602, 'MAÑAZO', 160),
(1603, 'PAUCARCOLLA', 160),
(1604, 'PICHACANI', 160),
(1605, 'PLATERIA', 160),
(1606, 'SAN ANTONIO', 160),
(1607, 'TIQUILLACA', 160),
(1608, 'VILQUE', 160),
(1609, 'SAN FCO.DE ASIS DE YARUSYACAN', 161),
(1610, 'SIMON BOLIVAR', 161),
(1611, 'TICLACAYAN', 161),
(1612, 'TINYAHUARCO', 161),
(1613, 'VICCO', 161),
(1614, 'YANACANCHA', 161),
(1615, 'YANAHUANCA', 161),
(1616, 'CHACAYAN', 161),
(1617, 'GOYLLARISQUIZGA', 161),
(1618, 'PAUCAR', 161),
(1619, 'SAN PEDRO DE PILLAO', 161),
(1620, 'SANTA ANA DE TUSI', 161),
(1621, 'TAPUC', 161),
(1622, 'VILCABAMBA', 161),
(1623, 'OXAPAMPA', 161),
(1624, 'CHONTABAMBA', 161),
(1625, 'HUANCABAMBA', 161),
(1626, 'PALCAZU', 161),
(1627, 'POZUZO', 161),
(1628, 'PUERTO BERMUDEZ', 161),
(1629, 'VILLA RICA', 161),
(1630, 'PIURA', 161),
(1631, 'CASTILLA', 161),
(1632, 'CATACAOS', 161),
(1633, 'CURA MORI', 161),
(1634, 'EL TALLAN', 161),
(1635, 'LA ARENA', 161),
(1636, 'LA UNION', 161),
(1637, 'LAS LOMAS', 161),
(1638, 'TAMBO GRANDE', 161),
(1639, 'AYABACA', 161),
(1640, 'FRIAS', 161),
(1641, 'JILILI', 161),
(1642, 'LAGUNAS', 161),
(1643, 'MONTERO', 161),
(1644, 'PACAIPAMPA', 161),
(1645, 'PAIMAS', 161),
(1646, 'SAPILLICA', 161),
(1647, 'SICCHEZ', 161),
(1648, 'SUYO', 161),
(1649, 'HUANCABAMBA', 161),
(1650, 'CANCHAQUE', 161),
(1651, 'EL CARMEN DE LA FRONTERA', 161),
(1652, 'HUARMACA', 161),
(1653, 'LALAQUIZ', 161),
(1654, 'SAN MIGUEL DE EL FAIQUE', 161),
(1655, 'SONDOR', 161),
(1656, 'SONDORILLO', 161),
(1657, 'CHULUCANAS', 161),
(1658, 'BUENOS AIRES', 161),
(1659, 'CHALACO', 161),
(1660, 'LA MATANZA', 161),
(1661, 'MORROPON', 161),
(1662, 'SALITRAL', 161),
(1663, 'SAN JUAN DE BIGOTE', 161),
(1664, 'SANTA CATALINA DE MOSSA', 161),
(1665, 'SANTO DOMINGO', 161),
(1666, 'YAMANGO', 161),
(1667, 'PAITA', 161),
(1668, 'AMOTAPE', 161),
(1669, 'ARENAL', 161),
(1670, 'COLAN', 161),
(1671, 'LA HUACA', 161),
(1672, 'TAMARINDO', 161),
(1673, 'VICHAYAL', 161),
(1674, 'SULLANA', 161),
(1675, 'BELLAVISTA', 161),
(1676, 'IGNACIO ESCUDERO', 161),
(1677, 'LANCONES', 161),
(1678, 'MARCAVELICA', 161),
(1679, 'MIGUEL CHECA', 161),
(1680, 'QUERECOTILLO', 161),
(1681, 'SALITRAL', 161),
(1682, 'PARIÑAS', 161),
(1683, 'EL ALTO', 161),
(1684, 'LA BREA', 161),
(1685, 'LOBITOS', 161),
(1686, 'LOS ORGANOS', 161),
(1687, 'MANCORA', 161),
(1688, 'SECHURA', 161),
(1689, 'BELLAVISTA DE LA UNION', 161),
(1690, 'BERNAL', 161),
(1691, 'CRISTO NOS VALGA', 161),
(1692, 'VICE', 161),
(1693, 'RINCONADA LLICUAR', 161),
(1694, 'PUNO', 161),
(1695, 'ACORA', 161),
(1696, 'AMANTANI', 161),
(1697, 'ATUNCOLLA', 161),
(1698, 'CAPACHICA', 161),
(1699, 'CHUCUITO', 161),
(1700, 'COATA', 161),
(1701, 'HUATA', 161),
(1702, 'MAÑAZO', 161),
(1703, 'PAUCARCOLLA', 161),
(1704, 'PICHACANI', 161),
(1705, 'PLATERIA', 161),
(1706, 'SAN ANTONIO', 161),
(1707, 'TIQUILLACA', 161),
(1708, 'VILQUE', 161),
(1709, 'AZANGARO', 161),
(1710, 'ACHAYA', 161),
(1711, 'ARAPA', 161),
(1712, 'ASILLO', 161),
(1713, 'CAMINACA', 161),
(1714, 'CHUPA', 161),
(1715, 'JOSE DOMINGO CHOQUEHUANCA', 161),
(1716, 'MUÑANI', 161),
(1717, 'POTONI', 161),
(1718, 'SAMAN', 161),
(1719, 'SAN ANTON', 161),
(1720, 'SAN JOSE', 161),
(1721, 'SAN JUAN DE SALINAS', 161),
(1722, 'SANTIAGO DE PUPUJA', 161),
(1723, 'TIRAPATA', 161),
(1724, 'MACUSANI', 162),
(1725, 'AJOYANI', 162),
(1726, 'AYAPATA', 162),
(1727, 'COASA', 162),
(1728, 'CORANI', 162),
(1729, 'CRUCERO', 162),
(1730, 'ITUATA', 162),
(1731, 'OLLACHEA', 162),
(1732, 'SAN GABAN', 162),
(1733, 'USICAYOS', 162),
(1734, 'JULI', 163),
(1735, 'DESAGUADERO', 163),
(1736, 'HUACULLANI', 163),
(1737, 'KELLUYO', 163),
(1738, 'PISACOMA', 163),
(1739, 'POMATA', 163),
(1740, 'ZEPITA', 163),
(1741, 'ILAVE', 164),
(1742, 'CAPAZO', 164),
(1743, 'PILCUYO', 164),
(1744, 'SANTA ROSA', 164),
(1745, 'CONDURIRI', 164),
(1746, 'HUANCANE', 165),
(1747, 'COJATA', 165),
(1748, 'HUATASANI', 165),
(1749, 'INCHUPALLA', 165),
(1750, 'PUSI', 165),
(1751, 'ROSASPATA', 165),
(1752, 'TARACO', 165),
(1753, 'VILQUE CHICO', 165),
(1754, 'LAMPA', 166),
(1755, 'CABANILLA', 166),
(1756, 'CALAPUJA', 166),
(1757, 'NICASIO', 166),
(1758, 'OCUVIRI', 166),
(1759, 'PALCA', 166),
(1760, 'PARATIA', 166),
(1761, 'PUCARA', 166),
(1762, 'SANTA LUCIA', 166),
(1763, 'VILAVILA', 166),
(1764, 'AYAVIRI', 167),
(1765, 'ANTAUTA', 167),
(1766, 'CUPI', 167),
(1767, 'LLALLI', 167),
(1768, 'MACARI', 167),
(1769, 'NUÑOA', 167),
(1770, 'ORURILLO', 167),
(1771, 'SANTA ROSA', 167),
(1772, 'UMACHIRI', 167),
(1773, 'MOHO', 168),
(1774, 'CONIMA', 168),
(1775, 'HUAYRAPATA', 168),
(1776, 'TILALI', 168),
(1777, 'PUTINA', 169),
(1778, 'ANANEA', 169),
(1779, 'PEDRO VILCA APAZA', 169),
(1780, 'QUILCAPUNCU', 169),
(1781, 'SINA', 169),
(1782, 'JULIACA', 170),
(1783, 'CABANA', 170),
(1784, 'CABANILLAS', 170),
(1785, 'CARACOTO', 170),
(1786, 'SANDIA', 171),
(1787, 'CUYOCUYO', 171),
(1788, 'LIMBANI', 171),
(1789, 'PATAMBUCO', 171),
(1790, 'PHARA', 171),
(1791, 'QUIACA', 171),
(1792, 'SAN JUAN DEL ORO', 171),
(1793, 'YANAHUAYA', 171),
(1794, 'ALTO INAMBARI', 171),
(1795, 'YUNGUYO', 172),
(1796, 'ANAPIA', 172),
(1797, 'COPANI', 172),
(1798, 'CUTURAPI', 172),
(1799, 'OLLARAYA', 172),
(1800, 'TINICACHI', 172),
(1801, 'UNICACHI', 172),
(1802, 'MOYOBAMBA', 173),
(1803, 'CALZADA', 173),
(1804, 'HABANA', 173),
(1805, 'JEPELACIO', 173),
(1806, 'SORITOR', 173),
(1807, 'YANTALO', 173),
(1808, 'BELLAVISTA', 174),
(1809, 'ALTO BIAVO', 174),
(1810, 'BAJO BIAVO', 174),
(1811, 'HUALLAGA', 174),
(1812, 'SAN PABLO', 174),
(1813, 'SAN RAFAEL', 174),
(1814, 'SAN JOSE DE SISA', 175),
(1815, 'AGUA BLANCA', 175),
(1816, 'SAN MARTIN', 175),
(1817, 'SANTA ROSA', 175),
(1818, 'SHATOJA', 175),
(1819, 'SAPOSOA', 176),
(1820, 'ALTO SAPOSOA', 176),
(1821, 'EL ESLABON', 176),
(1822, 'PISCOYACU', 176),
(1823, 'SACANCHE', 176),
(1824, 'TINGO DE SAPOSOA', 176),
(1825, 'LAMAS', 177),
(1826, 'ALONSO DE ALVARADO', 177),
(1827, 'BARRANQUITA', 177),
(1828, 'CAYNARACHI', 177),
(1829, 'CUÑUMBUQUI', 177),
(1830, 'PINTO RECODO', 177),
(1831, 'RUMISAPA', 177),
(1832, 'SAN ROQUE DE CUMBAZA', 177),
(1833, 'SHANAO', 177),
(1834, 'TABALOSOS', 177),
(1835, 'ZAPATERO', 177),
(1836, 'JUANJUI', 178),
(1837, 'CAMPANILLA', 178),
(1838, 'HUICUNGO', 178),
(1839, 'PACHIZA', 178),
(1840, 'PAJARILLO', 178),
(1841, 'PICOTA', 179),
(1842, 'BUENOS AIRES', 179),
(1843, 'CASPISAPA', 179),
(1844, 'PILLUANA', 179),
(1845, 'PUCACACA', 179),
(1846, 'SAN CRISTOBAL', 179),
(1847, 'SAN HILARION', 179),
(1848, 'SHAMBOYACU', 179),
(1849, 'TINGO DE PONASA', 179),
(1850, 'TRES UNIDOS', 179),
(1851, 'RIOJA', 180),
(1852, 'AWAJUN', 180),
(1853, 'ELIAS SOPLIN VARGAS', 180),
(1854, 'NUEVA CAJAMARCA', 180),
(1855, 'PARDO MIGUEL', 180),
(1856, 'POSIC', 180),
(1857, 'SAN FERNANDO', 180),
(1858, 'YORONGOS', 180),
(1859, 'YURACYACU', 180),
(1860, 'TARAPOTO', 181),
(1861, 'ALBERTO LEVEAU', 181),
(1862, 'CACATACHI', 181),
(1863, 'CHAZUTA', 181),
(1864, 'CHIPURANA', 181),
(1865, 'EL PORVENIR', 181),
(1866, 'HUIMBAYOC', 181),
(1867, 'JUAN GUERRA', 181),
(1868, 'LA BANDA DE SHILCAYO', 181),
(1869, 'MORALES', 181),
(1870, 'PAPAPLAYA', 181),
(1871, 'SAN ANTONIO', 181),
(1872, 'SAUCE', 181),
(1873, 'SHAPAJA', 181),
(1874, 'TOCACHE', 182),
(1875, 'NUEVO PROGRESO', 182),
(1876, 'POLVORA', 182),
(1877, 'SHUNTE', 182),
(1878, 'UCHIZA', 182),
(1879, 'TACNA', 183),
(1880, 'ALTO DE LA ALIANZA', 183),
(1881, 'CALANA', 183),
(1882, 'CIUDAD NUEVA', 183),
(1883, 'INCLAN', 183),
(1884, 'PACHIA', 183),
(1885, 'PALCA', 183),
(1886, 'POCOLLAY', 183),
(1887, 'SAMA', 183),
(1888, 'CORONEL GREGORIO ALBARRACIN LANCHIPA', 183),
(1889, 'CANDARAVE', 184),
(1890, 'CAIRANI', 184),
(1891, 'CAMILACA', 184),
(1892, 'CURIBAYA', 184),
(1893, 'HUANUARA', 184),
(1894, 'QUILAHUANI', 184),
(1895, 'LOCUMBA', 185),
(1896, 'ILABAYA', 185),
(1897, 'ITE', 185),
(1898, 'TARATA', 186),
(1899, 'CHUCATAMANI', 186),
(1900, 'ESTIQUE', 186),
(1901, 'ESTIQUE-PAMPA', 186),
(1902, 'SITAJARA', 186),
(1903, 'SUSAPAYA', 186),
(1904, 'TARUCACHI', 186),
(1905, 'TICACO', 186),
(1906, 'TUMBES', 187),
(1907, 'CORRALES', 187),
(1908, 'LA CRUZ', 187),
(1909, 'PAMPAS DE HOSPITAL', 187),
(1910, 'SAN JACINTO', 187),
(1911, 'SAN JUAN DE LA VIRGEN', 187),
(1912, 'ZORRITOS', 188),
(1913, 'CASITAS', 188),
(1914, 'ZARUMILLA', 189),
(1915, 'AGUAS VERDES', 189),
(1916, 'MATAPALO', 189),
(1917, 'PAPAYAL', 189),
(1918, 'CALLERIA', 190),
(1919, 'CAMPOVERDE', 190),
(1920, 'IPARIA', 190),
(1921, 'MASISEA', 190),
(1922, 'YARINACOCHA', 190),
(1923, 'NUEVA REQUENA', 190),
(1924, 'RAYMONDI', 191),
(1925, 'SEPAHUA', 191),
(1926, 'TAHUANIA', 191),
(1927, 'YURUA', 191),
(1928, 'PADRE ABAD', 192),
(1929, 'IRAZOLA', 192),
(1930, 'CURIMANA', 192),
(1931, 'PURUS', 193),
(1932, 'Extranjero', 194);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `dependencia_escuela_id` int(10) UNSIGNED NOT NULL,
  `docente_categoria_id` int(10) UNSIGNED DEFAULT NULL,
  `docente_condicion_id` int(10) UNSIGNED DEFAULT NULL,
  `docente_dedicacion_id` int(10) UNSIGNED DEFAULT NULL,
  `dependencia_academico_id` int(10) UNSIGNED DEFAULT NULL,
  `h_lectivas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_n_lectivas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grado_magister` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grado_doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_nombramiento` date DEFAULT NULL,
  `es_jefe_practica` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`user_id`, `dependencia_escuela_id`, `docente_categoria_id`, `docente_condicion_id`, `docente_dedicacion_id`, `dependencia_academico_id`, `h_lectivas`, `h_n_lectivas`, `profesion`, `grado_magister`, `grado_doctor`, `fecha_ingreso`, `fecha_nombramiento`, `es_jefe_practica`, `created_at`, `updated_at`) VALUES
(2, 25, 1, 1, 1, 50, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 25, 1, 1, 1, 50, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 22, 1, 1, 1, 48, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 30, 1, 1, 1, 54, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_categorias`
--

CREATE TABLE `docente_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `docente_categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docente_categorias`
--

INSERT INTO `docente_categorias` (`id`, `docente_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Principal', NULL, NULL),
(2, 'Asociado', NULL, NULL),
(3, 'Auxiliar', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_condicions`
--

CREATE TABLE `docente_condicions` (
  `id` int(10) UNSIGNED NOT NULL,
  `docente_condicion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docente_condicions`
--

INSERT INTO `docente_condicions` (`id`, `docente_condicion`, `created_at`, `updated_at`) VALUES
(1, 'Nombrado', NULL, NULL),
(2, 'Contratado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_dedicacions`
--

CREATE TABLE `docente_dedicacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `docente_dedicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_lectivas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_n_lectivas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docente_dedicacions`
--

INSERT INTO `docente_dedicacions` (`id`, `docente_dedicacion`, `h_lectivas`, `h_n_lectivas`, `created_at`, `updated_at`) VALUES
(1, 'Exclusiva', '40', '10', NULL, NULL),
(2, 'Completa', '40', '10', NULL, NULL),
(3, 'Parcial', '20', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_otros`
--

CREATE TABLE `docente_otros` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `carga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctorados`
--

CREATE TABLE `doctorados` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctorado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `doctorados`
--

INSERT INTO `doctorados` (`id`, `doctorado`, `created_at`, `updated_at`) VALUES
(1, 'Doctorado en Ciencias de la Educación', NULL, NULL),
(2, 'Doctorado en Gestión Empresarial', NULL, NULL),
(3, 'Doctorado en Ciencias de la Salud', NULL, NULL),
(4, 'Doctorado en Derecho', NULL, NULL),
(5, 'Doctorado en Contabilidad', NULL, NULL),
(6, 'Doctorado en Ciencias Económicas y Sociales', NULL, NULL),
(7, 'Doctorado en Administración', NULL, NULL),
(8, 'Doctorado en Medicina Veterinaria', NULL, NULL),
(9, 'Doctorado en Medio Ambiente y Desarrollo Sostenible', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `escuela` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facultad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id`, `escuela`, `facultad_id`, `created_at`, `updated_at`) VALUES
(1, 'INGENIERIA AGRONOMICA', 1, NULL, NULL),
(2, 'INGENIERIA AGROINDUSTRIAL', 1, NULL, NULL),
(3, 'INGENIERIA AGROPECUARIA FORESTAL', 1, NULL, NULL),
(4, 'MEDICINA HUMANA', 2, NULL, NULL),
(5, 'ODONTOLOGIA', 2, NULL, NULL),
(6, 'PSICOLOGIA', 3, NULL, NULL),
(7, 'ENFERMERIA', 4, NULL, NULL),
(8, 'OBSTETRICIA', 5, NULL, NULL),
(9, 'CIENCIAS ADMINISTRATIVAS', 6, NULL, NULL),
(10, 'TURISMO Y HOTELERIA', 6, NULL, NULL),
(11, 'CIENCIAS CONTABLES Y FINANCIERAS', 7, NULL, NULL),
(12, 'ECONOMIA', 8, NULL, NULL),
(13, 'SOCIOLOGIA', 9, NULL, NULL),
(14, 'CIENCIAS DE LA COMUNICACION SOCIAL', 9, NULL, NULL),
(15, 'EDUCACION INICIAL', 10, NULL, NULL),
(16, 'EDUCACION PRIMARIA', 10, NULL, NULL),
(17, 'EDUCACION FISICA', 10, NULL, NULL),
(18, 'FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 10, NULL, NULL),
(19, 'LENGUA Y LITERATURA', 10, NULL, NULL),
(20, 'CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 10, NULL, NULL),
(21, 'MATEMATICA Y FISICA', 10, NULL, NULL),
(22, 'BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 10, NULL, NULL),
(23, 'DERECHO Y CIENCIAS POLITICAS', 11, NULL, NULL),
(24, 'INGENIERIA CIVIL', 12, NULL, NULL),
(25, 'ARQUITECTURA', 12, NULL, NULL),
(26, 'INGENIERIA INDUSTRIAL', 13, NULL, NULL),
(27, 'INGENIERIA DE SISTEMAS', 13, NULL, NULL),
(28, 'MEDICINA VETERINARIA', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela_sedes`
--

CREATE TABLE `escuela_sedes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sede_id` int(10) UNSIGNED NOT NULL,
  `escuela_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `escuela_sedes`
--

INSERT INTO `escuela_sedes` (`id`, `sede_id`, `escuela_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 5, NULL, NULL),
(5, 1, 6, NULL, NULL),
(6, 1, 7, NULL, NULL),
(7, 1, 8, NULL, NULL),
(8, 1, 9, NULL, NULL),
(9, 1, 10, NULL, NULL),
(10, 1, 11, NULL, NULL),
(11, 1, 12, NULL, NULL),
(12, 1, 13, NULL, NULL),
(13, 1, 14, NULL, NULL),
(14, 1, 15, NULL, NULL),
(15, 1, 16, NULL, NULL),
(16, 1, 17, NULL, NULL),
(17, 1, 18, NULL, NULL),
(18, 1, 19, NULL, NULL),
(19, 1, 20, NULL, NULL),
(20, 1, 21, NULL, NULL),
(21, 1, 22, NULL, NULL),
(22, 1, 23, NULL, NULL),
(23, 1, 24, NULL, NULL),
(24, 1, 25, NULL, NULL),
(25, 1, 26, NULL, NULL),
(26, 1, 27, NULL, NULL),
(27, 1, 28, NULL, NULL),
(28, 2, 1, NULL, NULL),
(29, 3, 11, NULL, NULL),
(30, 3, 16, NULL, NULL),
(31, 4, 1, NULL, NULL),
(32, 5, 11, NULL, NULL),
(33, 6, 11, NULL, NULL),
(34, 6, 27, NULL, NULL),
(35, 7, 16, NULL, NULL),
(36, 8, 1, NULL, NULL),
(37, 8, 11, NULL, NULL),
(38, 9, 2, NULL, NULL),
(39, 10, 11, NULL, NULL),
(40, 10, 28, NULL, NULL),
(41, 11, 11, NULL, NULL),
(42, 12, 28, NULL, NULL),
(43, 13, 11, NULL, NULL),
(44, 13, 1, NULL, NULL),
(45, 14, 16, NULL, NULL),
(46, 15, 9, NULL, NULL),
(47, 16, 11, NULL, NULL),
(48, 17, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `cod_univ` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dependencia_escuela_id` int(10) UNSIGNED NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `modalidad_ingreso` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '17',
  `f_ingreso` date DEFAULT NULL,
  `f_egreso` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`user_id`, `cod_univ`, `dependencia_escuela_id`, `estado`, `modalidad_ingreso`, `f_ingreso`, `f_egreso`, `created_at`, `updated_at`) VALUES
(3, '2012000012', 42, '1', '17', '2012-03-03', '2017-12-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios_complementarios`
--

CREATE TABLE `estudios_complementarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `estudios_complementario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_civils`
--

CREATE TABLE `est_civils` (
  `id` int(10) UNSIGNED NOT NULL,
  `est_civil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `est_civils`
--

INSERT INTO `est_civils` (`id`, `est_civil`, `created_at`, `updated_at`) VALUES
(1, 'Soltero(a)', NULL, NULL),
(2, 'Casado(a)', NULL, NULL),
(3, 'Conviviente', NULL, NULL),
(4, 'Separado', NULL, NULL),
(5, 'Divorciado(a)', NULL, NULL),
(6, 'Viudo', NULL, NULL),
(7, 'No Especifica', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultads`
--

CREATE TABLE `facultads` (
  `id` int(10) UNSIGNED NOT NULL,
  `facultad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facultads`
--

INSERT INTO `facultads` (`id`, `facultad`, `created_at`, `updated_at`) VALUES
(1, 'Ciencias Agrarias', NULL, NULL),
(2, 'Medicina', NULL, NULL),
(3, 'Psicología', NULL, NULL),
(4, 'Enfermería', NULL, NULL),
(5, 'Obstetricia', NULL, NULL),
(6, 'Ciencias Administrativas y Turismo', NULL, NULL),
(7, 'Ciencias Contables y Financieras', NULL, NULL),
(8, 'Economía', NULL, NULL),
(9, 'Ciencias Sociales', NULL, NULL),
(10, 'Ciencias de la Educación', NULL, NULL),
(11, 'Derecho y Ciencias Políticas', NULL, NULL),
(12, 'Ingeniería Civil y Arquitectura', NULL, NULL),
(13, 'Ingeniería Industrial y de Sistemas', NULL, NULL),
(14, 'Medicina Veterinaria y Zootecnia', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_bachillers`
--

CREATE TABLE `grado_bachillers` (
  `id` int(10) UNSIGNED NOT NULL,
  `grado_bachiller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_doctors`
--

CREATE TABLE `grado_doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `grado_doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_magisters`
--

CREATE TABLE `grado_magisters` (
  `id` int(10) UNSIGNED NOT NULL,
  `grado_magister` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `dia_inicio` date NOT NULL,
  `estado_horario` int(11) NOT NULL DEFAULT '1',
  `carga_lectiva_id` int(10) UNSIGNED NOT NULL,
  `ambiente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora_inicio`, `hora_fin`, `dia_inicio`, `estado_horario`, `carga_lectiva_id`, `ambiente_id`, `created_at`, `updated_at`) VALUES
(1, '09:00:00', '11:00:00', '2018-05-28', 1, 1, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(2, '09:00:00', '11:00:00', '2018-05-31', 1, 1, 1, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(3, '09:00:00', '11:00:00', '2018-05-28', 1, 2, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(4, '09:00:00', '11:00:00', '2018-05-31', 1, 2, 2, '2018-06-05 21:40:31', '2018-06-05 21:40:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_alumnos`
--

CREATE TABLE `inscripcion_alumnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `inscripcion_curso_disponible_id` int(10) UNSIGNED NOT NULL,
  `pago_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_cursos`
--

CREATE TABLE `inscripcion_cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `inscripcion_curso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscripcion_modulo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion_cursos`
--

INSERT INTO `inscripcion_cursos` (`id`, `inscripcion_curso`, `inscripcion_modulo_id`, `created_at`, `updated_at`) VALUES
(1, 'TIC´S', 1, NULL, NULL),
(2, 'Word', 1, NULL, NULL),
(3, 'Excel', 1, NULL, NULL),
(4, 'Power Point', 1, NULL, NULL),
(5, 'Corel Draw', 2, NULL, NULL),
(6, 'Adobe Photoshop', 2, NULL, NULL),
(7, 'Adobe  Indesing', 2, NULL, NULL),
(8, 'Adobe Muse', 2, NULL, NULL),
(9, 'Excel Profesional', 3, NULL, NULL),
(10, 'Excel y Visual Basic', 3, NULL, NULL),
(11, 'Acces', 3, NULL, NULL),
(12, 'MS Project', 3, NULL, NULL),
(13, 'HTML y CSS', 4, NULL, NULL),
(14, 'Bootstrap', 4, NULL, NULL),
(15, 'Adobe Animate', 4, NULL, NULL),
(16, 'Java Script Y Jquery', 4, NULL, NULL),
(17, 'Sony Vegas', 5, NULL, NULL),
(18, 'Adobe Premier', 5, NULL, NULL),
(19, 'Adobe After Effects', 5, NULL, NULL),
(20, 'Taller Multimedia', 5, NULL, NULL),
(21, 'Ensamblajes de Pc´s', 6, NULL, NULL),
(22, 'Mantenimiento de Pc´s', 6, NULL, NULL),
(23, 'Software de Utilitarios', 6, NULL, NULL),
(24, 'Diagnóstico y Reparación de Pc´s', 6, NULL, NULL),
(25, 'AUTOCAD Básico', 7, NULL, NULL),
(26, 'AUTOCAD Intermedio', 7, NULL, NULL),
(27, 'AUTOCAD Avanzado', 7, NULL, NULL),
(28, '3D STUDIO MAX', 7, NULL, NULL),
(29, 'Fundamentos de Programación', 8, NULL, NULL),
(30, 'Aplicaciones de Escritorio', 8, NULL, NULL),
(31, 'Aplicaciones Web', 8, NULL, NULL),
(32, 'Gestión de Base de Datos con MYSQL', 8, NULL, NULL),
(33, 'SCRATCH Básico', 9, NULL, NULL),
(34, 'SCRATCH Avanzado', 9, NULL, NULL),
(35, 'KODU GAME LAB Básico', 9, NULL, NULL),
(36, 'KODU GAME LAB Avanzado', 9, NULL, NULL),
(37, 'Programación Mblock', 10, NULL, NULL),
(38, 'Sensortes de ARDUINO', 10, NULL, NULL),
(39, 'Robótica con ARDUINO', 10, NULL, NULL),
(40, 'Proyecto Robot con ARDUINO', 10, NULL, NULL),
(41, 'Fundamentos de Programación con PHP', 11, NULL, NULL),
(42, 'Gestión de Base de Datos con MYSQL', 11, NULL, NULL),
(43, 'Sistema Web con PHP y MYSQL', 11, NULL, NULL),
(44, 'Proyecto de Sistema Web', 11, NULL, NULL),
(45, 'Cinema 4D Básico', 12, NULL, NULL),
(46, 'Cinema 4D Avanzado', 12, NULL, NULL),
(47, '3D Studio Max Básico', 12, NULL, NULL),
(48, '3D Studio Max Avanzado', 12, NULL, NULL),
(49, 'Conectividad y Cableado Estructurado', 13, NULL, NULL),
(50, 'Redes Inalambricas y Antenas', 13, NULL, NULL),
(51, 'Instalación y Virtalización de Servidores', 13, NULL, NULL),
(52, 'Administración de Red', 13, NULL, NULL),
(53, 'ARCHICAD Básico', 14, NULL, NULL),
(54, 'ARCHICAD Intermedio', 14, NULL, NULL),
(55, 'ARCHICAD Avanzado', 14, NULL, NULL),
(56, 'Integración con 3D Stuio Max', 14, NULL, NULL),
(57, 'App Inventor', 15, NULL, NULL),
(58, 'Android Básico', 15, NULL, NULL),
(59, 'Android Avanzado', 15, NULL, NULL),
(60, 'Proyecto Aplicación Móvil', 15, NULL, NULL),
(61, 'Unreal Development kit Básico', 16, NULL, NULL),
(62, 'Unreal Development kit Avanzado', 16, NULL, NULL),
(63, 'Unity Básico', 16, NULL, NULL),
(64, 'Unity Avanzado', 16, NULL, NULL),
(65, 'Ingles', 17, NULL, NULL),
(66, 'Quechua', 17, NULL, NULL),
(67, 'Portugues', 17, NULL, NULL),
(68, 'Italiano', 17, NULL, NULL),
(69, 'Frances', 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_curso_disponibles`
--

CREATE TABLE `inscripcion_curso_disponibles` (
  `id` int(10) UNSIGNED NOT NULL,
  `idioma_tipo` int(11) DEFAULT NULL,
  `ciclo` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `inscripcion_curso_id` int(10) UNSIGNED NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  `docente_otros_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_horarios`
--

CREATE TABLE `inscripcion_horarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` int(11) NOT NULL,
  `hora_inicial` time NOT NULL,
  `hora_final` time NOT NULL,
  `dias` int(11) NOT NULL,
  `estado_horario` int(11) NOT NULL DEFAULT '1',
  `inscripcion_curso_disponible_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_modulos`
--

CREATE TABLE `inscripcion_modulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `inscripcion_modulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion_modulos`
--

INSERT INTO `inscripcion_modulos` (`id`, `inscripcion_modulo`, `created_at`, `updated_at`) VALUES
(1, 'OFIMÁTICA', NULL, NULL),
(2, 'DISEÑO GRÁFICO', NULL, NULL),
(3, 'OFIMÁTICA AVANZADO', NULL, NULL),
(4, 'DISEÑO WEB', NULL, NULL),
(5, 'EDICION DE VIDEOS', NULL, NULL),
(6, 'ENSAMBLAJES Y MANTENIMIENTO DE PC´S', NULL, NULL),
(7, 'AUTOCAD', NULL, NULL),
(8, 'PROGRAMACIÓN JAVA', NULL, NULL),
(9, 'DISEÑO DE VIDEO JUEGOS', NULL, NULL),
(10, 'ROBÓTICA BÁSICA CON ARDUINO', NULL, NULL),
(11, 'DESARROLLO DE SISTEMAS WEB', NULL, NULL),
(12, 'ANIMACIÓN 3D', NULL, NULL),
(13, 'ADMINISTRACIÓN DE REDES', NULL, NULL),
(14, 'DISEÑO ARQUITECTONICO', NULL, NULL),
(15, 'DESARROLLO DE APLICACIONES MÓVILES', NULL, NULL),
(16, 'DESARROLLO DE VIDEOJUEGOS', NULL, NULL),
(17, 'NO APLICA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_modulo_ncgts`
--

CREATE TABLE `inscripcion_modulo_ncgts` (
  `id` int(10) UNSIGNED NOT NULL,
  `inscripcion_ncgt_id` int(10) UNSIGNED NOT NULL,
  `modulo_ncgt_id` int(10) UNSIGNED NOT NULL,
  `nota` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_ncgts`
--

CREATE TABLE `inscripcion_ncgts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `programa_ncgt_id` int(10) UNSIGNED NOT NULL,
  `es_interno` int(11) DEFAULT NULL,
  `es_pago_total` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion_ncgts`
--

INSERT INTO `inscripcion_ncgts` (`id`, `user_id`, `programa_ncgt_id`, `es_interno`, `es_pago_total`, `estado`, `created_at`, `updated_at`) VALUES
(1, 12, 1, NULL, NULL, 1, NULL, NULL),
(2, 13, 3, NULL, NULL, 1, NULL, NULL),
(3, 16, 2, NULL, NULL, 1, NULL, NULL),
(4, 17, 1, NULL, NULL, 1, NULL, NULL),
(5, 18, 2, NULL, NULL, 1, NULL, NULL),
(6, 18, 1, NULL, NULL, 1, NULL, NULL),
(7, 19, 1, NULL, NULL, 1, NULL, NULL),
(8, 23, 30, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestrias`
--

CREATE TABLE `maestrias` (
  `id` int(10) UNSIGNED NOT NULL,
  `maestria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maestria_area_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maestrias`
--

INSERT INTO `maestrias` (`id`, `maestria`, `maestria_area_id`, `created_at`, `updated_at`) VALUES
(1, 'Maestría en Educación con mención en Gestión y Planeamiento Educativo', 1, NULL, NULL),
(2, 'Maestría en Educación con mención en Investigación y Docencia Superior', 1, NULL, NULL),
(3, 'Maestría en Educación con mención en Investigación e Innovación Pedagógica', 1, NULL, NULL),
(4, 'Maestría en Gerencia Pública', 2, NULL, NULL),
(5, 'Maestría en Gestión y Negocios con mención en Gestión de Proyectos', 2, NULL, NULL),
(6, 'Maestría en Gestión Empresarial', 2, NULL, NULL),
(7, 'Maestría en Salud Pública y Gestión Sanitaria', 3, NULL, NULL),
(8, 'Maestría en Administración y Gerencia en Salud', 3, NULL, NULL),
(9, 'Maestría en Psicología', 3, NULL, NULL),
(10, 'Maestría en Ciencias Veterinarias', 3, NULL, NULL),
(11, 'Maestría en Banca y Finanzas', 4, NULL, NULL),
(12, 'Maestría en Contabilidad con mención en Auditoría', 4, NULL, NULL),
(13, 'Maestría en Tributación y Política Fiscal', 4, NULL, NULL),
(14, 'Maestría en Comunicación para el Desarrollo', 5, NULL, NULL),
(15, 'Maestría en Sistema de Protección de los Derechos del Niño, Niña y Adolescente frente a la Violencia', 5, NULL, NULL),
(16, 'Maestría en Sociología con mención en Gerencia Social', 5, NULL, NULL),
(17, 'Maestría en Diseño y Construcción de Obras Viales', 6, NULL, NULL),
(18, 'Maestría en Ingeniería de Sistemas con mención en Tecnologías de la Información y Comunicación', 6, NULL, NULL),
(19, 'Maestría en Medio Ambiente y Desarrollo Sostenible con mención en Gestión Ambiental', 7, NULL, NULL),
(20, 'Maestría en Derecho con mención en Ciencias Penales', 8, NULL, NULL),
(21, 'Maestría en Derecho con mención en Civil y Comercial', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestria_areas`
--

CREATE TABLE `maestria_areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `maestria_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maestria_areas`
--

INSERT INTO `maestria_areas` (`id`, `maestria_area`, `created_at`, `updated_at`) VALUES
(1, 'Educacion', NULL, NULL),
(2, 'Gestion y Administracion', NULL, NULL),
(3, 'Salud', NULL, NULL),
(4, 'Contable y Finanzas', NULL, NULL),
(5, 'Social', NULL, NULL),
(6, 'Ingenieria', NULL, NULL),
(7, 'Medio Ambiente y Desarrollo Sostenible', NULL, NULL),
(8, 'Derecho', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(579, '2014_10_12_100000_create_password_resets_table', 1),
(580, '2018_01_25_093136_create_est_civils_table', 1),
(581, '2018_01_25_093343_create_religions_table', 1),
(582, '2018_01_26_083402_create_departamentos_table', 1),
(583, '2018_01_26_083426_create_provincias_table', 1),
(584, '2018_01_26_083441_create_distritos_table', 1),
(585, '2018_01_26_083442_create_users_table', 1),
(586, '2018_01_26_083701_create_rols_table', 1),
(587, '2018_01_26_083743_create_rol_users_table', 1),
(588, '2018_01_26_090339_create_facultads_table', 1),
(589, '2018_01_26_090357_create_escuelas_table', 1),
(590, '2018_02_09_115701_create_docente_categorias_table', 1),
(591, '2018_02_09_120353_create_docente_condicions_table', 1),
(592, '2018_02_09_120438_create_docente_dedicacions_table', 1),
(593, '2018_02_09_120440_create_dep_academicos_table', 1),
(594, '2018_02_09_120512_create_dependencias_table', 1),
(595, '2018_02_09_120512_create_docentes_table', 1),
(596, '2018_02_09_120747_create_rsu_ejes_table', 1),
(597, '2018_02_09_120822_create_rsu_nivels_table', 1),
(598, '2018_02_09_120905_create_rsu_responsabilidads_table', 1),
(599, '2018_02_09_120947_create_rsu_proyectos_table', 1),
(600, '2018_02_09_120948_create_rsu_participantes_table', 1),
(601, '2018_02_12_091656_create_rsu_calendarios_table', 1),
(602, '2018_02_12_103300_create_colegios_table', 1),
(603, '2018_02_12_125708_create_postulacion_modalidads_table', 1),
(604, '2018_02_12_130546_create_postulacion_situacions_table', 1),
(605, '2018_02_12_130712_create_postulacion_preparacions_table', 1),
(606, '2018_02_12_130944_create_postulacion_ciclos_table', 1),
(607, '2018_02_12_133630_create_sedes_table', 1),
(608, '2018_02_12_133708_create_escuela_sedes_table', 1),
(609, '2018_02_13_093035_create_rsu_lineamientos_table', 1),
(610, '2018_02_13_093103_create_rsu_lineamiento_proyectos_table', 1),
(611, '2018_02_26_184948_create_programas_table', 1),
(612, '2018_02_26_185233_create_maestria_areas_table', 1),
(613, '2018_02_26_185522_create_maestrias_table', 1),
(614, '2018_02_26_190132_create_doctorados_table', 1),
(615, '2018_02_26_190642_create_segunda_especialidads_table', 1),
(616, '2018_02_26_191412_create_estudios_complementarios_table', 1),
(617, '2018_02_26_191739_create_universidads_table', 1),
(618, '2018_02_26_191845_create_grado_bachillers_table', 1),
(619, '2018_02_26_192208_create_grado_magisters_table', 1),
(620, '2018_02_26_192334_create_grado_doctors_table', 1),
(621, '2018_02_26_192530_create_tarifarios_table', 1),
(622, '2018_02_26_192540_create_pagos_table', 1),
(623, '2018_02_26_192629_create_programa_ncgts_table', 1),
(624, '2018_02_26_192650_create_modulo_ncgts_table', 1),
(625, '2018_02_26_192730_create_inscripcion_ncgts_table', 1),
(626, '2018_02_26_192849_create_inscripcion_modulo_ncgts_table', 1),
(627, '2018_02_26_193705_create_proceso_seleccions_table', 1),
(628, '2018_02_26_193716_create_postulacions_table', 1),
(629, '2018_02_26_203429_create_control_pagos_table', 1),
(630, '2018_02_27_113559_create_cal_pregra_gens_table', 1),
(631, '2018_02_27_114438_create_cal_pregra_escs_table', 1),
(632, '2018_02_27_121625_create_plan_estudios_table', 1),
(633, '2018_02_27_122323_create_cursos_table', 1),
(634, '2018_02_27_122548_create_tipo_ambientes_table', 1),
(635, '2018_02_27_122549_create_pabellons_table', 1),
(636, '2018_02_27_122605_create_ambientes_table', 1),
(637, '2018_02_27_122951_create_carga_lectivas_table', 1),
(638, '2018_02_27_123332_create_horarios_table', 1),
(639, '2018_02_27_123908_create_cale_cursos_table', 1),
(640, '2018_02_27_124121_create_act_no_lectivas_table', 1),
(641, '2018_02_27_124246_create_carga_no_lectivas_table', 1),
(642, '2018_02_28_222731_create_rsu_evidencias_table', 1),
(643, '2018_03_22_192651_create_inscripcion_modulos_table', 1),
(644, '2018_03_22_195149_create_inscripcion_cursos_table', 1),
(645, '2018_03_22_200201_create_docente_otros_table', 1),
(646, '2018_03_22_201907_create_inscripcion_curso_disponibles_table', 1),
(647, '2018_03_22_201929_create_inscripcion_horarios_table', 1),
(648, '2018_03_22_210007_create_inscripcion_alumnos_table', 1),
(649, '2018_05_02_154356_create_estudiantes_table', 1),
(650, '2018_05_11_152520_create_tarifario_proceso_seleccions_table', 1),
(651, '2018_05_18_083248_create_rsu_comentarios_table', 1),
(652, '2018_05_31_170204_create_actividad_silabos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_ncgts`
--

CREATE TABLE `modulo_ncgts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programa_ncgt_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulo_ncgts`
--

INSERT INTO `modulo_ncgts` (`id`, `nombre`, `descripcion`, `docente`, `programa_ncgt_id`, `created_at`, `updated_at`) VALUES
(1, 'Gestion por procesos', 'Presenta la diferencia entre el enfoque funcional y el enfoque de procesos', 'Juan Perez Martel', 1, NULL, NULL),
(2, 'Estadistica aplicada a los procesos', 'El curso proporciona las bases estadísticas para poder representar y manipular las variables cuantitativas de los procesos', 'Maria Palacios Roldan', 1, NULL, NULL),
(3, 'Modelamiento de procesos', ' presenta diferentes metodologías que permiten modelar los procesos de la organización con el fin de entender y gestionar el comportamiento', 'Mario Riquelme', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pabellons`
--

CREATE TABLE `pabellons` (
  `id` int(10) UNSIGNED NOT NULL,
  `pabellon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pabellons`
--

INSERT INTO `pabellons` (`id`, `pabellon`, `descripcion`, `direccion`, `referencia`, `created_at`, `updated_at`) VALUES
(1, '1', 'Pabellon de Educación', NULL, NULL, '2018-06-05 21:40:31', '2018-06-05 21:40:31'),
(2, '2', 'Pabellon de Enfermería', NULL, NULL, '2018-06-05 21:40:31', '2018-06-05 21:40:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_comprobante` int(10) UNSIGNED NOT NULL,
  `fecha_comprobante` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `tarifario_id` int(11) NOT NULL,
  `importe` int(11) NOT NULL,
  `estado_recibo` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `num_comprobante`, `fecha_comprobante`, `user_id`, `tarifario_id`, `importe`, `estado_recibo`, `created_at`, `updated_at`) VALUES
(1, 1234567, '2018-05-21', 10, 1, 350, 0, NULL, NULL),
(2, 1234566, '2018-05-21', 11, 21, 600, 0, NULL, NULL),
(3, 1111111, '2018-05-21', 12, 35, 150, 1, NULL, NULL),
(4, 2222222, '2018-05-21', 12, 36, 250, 1, NULL, NULL),
(5, 3333333, '2018-05-21', 12, 37, 20, 1, NULL, NULL),
(6, 4444444, '2018-05-21', 13, 42, 500, 1, NULL, NULL),
(7, 5555555, '2018-05-21', 13, 43, 700, 1, NULL, NULL),
(8, 1111222, '2018-05-21', 14, 35, 150, 0, NULL, NULL),
(9, 1111333, '2018-05-21', 15, 35, 150, 0, NULL, NULL),
(10, 1111444, '2018-05-21', 16, 39, 100, 1, NULL, NULL),
(11, 2222555, '2018-05-21', 16, 40, 250, 1, NULL, NULL),
(12, 3333555, '2018-05-21', 17, 35, 150, 1, NULL, NULL),
(13, 1111555, '2018-05-21', 17, 36, 200, 1, NULL, NULL),
(14, 2222666, '2018-05-21', 17, 36, 200, 1, NULL, NULL),
(15, 3333666, '2018-05-21', 18, 39, 100, 1, NULL, NULL),
(16, 1111666, '2018-05-21', 18, 40, 300, 1, NULL, NULL),
(17, 1111777, '2018-05-21', 18, 40, 300, 1, NULL, NULL),
(18, 2222777, '2018-05-21', 18, 35, 150, 1, NULL, NULL),
(19, 3333777, '2018-05-21', 18, 36, 250, 1, NULL, NULL),
(20, 2222888, '2018-05-21', 18, 36, 250, 1, NULL, NULL),
(21, 1111888, '2018-05-21', 19, 35, 150, 1, NULL, NULL),
(22, 2222999, '2018-05-21', 19, 38, 650, 1, NULL, NULL),
(23, 2222444, '2018-05-21', 20, 35, 150, 0, NULL, NULL),
(24, 3333111, '2018-05-21', 21, 3, 280, 1, NULL, NULL),
(25, 3333222, '2018-05-21', 22, 24, 500, 1, NULL, NULL),
(26, 3333444, '2018-05-21', 23, 44, 500, 1, NULL, NULL),
(27, 5555444, '2018-05-21', 9, 33, 250, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudios`
--

CREATE TABLE `plan_estudios` (
  `id` int(10) UNSIGNED NOT NULL,
  `resolucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `escuela_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plan_estudios`
--

INSERT INTO `plan_estudios` (`id`, `resolucion`, `archivo`, `anio`, `estado`, `escuela_id`, `created_at`, `updated_at`) VALUES
(1, 'N 450 Consejo Universitario', 'g', 1999, 1, 30, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(2, 'N 230 Consejo Universitario', 'g', 2005, 1, 30, '2018-06-05 21:40:30', '2018-06-05 21:40:30'),
(3, 'N xxx Consejo Universitario', 'g', 2000, 1, 31, '2018-06-05 21:40:30', '2018-06-05 21:40:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacions`
--

CREATE TABLE `postulacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nota` double(8,2) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `proceso_seleccion_id` int(10) UNSIGNED NOT NULL,
  `sede_id` int(10) UNSIGNED DEFAULT NULL,
  `escuela_id` int(10) UNSIGNED DEFAULT NULL,
  `postulacion_preparacion_id` int(11) DEFAULT NULL,
  `postulacion_tipo` int(11) DEFAULT NULL,
  `postulacion_situacion_id` int(11) DEFAULT NULL,
  `maestria_id` int(11) DEFAULT NULL,
  `doctorado_id` int(11) DEFAULT NULL,
  `segunda_especialidad_id` int(11) DEFAULT NULL,
  `estudios_complementario_id` int(11) DEFAULT NULL,
  `grado_bachiller_id` int(11) DEFAULT NULL,
  `grado_magister_id` int(11) DEFAULT NULL,
  `grado_doctor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulacions`
--

INSERT INTO `postulacions` (`id`, `nota`, `users_id`, `proceso_seleccion_id`, `sede_id`, `escuela_id`, `postulacion_preparacion_id`, `postulacion_tipo`, `postulacion_situacion_id`, `maestria_id`, `doctorado_id`, `segunda_especialidad_id`, `estudios_complementario_id`, `grado_bachiller_id`, `grado_magister_id`, `grado_doctor_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 21, 1, 1, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 22, 17, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 9, 26, 1, NULL, NULL, NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion_ciclos`
--

CREATE TABLE `postulacion_ciclos` (
  `id` int(10) UNSIGNED NOT NULL,
  `postulacion_ciclo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulacion_ciclos`
--

INSERT INTO `postulacion_ciclos` (`id`, `postulacion_ciclo`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion_modalidads`
--

CREATE TABLE `postulacion_modalidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `modalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_examen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulacion_modalidads`
--

INSERT INTO `postulacion_modalidads` (`id`, `modalidad`, `tipo_examen`, `created_at`, `updated_at`) VALUES
(1, 'Examen de selecion general', 1, NULL, NULL),
(2, 'Examen preferencial', 2, NULL, NULL),
(3, 'Cepreval', 1, NULL, NULL),
(4, 'Cepreval preferencial', 2, NULL, NULL),
(5, 'Primeros Puestos', 1, NULL, NULL),
(6, 'Víctimas del Terrorismo y Plan Integral de Reparaciones', 1, NULL, NULL),
(7, 'Personas con Discapacidad', 1, NULL, NULL),
(8, 'Graduados y titulados en universidades del país o del extranjero', 1, NULL, NULL),
(9, 'Traslado Externo', 1, NULL, NULL),
(10, 'Traslado Interno', 1, NULL, NULL),
(11, 'Licenciados de las Fuerzas Armadas', 1, NULL, NULL),
(12, 'Egresados del COAR', 1, NULL, NULL),
(13, 'Egresados del Colegio Nacional de Aplicación', 1, NULL, NULL),
(14, 'Egresados de la Institución Educativa Agropecuaria Mariano Adrián Meza Rosales', 1, NULL, NULL),
(15, 'Deportistas Calicados y Deportistas Destacados', 1, NULL, NULL),
(16, 'Hijos de Comunidades Campesinas y/o Nativas', 1, NULL, NULL),
(17, 'Estudiantes del CENFOTEC UNHEVAL', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion_preparacions`
--

CREATE TABLE `postulacion_preparacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `postulacion_preparacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulacion_preparacions`
--

INSERT INTO `postulacion_preparacions` (`id`, `postulacion_preparacion`, `created_at`, `updated_at`) VALUES
(1, 'CEPREVAL', NULL, NULL),
(2, 'Academia', NULL, NULL),
(3, 'Tutor particular', NULL, NULL),
(4, 'Autoestudio', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion_situacions`
--

CREATE TABLE `postulacion_situacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `postulacion_situacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulacion_situacions`
--

INSERT INTO `postulacion_situacions` (`id`, `postulacion_situacion`, `created_at`, `updated_at`) VALUES
(1, 'Alcanzó vacante', NULL, NULL),
(2, 'No alcanzó vacante', NULL, NULL),
(3, 'Libre', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso_seleccions`
--

CREATE TABLE `proceso_seleccions` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `etapa` int(11) DEFAULT NULL,
  `postulacion_ciclo_id` int(11) DEFAULT NULL,
  `programa_id` int(11) NOT NULL,
  `postulacion_modalidad_id` int(11) DEFAULT NULL,
  `sede_desentralizada_pre` int(11) DEFAULT NULL,
  `descuento` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proceso_seleccions`
--

INSERT INTO `proceso_seleccions` (`id`, `descripcion`, `anio`, `fecha_inicio`, `fecha_fin`, `estado`, `etapa`, `postulacion_ciclo_id`, `programa_id`, `postulacion_modalidad_id`, `sede_desentralizada_pre`, `descuento`, `created_at`, `updated_at`) VALUES
(1, 'Seleccion general 2018-I', 2018, NULL, NULL, 1, 1, NULL, 1, 1, NULL, NULL, NULL, NULL),
(2, 'Seleccion general 2018-I', 2018, NULL, NULL, 1, 1, NULL, 1, 2, NULL, NULL, NULL, NULL),
(3, 'Seleccion general 2018-I', 2018, NULL, NULL, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 5, NULL, NULL, NULL, NULL),
(5, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 6, NULL, NULL, NULL, NULL),
(6, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 7, NULL, NULL, NULL, NULL),
(7, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 8, NULL, NULL, NULL, NULL),
(8, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 9, NULL, NULL, NULL, NULL),
(9, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 10, NULL, NULL, NULL, NULL),
(10, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 11, NULL, NULL, NULL, NULL),
(11, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 12, NULL, NULL, NULL, NULL),
(12, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 13, NULL, NULL, NULL, NULL),
(13, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 14, NULL, NULL, NULL, NULL),
(14, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 15, NULL, NULL, NULL, NULL),
(15, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 16, NULL, NULL, NULL, NULL),
(16, 'Examen de selección modalidades 2018', 2018, NULL, NULL, 1, 1, NULL, 1, 17, NULL, NULL, NULL, NULL),
(17, 'CEPREVAL 2018 A', 2018, NULL, NULL, 1, NULL, 1, 12, 3, NULL, NULL, NULL, NULL),
(18, 'CEPREVAL 2018 B', 2018, NULL, NULL, 1, NULL, 2, 12, 3, NULL, NULL, NULL, NULL),
(19, 'CEPREVAL 2018 C', 2018, NULL, NULL, 1, NULL, 3, 12, 3, NULL, NULL, NULL, NULL),
(20, 'CEPREVAL Preferencial 2018 A', 2018, NULL, NULL, 1, NULL, 1, 12, 4, NULL, NULL, NULL, NULL),
(21, 'CEPREVAL Preferencial 2018 B', 2018, NULL, NULL, 1, NULL, 2, 12, 4, NULL, NULL, NULL, NULL),
(22, 'CEPREVAL Preferencial 2018 C', 2018, NULL, NULL, 1, NULL, 3, 12, 4, NULL, NULL, NULL, NULL),
(23, 'Seleccion general 2018-II', 2018, NULL, NULL, 1, 2, NULL, 1, 1, NULL, NULL, NULL, NULL),
(24, 'Seleccion general 2018-II', 2018, NULL, NULL, 1, 2, NULL, 1, 2, NULL, NULL, NULL, NULL),
(25, 'Seleccion general 2018-II', 2018, NULL, NULL, 1, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(26, 'Maestria y Doctorados 2018-I', 2018, NULL, NULL, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(27, 'Maestria y Doctorados 2018-I', 2018, NULL, NULL, 1, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL),
(28, 'Maestria y Doctorados 2018-II', 2018, NULL, NULL, 1, 2, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(29, 'Maestria y Doctorados 2018-II', 2018, NULL, NULL, 1, 2, NULL, 3, NULL, NULL, NULL, NULL, NULL),
(30, 'Posdoctorado 2018', 2018, NULL, NULL, 1, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL),
(31, 'Segunda Especialidad Eduacion 2018-I', 2018, NULL, NULL, 1, 1, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(32, 'Segunda Especialidad Eduacion 2018-II', 2018, NULL, NULL, 1, 2, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(33, 'Estudios complementarios Educacion 2018-I', 2018, NULL, NULL, 1, 1, NULL, 6, NULL, NULL, NULL, NULL, NULL),
(34, 'Estudios complementarios Educacion 2018-II', 2018, NULL, NULL, 1, 2, NULL, 6, NULL, NULL, NULL, NULL, NULL),
(35, 'Examen de las Sedes desentralizadas 2018 I ', 2018, NULL, NULL, 1, 1, NULL, 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(10) UNSIGNED NOT NULL,
  `programa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `programa`, `created_at`, `updated_at`) VALUES
(1, 'Pregrado', NULL, NULL),
(2, 'Posgrado maestria', NULL, NULL),
(3, 'Posgrado doctorado', NULL, NULL),
(4, 'Posgrado posdoctorado', NULL, NULL),
(5, 'Segunda especialidad Educacion', NULL, NULL),
(6, 'Estudios complementario', NULL, NULL),
(7, 'Idiomas', NULL, NULL),
(8, 'Educacióna Distancia y Formación Continua', NULL, NULL),
(9, 'PROCAPT', NULL, NULL),
(10, 'PROMASTER', NULL, NULL),
(11, 'Diplomado', NULL, NULL),
(12, 'CEPREVAL', NULL, NULL),
(13, 'Segunda especialidad Enfermeria', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_ncgts`
--

CREATE TABLE `programa_ncgts` (
  `id` int(10) UNSIGNED NOT NULL,
  `programa_id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `numero_modulo` int(11) DEFAULT NULL,
  `costo_matricula` int(11) DEFAULT NULL,
  `costo_modulo` int(11) DEFAULT NULL,
  `costo_diploma` int(11) DEFAULT NULL,
  `descuento_interno` int(11) DEFAULT NULL,
  `descuento_modulo_total` int(11) DEFAULT NULL,
  `maestria_id` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `dependencia_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programa_ncgts`
--

INSERT INTO `programa_ncgts` (`id`, `programa_id`, `descripcion`, `fecha_inicio`, `fecha_fin`, `horas`, `numero_modulo`, `costo_matricula`, `costo_modulo`, `costo_diploma`, `descuento_interno`, `descuento_modulo_total`, `maestria_id`, `estado`, `dependencia_id`, `created_at`, `updated_at`) VALUES
(1, 11, 'Diplomado en Gestion por Procesos', '2018-04-20', '2018-06-20', 100, 3, 150, 250, 20, 50, 100, NULL, 1, 42, NULL, NULL),
(2, 11, 'Diplomado en Tics', '2018-04-20', '2018-06-20', 150, 4, 100, 300, 30, 50, 100, NULL, 1, 42, NULL, NULL),
(3, 9, 'PROCAPT INGENIERIA DE SISTEMAS', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 42, NULL, NULL),
(4, 9, 'PROCAPT INGENIERIA AGRONOMICA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 16, NULL, NULL),
(5, 9, 'PROCAPT INGENIERIA AGROINDUSTRIAL', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 17, NULL, NULL),
(6, 9, 'PROCAPT MEDICINA HUMANA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 19, NULL, NULL),
(7, 9, 'PROCAPT ODONTOLOGIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 20, NULL, NULL),
(8, 9, 'PROCAPT PSICOLOGIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 21, NULL, NULL),
(9, 9, 'PROCAPT ENFERMERIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 22, NULL, NULL),
(10, 9, 'PROCAPT OBSTETRICIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 23, NULL, NULL),
(11, 9, 'PROCAPT CIENCIAS ADMINISTRATIVAS', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 24, NULL, NULL),
(12, 9, 'PROCAPT TURISMO Y HOTELERIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 25, NULL, NULL),
(13, 9, 'PROCAPT CIENCIAS CONTABLES Y FINANCIERAS', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 26, NULL, NULL),
(14, 9, 'PROCAPT ECONOMIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 27, NULL, NULL),
(15, 9, 'PROCAPT SOCIOLOGIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 28, NULL, NULL),
(16, 9, 'PROCAPT CIENCIAS DE LA COMUNICACION SOCIAL', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 29, NULL, NULL),
(17, 9, 'PROCAPT EDUCACION INICIAL', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL),
(18, 9, 'PROCAPT EDUCACION PRIMARIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 31, NULL, NULL),
(19, 9, 'PROCAPT EDUCACION FISICA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 32, NULL, NULL),
(20, 9, 'PROCAPT FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 33, NULL, NULL),
(21, 9, 'PROCAPT LENGUA Y LITERATURA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 34, NULL, NULL),
(22, 9, 'PROCAPT CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 35, NULL, NULL),
(23, 9, 'PROCAPT MATEMATICA Y FISICA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 36, NULL, NULL),
(24, 9, 'PROCAPT BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 37, NULL, NULL),
(25, 9, 'PROCAPT DERECHO Y CIENCIAS POLITICAS', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 38, NULL, NULL),
(26, 9, 'PROCAPT INGENIERIA CIVIL', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 39, NULL, NULL),
(27, 9, 'PROCAPT ARQUITECTURA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 40, NULL, NULL),
(28, 9, 'PROCAPT INGENIERIA INDUSTRIAL', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 41, NULL, NULL),
(29, 9, 'PROCAPT MEDICINA VETERINARIA', NULL, NULL, NULL, 3, 500, 700, NULL, NULL, NULL, NULL, 1, 43, NULL, NULL),
(30, 10, 'PROMASTER Ingenieria de Sistemas mencion TICs', NULL, NULL, NULL, 3, 500, 900, NULL, NULL, NULL, NULL, 1, 46, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`, `departamento_id`, `created_at`, `updated_at`) VALUES
(1, 'CHACHAPOYAS ', 1, NULL, NULL),
(2, 'BAGUA', 1, NULL, NULL),
(3, 'BONGARA', 1, NULL, NULL),
(4, 'CONDORCANQUI', 1, NULL, NULL),
(5, 'LUYA', 1, NULL, NULL),
(6, 'RODRIGUEZ DE MENDOZA', 1, NULL, NULL),
(7, 'UTCUBAMBA', 1, NULL, NULL),
(8, 'HUARAZ', 2, NULL, NULL),
(9, 'AIJA', 2, NULL, NULL),
(10, 'ANTONIO RAYMONDI', 2, NULL, NULL),
(11, 'ASUNCION', 2, NULL, NULL),
(12, 'BOLOGNESI', 2, NULL, NULL),
(13, 'CARHUAZ', 2, NULL, NULL),
(14, 'CARLOS FERMIN FITZCARRALD', 2, NULL, NULL),
(15, 'CASMA', 2, NULL, NULL),
(16, 'CORONGO', 2, NULL, NULL),
(17, 'HUARI', 2, NULL, NULL),
(18, 'HUARMEY', 2, NULL, NULL),
(19, 'HUAYLAS', 2, NULL, NULL),
(20, 'MARISCAL LUZURIAGA', 2, NULL, NULL),
(21, 'OCROS', 2, NULL, NULL),
(22, 'PALLASCA', 2, NULL, NULL),
(23, 'POMABAMBA', 2, NULL, NULL),
(24, 'RECUAY', 2, NULL, NULL),
(25, 'SANTA', 2, NULL, NULL),
(26, 'SIHUAS', 2, NULL, NULL),
(27, 'YUNGAY', 2, NULL, NULL),
(28, 'ABANCAY', 3, NULL, NULL),
(29, 'ANDAHUAYLAS', 3, NULL, NULL),
(30, 'ANTABAMBA', 3, NULL, NULL),
(31, 'AYMARAES', 3, NULL, NULL),
(32, 'COTABAMBAS', 3, NULL, NULL),
(33, 'CHINCHEROS', 3, NULL, NULL),
(34, 'GRAU', 3, NULL, NULL),
(35, 'AREQUIPA', 4, NULL, NULL),
(36, 'CAMANA', 4, NULL, NULL),
(37, 'CARAVELI', 4, NULL, NULL),
(38, 'CASTILLA', 4, NULL, NULL),
(39, 'CAYLLOMA', 4, NULL, NULL),
(40, 'CONDESUYOS', 4, NULL, NULL),
(41, 'ISLAY', 4, NULL, NULL),
(42, 'LA UNION', 4, NULL, NULL),
(43, 'HUAMANGA', 5, NULL, NULL),
(44, 'CANGALLO', 5, NULL, NULL),
(45, 'HUANCA SANCOS', 5, NULL, NULL),
(46, 'HUANTA', 5, NULL, NULL),
(47, 'LA MAR', 5, NULL, NULL),
(48, 'LUCANAS', 5, NULL, NULL),
(49, 'PARINACOCHAS', 5, NULL, NULL),
(50, 'PAUCAR DEL SARA SARA', 5, NULL, NULL),
(51, 'SUCRE', 5, NULL, NULL),
(52, 'VICTOR FAJARDO', 5, NULL, NULL),
(53, 'VILCAS HUAMAN', 5, NULL, NULL),
(54, 'CAJAMARCA', 6, NULL, NULL),
(55, 'CAJABAMBA', 6, NULL, NULL),
(56, 'CELENDIN', 6, NULL, NULL),
(57, 'CHOTA ', 6, NULL, NULL),
(58, 'CONTUMAZA', 6, NULL, NULL),
(59, 'CUTERVO', 6, NULL, NULL),
(60, 'HUALGAYOC', 6, NULL, NULL),
(61, 'JAEN', 6, NULL, NULL),
(62, 'SAN IGNACIO', 6, NULL, NULL),
(63, 'SAN MARCOS', 6, NULL, NULL),
(64, 'SAN PABLO', 6, NULL, NULL),
(65, 'SANTA CRUZ', 6, NULL, NULL),
(66, 'CALLAO', 7, NULL, NULL),
(67, 'CUSCO', 8, NULL, NULL),
(68, 'ACOMAYO', 8, NULL, NULL),
(69, 'ANTA', 8, NULL, NULL),
(70, 'CALCA', 8, NULL, NULL),
(71, 'CANAS', 8, NULL, NULL),
(72, 'CANCHIS', 8, NULL, NULL),
(73, 'CHUMBIVILCAS', 8, NULL, NULL),
(74, 'ESPINAR', 8, NULL, NULL),
(75, 'LA CONVENCION', 8, NULL, NULL),
(76, 'PARURO', 8, NULL, NULL),
(77, 'PAUCARTAMBO', 8, NULL, NULL),
(78, 'QUISPICANCHI', 8, NULL, NULL),
(79, 'URUBAMBA', 8, NULL, NULL),
(80, 'HUANCAVELICA', 9, NULL, NULL),
(81, 'ACOBAMBA', 9, NULL, NULL),
(82, 'ANGARAES', 9, NULL, NULL),
(83, 'CASTROVIRREYNA', 9, NULL, NULL),
(84, 'CHURCAMPA', 9, NULL, NULL),
(85, 'HUAYTARA', 9, NULL, NULL),
(86, 'TAYACAJA', 9, NULL, NULL),
(87, 'HUÁNUCO', 10, NULL, NULL),
(88, 'AMBO', 10, NULL, NULL),
(89, 'DOS DE MAYO', 10, NULL, NULL),
(90, 'HUACAYBAMBA', 10, NULL, NULL),
(91, 'HUAMALIES', 10, NULL, NULL),
(92, 'LEONCIO PRADO', 10, NULL, NULL),
(93, 'MARAÑON', 10, NULL, NULL),
(94, 'PACHITEA', 10, NULL, NULL),
(95, 'PUERTO INCA', 10, NULL, NULL),
(96, 'LAURICOCHA', 10, NULL, NULL),
(97, 'YAROWILCA', 10, NULL, NULL),
(98, 'ICA', 11, NULL, NULL),
(99, 'CHINCHA', 11, NULL, NULL),
(100, 'NAZCA', 11, NULL, NULL),
(101, 'PALPA', 11, NULL, NULL),
(102, 'PISCO', 11, NULL, NULL),
(103, 'HUANCAYO', 12, NULL, NULL),
(104, 'CONCEPCION', 12, NULL, NULL),
(105, 'CHANCHAMAYO', 12, NULL, NULL),
(106, 'JAUJA', 12, NULL, NULL),
(107, 'JUNIN', 12, NULL, NULL),
(108, 'SATIPO', 12, NULL, NULL),
(109, 'TARMA', 12, NULL, NULL),
(110, 'YAULI', 12, NULL, NULL),
(111, 'CHUPACA', 12, NULL, NULL),
(112, 'TRUJILLO', 13, NULL, NULL),
(113, 'ASCOPE', 13, NULL, NULL),
(114, 'BOLIVAR', 13, NULL, NULL),
(115, 'CHEPEN', 13, NULL, NULL),
(116, 'JULCAN', 13, NULL, NULL),
(117, 'OTUZCO', 13, NULL, NULL),
(118, 'PACASMAYO', 13, NULL, NULL),
(119, 'PATAZ', 13, NULL, NULL),
(120, 'SANCHEZ CARRION', 13, NULL, NULL),
(121, 'SANTIAGO DE CHUCO', 13, NULL, NULL),
(122, 'GRAN CHIMU', 13, NULL, NULL),
(123, 'VIRU', 13, NULL, NULL),
(124, 'CHICLAYO', 14, NULL, NULL),
(125, 'FERREÑAFE', 14, NULL, NULL),
(126, 'LAMBAYEQUE', 14, NULL, NULL),
(127, 'LIMA', 15, NULL, NULL),
(128, 'BARRANCA', 15, NULL, NULL),
(129, 'CAJATAMBO', 15, NULL, NULL),
(130, 'CANTA', 15, NULL, NULL),
(131, 'CAÑETE', 15, NULL, NULL),
(132, 'HUARAL', 15, NULL, NULL),
(133, 'HUAROCHIRI', 15, NULL, NULL),
(134, 'HUAURA', 15, NULL, NULL),
(135, 'OYON', 15, NULL, NULL),
(136, 'YAUYOS', 15, NULL, NULL),
(137, 'MAYNAS', 16, NULL, NULL),
(138, 'ALTO AMAZONAS', 16, NULL, NULL),
(139, 'LORETO', 16, NULL, NULL),
(140, 'MARISCAL RAMON CASTILLA', 16, NULL, NULL),
(141, 'REQUENA', 16, NULL, NULL),
(142, 'UCAYALI', 16, NULL, NULL),
(143, 'TAMBOPATA', 17, NULL, NULL),
(144, 'MANU', 17, NULL, NULL),
(145, 'TAHUAMANU', 17, NULL, NULL),
(146, 'MARISCAL NIETO', 18, NULL, NULL),
(147, 'GENERAL SANCHEZ CERRO', 18, NULL, NULL),
(148, 'ILO', 18, NULL, NULL),
(149, 'PASCO', 19, NULL, NULL),
(150, 'DANIEL ALCIDES CARRION', 19, NULL, NULL),
(151, 'OXAPAMPA', 19, NULL, NULL),
(152, 'PIURA', 20, NULL, NULL),
(153, 'AYABACA', 20, NULL, NULL),
(154, 'HUANCABAMBA', 20, NULL, NULL),
(155, 'MORROPON', 20, NULL, NULL),
(156, 'PAITA', 20, NULL, NULL),
(157, 'SULLANA', 20, NULL, NULL),
(158, 'TALARA', 20, NULL, NULL),
(159, 'SECHURA', 20, NULL, NULL),
(160, 'PUNO', 21, NULL, NULL),
(161, 'AZANGARO', 21, NULL, NULL),
(162, 'CARABAYA', 21, NULL, NULL),
(163, 'CHUCUITO', 21, NULL, NULL),
(164, 'EL COLLAO', 21, NULL, NULL),
(165, 'HUANCANE', 21, NULL, NULL),
(166, 'LAMPA', 21, NULL, NULL),
(167, 'MELGAR', 21, NULL, NULL),
(168, 'MOHO', 21, NULL, NULL),
(169, 'SAN ANTONIO DE PUTINA', 21, NULL, NULL),
(170, 'SAN ROMAN', 21, NULL, NULL),
(171, 'SANDIA', 21, NULL, NULL),
(172, 'YUNGUYO', 21, NULL, NULL),
(173, 'MOYOBAMBA', 22, NULL, NULL),
(174, 'BELLAVISTA', 22, NULL, NULL),
(175, 'EL DORADO', 22, NULL, NULL),
(176, 'HUALLAGA', 22, NULL, NULL),
(177, 'LAMAS', 22, NULL, NULL),
(178, 'MARISCAL CACERES', 22, NULL, NULL),
(179, 'PICOTA', 22, NULL, NULL),
(180, 'RIOJA', 22, NULL, NULL),
(181, 'SAN MARTIN', 22, NULL, NULL),
(182, 'TOCACHE', 22, NULL, NULL),
(183, 'TACNA', 23, NULL, NULL),
(184, 'CANDARAVE', 23, NULL, NULL),
(185, 'JORGE BASADRE', 23, NULL, NULL),
(186, 'TARATA', 23, NULL, NULL),
(187, 'TUMBES', 24, NULL, NULL),
(188, 'CONTRALMIRANTE VILLAR', 24, NULL, NULL),
(189, 'ZARUMILLA', 24, NULL, NULL),
(190, 'CORONEL PORTILLO', 25, NULL, NULL),
(191, 'ATALAYA', 25, NULL, NULL),
(192, 'PADRE ABAD', 25, NULL, NULL),
(193, 'PURUS', 25, NULL, NULL),
(194, 'Extranjero', 26, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `religions`
--

CREATE TABLE `religions` (
  `id` int(10) UNSIGNED NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `religions`
--

INSERT INTO `religions` (`id`, `religion`, `created_at`, `updated_at`) VALUES
(1, 'Católico', NULL, NULL),
(2, 'Evangélico', NULL, NULL),
(3, 'Mormón', NULL, NULL),
(4, 'Adventista', NULL, NULL),
(5, 'Otros', NULL, NULL),
(6, 'No Especifica', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(10) UNSIGNED NOT NULL,
  `rol` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `rol`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'ZenoSama', 'Super Admin', NULL, NULL),
(2, 'Administrador General', 'Administrador General: Gestiona Usuarios', NULL, NULL),
(3, 'Docente', 'Docente: El que enseña, dicta cursos en la UNHEVAL', NULL, NULL),
(4, 'Estudiante', 'Estudiante: Estudia en la UNHEVAL', NULL, NULL),
(5, 'DRSU', 'Director de Responsabilidad Social Universitaria', NULL, NULL),
(6, 'DRSU-F', 'Director de Responsabilidad Social Universitaria de Facultad', NULL, NULL),
(7, 'PersonalAdmision', 'Personal de Admision', NULL, NULL),
(8, 'Administrador Admision', 'Administrador Admision', NULL, NULL),
(9, 'Administrador CEPREVAL', 'Administrador CEPREVAL', NULL, NULL),
(10, 'Administrador Posgrado', 'Administrador Escuela de Posgrado', NULL, NULL),
(11, 'Administrador_Segunda_E_Educacion', 'Administrador Segunda Especialidad Educacion', NULL, NULL),
(12, 'Administrador_Segunda_E_Enfermeria', 'Administrador Segunda Especialidad Enfermeria', NULL, NULL),
(13, 'Administrador_Estudios_C_Educacion', 'Administrador Estudios Complementarios Educación', NULL, NULL),
(14, 'Administrador Idiomas', 'Administrador Centro de Idiomas', NULL, NULL),
(15, 'Administrador Estudios a Distancia', 'Administrador Estudios a Distancia', NULL, NULL),
(16, 'Administrador Diplomados', 'Administrador Diplomados', NULL, NULL),
(17, 'Administrador PROCATP', 'Administrador PROCATP', NULL, NULL),
(18, 'Administrador PROMASTER', 'Administrador PROMASTER', NULL, NULL),
(19, 'Director de Admision', 'Director de Admision', NULL, NULL),
(20, 'Coordinador CEPREVAL', 'Coordinador General de CEPREVAL', NULL, NULL),
(21, 'Posgrado_Admi', 'Presidente de la Comisión de Admision de Posgrado', NULL, NULL),
(22, 'Encargado_Segunda_E_Educacion', 'Encargado de Segunda Especialidad Educacion', NULL, NULL),
(23, 'Encargado_Segunda_E_Enfermeria', 'Encargado de Segunda Especialidad Enfermeria', NULL, NULL),
(24, 'EEstudiosComp', 'Encargado de Estudios Complementarios Educacion', NULL, NULL),
(25, 'DirectorCI', 'Director de Centro de Idiomas', NULL, NULL),
(26, 'DirectorEC', 'Director de Estudios a Distancia y Complementarios', NULL, NULL),
(27, 'Encargado de Diplomados', 'Encargado de Diplomados', NULL, NULL),
(28, 'Encargado de PROCATP', 'Encargado de PROCATP', NULL, NULL),
(29, 'Encargado de PROMASTER', 'Encargado de PROMASTER', NULL, NULL),
(30, 'UsuarioAsuntos', 'Asuntos Académicos: Realiza la Programación', NULL, NULL),
(31, 'ViceAcademico', 'Vicerrector Académico: Visualisa la programación', NULL, NULL),
(32, 'DirEscuela', 'Director de Escuela: Gestiona la Escuela Profesional', NULL, NULL),
(33, 'Otros', 'Usuarios que no se encuentran registrados en la Universidad', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_users`
--

CREATE TABLE `rol_users` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `estado` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol_users`
--

INSERT INTO `rol_users` (`rol_id`, `user_id`, `estado`) VALUES
(2, 1, '1'),
(2, 4, '1'),
(2, 5, '1'),
(2, 6, '1'),
(3, 2, '1'),
(3, 4, '1'),
(3, 24, '1'),
(3, 25, '1'),
(3, 26, '1'),
(3, 27, '1'),
(3, 28, '1'),
(3, 29, '1'),
(3, 30, '1'),
(3, 31, '1'),
(3, 32, '1'),
(3, 33, '1'),
(4, 3, '1'),
(5, 4, '1'),
(5, 25, '1'),
(6, 4, '1'),
(6, 24, '1'),
(7, 6, '1'),
(7, 7, '1'),
(7, 8, '1'),
(8, 6, '1'),
(8, 7, '1'),
(9, 6, '1'),
(9, 8, '1'),
(16, 6, '1'),
(30, 5, '1'),
(31, 5, '1'),
(32, 5, '1'),
(33, 10, '1'),
(33, 11, '1'),
(33, 12, '1'),
(33, 13, '1'),
(33, 14, '1'),
(33, 15, '1'),
(33, 16, '1'),
(33, 17, '1'),
(33, 18, '1'),
(33, 19, '1'),
(33, 20, '1'),
(33, 21, '1'),
(33, 22, '1'),
(33, 23, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_calendarios`
--

CREATE TABLE `rsu_calendarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `rsu_proyecto_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#3A87AD',
  `textColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#FFF',
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_calendarios`
--

INSERT INTO `rsu_calendarios` (`id`, `rsu_proyecto_id`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`) VALUES
(1, 2, 'actividad 1', 'describir detalles', '#3a87ad', '#ffffff', '2018-06-11 00:00:00', '2018-06-12 23:59:00'),
(2, 2, 'actividad 2', 'describir detalles', '#ff8040', '#ffffff', '2018-05-30 00:00:00', '2018-06-03 23:59:00'),
(3, 2, 'Mi actividad 3', 'xcvdxfbs fg d', '#000040', '#ffffff', '2018-06-05 00:00:00', '2018-06-27 23:59:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_comentarios`
--

CREATE TABLE `rsu_comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_comentarios`
--

INSERT INTO `rsu_comentarios` (`id`, `comentario`, `user_id`, `proyecto_id`, `created_at`, `updated_at`) VALUES
(1, 'El título debe dar la idea del proyecto', 24, 2, '2018-06-06 18:13:43', '2018-06-06 18:13:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_ejes`
--

CREATE TABLE `rsu_ejes` (
  `id` int(10) UNSIGNED NOT NULL,
  `eje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_ejes`
--

INSERT INTO `rsu_ejes` (`id`, `eje`, `abr`, `created_at`, `updated_at`) VALUES
(1, 'Proyección Social', 'PS', NULL, NULL),
(2, 'Extención Cultural', 'EC', NULL, NULL),
(3, 'Medio Ambiente', 'MA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_evidencias`
--

CREATE TABLE `rsu_evidencias` (
  `id` int(10) UNSIGNED NOT NULL,
  `rsu_proyecto_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_lineamientos`
--

CREATE TABLE `rsu_lineamientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rsu_eje_id` int(10) UNSIGNED NOT NULL,
  `lineamiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(1200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_lineamientos`
--

INSERT INTO `rsu_lineamientos` (`id`, `rsu_eje_id`, `lineamiento`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 'Identidad de las profesiones', NULL, NULL, NULL),
(2, 1, 'Servicio social educativo', NULL, NULL, NULL),
(3, 1, 'Consultoría asesoría e intervención', NULL, NULL, NULL),
(4, 1, 'Prestación de servicios integrales en salud', NULL, NULL, NULL),
(5, 2, 'Cultura', NULL, NULL, NULL),
(6, 2, 'Desarrollo educativo', NULL, NULL, NULL),
(7, 3, 'Prevención de la contaminación', NULL, NULL, NULL),
(8, 3, 'Uso sostenible de los recursos', NULL, NULL, NULL),
(9, 3, 'Mitigación y adaptación al cambio climático', NULL, NULL, NULL),
(10, 3, 'Protección del medio ambiente, biodiversidad y restauración de hábitats naturales', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_lineamiento_proyectos`
--

CREATE TABLE `rsu_lineamiento_proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rsu_lin_id` int(10) UNSIGNED NOT NULL,
  `rsu_proy_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_lineamiento_proyectos`
--

INSERT INTO `rsu_lineamiento_proyectos` (`id`, `rsu_lin_id`, `rsu_proy_id`) VALUES
(1, 5, 2),
(2, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_nivels`
--

CREATE TABLE `rsu_nivels` (
  `id` int(10) UNSIGNED NOT NULL,
  `rsu_nivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_nivels`
--

INSERT INTO `rsu_nivels` (`id`, `rsu_nivel`, `created_at`, `updated_at`) VALUES
(1, 'Universidad', NULL, NULL),
(2, 'Facultad', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_participantes`
--

CREATE TABLE `rsu_participantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rsu_proyecto_id` int(10) UNSIGNED NOT NULL,
  `rsu_responsabilidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_participantes`
--

INSERT INTO `rsu_participantes` (`id`, `user_id`, `rsu_proyecto_id`, `rsu_responsabilidad_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, '2018-06-05 21:45:10', '2018-06-05 21:45:10'),
(2, 2, 2, 1, '2018-06-05 22:28:37', '2018-06-05 22:28:37'),
(3, 26, 2, 2, '2018-06-06 17:57:31', '2018-06-06 17:57:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_proyectos`
--

CREATE TABLE `rsu_proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_aprobacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_aprobacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsu_nivel_id` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `lugar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiarios` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliados` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `porcentaje` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objetivos` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `justificacion` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logros` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dificultades` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obs` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_culminacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_culminacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satisfaccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_satisfaccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_informe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etapa` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `mas_lineamientos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_proyectos`
--

INSERT INTO `rsu_proyectos` (`id`, `titulo`, `doc_aprobacion`, `file_aprobacion`, `rsu_nivel_id`, `lugar`, `beneficiarios`, `aliados`, `porcentaje`, `avance`, `objetivos`, `justificacion`, `logros`, `dificultades`, `obs`, `doc_culminacion`, `file_culminacion`, `satisfaccion`, `file_satisfaccion`, `file_informe`, `etapa`, `mas_lineamientos`, `created_at`, `updated_at`) VALUES
(1, 'cad sad', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2018-06-05 21:45:10', '2018-06-05 21:45:10'),
(2, 'Mi primer proyecto', 'Resolución N° 4567', NULL, 2, 'Pillco Marca, Huánuco', 'Comunidad universitaria', 'Docentes', '6', NULL, 'Difundir la importancia de la RSU en la UNHEVAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Extensión Universitaria', '2018-06-05 22:28:37', '2018-06-06 17:58:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsu_responsabilidads`
--

CREATE TABLE `rsu_responsabilidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `rsu_responsabilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rsu_responsabilidads`
--

INSERT INTO `rsu_responsabilidads` (`id`, `rsu_responsabilidad`, `created_at`, `updated_at`) VALUES
(1, 'Docente - Responsable', NULL, NULL),
(2, 'Docente - Integrante', NULL, NULL),
(3, 'Estudiante', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sede` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `sede`, `distrito_id`, `created_at`, `updated_at`) VALUES
(1, 'HUANUCO', 887, NULL, NULL),
(2, 'CHAVINILLO', 955, NULL, NULL),
(3, 'OBAS', 960, NULL, NULL),
(4, 'MONZON', 925, NULL, NULL),
(5, 'CHAVIN DE PARIARCA', 921, NULL, NULL),
(6, 'LLATA', 919, NULL, NULL),
(7, 'JACAS GRANDE', 922, NULL, NULL),
(8, 'PANAO', 939, NULL, NULL),
(9, 'LA UNION', 906, NULL, NULL),
(10, 'BAÑOS', 949, NULL, NULL),
(11, 'JESUS', 948, NULL, NULL),
(12, 'CODO DEL POZUSO', 944, NULL, NULL),
(13, 'HUACRACHUCO', 936, NULL, NULL),
(14, 'CANCHABAMBA', 916, NULL, NULL),
(15, 'AUCAYACU', 933, NULL, NULL),
(16, 'HUACAR', 902, NULL, NULL),
(17, 'CHURUBAMBA/CP TAMBOGAN', 890, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segunda_especialidads`
--

CREATE TABLE `segunda_especialidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `segunda_especialidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escuela_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifarios`
--

CREATE TABLE `tarifarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `depencencia_id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto` double(8,2) DEFAULT NULL,
  `es_modalidades` int(11) DEFAULT NULL,
  `es_maestria` int(11) DEFAULT NULL,
  `es_doctorado` int(11) DEFAULT NULL,
  `es_modalidad_publico` int(11) DEFAULT NULL,
  `es_modalidad_particular` int(11) DEFAULT NULL,
  `es_libre` int(11) DEFAULT NULL,
  `grupo_seleccion_eap` int(11) DEFAULT NULL,
  `es_diplomado` int(11) DEFAULT NULL,
  `es_procapt` int(11) DEFAULT NULL,
  `es_promaster` int(11) DEFAULT NULL,
  `es_segundaespecia` int(11) DEFAULT NULL,
  `es_estudioscomple` int(11) DEFAULT NULL,
  `es_estudiosdistancia` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifario_proceso_seleccions`
--

CREATE TABLE `tarifario_proceso_seleccions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tarifario_id` int(10) UNSIGNED NOT NULL,
  `proceso_selecion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ambientes`
--

CREATE TABLE `tipo_ambientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_ambientes`
--

INSERT INTO `tipo_ambientes` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Aula', NULL, NULL),
(2, 'Taller', NULL, NULL),
(3, 'Laboratorio', NULL, NULL),
(4, 'Biblioteca', NULL, NULL),
(5, 'Centro de Computo', NULL, NULL),
(6, 'Auditorio', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidads`
--

CREATE TABLE `universidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `universidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_nac` date DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `distrito_nac` int(10) UNSIGNED NOT NULL DEFAULT '887',
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_domicilio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_sangre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` int(11) NOT NULL DEFAULT '1',
  `dependencia_id_depende` int(11) DEFAULT NULL,
  `colegio_id_iv` int(11) DEFAULT NULL,
  `colegio_id_v` int(11) DEFAULT NULL,
  `estado_login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `est_civil_id` int(10) UNSIGNED NOT NULL DEFAULT '7',
  `religion_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `f_nac`, `email`, `dni`, `password`, `foto`, `distrito_nac`, `domicilio`, `n_domicilio`, `tel`, `cel`, `tipo_sangre`, `genero`, `dependencia_id_depende`, `colegio_id_iv`, `colegio_id_v`, `estado_login`, `est_civil_id`, `religion_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador ', 'APaterno', 'Amaterno', NULL, '00000001@hotmail.com', '00000001', '$2y$10$643gGXlwif1Oyl5r946KqOpjyy9LUndfCb39Nd5FsKFFeCu983aI.', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(2, 'Docente BD', 'APaterno2', 'Amaterno2', NULL, '00000002@hotmail.com', '00000002', '$2y$10$bDbwhFTV.rcoX2X.7x7VEOu0Pu.xWf60wreC0iHIdrjqr5o0/XPS6', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, 'qpxYf233N4OIw8cYbP0lC1jhtIFDZytdUUrBzlxZKYwIRy0MXOFPMnjsEAvE', NULL, NULL),
(3, 'Estudiante', 'APaterno3', 'Amaterno3', NULL, '00000003@hotmail.com', '00000003', '$2y$10$piayZGofVvz6kpZeq5/2uOa5Un8k0hJIuIkEBnGKlWxSgeKT.eU86', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(4, 'Saúl', 'Escandón', 'Munguía', NULL, 'aescandonmunguia@hotmail.com', '48315690', '$2y$10$WWmNL9Krcg7tVIJIxwEXDeWsJ.6YLZciA8bGXWOs.uMCFshXC.An.', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, 'mxtfiRvAfLSoRFNDmgPN1cILetSPg8SCGHVST9XwyPsgMBnaB2G3q2U2YD94', NULL, NULL),
(5, 'Teddy', 'Tafur', 'Guerra', NULL, 'ttafurg@gmail.com', '44485816', '$2y$10$ej4FHy9pPmfa.C/vuyyYmea2rjlO2fsAjQWvXfzbOgK.3Be1s0uW2', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(6, 'Jhonattan', 'Carlos', 'Simon', NULL, 'yotacs14@gmail.com', '46181970', '$2y$10$KFY1cPLN.PnuonL3etdUhec0fLL0GYq.mMwxqZtunBJySfb4Rn3QC', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(7, 'Pepe', 'Ramos', 'Simon', NULL, 'pepe@gmail.com', '00000004', '$2y$10$w691oau1zUyM5Ipni8EfduGMLZ0lgf/iUScgCamXQsRtjMqE/YnG2', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(8, 'Luciana', 'Ramos', 'Simon', NULL, 'cepreval@gmail.com', '00000005', '$2y$10$DeEpv17MDdom0wN62wx/oOzppPmjQUIJ.etjmnCAKFJOO7S8h5KkC', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(9, 'Juanito', 'Martel', 'Lopez', NULL, 'juanito@gmail.com', '00000006', '$2y$10$plbDEWHtVo8zEk4zVFHz0..Na.ZPwQDs2uwB9OVaFCRePzc4vhfrS', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(10, 'Juan', 'Perales', 'Loarte', NULL, NULL, '12345678', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(11, 'Maria', 'Gutierrez', 'Ramirez', NULL, NULL, '22222222', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(12, 'Pedro', 'Lino', 'Salvador', NULL, NULL, '33333333', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(13, 'Marta', 'Sanchez', 'Rodriguez', NULL, NULL, '44444444', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(14, 'Juanito', 'Jimenez', 'Torres', NULL, NULL, '55555555', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(15, 'Emanuel', 'Lopez', 'Florez', NULL, NULL, '66666666', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(16, 'Karol', 'Llanos', 'Quispe', NULL, NULL, '77777777', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(17, 'Jesus', 'Espinoza', 'Muñoz', NULL, NULL, '88888888', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(18, 'Luis', 'Lino', 'Simón', NULL, NULL, '99999999', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(19, 'Rafael', 'Torres', 'Garcia', NULL, NULL, '11112222', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(20, 'Pedro', 'Ramirez', 'Flores', NULL, NULL, '11113333', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(21, 'Lenin', 'Espinoza', 'Martel', NULL, NULL, '11114444', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(22, 'Luciana', 'Fernandez', 'Daza', NULL, NULL, '11115555', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(23, 'Liz', 'Carlos', 'Malpartida', NULL, NULL, '11116666', NULL, 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(24, 'DRSU-F', 'APaterno', 'Amaterno', NULL, '00000010@hotmail.com', '00000010', '$2y$10$vwWy6LA4yeu0P9xZnqxz6.kmTYgLyYoVP7PUbPG/HKaAGPYwaCi1y', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, 'ATFTEJ3s4y8Idy3TaTePRAwfRQ6zz5VihKpIMth2b7oY7jTK7f4Q1NOKhPru', NULL, NULL),
(25, 'DRSU', 'APaterno', 'Amaterno', NULL, '00000011@hotmail.com', '00000011', '$2y$10$1Yr/QXoOTOJIhmqt0wv0Xuj2uqWAloOWlwR.BMO/hU8obDrXHOGcq', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(26, 'ABELARDO CESAR', 'ACOSTA', 'INGARUCA', NULL, '00000026@hotmail.com', '00000026', '$2y$10$cLi8Y9xNFl.RRqvN5iA9g.ynUm2kWkBidgCUzxgvzLoRvQHbukJpS', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(27, 'RAUL JORGE', 'ALIAGA', 'CAMARENA', NULL, '00000027@hotmail.com', '00000027', '$2y$10$Wbna2LVLbkbpAPzrVhSWBODaThdZs/9mxEC37DJiap/dnbm/vW.Ci', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(28, 'FIDEL', 'ALVARADO', 'ECHEVARRIA', NULL, '00000028@hotmail.com', '00000028', '$2y$10$gp9CqD67iAh/EIzW1APvq.d9i.aJPxC0B0TGL6PmDqPFsXGLbgeNq', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(29, 'CLORINDA NATIVIDAD', 'BARRIONUEVO', 'TORRES', NULL, '00000029@hotmail.com', '00000029', '$2y$10$AbkRG6yX8Ug52e6vB6w1Be51JUkqxrUleDyZ5DtN/vqlCYIbdhUb2', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(30, 'LAURA CARMEN', 'BARRIONUEVO', 'TORRES', NULL, '00000030@hotmail.com', '00000030', '$2y$10$FGAuVlgeXh6thUOJVLC6d.eGGuXpwF6PcGO2fNlpskcxLeRMw2foC', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(31, 'MANUEL ROBERTO', 'BLANCO', 'ALIAGA', NULL, '00000031@hotmail.com', '00000031', '$2y$10$qopNcaChPl7uHsM2F1Aoc.NyliANWtpFfikhtvnWz97wCaR80EzX.', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(32, 'NICEFORO', 'BUSTAMANTE', 'PAULINO', NULL, '00000032@hotmail.com', '00000032', '$2y$10$kQPxKbv5g/61OYExSQ01ou9FKoLQG8Cmfp/na3auXUo1BXAuuz0U2', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL),
(33, 'ANDRES AVELINO', 'CAMARA', 'ACERO', NULL, '00000033@hotmail.com', '00000033', '$2y$10$rBaMUPVSqy2fyRAnFGL7uexdx0qFHBGG9vmriwMdGQ4yp9DjcfAmW', 'user.png', 887, NULL, NULL, NULL, NULL, NULL, 1, 30, NULL, NULL, '0', 7, 1, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_silabos`
--
ALTER TABLE `actividad_silabos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `act_no_lectivas`
--
ALTER TABLE `act_no_lectivas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendarios`
--
ALTER TABLE `calendarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cale_cursos`
--
ALTER TABLE `cale_cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cale_cursos_carga_lectiva_id_foreign` (`carga_lectiva_id`);

--
-- Indices de la tabla `cal_pregra_gens`
--
ALTER TABLE `cal_pregra_gens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carga_lectivas`
--
ALTER TABLE `carga_lectivas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carga_lectivas_curso_id_foreign` (`curso_id`),
  ADD KEY `carga_lectivas_docente_id_foreign` (`docente_id`);

--
-- Indices de la tabla `carga_no_lectivas`
--
ALTER TABLE `carga_no_lectivas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carga_no_lectivas_docente_id_foreign` (`docente_id`),
  ADD KEY `carga_no_lectivas_act_no_lectiva_id_foreign` (`act_no_lectiva_id`);

--
-- Indices de la tabla `colegios`
--
ALTER TABLE `colegios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `control_pagos`
--
ALTER TABLE `control_pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `control_pagos_pago_id_foreign` (`pago_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dep_academicos`
--
ALTER TABLE `dep_academicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dep_academicos_facultad_id_foreign` (`facultad_id`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distritos_provincia_id_foreign` (`provincia_id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `docentes_dependencia_escuela_id_foreign` (`dependencia_escuela_id`);

--
-- Indices de la tabla `docente_categorias`
--
ALTER TABLE `docente_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docente_condicions`
--
ALTER TABLE `docente_condicions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docente_dedicacions`
--
ALTER TABLE `docente_dedicacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docente_otros`
--
ALTER TABLE `docente_otros`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `doctorados`
--
ALTER TABLE `doctorados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escuelas_facultad_id_foreign` (`facultad_id`);

--
-- Indices de la tabla `escuela_sedes`
--
ALTER TABLE `escuela_sedes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escuela_sedes_sede_id_foreign` (`sede_id`),
  ADD KEY `escuela_sedes_escuela_id_foreign` (`escuela_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `estudiantes_cod_univ_unique` (`cod_univ`),
  ADD KEY `estudiantes_dependencia_escuela_id_foreign` (`dependencia_escuela_id`);

--
-- Indices de la tabla `estudios_complementarios`
--
ALTER TABLE `estudios_complementarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `est_civils`
--
ALTER TABLE `est_civils`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facultads`
--
ALTER TABLE `facultads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado_bachillers`
--
ALTER TABLE `grado_bachillers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grado_bachillers_universidad_id_foreign` (`universidad_id`);

--
-- Indices de la tabla `grado_doctors`
--
ALTER TABLE `grado_doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grado_doctors_universidad_id_foreign` (`universidad_id`);

--
-- Indices de la tabla `grado_magisters`
--
ALTER TABLE `grado_magisters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grado_magisters_universidad_id_foreign` (`universidad_id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion_alumnos`
--
ALTER TABLE `inscripcion_alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_alumnos_user_id_foreign` (`user_id`),
  ADD KEY `inscripcion_alumnos_inscripcion_curso_disponible_id_foreign` (`inscripcion_curso_disponible_id`),
  ADD KEY `inscripcion_alumnos_pago_id_foreign` (`pago_id`);

--
-- Indices de la tabla `inscripcion_cursos`
--
ALTER TABLE `inscripcion_cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_cursos_inscripcion_modulo_id_foreign` (`inscripcion_modulo_id`);

--
-- Indices de la tabla `inscripcion_curso_disponibles`
--
ALTER TABLE `inscripcion_curso_disponibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_curso_disponibles_inscripcion_curso_id_foreign` (`inscripcion_curso_id`),
  ADD KEY `inscripcion_curso_disponibles_docente_otros_user_id_foreign` (`docente_otros_user_id`);

--
-- Indices de la tabla `inscripcion_horarios`
--
ALTER TABLE `inscripcion_horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_horarios_inscripcion_curso_disponible_id_foreign` (`inscripcion_curso_disponible_id`);

--
-- Indices de la tabla `inscripcion_modulos`
--
ALTER TABLE `inscripcion_modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion_modulo_ncgts`
--
ALTER TABLE `inscripcion_modulo_ncgts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_modulo_ncgts_inscripcion_ncgt_id_foreign` (`inscripcion_ncgt_id`),
  ADD KEY `inscripcion_modulo_ncgts_modulo_ncgt_id_foreign` (`modulo_ncgt_id`);

--
-- Indices de la tabla `inscripcion_ncgts`
--
ALTER TABLE `inscripcion_ncgts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_ncgts_user_id_foreign` (`user_id`),
  ADD KEY `inscripcion_ncgts_programa_ncgt_id_foreign` (`programa_ncgt_id`);

--
-- Indices de la tabla `maestrias`
--
ALTER TABLE `maestrias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maestrias_maestria_area_id_foreign` (`maestria_area_id`);

--
-- Indices de la tabla `maestria_areas`
--
ALTER TABLE `maestria_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulo_ncgts`
--
ALTER TABLE `modulo_ncgts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulo_ncgts_programa_ncgt_id_foreign` (`programa_ncgt_id`);

--
-- Indices de la tabla `pabellons`
--
ALTER TABLE `pabellons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagos_num_comprobante_unique` (`num_comprobante`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulacions`
--
ALTER TABLE `postulacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postulacions_users_id_foreign` (`users_id`),
  ADD KEY `postulacions_proceso_seleccion_id_foreign` (`proceso_seleccion_id`);

--
-- Indices de la tabla `postulacion_ciclos`
--
ALTER TABLE `postulacion_ciclos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulacion_modalidads`
--
ALTER TABLE `postulacion_modalidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulacion_preparacions`
--
ALTER TABLE `postulacion_preparacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulacion_situacions`
--
ALTER TABLE `postulacion_situacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proceso_seleccions`
--
ALTER TABLE `proceso_seleccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa_ncgts`
--
ALTER TABLE `programa_ncgts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programa_ncgts_dependencia_id_foreign` (`dependencia_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincias_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rols_rol_unique` (`rol`);

--
-- Indices de la tabla `rol_users`
--
ALTER TABLE `rol_users`
  ADD PRIMARY KEY (`rol_id`,`user_id`),
  ADD KEY `rol_users_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `rsu_calendarios`
--
ALTER TABLE `rsu_calendarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_calendarios_rsu_proyecto_id_foreign` (`rsu_proyecto_id`);

--
-- Indices de la tabla `rsu_comentarios`
--
ALTER TABLE `rsu_comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_comentarios_user_id_foreign` (`user_id`),
  ADD KEY `rsu_comentarios_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `rsu_ejes`
--
ALTER TABLE `rsu_ejes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rsu_evidencias`
--
ALTER TABLE `rsu_evidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_evidencias_rsu_proyecto_id_foreign` (`rsu_proyecto_id`);

--
-- Indices de la tabla `rsu_lineamientos`
--
ALTER TABLE `rsu_lineamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_lineamientos_rsu_eje_id_foreign` (`rsu_eje_id`);

--
-- Indices de la tabla `rsu_lineamiento_proyectos`
--
ALTER TABLE `rsu_lineamiento_proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_lineamiento_proyectos_rsu_lin_id_foreign` (`rsu_lin_id`),
  ADD KEY `rsu_lineamiento_proyectos_rsu_proy_id_foreign` (`rsu_proy_id`);

--
-- Indices de la tabla `rsu_nivels`
--
ALTER TABLE `rsu_nivels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rsu_participantes`
--
ALTER TABLE `rsu_participantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_participantes_user_id_foreign` (`user_id`),
  ADD KEY `rsu_participantes_rsu_proyecto_id_foreign` (`rsu_proyecto_id`),
  ADD KEY `rsu_participantes_rsu_responsabilidad_id_foreign` (`rsu_responsabilidad_id`);

--
-- Indices de la tabla `rsu_proyectos`
--
ALTER TABLE `rsu_proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rsu_proyectos_rsu_nivel_id_foreign` (`rsu_nivel_id`);

--
-- Indices de la tabla `rsu_responsabilidads`
--
ALTER TABLE `rsu_responsabilidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sedes_distrito_id_foreign` (`distrito_id`);

--
-- Indices de la tabla `segunda_especialidads`
--
ALTER TABLE `segunda_especialidads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `segunda_especialidads_escuela_id_foreign` (`escuela_id`);

--
-- Indices de la tabla `tarifarios`
--
ALTER TABLE `tarifarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifario_proceso_seleccions`
--
ALTER TABLE `tarifario_proceso_seleccions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarifario_proceso_seleccions_tarifario_id_foreign` (`tarifario_id`),
  ADD KEY `tarifario_proceso_seleccions_proceso_selecion_id_foreign` (`proceso_selecion_id`);

--
-- Indices de la tabla `tipo_ambientes`
--
ALTER TABLE `tipo_ambientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `universidads`
--
ALTER TABLE `universidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_dni_unique` (`dni`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_distrito_nac_foreign` (`distrito_nac`),
  ADD KEY `users_est_civil_id_foreign` (`est_civil_id`),
  ADD KEY `users_religion_id_foreign` (`religion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_silabos`
--
ALTER TABLE `actividad_silabos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `act_no_lectivas`
--
ALTER TABLE `act_no_lectivas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `calendarios`
--
ALTER TABLE `calendarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cale_cursos`
--
ALTER TABLE `cale_cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cal_pregra_gens`
--
ALTER TABLE `cal_pregra_gens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carga_lectivas`
--
ALTER TABLE `carga_lectivas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carga_no_lectivas`
--
ALTER TABLE `carga_no_lectivas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colegios`
--
ALTER TABLE `colegios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `control_pagos`
--
ALTER TABLE `control_pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `dep_academicos`
--
ALTER TABLE `dep_academicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1933;

--
-- AUTO_INCREMENT de la tabla `docente_categorias`
--
ALTER TABLE `docente_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `docente_condicions`
--
ALTER TABLE `docente_condicions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `docente_dedicacions`
--
ALTER TABLE `docente_dedicacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `doctorados`
--
ALTER TABLE `doctorados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `escuela_sedes`
--
ALTER TABLE `escuela_sedes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `estudios_complementarios`
--
ALTER TABLE `estudios_complementarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `est_civils`
--
ALTER TABLE `est_civils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `facultads`
--
ALTER TABLE `facultads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `grado_bachillers`
--
ALTER TABLE `grado_bachillers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grado_doctors`
--
ALTER TABLE `grado_doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grado_magisters`
--
ALTER TABLE `grado_magisters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inscripcion_alumnos`
--
ALTER TABLE `inscripcion_alumnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_cursos`
--
ALTER TABLE `inscripcion_cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `inscripcion_curso_disponibles`
--
ALTER TABLE `inscripcion_curso_disponibles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_horarios`
--
ALTER TABLE `inscripcion_horarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_modulos`
--
ALTER TABLE `inscripcion_modulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `inscripcion_modulo_ncgts`
--
ALTER TABLE `inscripcion_modulo_ncgts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_ncgts`
--
ALTER TABLE `inscripcion_ncgts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `maestrias`
--
ALTER TABLE `maestrias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `maestria_areas`
--
ALTER TABLE `maestria_areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=653;

--
-- AUTO_INCREMENT de la tabla `modulo_ncgts`
--
ALTER TABLE `modulo_ncgts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pabellons`
--
ALTER TABLE `pabellons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `postulacions`
--
ALTER TABLE `postulacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `postulacion_ciclos`
--
ALTER TABLE `postulacion_ciclos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `postulacion_modalidads`
--
ALTER TABLE `postulacion_modalidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `postulacion_preparacions`
--
ALTER TABLE `postulacion_preparacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `postulacion_situacions`
--
ALTER TABLE `postulacion_situacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proceso_seleccions`
--
ALTER TABLE `proceso_seleccions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `programa_ncgts`
--
ALTER TABLE `programa_ncgts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `rsu_calendarios`
--
ALTER TABLE `rsu_calendarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rsu_comentarios`
--
ALTER TABLE `rsu_comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rsu_ejes`
--
ALTER TABLE `rsu_ejes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rsu_evidencias`
--
ALTER TABLE `rsu_evidencias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rsu_lineamientos`
--
ALTER TABLE `rsu_lineamientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rsu_lineamiento_proyectos`
--
ALTER TABLE `rsu_lineamiento_proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rsu_nivels`
--
ALTER TABLE `rsu_nivels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rsu_participantes`
--
ALTER TABLE `rsu_participantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rsu_proyectos`
--
ALTER TABLE `rsu_proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rsu_responsabilidads`
--
ALTER TABLE `rsu_responsabilidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `segunda_especialidads`
--
ALTER TABLE `segunda_especialidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarifarios`
--
ALTER TABLE `tarifarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarifario_proceso_seleccions`
--
ALTER TABLE `tarifario_proceso_seleccions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_ambientes`
--
ALTER TABLE `tipo_ambientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `universidads`
--
ALTER TABLE `universidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cale_cursos`
--
ALTER TABLE `cale_cursos`
  ADD CONSTRAINT `cale_cursos_carga_lectiva_id_foreign` FOREIGN KEY (`carga_lectiva_id`) REFERENCES `carga_lectivas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `carga_lectivas`
--
ALTER TABLE `carga_lectivas`
  ADD CONSTRAINT `carga_lectivas_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carga_lectivas_docente_id_foreign` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`user_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `carga_no_lectivas`
--
ALTER TABLE `carga_no_lectivas`
  ADD CONSTRAINT `carga_no_lectivas_act_no_lectiva_id_foreign` FOREIGN KEY (`act_no_lectiva_id`) REFERENCES `carga_no_lectivas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carga_no_lectivas_docente_id_foreign` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`user_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `control_pagos`
--
ALTER TABLE `control_pagos`
  ADD CONSTRAINT `control_pagos_pago_id_foreign` FOREIGN KEY (`pago_id`) REFERENCES `pagos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `dep_academicos`
--
ALTER TABLE `dep_academicos`
  ADD CONSTRAINT `dep_academicos_facultad_id_foreign` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_dependencia_escuela_id_foreign` FOREIGN KEY (`dependencia_escuela_id`) REFERENCES `dependencias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `docentes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `docente_otros`
--
ALTER TABLE `docente_otros`
  ADD CONSTRAINT `docente_otros_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD CONSTRAINT `escuelas_facultad_id_foreign` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `escuela_sedes`
--
ALTER TABLE `escuela_sedes`
  ADD CONSTRAINT `escuela_sedes_escuela_id_foreign` FOREIGN KEY (`escuela_id`) REFERENCES `escuelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `escuela_sedes_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_dependencia_escuela_id_foreign` FOREIGN KEY (`dependencia_escuela_id`) REFERENCES `dependencias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `estudiantes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `grado_bachillers`
--
ALTER TABLE `grado_bachillers`
  ADD CONSTRAINT `grado_bachillers_universidad_id_foreign` FOREIGN KEY (`universidad_id`) REFERENCES `universidads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `grado_doctors`
--
ALTER TABLE `grado_doctors`
  ADD CONSTRAINT `grado_doctors_universidad_id_foreign` FOREIGN KEY (`universidad_id`) REFERENCES `universidads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `grado_magisters`
--
ALTER TABLE `grado_magisters`
  ADD CONSTRAINT `grado_magisters_universidad_id_foreign` FOREIGN KEY (`universidad_id`) REFERENCES `universidads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_alumnos`
--
ALTER TABLE `inscripcion_alumnos`
  ADD CONSTRAINT `inscripcion_alumnos_inscripcion_curso_disponible_id_foreign` FOREIGN KEY (`inscripcion_curso_disponible_id`) REFERENCES `inscripcion_curso_disponibles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripcion_alumnos_pago_id_foreign` FOREIGN KEY (`pago_id`) REFERENCES `pagos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripcion_alumnos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_cursos`
--
ALTER TABLE `inscripcion_cursos`
  ADD CONSTRAINT `inscripcion_cursos_inscripcion_modulo_id_foreign` FOREIGN KEY (`inscripcion_modulo_id`) REFERENCES `inscripcion_modulos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_curso_disponibles`
--
ALTER TABLE `inscripcion_curso_disponibles`
  ADD CONSTRAINT `inscripcion_curso_disponibles_docente_otros_user_id_foreign` FOREIGN KEY (`docente_otros_user_id`) REFERENCES `docente_otros` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripcion_curso_disponibles_inscripcion_curso_id_foreign` FOREIGN KEY (`inscripcion_curso_id`) REFERENCES `inscripcion_cursos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_horarios`
--
ALTER TABLE `inscripcion_horarios`
  ADD CONSTRAINT `inscripcion_horarios_inscripcion_curso_disponible_id_foreign` FOREIGN KEY (`inscripcion_curso_disponible_id`) REFERENCES `inscripcion_curso_disponibles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_modulo_ncgts`
--
ALTER TABLE `inscripcion_modulo_ncgts`
  ADD CONSTRAINT `inscripcion_modulo_ncgts_inscripcion_ncgt_id_foreign` FOREIGN KEY (`inscripcion_ncgt_id`) REFERENCES `inscripcion_ncgts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripcion_modulo_ncgts_modulo_ncgt_id_foreign` FOREIGN KEY (`modulo_ncgt_id`) REFERENCES `modulo_ncgts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_ncgts`
--
ALTER TABLE `inscripcion_ncgts`
  ADD CONSTRAINT `inscripcion_ncgts_programa_ncgt_id_foreign` FOREIGN KEY (`programa_ncgt_id`) REFERENCES `programa_ncgts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripcion_ncgts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `maestrias`
--
ALTER TABLE `maestrias`
  ADD CONSTRAINT `maestrias_maestria_area_id_foreign` FOREIGN KEY (`maestria_area_id`) REFERENCES `maestria_areas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `modulo_ncgts`
--
ALTER TABLE `modulo_ncgts`
  ADD CONSTRAINT `modulo_ncgts_programa_ncgt_id_foreign` FOREIGN KEY (`programa_ncgt_id`) REFERENCES `programa_ncgts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `postulacions`
--
ALTER TABLE `postulacions`
  ADD CONSTRAINT `postulacions_proceso_seleccion_id_foreign` FOREIGN KEY (`proceso_seleccion_id`) REFERENCES `proceso_seleccions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `postulacions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `programa_ncgts`
--
ALTER TABLE `programa_ncgts`
  ADD CONSTRAINT `programa_ncgts_dependencia_id_foreign` FOREIGN KEY (`dependencia_id`) REFERENCES `dependencias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `provincias_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rol_users`
--
ALTER TABLE `rol_users`
  ADD CONSTRAINT `rol_users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rol_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_calendarios`
--
ALTER TABLE `rsu_calendarios`
  ADD CONSTRAINT `rsu_calendarios_rsu_proyecto_id_foreign` FOREIGN KEY (`rsu_proyecto_id`) REFERENCES `rsu_proyectos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_comentarios`
--
ALTER TABLE `rsu_comentarios`
  ADD CONSTRAINT `rsu_comentarios_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `rsu_proyectos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rsu_comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_evidencias`
--
ALTER TABLE `rsu_evidencias`
  ADD CONSTRAINT `rsu_evidencias_rsu_proyecto_id_foreign` FOREIGN KEY (`rsu_proyecto_id`) REFERENCES `rsu_proyectos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_lineamientos`
--
ALTER TABLE `rsu_lineamientos`
  ADD CONSTRAINT `rsu_lineamientos_rsu_eje_id_foreign` FOREIGN KEY (`rsu_eje_id`) REFERENCES `rsu_ejes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_lineamiento_proyectos`
--
ALTER TABLE `rsu_lineamiento_proyectos`
  ADD CONSTRAINT `rsu_lineamiento_proyectos_rsu_lin_id_foreign` FOREIGN KEY (`rsu_lin_id`) REFERENCES `rsu_lineamientos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rsu_lineamiento_proyectos_rsu_proy_id_foreign` FOREIGN KEY (`rsu_proy_id`) REFERENCES `rsu_proyectos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_participantes`
--
ALTER TABLE `rsu_participantes`
  ADD CONSTRAINT `rsu_participantes_rsu_proyecto_id_foreign` FOREIGN KEY (`rsu_proyecto_id`) REFERENCES `rsu_proyectos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rsu_participantes_rsu_responsabilidad_id_foreign` FOREIGN KEY (`rsu_responsabilidad_id`) REFERENCES `rsu_responsabilidads` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rsu_participantes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rsu_proyectos`
--
ALTER TABLE `rsu_proyectos`
  ADD CONSTRAINT `rsu_proyectos_rsu_nivel_id_foreign` FOREIGN KEY (`rsu_nivel_id`) REFERENCES `rsu_nivels` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_distrito_id_foreign` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `segunda_especialidads`
--
ALTER TABLE `segunda_especialidads`
  ADD CONSTRAINT `segunda_especialidads_escuela_id_foreign` FOREIGN KEY (`escuela_id`) REFERENCES `escuelas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tarifario_proceso_seleccions`
--
ALTER TABLE `tarifario_proceso_seleccions`
  ADD CONSTRAINT `tarifario_proceso_seleccions_proceso_selecion_id_foreign` FOREIGN KEY (`proceso_selecion_id`) REFERENCES `proceso_seleccions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tarifario_proceso_seleccions_tarifario_id_foreign` FOREIGN KEY (`tarifario_id`) REFERENCES `tarifarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_distrito_nac_foreign` FOREIGN KEY (`distrito_nac`) REFERENCES `distritos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_est_civil_id_foreign` FOREIGN KEY (`est_civil_id`) REFERENCES `est_civils` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
