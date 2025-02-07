-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2025 a las 08:59:00
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
-- Base de datos: `taronvibe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `name_event` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `date_event` date NOT NULL,
  `limit_date` date NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `ticket` varchar(150) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `event`
--

INSERT INTO `event` (`id_event`, `name_event`, `description`, `date_event`, `limit_date`, `capacity`, `price`, `ticket`, `postal_code`, `image`) VALUES
(1, 'beWine', 'Evento de vinos, se catan vinos de todos los precios', '2025-03-26', '0000-00-00', 0, 0, '', 4600, '/img/org/beWine.jpg'),
(2, 'cinemaJove', 'Cine Hecho por y para Jovenes', '2025-02-15', '0000-00-00', 0, 0, '', 46003, '/img/org/cinemaJove.jpg'),
(3, 'crazy Cat', 'Vamos a enseñar a los dueños de gatos a tratarlos de la mejor manera', '2025-01-31', '0000-00-00', 0, 0, '', 46980, '/img/org/crazyCat.jpg'),
(4, 'dacuval', 'Fiesta de halloween temática vampiros', '0000-00-00', '0000-00-00', 0, 0, '', 46780, '/img/org/dacuval.jpg'),
(5, 'Dice Tower', 'Evento de Dragones y mazmorras', '0000-00-00', '0000-00-00', 0, 0, '', 46100, '/img/org/diceTower.jpg'),
(6, 'enoVal', 'Evento de cata de vinos blancos y rojos', '2025-05-23', '0000-00-00', 0, 0, '', 46980, '/img/org/enoVal.jpg'),
(7, 'ethnic Week', 'Evento sobre la cultura colombiana', '2025-01-29', '0000-00-00', 0, 0, '', 46110, '/img/org/ethnicWeek.jpg'),
(8, 'eventur', 'Evento de juegos al aire libre', '2025-06-26', '0000-00-00', 0, 0, '', 64720, '/img/org/eventur.jpg'),
(9, 'fallas', 'Las Fallas de Valencia (Falles en valenciano) son unas fiestas que van del 14 (plantà infantil) al 19 (cremà) de marzo con una tradición arraigada en la ciudad española de Valencia.', '2025-03-14', '0000-00-00', 0, 0, '', 46720, '/img/org/fallas.jpg'),
(10, 'Feria Automovil', 'Feria del automovil, coches, motos', '0000-00-00', '0000-00-00', 0, 0, '', 46980, '/img/org/feriaAutomovil.jpg'),
(11, 'La Fábrica de sueños', 'Evento de disfraces y fiestas', '2025-10-08', '0000-00-00', 0, 0, '', 46100, '/img/org/laFabrica.jpg'),
(12, 'La seu\r\n', 'Evento de cata de comida de alta calidad, por el chef ganador de 7 estrellas Michelin Juan Eisenbower', '2025-01-31', '0000-00-00', 0, 0, '', 46100, '/img/org/laseu.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_org`
--

