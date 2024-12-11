-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 13:30:49
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
-- Base de datos: `taronvive`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_org`
--

CREATE TABLE `event_org` (
  `id_event` int(11) NOT NULL,
  `id_org` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id_preference` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

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
