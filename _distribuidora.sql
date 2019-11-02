-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2019 a las 17:46:36
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `_distribuidora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `papellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sapellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `papellido`, `sapellido`, `correo`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'Gerardo', 'Natan', 'Garciassssssss', 'garcia@gmail.com', 'uploads/RW2TyIGOvAKIxN6tJQhXiW0UR7mFWSmEArEDgE6N.jpeg', NULL, '2019-11-02 02:10:06'),
(7, 'sombreron', 'sombreron', 'sombreron', 'sombreron@gmail.com', 'uploads/9g54vYAh7TkcA9H4cVHhuKMsojeGUnAnynBrMlgd.png', NULL, NULL),
(8, 'fsdf', 'dfdf', 'fdfd', 'dfdfd@gmai.com', 'uploads/ILnbuCWZLb0lAxQ5svSIkdyNdlgPyqx0OvhJPUUf.jpeg', NULL, NULL),
(9, 'd', 'd', 'd', 'd@gmail.com', 'uploads/xuLuUf0GA2Lvax93aOIOkoRlfO585olHBUBUUS35.png', NULL, NULL),
(10, 'Jose', 'Carlos', 'Mendez', 'mendez@gmail.com', 'uploads/BuSVbxmjxzCxC7II1d2gxFrEKp8BoYYqUM0JTN4T.jpeg', NULL, NULL),
(11, 'amif]go', 'amigo', 'amigo', 'amigo@gmail.com', 'uploads/HqnwOezrSlDgIUaRV30DJz6DJdajZWTkybbBfl1j.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_31_042558_create_empleados_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lidvin', 'lidvinf@gmail.com', '$2y$10$IvZa9nVV8kbwui7VhPRcnuFIqqX/67oIxWgiXxUEmGGEuUBOiExBK', '3pKI3gAEk78NzRbdIUxg6SwIct07ew2kqiwxN7WLzUS3r2NnnYNx14qr2kgZ', '2019-11-01 14:34:55', '2019-11-01 14:34:55'),
(2, 'Gerardo', 'gerardo@gmai.com', '$2y$10$F8Iu1VZ2YWPVNM9IwIVGYOVbnxIhE/193vQ6e6uY6Yz9ICF3peXp2', 'Hd5XCgWZIL4BmvBK5FBerEJ8sAInoaVgY7Ck1zeTau1Un9gJT5Tt05iRUtEi', '2019-11-01 14:40:10', '2019-11-01 14:40:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
