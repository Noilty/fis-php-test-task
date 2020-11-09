-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2020 г., 18:42
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `aid` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор автора',
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Фамилия',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Отчество'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`aid`, `surname`, `name`, `middle_name`) VALUES
(1, 'Калмыкова', 'Зинаида', 'Артеименовна'),
(2, 'Грядкина', 'Каролина', 'Евсеевна'),
(3, 'Чукчов', 'Иларион', 'Панкратиевич'),
(4, 'Манякин', 'Евграф', 'Арсениевич'),
(5, 'Бальсунова', 'Ариадна', 'Харитоновна');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `bid` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор книги',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Название книги',
  `author_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор автора',
  `count` bigint(20) UNSIGNED NOT NULL COMMENT 'Кол-во книг',
  `py_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор издания книги',
  `ph_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор издательста книги'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`bid`, `name`, `author_id`, `count`, `py_id`, `ph_id`) VALUES
(1, 'Я делаю это что бы жить Том 1', 2, 23, 2, 1),
(2, 'Я делаю это что бы жить Том 2', 1, 21, 1, 3),
(3, 'В поисках утраченного завтра', 5, 5, 4, 3),
(4, 'Миграции', 5, 15, 3, 2),
(5, 'CSRF-защита', 4, 2, 1, 3);

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2020_11_09_053920_create_students_table', 1),
(25, '2020_11_09_053944_create_readers_table', 1),
(26, '2020_11_09_054000_create_books_table', 1),
(27, '2020_11_09_054017_create_authors_table', 1),
(28, '2020_11_09_054033_create_publishing_years_table', 1),
(29, '2020_11_09_054044_create_publishing_houses_table', 1),
(30, '2020_11_09_071011_alter_table_readers_add_students', 1),
(31, '2020_11_09_083615_alter_table_readers_add_books', 1),
(32, '2020_11_09_084259_alter_table_books_add_authors', 1),
(33, '2020_11_09_084644_alter_table_books_add_publishing_years', 1),
(34, '2020_11_09_084928_alter_table_books_add_publishing_houses', 1);

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
-- Структура таблицы `publishing_houses`
--

CREATE TABLE `publishing_houses` (
  `phid` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор издательства',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Наименование издательства'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `publishing_houses`
--

INSERT INTO `publishing_houses` (`phid`, `name`) VALUES
(1, 'Кошкин хвост'),
(2, 'Читатель 21'),
(3, 'МегаГЕНЕРАТОР'),
(4, 'Яндекс BOOK');

-- --------------------------------------------------------

--
-- Структура таблицы `publishing_years`
--

CREATE TABLE `publishing_years` (
  `pyid` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор года',
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Числовое представление'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `publishing_years`
--

INSERT INTO `publishing_years` (`pyid`, `year`) VALUES
(1, '1991'),
(2, '1992'),
(3, '1996'),
(4, '2005');

-- --------------------------------------------------------

--
-- Структура таблицы `readers`
--

CREATE TABLE `readers` (
  `rid` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор читателя',
  `student_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор студента',
  `book_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор книги',
  `return_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Статус возврата книги',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата выдачи книги',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата возврата книги'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `readers`
--

INSERT INTO `readers` (`rid`, `student_id`, `book_id`, `return_status`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(2, 10, 1, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(3, 4, 2, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(4, 2, 4, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(5, 4, 4, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(6, 6, 5, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(7, 2, 3, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(8, 2, 1, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(9, 2, 5, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(10, 3, 3, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(11, 3, 4, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(12, 3, 1, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(13, 7, 5, 1, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(14, 7, 3, 1, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(15, 2, 1, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(16, 8, 3, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(17, 8, 5, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(18, 8, 1, 0, '2020-11-09 10:42:16', '2020-11-09 10:42:16'),
(19, 9, 5, 0, '2020-11-09 11:37:42', '2020-11-09 11:37:42'),
(20, 1, 3, 0, '2020-11-09 11:59:12', '2020-11-09 11:59:12'),
(21, 10, 1, 1, '2020-11-09 12:00:08', '2020-11-09 12:00:08'),
(22, 7, 1, 1, '2020-11-09 12:00:42', '2020-11-09 12:00:42'),
(23, 10, 5, 1, '2020-11-09 12:08:20', '2020-11-09 12:08:20'),
(24, 9, 5, 0, '2020-11-09 12:08:44', '2020-11-09 12:08:44');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `sid` bigint(20) UNSIGNED NOT NULL COMMENT 'Идентификатор студента',
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Фамилия',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Отчество'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`sid`, `surname`, `name`, `middle_name`) VALUES
(1, 'Филиппов', 'Кирилл', 'Ростиславович'),
(2, 'Шаповалов', 'Андрон', 'Мартьянович'),
(3, 'Полушина', 'Ксения', 'Елисеевна'),
(4, 'Дагин', 'Кузьма', 'Тихонович'),
(5, 'Мяукин', 'Евсей', 'Вадимович'),
(6, 'Рощина', 'Алина', 'Степановна'),
(7, 'Труш', 'Раиса', 'Якубовна'),
(8, 'Рыбяк', 'Лариса', 'Тихоновна'),
(9, 'Андрюшин', 'Максим', 'Филимонович'),
(10, 'Козлова', 'Альбина', 'Андреевна');

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
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`aid`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_py_id_foreign` (`py_id`),
  ADD KEY `books_ph_id_foreign` (`ph_id`);

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
-- Индексы таблицы `publishing_houses`
--
ALTER TABLE `publishing_houses`
  ADD PRIMARY KEY (`phid`);

--
-- Индексы таблицы `publishing_years`
--
ALTER TABLE `publishing_years`
  ADD PRIMARY KEY (`pyid`);

--
-- Индексы таблицы `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `readers_student_id_foreign` (`student_id`),
  ADD KEY `readers_book_id_foreign` (`book_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

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
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `aid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор автора', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `bid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор книги', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `publishing_houses`
--
ALTER TABLE `publishing_houses`
  MODIFY `phid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор издательства', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `publishing_years`
--
ALTER TABLE `publishing_years`
  MODIFY `pyid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор года', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `readers`
--
ALTER TABLE `readers`
  MODIFY `rid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор читателя', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `sid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор студента', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`aid`),
  ADD CONSTRAINT `books_ph_id_foreign` FOREIGN KEY (`ph_id`) REFERENCES `publishing_houses` (`phid`),
  ADD CONSTRAINT `books_py_id_foreign` FOREIGN KEY (`py_id`) REFERENCES `publishing_years` (`pyid`);

--
-- Ограничения внешнего ключа таблицы `readers`
--
ALTER TABLE `readers`
  ADD CONSTRAINT `readers_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`bid`),
  ADD CONSTRAINT `readers_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
