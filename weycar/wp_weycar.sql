-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 17 2021 г., 00:05
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wp_weycar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Топливозаправочные модули', '2021-10-14 09:30:23', '2021-10-14 09:30:23'),
(2, 2, 'Системы нагрузки на ось', '2021-10-14 09:33:16', '2021-10-14 09:33:16'),
(3, 3, 'Оборудование для спец. техники', '2021-10-14 09:33:29', '2021-10-14 09:33:29'),
(4, 4, 'Отопители', '2021-10-14 09:33:41', '2021-10-14 09:33:41'),
(5, 5, 'Сигнализации', '2021-10-14 09:33:53', '2021-10-14 09:33:53'),
(6, 6, 'Датчики уровня топлива', '2021-10-14 09:34:05', '2021-10-14 09:34:05'),
(7, 7, 'Табло', '2021-10-14 09:34:14', '2021-10-14 09:34:14'),
(8, 8, 'Видеорегистраторы', '2021-10-14 09:34:26', '2021-10-14 09:34:26'),
(9, 9, 'Тахографы', '2021-10-14 09:34:37', '2021-10-14 09:34:37'),
(10, 10, 'Приборы спутникового мониторинга', '2021-10-14 09:34:48', '2021-10-14 09:34:48');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_01_094130_create_products_table', 1),
(6, '2021_10_01_094253_create_subcategories_table', 1),
(7, '2021_10_14_100514_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `specifications` text COLLATE utf8mb4_unicode_ci,
  `accessories` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_id`, `title`, `subtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'Приборы  спутникового  мониторинга', 'Терминалы ГЛОНАСС GPS соединяются с бортовой сетью автомобиля и позволяют получать данные и управлять устройствами. Некоторые GPS терминалы, которые находятся в нашем списке, соответствуют приказу No285. Прибор спутникового мониторинга используется для осуществления надзора за расположением автомобиля, остановками для заправки средства, получением данных и так далее. Если вас интересует цена прибора спутникового мониторинга, уточнить можно на нашем сайте.', 'public/wgirLFHs04TleXuxZpBMpNinL39qkHoXD40gISHP.png', '2021-10-14 10:09:22', '2021-10-14 10:09:22'),
