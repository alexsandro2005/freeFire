-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 07:20:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `freefire`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armas`
--

CREATE TABLE `armas` (
  `idArma` int(10) NOT NULL,
  `nombreArma` varchar(100) NOT NULL,
  `cantidadBalas` smallint(10) NOT NULL,
  `daño` smallint(6) NOT NULL,
  `tipoArma` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` int(10) NOT NULL,
  `nombreAvatar` varchar(100) NOT NULL,
  `imagenAvatar` varchar(200) NOT NULL,
  `descripcionAvatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `nombreAvatar`, `imagenAvatar`, `descripcionAvatar`) VALUES
(1293302, 'Alok', 'files/Alok.png', 'Aprovechando el poder de la música, Alok dejó Brasil y viajó por el mundo. Su nombre significa \"luz\".Ha firmado un contrato y se realizará un concierto cerrado en el campo de batalla de Free Fire. isla para algunos invitados VIP!'),
(1293303, 'Chrono', 'files/chrono.png', 'Tuvo una infancia normal en su universo original. sus padres eran famosos abogados que lucharon contra la pobreza y ayudaron a traer a las personas pobres sin hogar hacia la sociedad.'),
(1293304, 'Skyler', 'files/Skyler.png', 'Impulsado a ser el mejor talento musical en el negocio y también a encontrar el mejor talento. No le gusta perder y cree que la creatividad permite que la gente vea lo bueno del mundo en lugar de lo malo.'),
(1293305, 'Caroline', 'files/Caroline.png', ' Tiene suficientes fanáticos para llenar un estadio entero. Ella es sin duda la más Chica popular en la escuela. Su padre y sus amigos son los dos más valiosos. cosas en su vida.'),
(1293306, 'Hayato', 'files/Hayato.png', 'Hayato, un niño de una legendaria familia samurái. Ser hijo único significa que Hayato necesita continuar con la tradición familiar y la maldición.Este joven Samurai tiene un secreto que nadie más puede saber.'),
(1293307, 'Dimitri', 'files/Dimitri.png', 'Dimitri es el hermano mayor de Thiva. En su vida diaria pasaba la mayor parte de su día en el laboratorio desarrollando nueva tecnología de sonido.'),
(1293308, 'Steffie', 'files/Steffie.png', 'Steffie es una artista liberal. Desde pequeña ya ha demostrado la regalo sorprendente para el arte. Después de la guerra, Steffie vio el surgimiento de Future. Horizontes en su país y cómo cazaban artistas de nombre de un futuro mejor.'),
(1293309, 'Xayne', 'files/Xayne.png', ' Xayne siempre estuvo interesada en actividades más extremas incluso cuando era un niño. Prefiere la adrenalina de los deportes extremos de la interacción humana. De espíritu libre, quiere explorar la vida y encontrar sus límites.'),
(1293310, 'Kenta', 'files/Kenta.png', 'Kenta sirvió como guardaespaldas y herrero de la familia de Hayato Yagami. durante años. Es un hombre de pocas palabras pero protege a su nuevo y joven maestro. en cualquier situación en la que se encuentren.'),
(1293311, 'Homer', 'files/Homer.png', 'Homer es un ciego que no sólo es un asesino, sino también uno de los fundadores de la próspera pandilla tecnológica en Griza.'),
(1293312, 'Dasha', 'files/Dasha.png', ' Dasha era una niña muy feliz y productiva, pero luego una serie de sucesos desafortunados llegaron a su vida. Sus padres murieron, su mejor amiga se mudó, su familia adoptiva fue terrible con ella. El país estaba al borde de la guerra.'),
(1293313, 'Clu', 'files/Clu.png', 'Clu creció en un suburbio de una gran ciudad. Sus padres eran ricos, Nunca tuvo que preocuparse por los aspectos básicos de la vida y tenía una vida muy infancia amorosa.'),
(1293314, 'Shirou', 'files/Shirou.png', 'Es el chico de entregas más rápido a domicilio. No hay otro corredor tan rápido como Shirou. A veces participa en carreras para ganar dinero extra y para sentir la adrenalina en sus venas. Es un gran fan de Kla, y usa su tiempo libre para entrenar el estilo de la Cobra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_nivel`
--

