-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2024 a las 20:38:32
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
-- Base de datos: `2publicaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `au_nombre` varchar(40) NOT NULL,
  `au_apellido` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `created_at`, `updated_at`, `au_nombre`, `au_apellido`, `telefono`, `calle`, `ciudad`, `estado`, `pais`) VALUES
(1, NULL, NULL, 'Alfredo', 'Adame', '493', 'Venustiano Carranza', 'Plateros', 'Za', 'Mexico'),
(2, NULL, NULL, 'Julian', 'Araujo', '4932347656', 'Los Dorados', 'Leon', 'GT', 'México'),
(4, NULL, NULL, 'Luis', 'Esteban', '911', 'Central', 'Monterrey', 'Monterrey', 'México'),
(6, NULL, NULL, 'Hongo', 'Escalante', '493234', 'Los Edificios', 'Mazatlan', 'Mazatlan', 'México'),
(7, NULL, NULL, 'Xavi', 'Hernandez', '4934336006', 'Los Cabos', 'Montjuic', 'Barcelona', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_titulo`
--

CREATE TABLE `autor_titulo` (
  `id` int(10) UNSIGNED NOT NULL,
  `autores_id` int(10) UNSIGNED NOT NULL,
  `titulos_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autor_titulo`
--

INSERT INTO `autor_titulo` (`id`, `autores_id`, `titulos_id`, `created_at`, `updated_at`, `Nota`) VALUES
(1, 2, 1, NULL, NULL, 'Prueba'),
(2, 4, 1, NULL, NULL, 'Otro'),
(3, 6, 2, NULL, NULL, 'Excelente'),
(4, 6, 3, NULL, NULL, 'Cuento'),
(5, 1, 1, NULL, NULL, 'Cuento'),
(6, 4, 2, NULL, NULL, 'Prueba'),
(7, 1, 2, NULL, NULL, 'Diario 3'),
(8, 1, 2, NULL, NULL, 'Diario 3'),
(9, 7, 4, NULL, NULL, 'Inevitable'),
(10, 1, 3, NULL, NULL, 'Me deben dinero'),
(11, 2, 3, NULL, NULL, 'Historia real'),
(12, 7, 2, NULL, NULL, 'Revisado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(40) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id`, `created_at`, `updated_at`, `nombre`, `ciudad`, `estado`) VALUES
(2, NULL, NULL, 'Trillas', 'Leon', 'GT'),
(5, '2024-02-08 01:02:05', '2024-02-08 01:02:05', 'hongo', 'Fresnillo', 'Za'),
(6, '2024-02-08 05:46:12', '2024-02-13 05:20:56', 'MCMilLan', 'Leon', 'GT'),
(8, '2024-02-13 05:20:40', '2024-02-13 20:19:05', 'Planet', 'Fresnillo', 'Za'),
(9, '2024-02-26 20:10:35', '2024-02-26 20:10:45', 'Monster Corp', 'Valparaiso', 'Gaseoso'),
(12, '2024-03-01 23:09:42', '2024-03-01 23:09:42', 'Planeta', 'fres', 'za'),
(13, '2024-04-04 05:02:52', '2024-04-04 05:03:34', 'Libreria Pancho', 'Montjuic', 'Ba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_16_145804_migracion_editorial', 1),
(7, '2024_02_12_144948_crear_titulos', 2),
(9, '2024_03_08_194705_crear_autores', 3),
(10, '2024_03_19_142002_crear_autor_titulo', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ejemplo3@gmail.com', '$2y$10$F2G7Aq19knBrexza3mzDMu.JPKyio36LMwxQiioEzNCN4v2g0kgki', '2024-04-04 06:36:54'),
('ejemplo@gmail.com', '$2y$10$Yb3vYwxSDEAYSyBIYWIeGeTmbRmsdlrrPcOspSBwBadUbWy5JnlnG', '2024-04-04 06:59:47'),
('ejemplo2@gmail.com', '$2y$10$Ya.SBHYivC.LL7iNcf5ffOXHI5u/082yb6Vz.Dv4JArZsOcQZY5yG', '2024-04-04 07:00:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(40) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `id_editorial` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id`, `created_at`, `updated_at`, `nombre`, `tipo`, `precio`, `id_editorial`) VALUES
(1, '2024-03-05 20:58:37', '2024-03-05 20:58:37', 'Harry Potter', 'Aventura', '20', 2),
(2, '2024-03-05 20:59:48', '2024-03-05 20:59:48', 'Gravity Fall\'s', 'Aventura', '200', 12),
(3, '2024-03-05 21:01:11', '2024-03-05 21:01:11', 'El principito', 'Historico', '30', 6),
(4, '2024-04-04 05:04:07', '2024-04-04 05:04:20', 'La Sexta', 'Historia', '6000', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mario', 'ejemplo@gmail.com', NULL, '$2y$10$w4OeXZTOMTPPoknSujmC/eDB6YEd8uV.rFp5k7ufK45fybNKlt8LK', NULL, '2024-04-04 03:29:52', '2024-04-04 03:29:52'),
(3, 'Hongo', 'ejemplo2@gmail.com', NULL, '$2y$10$xTfspwZAQTYXxQ.BKIccRe0NpH/eeGYn81UrRBoGcf4YVxp42J6ae', NULL, '2024-04-04 04:26:23', '2024-04-04 04:26:23'),
(4, 'Poncho', 'ejemplo3@gmail.com', NULL, '$2y$10$ZjNnm0IONHm3XSI.xj7nNeCxrGZ/hNjf3CZxhai2D2i.MlkfmjcCC', NULL, '2024-04-04 05:09:35', '2024-04-04 05:09:35'),
(5, 'Luis', 'ejemplo4@gmail.com', NULL, '$2y$10$7pInWh25x/8mBj4m21x5furUfcy6n2OvNiJIEmzh0ncPO7VaxLr7y', NULL, '2024-04-04 06:35:36', '2024-04-04 06:35:36'),
(6, 'Profe', 'prof@gmail.com', NULL, '$2y$10$ccfDt8cPXCwjpQIfEhKb2OOXiVlm05hM3btpwZjxNlUX3crm5lYuO', NULL, '2024-04-04 07:14:14', '2024-04-04 07:14:14'),
(7, 'fatima', 'fatima@gmail.com', NULL, '$2y$10$fz0rJkxKFVJ9pcfY.EMSW.raWLLUXnPxnPJR1vK1B1PqM2zjXlFqq', NULL, '2024-04-04 07:17:41', '2024-04-04 07:17:41'),
(8, 'Mario', 'hola@gmail.com', NULL, '$2y$10$lG9RTGH8kfOMAbvu9jugAOrFYLtdAGuPzrz2R/afJTY9y5orQoZQy', NULL, '2024-06-29 05:25:04', '2024-06-29 05:25:04'),
(9, 'tal', 'hongo@gmail.com', NULL, '$2y$10$xIGKl6baKMGiPOZTHoxbHuACn3fY.z13Ih/gAkcPoabKfsYfoVAk6', NULL, '2024-06-30 21:47:54', '2024-06-30 21:47:54'),
(10, 'Mario', 'mario@gmail.com', NULL, '$2y$10$N..5AnypCU59Z7y4qNTs8upgGvSc3rCgHUyfqQFxbQleloXQdE7pa', NULL, '2024-09-10 00:24:34', '2024-09-10 00:24:34'),
(11, 'efe', 'hola@gmail', NULL, '$2y$10$d0JtXFqdXZa5qiU59xuoj.HgmU8uIKvKr.uV9vwhNh3.1hhNMhiEO', NULL, '2024-09-16 23:17:46', '2024-09-16 23:17:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autor_titulo`
--
ALTER TABLE `autor_titulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor_titulo_autores_id_foreign` (`autores_id`),
  ADD KEY `autor_titulo_titulos_id_foreign` (`titulos_id`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titulos_id_editorial_foreign` (`id_editorial`);

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
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `autor_titulo`
--
ALTER TABLE `autor_titulo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor_titulo`
--
ALTER TABLE `autor_titulo`
  ADD CONSTRAINT `autor_titulo_autores_id_foreign` FOREIGN KEY (`autores_id`) REFERENCES `autores` (`id`),
  ADD CONSTRAINT `autor_titulo_titulos_id_foreign` FOREIGN KEY (`titulos_id`) REFERENCES `titulos` (`id`);

--
-- Filtros para la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD CONSTRAINT `titulos_id_editorial_foreign` FOREIGN KEY (`id_editorial`) REFERENCES `editoriales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