(2, 9, 2, 'Тахографы', 'В нашем ассортименте — сертифицированные тахографы по разумной цене с установкой производства торговых марок «Атол», «Штрих-М» и VDO, адаптированные для транспортных средств, предназначенных для перевозки грузовых и пассажирских перевозок от 3,5 тонн либо пассажиров числом от 8.  С 2014 года эксплуатация автомобиля, не оснащенного тахографом, является нарушением и карается штрафом. Мы снабдим автомобили тахографами с СКЗИ,  по цене, доступной любой логистической компании, с установкой на месте парковки автомобиля и последующими сервисными гарантиями.', 'public/fDHLoGtAJ9sAxhuAlibIdHLLRt380VQH4mL49pFW.png', '2021-10-14 10:28:44', '2021-10-14 10:28:44'),
(3, 8, 3, 'Комплекты  видеонаблюдения', 'Под ПП РФ № 969', 'public/E2Ini2K3sMJNiInfg3fu74BtcXqRSg8eWrrL0Fli.png', '2021-10-14 10:31:34', '2021-10-14 10:31:34'),
(4, 8, 4, 'Регистраторы', 'Видеорегистраторы на 4 канала, предназначенные для установки как на крупнотоннажные, так и на легковые транспортные средства.', 'public/RJxuP2fbapyrLxOKt25zPOe4DDTiqywryFGOQoCe.png', '2021-10-14 10:32:49', '2021-10-14 10:32:49'),
(5, 8, 5, 'Камеры', 'Камеры', 'public/xa7TCslqaUiw4jXAaffGpJBNz0eCrsxU4uJPUuTg.png', '2021-10-14 10:36:30', '2021-10-14 10:36:30'),
(6, 8, 6, 'Сопутствующее  оборудование', 'Сопутствующее  оборудование', 'public/GT26pKgRj4Prnri8QeSrFnyt70lSFNXv0YXELb1u.png', '2021-10-14 10:37:52', '2021-10-14 10:37:52'),
(7, 8, 7, 'Мониторы', 'Мониторы', 'public/vzN5yoVEHmDclh6zdNXnBZNkUgfRcYVGcnVc3Pht.png', '2021-10-14 10:38:29', '2021-10-14 10:38:29'),
(8, 8, 8, 'Накопители', 'Накопители', 'public/vZ3GMKUM7Y4n1MyPmxfCpFFRRlQtiJxXD5qxUU6s.png', '2021-10-14 10:39:28', '2021-10-14 10:39:28'),
(9, 7, 9, 'Табло', 'Табло', 'public/Ob5IVXmR7YZuuN5f7rg2cG04WkFyqsiDZ2iKcvUt.png', '2021-10-14 10:41:46', '2021-10-14 10:41:46'),
(10, 7, 10, 'Комплекты', 'Комплекты табло ITLINE', 'public/nbnPrcdkY2FsTwI0zWfXlig55DwwNwu8XxlLEszg.png', '2021-10-14 10:43:12', '2021-10-14 10:43:12'),
(11, 6, 11, 'Датчики уровня топлива', 'Датчики уровня топлива', 'public/zcEeimAdLkQtGITRWA7WRHvrsn44qni5kwBNgxO0.png', '2021-10-14 10:45:59', '2021-10-14 10:45:59'),
(12, 5, 12, 'Сигнализации', 'Pandora — торговая марка калужского ООО «НПО Телеметрия». Предприятие занимается разработкой и производством охранно-противоугонной автомобильной электроники, сервисных автомобильных устройств и телеметрических комплексов. Сегодня основная продукция предприятия: автомобильные сигнализации «Pandora» иммобилайзеры «Pandect».', 'public/pUfeReJ8AhzwkcmYuhh9SSTDckHNj27f4lS78WKO.png', '2021-10-14 10:49:38', '2021-10-14 10:49:38'),
(13, 4, 13, 'Отопители', 'Отопители', 'public/IS8VRi4P1BQxMWbP1BKwsd7nQKKrHfFJnLxFG2Zg.png', '2021-10-14 10:54:45', '2021-10-14 10:54:45'),
(14, 3, 14, 'Фароносители и  освещение', 'Фароносители и  освещение', 'public/clb6Tk0BhiaOqdKcTJfGdaulCJ6w0c0jsRnsx6AU.png', '2021-10-14 10:56:11', '2021-10-14 10:56:11'),
(15, 3, 15, 'Светодиодные  панели', 'Светодиодные  панели', 'public/vPmeP1uy5vaN617PwVHn0i9AnJPR8KKpXtYpeycA.png', '2021-10-14 10:56:47', '2021-10-14 10:56:47'),
(16, 3, 16, 'Проблесковые  маяки', 'Проблесковые  маяки', 'public/NsW2OUybu1OXFfo85hpdVrRAxWQa9IitUZUgHbuj.png', '2021-10-14 10:58:54', '2021-10-14 10:58:54'),
(17, 3, 17, 'Кнопка массы', 'Кнопка массы', 'public/IVcU12mhWmAe1aOyo9IHAPbFAgTfhjXc7rHfcWa6.png', '2021-10-14 11:06:16', '2021-10-14 11:06:16'),
(18, 3, 18, 'Ограничитель  скорости', 'Ограничитель  скорости', 'public/Znrno4TLn9QL5NM3jLJ7v78QkebQtyO5U7smDstt.png', '2021-10-14 11:07:46', '2021-10-14 11:07:46'),
(19, 3, 19, 'Светосигнальная  громкоговорящая  установка', 'Светосигнальная  громкоговорящая  установка', 'public/sGkwiakn69M5E0ELutIGSvF3uOi8hRUnzCGmWfDc.png', '2021-10-14 11:09:34', '2021-10-14 11:09:34'),
(20, 2, 20, 'Система нагрузки на ось', 'Система нагрузки на ось', 'public/Sz7z6M15FCJALLex0qFpeBXFD6zlbVZrf91qA5jt.png', '2021-10-14 11:15:31', '2021-10-14 11:15:31'),
(21, 1, 21, 'Топливозаправочные модули', 'Топливозаправочные модули', 'public/bvi1csrAhg43rhvsxv4qMq0EWhtosZfaB6z6xvAv.png', '2021-10-14 11:17:43', '2021-10-14 11:17:43');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
