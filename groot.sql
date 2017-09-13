-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2017 a las 06:07:53
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `groot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotacionespro`
--

CREATE TABLE `anotacionespro` (
  `IdAnotacion` int(11) NOT NULL,
  `NombreAnotacion` varchar(255) NOT NULL,
  `DescripcionAnotacion` varchar(255) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `Cargo` int(11) NOT NULL,
  `Nomcargo` varchar(45) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`Cargo`, `Nomcargo`, `updated_at`, `created_at`) VALUES
(0, 'Desarrollador web', '2017-09-11 01:12:13', '0000-00-00 00:00:00'),
(1, 'Diseñador Grafico', '2017-09-11 01:12:20', '0000-00-00 00:00:00'),
(2, 'Copy Creativo', '2017-09-11 01:12:24', '0000-00-00 00:00:00'),
(3, 'New Bussisnes', '2017-09-11 01:12:28', '0000-00-00 00:00:00'),
(4, 'Ejecutivo Cuentas', '2017-09-11 01:12:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Empresa` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Ciudad` varchar(45) DEFAULT NULL,
  `Plan` int(11) DEFAULT NULL,
  `Nomrepresentante` varchar(255) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Rut` varchar(255) DEFAULT NULL,
  `TelEmpre` varchar(45) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `IdEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Empresa`, `Direccion`, `Ciudad`, `Plan`, `Nomrepresentante`, `Telefono`, `Correo`, `Rut`, `TelEmpre`, `Cedula`, `created_at`, `IdEstado`) VALUES
(12, 'Codwelt.com', 'Cr 5 t # 49 d - 05 sur', 'Bogota', 2, 'Sergio David', '3203368199', 'webdev@codwelt.com', '134567887654322345', '7724603', '1033784376', NULL, 0),
(13, 'Happymundo Ltda', 'Cr 5 t # 49 d - 05 sur', 'Bogota', 1, 'Jose Florez', '3203368199', 'jose@happymundo.com', '9876789987678987678', '3203368199', '2345676543', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `NombrEstado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `NombrEstado`) VALUES
(0, 'Activo'),
(1, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadospro`
--

CREATE TABLE `estadospro` (
  `idEstadosPro` int(11) NOT NULL,
  `NombrEstado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadospro`
--

INSERT INTO `estadospro` (`idEstadosPro`, `NombrEstado`) VALUES
(0, 'Nueva'),
(1, 'Creciente'),
(2, 'Medium'),
(3, 'Menguante'),
(4, 'Llena');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `Id` int(11) NOT NULL,
  `NombreProyecto` varchar(255) NOT NULL,
  `DescripcionProyecto` longtext NOT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `IdEstado` int(11) DEFAULT NULL,
  `created_atp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`Id`, `NombreProyecto`, `DescripcionProyecto`, `IdCliente`, `IdEstado`, `created_atp`) VALUES
(35, 'Groot', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 12, 0, '2017-09-12 23:59:49'),
(36, 'Gest', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).', 13, 0, '2017-09-13 00:17:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_anotaciones`
--

CREATE TABLE `proyectos_anotaciones` (
  `IdProyectos` int(11) NOT NULL,
  `IdAnotaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyect_usu`
--

CREATE TABLE `proyect_usu` (
  `Idproyecto` int(11) NOT NULL,
  `Idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyect_usu`
--

INSERT INTO `proyect_usu` (`Idproyecto`, `Idusuario`) VALUES
(35, 6),
(35, 4),
(36, 6),
(36, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_plan`
--