CREATE TABLE `event_org` (
  `id_event` int(11) NOT NULL,
  `id_org` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `event_org`
--

INSERT INTO `event_org` (`id_event`, `id_org`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_types`
--

CREATE TABLE `event_types` (
  `id_event` int(11) NOT NULL,
  `id_preference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizer`
--

CREATE TABLE `organizer` (
  `id_org` int(11) NOT NULL,
  `name_org` varchar(150) NOT NULL,
  `email_org` varchar(150) NOT NULL,
  `ig_org` varchar(150) NOT NULL,
  `image_org` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `organizer`
--

INSERT INTO `organizer` (`id_org`, `name_org`, `email_org`, `ig_org`, `image_org`) VALUES
(1, 'beWin', 'beWin@gmail.com', 'beWin', '/img/org/beWine.jpg'),
(2, 'cinema Jove', 'cjove@gmail.com', 'cinemaJove', '/img/org/cinemaJove.jpg'),
(3, 'crazy cat', 'crazycat@gmail.com', 'crazycat', '/img/org/crazyCat.jpg'),
(4, 'dacuval', 'dacuval@gmail.com', 'dacuval', '/img/org/dacuval.jpg'),
(5, 'dice tower', 'dicetower@gmail.com', 'diceTower', '/img/org/diceTower.jpg'),
(6, 'eno Valencia', 'enoval@gmail.com', 'enoval', '/img/org/enoVal.jpg'),
(7, 'ethnic Week', 'ethicweek@gmail.com', 'ethnic_week', '/img/org/ethnicWeek.jpg'),
(8, 'eventur', 'eventur@gmail.com', 'eventur', '/img/org/eventur.jpg'),
(9, 'Asociacion fallas', 'fallas@val.com', 'fallas_valencia', '/img/org/fallas.jpg'),
(10, 'Feria del Automovil', 'feriaAutos@gmail.com', 'feriaAutos', '/img/org/feriaAutomovil.jpg'),
(11, 'la fabrica de sueños', 'lafabrica@gmail.com', 'la_fabricadesueños', '/img/org/laFabrica.jpg'),
(12, 'El seu menjar', 'elseumenjar@gmail.com', 'elseu_menjar', '/img/org/laseu.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferences`
--

CREATE TABLE `preferences` (
  `id_preference` int(11) NOT NULL,
  `name_preference` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review_event`
--

CREATE TABLE `review_event` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `description_event` text NOT NULL,
  `stars_event` int(11) NOT NULL,
  `date_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review_org`
--

CREATE TABLE `review_org` (
  `id_user` int(11) NOT NULL,
  `id_org` int(11) NOT NULL,
  `description_org` text NOT NULL,
  `stars_org` int(11) NOT NULL,
  `date_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `name_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `name_rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saved_event`
--

CREATE TABLE `saved_event` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(150) NOT NULL,
  `email_user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `biography` text NOT NULL,
  `birthdate` date NOT NULL,
  `postal_code` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email_user`, `password`, `biography`, `birthdate`, `postal_code`, `image`, `id_rol`) VALUES
(6, 'Marcos', 'marcos@taronvibe.com', 'admin', '', '0000-00-00', 0, '', 1),
(7, 'Quique', 'quique@taronvibe.com', 'admin', '', '0000-00-00', 0, '', 1),
(8, 'David', 'david@taronvibe.com', 'admin', '', '0000-00-00', 0, '', 1),
(9, 'Maïna', 'maina@taronvibe.com', 'admin', '', '0000-00-00', 0, '', 1),
(10, 'JuanPablo', 'juanpablo@taronvibe.com', 'admin', '', '0000-00-00', 0, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id_user` int(11) NOT NULL,
  `id_preference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indices de la tabla `event_org`
--
ALTER TABLE `event_org`
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_org` (`id_org`);

--
-- Indices de la tabla `event_types`
--
ALTER TABLE `event_types`
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_preference` (`id_preference`);

--
-- Indices de la tabla `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id_org`);

--
-- Indices de la tabla `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id_preference`);

--
-- Indices de la tabla `review_event`
--
ALTER TABLE `review_event`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`);

--
-- Indices de la tabla `review_org`
--
ALTER TABLE `review_org`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_org` (`id_org`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `saved_event`
--
ALTER TABLE `saved_event`
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_event` (`id_event`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_id_rol` (`id_rol`);

--
-- Indices de la tabla `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_preference` (`id_preference`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id_preference` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `event_org`
--
ALTER TABLE `event_org`
  ADD CONSTRAINT `event_org_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_org_ibfk_2` FOREIGN KEY (`id_org`) REFERENCES `organizer` (`id_org`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `event_types`
--
ALTER TABLE `event_types`
  ADD CONSTRAINT `event_types_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_types_ibfk_2` FOREIGN KEY (`id_preference`) REFERENCES `preferences` (`id_preference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `review_event`
--
ALTER TABLE `review_event`
  ADD CONSTRAINT `review_event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_event_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `review_org`
--
ALTER TABLE `review_org`
  ADD CONSTRAINT `review_org_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_org_ibfk_2` FOREIGN KEY (`id_org`) REFERENCES `organizer` (`id_org`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `saved_event`
--
ALTER TABLE `saved_event`
  ADD CONSTRAINT `fk_id_event` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD CONSTRAINT `user_preferences_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_preferences_ibfk_2` FOREIGN KEY (`id_preference`) REFERENCES `preferences` (`id_preference`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