CREATE TABLE `detalle_nivel` (
  `id_detalleNivel` int(10) NOT NULL,
  `id_jugador` int(10) NOT NULL,
  `id_nivel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_nivel`
--

INSERT INTO `detalle_nivel` (`id_detalleNivel`, `id_jugador`, `id_nivel`) VALUES
(9, 79464482, 1),
(10, 2147483647, 1),
(11, 1192907232, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_partida`
--

CREATE TABLE `detalle_partida` (
  `id_detallepartida` int(10) NOT NULL,
  `id_jugador` int(10) NOT NULL,
  `id_contrincante` int(10) NOT NULL,
  `id_partida` int(10) NOT NULL,
  `id_arma` int(10) NOT NULL,
  `total_dano` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_jugadores`
--

CREATE TABLE `entrada_jugadores` (
  `id` int(11) NOT NULL,
  `horario_entrada` datetime NOT NULL,
  `documento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrada_jugadores`
--

INSERT INTO `entrada_jugadores` (`id`, `horario_entrada`, `documento`) VALUES
(1, '2023-09-28 02:02:43', 1110460410),
(2, '2023-09-28 02:02:57', 1110460410),
(3, '2023-09-28 15:06:39', 1110460410),
(4, '2023-09-30 11:55:42', 1110460410),
(5, '2023-09-30 12:38:47', 1110460410),
(6, '2023-09-30 13:01:53', 1110460410),
(7, '2023-09-30 13:41:35', 1110460410),
(8, '2023-09-30 17:46:48', 1110460410),
(9, '2023-09-30 17:48:14', 1110460410),
(10, '2023-10-01 01:53:34', 1110460410),
(11, '2023-10-01 02:06:11', 1110460410),
(12, '2023-10-02 09:43:38', 1110460410),
(13, '2023-10-02 10:38:27', 1110460410),
(14, '2023-10-02 10:38:30', 1110460410),
(15, '2023-10-02 10:43:32', 1110460410),
(16, '2023-10-03 06:16:50', 1110460410),
(17, '2023-10-03 09:39:33', 1110460410),
(18, '2023-10-05 21:46:43', 1106632525),
(19, '2023-10-05 21:53:56', 1106632525),
(20, '2023-10-05 22:35:31', 1106632525),
(21, '2023-10-05 22:37:09', 1106632525),
(22, '2023-10-06 01:05:13', 1106632525),
(23, '2023-10-06 01:54:32', 1106632525),
(24, '2023-10-06 06:47:00', 1110460410),
(25, '2023-10-06 07:18:00', 1110460410),
(26, '2023-10-06 07:46:01', 1110460410),
(27, '2023-10-08 21:26:31', 79464482),
(28, '2023-10-08 21:27:57', 79464482),
(29, '2023-10-08 21:36:39', 79464482),
(30, '2023-10-08 21:43:30', 79464482),
(31, '2023-10-08 21:45:04', 79464482),
(32, '2023-10-08 22:03:43', 79464482),
(33, '2023-10-08 22:13:38', 79464482),
(34, '2023-10-08 22:22:52', 2147483647),
(35, '2023-10-09 00:29:21', 79464482),
(36, '2023-10-09 00:30:19', 79464482),
(37, '2023-10-09 06:51:55', 79464482),
(38, '2023-10-09 07:28:54', 79464482),
(39, '2023-10-09 10:04:01', 1110460410),
(40, '2023-10-09 10:10:47', 79464482),
(41, '2023-10-09 10:23:40', 79464482),
(42, '2023-10-09 11:26:14', 1110460410),
(43, '2023-10-09 11:35:15', 1192907232),
(44, '2023-10-09 11:44:05', 1110460410),
(45, '2023-10-09 23:37:04', 79464482),
(46, '2023-10-10 06:06:48', 79464482),
(47, '2023-10-10 07:45:50', 79464482),
(48, '2023-10-10 08:00:47', 79464482),
(49, '2023-10-10 08:19:11', 1110460410),
(50, '2023-10-10 09:16:43', 1110460410),
(51, '2023-10-10 09:48:37', 79464482);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(10) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mundos`
--

CREATE TABLE `mundos` (
  `idMundo` int(10) NOT NULL,
  `nombreMundo` varchar(100) NOT NULL,
  `imagenMundo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mundos`
--

INSERT INTO `mundos` (`idMundo`, `nombreMundo`, `imagenMundo`) VALUES
(893021, 'DE- Clasificatoria', 'worlds/DE-clasificatoria.jpg'),
(90203201, 'BR- Clasificatoria', 'worlds/mundoBr-clasificatoria.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `idNivel` int(10) NOT NULL,
  `nombreNivel` varchar(100) NOT NULL,
  `puntosRequeridos` smallint(10) NOT NULL,
  `imagenNivel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`idNivel`, `nombreNivel`, `puntosRequeridos`, `imagenNivel`) VALUES
(1, 'Nivel 1', 0, 'niveles/br-clasificatoria.jpg'),
(2, 'Nivel 2', 500, 'niveles/DE-clasificatoria.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `id_partida` int(10) NOT NULL,
  `cantidad_jugadores` smallint(10) NOT NULL,
  `id_mundo` int(10) NOT NULL,
  `fechaInicial` datetime NOT NULL,
  `fechaFinal` datetime NOT NULL,
  `jugadoresActivos` int(11) NOT NULL,
  `id_estado` int(10) NOT NULL,
  `id_jugadorGanador` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `partida`
--

INSERT INTO `partida` (`id_partida`, `cantidad_jugadores`, `id_mundo`, `fechaInicial`, `fechaFinal`, `jugadoresActivos`, `id_estado`, `id_jugadorGanador`) VALUES
(1, 30, 90203201, '2023-10-10 09:38:33', '0000-00-00 00:00:00', 0, 1, 0),
(2, 30, 893021, '2023-10-10 09:43:42', '0000-00-00 00:00:00', 0, 1, 0),
(3, 30, 90203201, '2023-10-10 09:47:05', '0000-00-00 00:00:00', 0, 1, 0),
(4, 30, 90203201, '2023-10-10 09:47:17', '0000-00-00 00:00:00', 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `idRango` int(10) NOT NULL,
  `nombreRango` varchar(30) NOT NULL,
  `imagenRango` varchar(255) NOT NULL,
  `puntosRequeridos` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`idRango`, `nombreRango`, `imagenRango`, `puntosRequeridos`) VALUES
(1, 'Principiante Oro-1', 'levels/Oro-1.png', 0),
(2, 'Principiante Platino-2', 'levels/platino-1.png', 250),
(3, 'Intermedio Diamante-1', 'levels/Diamante-2.png', 500),
(4, 'Intermedio Heroico-2', 'levels/heroico-1.png', 750),
(5, 'Avanzado Maestro-3', 'levels/maestro-1.png', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(5) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Jugador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida_jugadores`
--

CREATE TABLE `salida_jugadores` (
  `id_salida` int(11) NOT NULL,
  `fecha_salida` datetime NOT NULL,
  `documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoarma`
--

CREATE TABLE `tipoarma` (
  `idTipoArma` int(10) NOT NULL,
  `tipoArma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodaño`
--

CREATE TABLE `tipodaño` (
  `id_tipoDaño` int(10) NOT NULL,
  `daño` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocu`
--

CREATE TABLE `tipodocu` (
  `id_tipoDocu` int(10) NOT NULL,
  `tipoDocu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodocu`
--

INSERT INTO `tipodocu` (`id_tipoDocu`, `tipoDocu`) VALUES
(1, 'C.C'),
(2, 'T.I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` bigint(15) NOT NULL,
  `nombreCompleto` text NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `avatar` int(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `idRol` int(5) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `genero` int(11) NOT NULL,
  `estadoUsuario` varchar(10) NOT NULL,
  `correoElectronico` varchar(255) NOT NULL,
  `tipoDocumento` int(11) NOT NULL,
  `puntosAcumulados` smallint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombreCompleto`, `nombreUsuario`, `avatar`, `password`, `idRol`, `fecha_registro`, `genero`, `estadoUsuario`, `correoElectronico`, `tipoDocumento`, `puntosAcumulados`) VALUES
(79464482, 'Daniel Alvarez', 'daniel23', 1293307, '$2y$15$me/qmrkP8AhLAEAaa8tDuu3Ms5TrGej7iJefN5uFsPUBAtuUIpuJi', 2, '2023-10-08 21:09:01', 1, '1', 'daniel@gmail.com', 1, 0),
(1110460410, 'Alejandro Muñoz', 'muñoz1201', NULL, '$2y$15$pwCAuKeppnbHB6VvkdlJCegmY5CK9EK.Psvs4lg3dlRZd1QnOqZ8q', 1, '2023-09-28 01:15:54', 1, '1', 'luisalejandrm533@gmail.com', 1, 0),
(1192907232, 'Jaime Orduz', 'jaime08', 1293305, '$2y$15$ovYN4Vtv17WrmM2GYkGv2.ZIdzUA.r89g4wCEnrFryrx5Jh1Dg/Ye', 2, '2023-10-09 11:34:44', 1, '1', 'jaime@gmail.com', 1, 0),
(3492929291, 'Cesar Esquivel', 'esquivel13', 1293306, '$2y$15$2G27l18VQUSUABQ/IwnG9.1Xz5paWLv0L9iBbcopy4ndWM.b1i3Ha', 2, '2023-10-08 22:22:33', 1, '1', 'esquivel@gmail.com', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `armas`
--
ALTER TABLE `armas`
  ADD PRIMARY KEY (`idArma`);

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_nivel`
--
ALTER TABLE `detalle_nivel`
  ADD PRIMARY KEY (`id_detalleNivel`);

--
-- Indices de la tabla `detalle_partida`
--
ALTER TABLE `detalle_partida`
  ADD PRIMARY KEY (`id_detallepartida`);

--
-- Indices de la tabla `entrada_jugadores`
--
ALTER TABLE `entrada_jugadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `mundos`
--
ALTER TABLE `mundos`
  ADD PRIMARY KEY (`idMundo`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`id_partida`);

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`idRango`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `salida_jugadores`
--
ALTER TABLE `salida_jugadores`
  ADD PRIMARY KEY (`id_salida`);

--
-- Indices de la tabla `tipoarma`
--
ALTER TABLE `tipoarma`
  ADD PRIMARY KEY (`idTipoArma`);

--
-- Indices de la tabla `tipodaño`
--
ALTER TABLE `tipodaño`
  ADD PRIMARY KEY (`id_tipoDaño`);

--
-- Indices de la tabla `tipodocu`
--
ALTER TABLE `tipodocu`
  ADD PRIMARY KEY (`id_tipoDocu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `nombreUsuario` (`nombreUsuario`),
  ADD UNIQUE KEY `correoElectronico` (`correoElectronico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1293315;

--
-- AUTO_INCREMENT de la tabla `detalle_nivel`
--
ALTER TABLE `detalle_nivel`
  MODIFY `id_detalleNivel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_partida`
--
ALTER TABLE `detalle_partida`
  MODIFY `id_detallepartida` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrada_jugadores`
--
ALTER TABLE `entrada_jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `idNivel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `id_partida` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `idRango` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salida_jugadores`
--
ALTER TABLE `salida_jugadores`
  MODIFY `id_salida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodaño`
--
ALTER TABLE `tipodaño`
  MODIFY `id_tipoDaño` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodocu`
--
ALTER TABLE `tipodocu`
  MODIFY `id_tipoDocu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
