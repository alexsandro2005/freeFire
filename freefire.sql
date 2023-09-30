-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2023 a las 00:59:32
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
  `idAvatar` int(10) NOT NULL,
  `nombreAvatar` varchar(100) NOT NULL,
  `imagenAvatar` varchar(200) NOT NULL,
  `descripcionAvatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `idAvatar`, `nombreAvatar`, `imagenAvatar`, `descripcionAvatar`) VALUES
(1293302, 12292, 'Alok', 'files/Alok.png', 'Aprovechando el poder de la música, Alok dejó Brasil y viajó por el mundo. Su nombre significa \"luz\".Ha firmado un contrato y se realizará un concierto cerrado en el campo de batalla de Free Fire. isla para algunos invitados VIP!'),
(1293303, 129322, 'Chrono', 'files/chrono.png', 'Tuvo una infancia normal en su universo original. sus padres eran famosos abogados que lucharon contra la pobreza y ayudaron a traer a las personas pobres sin hogar hacia la sociedad.'),
(1293304, 139292, 'Skyler', 'files/Skyler.png', 'Impulsado a ser el mejor talento musical en el negocio y también a encontrar el mejor talento. No le gusta perder y cree que la creatividad permite que la gente vea lo bueno del mundo en lugar de lo malo.'),
(1293305, 13929, 'Caroline', 'files/Caroline.png', ' Tiene suficientes fanáticos para llenar un estadio entero. Ella es sin duda la más Chica popular en la escuela. Su padre y sus amigos son los dos más valiosos. cosas en su vida.'),
(1293306, 2121, 'Hayato', 'files/Hayato.png', 'Hayato, un niño de una legendaria familia samurái. Ser hijo único significa que Hayato necesita continuar con la tradición familiar y la maldición.Este joven Samurai tiene un secreto que nadie más puede saber.'),
(1293307, 21392, 'Dimitri', 'files/Dimitri.png', 'Dimitri es el hermano mayor de Thiva. En su vida diaria pasaba la mayor parte de su día en el laboratorio desarrollando nueva tecnología de sonido.'),
(1293308, 120320, 'Steffie', 'files/Steffie.png', 'Steffie es una artista liberal. Desde pequeña ya ha demostrado la regalo sorprendente para el arte. Después de la guerra, Steffie vio el surgimiento de Future. Horizontes en su país y cómo cazaban artistas de nombre de un futuro mejor.'),
(1293309, 130211, 'Xayne', 'files/Xayne.png', ' Xayne siempre estuvo interesada en actividades más extremas incluso cuando era un niño. Prefiere la adrenalina de los deportes extremos de la interacción humana. De espíritu libre, quiere explorar la vida y encontrar sus límites.'),
(1293310, 230101, 'Kenta', 'files/Kenta.png', 'Kenta sirvió como guardaespaldas y herrero de la familia de Hayato Yagami. durante años. Es un hombre de pocas palabras pero protege a su nuevo y joven maestro. en cualquier situación en la que se encuentren.'),
(1293311, 120201, 'Homer', 'files/Homer.png', 'Homer es un ciego que no sólo es un asesino, sino también uno de los fundadores de la próspera pandilla tecnológica en Griza.'),
(1293312, 332010, 'Dasha', 'files/Dasha.png', ' Dasha era una niña muy feliz y productiva, pero luego una serie de sucesos desafortunados llegaron a su vida. Sus padres murieron, su mejor amiga se mudó, su familia adoptiva fue terrible con ella. El país estaba al borde de la guerra.'),
(1293313, 1302210, 'Clu', 'files/Clu.png', 'Clu creció en un suburbio de una gran ciudad. Sus padres eran ricos, Nunca tuvo que preocuparse por los aspectos básicos de la vida y tenía una vida muy infancia amorosa.'),
(1293314, 3402112, 'Shirou', 'files/Shirou.png', 'Es el chico de entregas más rápido a domicilio. No hay otro corredor tan rápido como Shirou. A veces participa en carreras para ganar dinero extra y para sentir la adrenalina en sus venas. Es un gran fan de Kla, y usa su tiempo libre para entrenar el estilo de la Cobra');

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
(9, '2023-09-30 17:48:14', 1110460410);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mundos`
--

CREATE TABLE `mundos` (
  `idMundo` int(10) NOT NULL,
  `nombreMundo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `idNivel` int(10) NOT NULL,
  `nombreNivel` varchar(100) NOT NULL,
  `puntosRequeridos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Estructura de tabla para la tabla `tipoarma`
--

CREATE TABLE `tipoarma` (
  `idTipoArma` int(10) NOT NULL,
  `tipoArma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` bigint(15) NOT NULL,
  `nombreCompleto` text NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `idRol` int(5) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `genero` varchar(100) NOT NULL,
  `estadoUsuario` varchar(10) NOT NULL,
  `correoElectronico` varchar(255) NOT NULL,
  `tipoDocumento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombreCompleto`, `nombreUsuario`, `avatar`, `password`, `idRol`, `fecha_registro`, `genero`, `estadoUsuario`, `correoElectronico`, `tipoDocumento`) VALUES
(1110460410, 'Alejandro Muñoz', 'muñoz1201', NULL, '$2y$15$pwCAuKeppnbHB6VvkdlJCegmY5CK9EK.Psvs4lg3dlRZd1QnOqZ8q', 1, '2023-09-28 01:15:54', 'Masculino', '1', 'luisalejandrm533@gmail.com', 'C.C.');

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
-- Indices de la tabla `entrada_jugadores`
--
ALTER TABLE `entrada_jugadores`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tipoarma`
--
ALTER TABLE `tipoarma`
  ADD PRIMARY KEY (`idTipoArma`);

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
-- AUTO_INCREMENT de la tabla `entrada_jugadores`
--
ALTER TABLE `entrada_jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
