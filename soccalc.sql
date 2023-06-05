-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июн 05 2023 г., 21:32
-- Версия сервера: 5.7.34
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `soccalc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `benefits`
--

CREATE TABLE `benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_amount` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_of_regulation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `benefits`
--

INSERT INTO `benefits` (`id`, `category_id`, `name`, `type`, `frequency`, `estimated_amount`, `level_of_regulation`, `footing`, `condition`, `created_at`, `updated_at`, `subject_id`) VALUES
(20, 'Пенсионеры', 'Страховая пенсия по', 'Денежная', 'Единовременно', 'Размер страховой пенсии по инвалидности определяется по формуле: СПинв = ИПК x СПК, где СПинв - размер страховой пенсии по инвалидности; ИПК - индивидуальный пенсионный коэффициент; СПК - стоимость одного пенсионного коэффициента по состоянию на день, с которого назначается страховая пенсия по инвалидности, размер которого по состоянию на 01.06.2022 составляет 118,10 рубля. К страховой пенсии по инвалидности устанавливается фиксированная выплата, размер которой по состоянию на 01.06.2022 составляет к страховой пенсии по инвалидности I группы 14 441,48 рубля, II группы 7 220,74 рубля и III группы 3 610,37 рубля (50% от 7 220,74 рубля).', 'Федеральный уровень', 'Получение Территориальным органом ПФР заявления и документов, необходимых для предоставления услуги', 'Личное обращение гражданина в территориальный орган ПФР с заявлением и документами, необходимыми для предоставления государственной услуги', '2023-05-25 08:56:14', '2023-06-05 10:10:52', '1'),
(21, 'Инвалиды', 'Государственная социальная стипендия инвалида', 'Денежная', 'Ежемесечно', 'Ежемесячно 810 руб.', 'Региональный уровень', 'Обращение в орган назначения меры социальной защиты с заявлением и необходимыми документами', 'Наличие справки, подтверждающие отнесение обучающегося к категории детей-сирот и детей, оставшихся без попечения родителей. Наличие справки, подтверждающей статус инвалидности. Наличие справки из органов социальной защиты населения по месту жительства обучающегося, подтверждающие назначение государственной социальной помощи', '2023-05-25 08:57:34', '2023-05-25 08:57:34', ''),
(24, 'Рождение ребёнка', 'Ежемесячное пособие в связи с рождением и воспитанием ребенка', 'Денежная', 'Единовременно', '50% величины прожиточного минимума, установленной в субъекте РФ-в случае, если размер среднедушевого дохода семьи не превышает величину прожиточного минимума, установленную в субъекте РФ;75% величины прожиточного минимума-в случае, если размер среднедушевого дохода семьи, рассчитанный с учетом выплаты ежемесячного пособия в связи с рождением и воспитанием ребенка в размере 50% величины прожиточного минимума, не превышает величину прожиточного минимума, установленную в субъекте РФ;100% величины прожиточного минимума-в случае, если размер среднедушевого дохода семьи, рассчитанный с учетом выплаты ежемесячного пособия в связи с рождением и воспитанием ребенка в размере 75% величины прожиточного минимума, не превышает величину прожиточного минимума, установленную в субъекте РФ.', 'Федеральный уровень', 'Получение уполномоченным органом заявления и документов', 'Право на ежемесячное пособие в связи с рождением и воспитанием ребенка предоставляется нуждающимся в социальной поддержке беременным женщинам и лицам, имеющим детей в возрасте до 17 лет, при условии, если они являются гражданами Российской Федерации и постоянно проживают на территории Российской Федерации', '2023-05-25 09:05:47', '2023-06-05 17:55:48', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'Пенсионеры', '2023-05-25 08:50:03', '2023-05-25 08:50:03'),
(12, 'Инвалиды', '2023-05-25 08:54:28', '2023-05-25 08:54:28'),
(14, 'Рождение ребёнка', '2023-05-25 09:04:46', '2023-05-25 09:04:46');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_11_140347_add_role_as_to_users_table', 1),
(7, '2023_04_26_140555_create_categories_table', 2),
(10, '2023_05_02_083101_create_benefits_table', 3),
(16, '2023_06_05_071215_create_subjects_table', 4),
(17, '2023_06_05_071258_create_questions_table', 4),
(18, '2023_06_05_071512_create_options_table', 4),
(19, '2023_06_05_071813_create_results_table', 4),
(20, '2023_06_05_072536_create_question_results_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_text`, `points`, `created_at`, `updated_at`) VALUES
(9, 3, 'Да', 1, '2023-06-05 17:50:48', '2023-06-05 17:50:48'),
(10, 3, 'Нет', 0, '2023-06-05 17:50:56', '2023-06-05 17:50:56'),
(11, 4, 'Да', 1, '2023-06-05 17:52:11', '2023-06-05 17:52:11'),
(12, 4, 'Нет', 0, '2023-06-05 17:52:19', '2023-06-05 17:52:19'),
(13, 5, 'Да', 0, '2023-06-05 17:52:57', '2023-06-05 17:52:57'),
(14, 5, 'Нет', 1, '2023-06-05 17:53:04', '2023-06-05 17:53:04'),
(15, 6, 'Да', 0, '2023-06-05 17:53:54', '2023-06-05 17:53:54'),
(16, 6, 'Нет', 1, '2023-06-05 17:53:59', '2023-06-05 17:53:59'),
(17, 7, 'Да', 0, '2023-06-05 17:54:47', '2023-06-05 17:54:47'),
(18, 7, 'Нет', 1, '2023-06-05 17:54:58', '2023-06-05 17:54:58'),
(19, 8, 'Да', 1, '2023-06-05 17:55:32', '2023-06-05 17:55:32'),
(20, 8, 'Нет', 0, '2023-06-05 17:55:40', '2023-06-05 17:55:40');

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
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `question_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question_text`, `created_at`, `updated_at`) VALUES
(3, 3, 'Вы являетесь матерью детей?', '2023-06-05 17:50:34', '2023-06-05 17:50:34'),
(4, 3, 'Вам меньше 24 лет (включительно)?', '2023-06-05 17:51:55', '2023-06-05 17:51:55'),
(5, 3, 'Ваши дети находятся на полном государственном обеспечении?', '2023-06-05 17:52:51', '2023-06-05 17:52:51'),
(6, 3, 'Дети переданы под опеку?', '2023-06-05 17:53:42', '2023-06-05 17:53:42'),
(7, 3, 'Вы лишены родительских прав в отношении детей?', '2023-06-05 17:54:37', '2023-06-05 17:54:37'),
(8, 3, 'Ваши дети живы на момент обращения?', '2023-06-05 17:55:18', '2023-06-05 17:55:18');