CREATE TABLE `tipo_plan` (
  `idTipo_Plan` int(11) NOT NULL,
  `NomPlan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_plan`
--

INSERT INTO `tipo_plan` (`idTipo_Plan`, `NomPlan`) VALUES
(1, 'Empresarial'),
(2, 'Empresarial'),
(3, 'Intermedio'),
(4, 'StartUp'),
(5, 'Negocios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdEstado` int(11) NOT NULL,
  `IdCargo` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `img`, `name`, `email`, `Telefono`, `password`, `IdEstado`, `IdCargo`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'http://az617363.vo.msecnd.net/imgmodels/MENS_2.jpg', 'Felipe Uribe', 'webdev@codwelt.com', '3203368199', 'death3144255219', 0, 2, NULL, NULL, NULL),
(5, 'https://avatars1.githubusercontent.com/u/5554583?v=4&s=460', 'Sergio Dvid Wiesner Macias', 'heros.david47@gmail.com', '3203368199', '$2y$10$sSS9Lk5U/3Pzg6z8UWpaKu9G0Lyf5VMsJDkpRxjj3gWimZ5fjYo3q', 0, 2, 'rAxhhWrbD6G4cwnm2vZvxW6Yo4AWRNDwVciXI4xF4p8lo8BSaWzc00FB5QIo', '2017-09-11 06:49:37', '2017-09-11 06:49:37'),
(6, 'http://www.imgmodels.com/sites/default/files/_mg_3_0.jpg', 'Leticia Macias', 'letima@gmail.com', '3203368199', '$2y$10$yZSvBld0HSHmmVR1Vo4qoeoNOdKq0q6807pg7BoSfB.HnlQ6qap..', 0, 1, 'ZDK9eEr2orlKlbsr7BtXQc2lPQYzsHYSR7XO3ZiFtOiqXsjCDw7QgRNVSwug', '2017-09-11 20:40:11', '2017-09-11 20:40:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anotacionespro`
--
ALTER TABLE `anotacionespro`
  ADD PRIMARY KEY (`IdAnotacion`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`Cargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `Plan` (`Plan`),
  ADD KEY `Est` (`IdEstado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estadospro`
--
ALTER TABLE `estadospro`
  ADD PRIMARY KEY (`idEstadosPro`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cliente` (`IdCliente`),
  ADD KEY `EstadoP` (`IdEstado`);

--
-- Indices de la tabla `proyectos_anotaciones`
--
ALTER TABLE `proyectos_anotaciones`
  ADD KEY `Proyectos` (`IdProyectos`),
  ADD KEY `Anotaciones` (`IdAnotaciones`);

--
-- Indices de la tabla `proyect_usu`
--
ALTER TABLE `proyect_usu`
  ADD KEY `Pro` (`Idproyecto`),
  ADD KEY `Us` (`Idusuario`);

--
-- Indices de la tabla `tipo_plan`
--
ALTER TABLE `tipo_plan`
  ADD PRIMARY KEY (`idTipo_Plan`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD KEY `users_idestado_index` (`IdEstado`),
  ADD KEY `users_idcargo_index` (`IdCargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anotacionespro`
--
ALTER TABLE `anotacionespro`
  MODIFY `IdAnotacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `Cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `estadospro`
--
ALTER TABLE `estadospro`
  MODIFY `idEstadosPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `tipo_plan`
--
ALTER TABLE `tipo_plan`
  MODIFY `idTipo_Plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Est` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Plan`) REFERENCES `tipo_plan` (`idTipo_Plan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `Cliente` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `EstadoP` FOREIGN KEY (`IdEstado`) REFERENCES `estadospro` (`idEstadosPro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos_anotaciones`
--
ALTER TABLE `proyectos_anotaciones`
  ADD CONSTRAINT `Anotaciones` FOREIGN KEY (`IdAnotaciones`) REFERENCES `anotacionespro` (`IdAnotacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Proyectos` FOREIGN KEY (`IdProyectos`) REFERENCES `proyectos` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyect_usu`
--
ALTER TABLE `proyect_usu`
  ADD CONSTRAINT `Pro` FOREIGN KEY (`Idproyecto`) REFERENCES `proyectos` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Us` FOREIGN KEY (`Idusuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Cargo` FOREIGN KEY (`IdCargo`) REFERENCES `cargo` (`Cargo`),
  ADD CONSTRAINT `Estado` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