-- --------------------------------------------------------

--
-- Структура таблицы `question_results`
--

CREATE TABLE `question_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `false_position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `true_position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `false_position`, `true_position`, `created_at`, `updated_at`) VALUES
(3, 'Ежемесячное пособие в связи с рождением и воспитанием ребенка', 'Для Вас нет доступных выплат.', 'Вам положена единовременная выплата в размере 58 540,00 руб.', '2023-06-05 17:49:52', '2023-06-05 17:49:52');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'admin', 'admin@mail.ru', NULL, '$2y$10$Xe07mtm.Te4.f9isYU1Fc.V0SQg27VUBwcIHuJdnWd28DZU7Yo6ZO', NULL, '2023-04-26 10:04:58', '2023-04-26 10:04:58', 1),
(5, 'Admin2', 'admin2@mail.ru', NULL, '$2y$10$P4T5z.JWS63iQqaFFlkjbOCWoZDsoNZhliWMOqCbgsJGPYg0iblhW', NULL, '2023-05-16 14:26:07', '2023-05-16 14:26:07', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_subject_id_foreign` (`subject_id`);

--
-- Индексы таблицы `question_results`
--
ALTER TABLE `question_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_results_result_id_foreign` (`result_id`),
  ADD KEY `question_results_question_id_foreign` (`question_id`),
  ADD KEY `question_results_option_id_foreign` (`option_id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT для таблицы `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `question_results`
--
ALTER TABLE `question_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `question_results`
--
ALTER TABLE `question_results`
  ADD CONSTRAINT `question_results_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_results_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_results_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
