-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2020 г., 21:23
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uzbek24`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adverts`
--

CREATE TABLE `adverts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_top` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `adverts`
--

INSERT INTO `adverts` (`id`, `image_top`, `image_right`, `type`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'adverts\\June2020\\9FJiFTuskEsebi8Dlcp0.png', 'adverts\\June2020\\qDOz1xqh7L6erHHcLfwi.png', 'page', NULL, '2020-06-07 12:28:00', '2020-06-07 12:54:46'),
(2, 'adverts\\June2020\\OAgdYBLuVuXoPmBMh5S4.png', 'adverts\\June2020\\t5civSgCZOiGIEocP3MC.png', 'category', '1', '2020-06-07 12:28:00', '2020-06-07 12:53:50'),
(6, NULL, 'adverts\\June2020\\LZBvNemwxjwwjR53vNwA.png', 'category', '5', '2020-06-07 12:37:00', '2020-06-07 12:50:12'),
(7, 'adverts\\June2020\\uDkcfdd46V8xzy80LBda.png', 'adverts\\June2020\\A9Rmug2XpZM2myyaqFQL.png', 'category', '3', '2020-06-07 12:38:00', '2020-06-07 12:41:04'),
(8, 'adverts\\June2020\\yBh4lXxoGDbJ4iWPNtmb.png', 'adverts\\June2020\\VSK73jZdEwiOrOdCqtiL.png', 'category', '2', '2020-06-07 12:40:00', '2020-06-07 12:52:43');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'узбекистон янгиликлари', 'uzbekiston-yangiliklari', '2020-06-05 12:47:59', '2020-06-05 13:17:52'),
(2, NULL, 2, 'Дунё янгиликлари', 'dunyo-yangiliklari', '2020-06-05 12:47:59', '2020-06-05 13:18:58'),
(3, NULL, 3, 'Иктисодиёт', 'iktisodiyot', '2020-06-05 13:19:39', '2020-06-05 13:19:39'),
(4, NULL, 4, 'Сиёсат', 'siyosat', '2020-06-05 22:46:56', '2020-06-05 22:46:56'),
(5, NULL, 5, 'Технологиялар', 'texnologiyalar', '2020-06-05 22:47:49', '2020-06-05 23:37:36');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true}}', 3),
(59, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(60, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(62, 5, 'view', 'text', 'View', 0, 1, 1, 1, 1, 1, '{}', 14),
(63, 5, 'post_belongstomany_tag_relationship', 'relationship', 'tags', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Tag\",\"table\":\"tags\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"post_tags\",\"pivot\":\"1\",\"taggable\":\"0\"}', 16),
(64, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(65, 8, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(66, 8, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 3),
(67, 8, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 4),
(68, 8, 'message', 'text', 'Message', 0, 1, 1, 1, 1, 1, '{}', 5),
(69, 8, 'thema', 'text', 'Thema', 0, 1, 1, 1, 1, 1, '{}', 6),
(70, 8, 'file', 'file', 'File', 0, 1, 1, 1, 1, 1, '{}', 7),
(71, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(72, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(73, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(75, 9, 'type', 'select_dropdown', 'Type', 0, 1, 1, 1, 1, 1, '{\"default\":\"page\",\"options\":{\"page\":\"Page\",\"category\":\"PostCategory\"}}', 4),
(76, 9, 'category_id', 'text', 'Category Id', 0, 1, 1, 1, 0, 1, '{}', 5),
(77, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(78, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(80, 9, 'image_top', 'image', 'Image Top', 0, 1, 1, 1, 1, 1, '{}', 2),
(81, 9, 'image_right', 'image', 'Image Right', 0, 1, 1, 1, 1, 1, '{}', 3),
(83, 9, 'advert_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"adverts\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(84, 5, 'anons', 'checkbox', 'Anons', 0, 1, 1, 1, 1, 1, '{}', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-05 12:47:59', '2020-06-07 13:29:20'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(7, 'tags', 'tags', 'Tag', 'Tags', NULL, 'App\\Tag', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-05 12:50:35', '2020-06-05 12:50:35'),
(8, 'messages', 'messages', 'Message', 'Messages', NULL, 'App\\Message', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-07 05:57:43', '2020-06-07 05:57:43'),
(9, 'adverts', 'adverts', 'Advert', 'Adverts', NULL, 'App\\Advert', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-07 08:58:57', '2020-06-07 12:39:54');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(2, 'footer_menu', '2020-06-07 04:57:45', '2020-06-07 04:57:45');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-06-05 12:47:59', '2020-06-05 12:47:59', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-06-05 12:47:59', '2020-06-05 12:47:59', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-06-05 12:48:00', '2020-06-05 12:48:00', 'voyager.pages.index', NULL),
(14, 1, 'Tags', '', '_self', NULL, NULL, NULL, 15, '2020-06-05 12:50:35', '2020-06-05 12:50:35', 'voyager.tags.index', NULL),
(15, 2, 'Информация о сайте', '/page/informaciya-o-sajte', '_self', NULL, '#000000', NULL, 1, '2020-06-07 05:12:35', '2020-06-07 05:23:54', NULL, ''),
(16, 2, 'Реклама', '/page/reklama', '_self', NULL, '#000000', NULL, 3, '2020-06-07 05:13:26', '2020-06-07 05:24:03', NULL, ''),
(17, 2, 'Воспользоваться информацией на сайте', '/page/vospol-zovat-sya-informaciej-na-sajte', '_self', NULL, '#000000', NULL, 4, '2020-06-07 05:15:38', '2020-06-07 05:23:54', NULL, ''),
(18, 2, 'Кун мавзуси', '/page/kun-mavzusi', '_self', NULL, '#000000', NULL, 5, '2020-06-07 05:16:38', '2020-06-07 05:23:54', NULL, ''),
(19, 2, 'Бизнинг жамоа', '/page/bizning-zhamoa', '_self', NULL, '#000000', NULL, 6, '2020-06-07 05:17:35', '2020-06-07 05:23:54', NULL, ''),
(20, 2, 'Bizga yozing', '/contact', '_self', NULL, '#000000', NULL, 2, '2020-06-07 05:23:49', '2020-06-07 05:24:03', NULL, ''),
(21, 1, 'Messages', '', '_self', NULL, NULL, NULL, 16, '2020-06-07 05:57:43', '2020-06-07 05:57:43', 'voyager.messages.index', NULL),
(22, 1, 'Adverts', '', '_self', NULL, NULL, NULL, 17, '2020-06-07 08:58:57', '2020-06-07 08:58:57', 'voyager.adverts.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `thema` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `message`, `thema`, `file`, `created_at`, `updated_at`) VALUES
(7, 'Abdurauf', '+998 91 113-69-99', 'admin@admin.com', 'wdfe', 'fefe', NULL, '2020-06-07 08:29:56', '2020-06-07 08:29:56');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_07_05_104959_create_messages_table', 1),
(28, '2020_06_05_171600_create_tags_table', 1),
(29, '2020_06_05_174518_create_post_tags_table', 1),
(31, '2020_06_07_134514_create_adverts_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Информация о сайте', NULL, '', NULL, 'informaciya-o-sajte', NULL, NULL, 'INACTIVE', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(3, 1, 'Реклама', NULL, '', NULL, 'reklama', NULL, NULL, 'INACTIVE', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(4, 1, 'Воспользоваться информацией на сайте', NULL, '<p class=\"article__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: medium; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">По данным пресс-службы, глава государства посетил фермерское хозяйство &laquo;Кухна водий бахори&raquo; в Алтынкульском районе, где ознакомился с состоянием развития пшеницы и хлопчатника.</p>\n<p class=\"article__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: medium; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">&laquo;В зарубежных странах, где климатические условия схожи с нашими, получают до 70 центнеров хлопка. Как? Работая по науке, подходя с умом. Учитывая нехватку земли в Андижане, необходимо использовать ее с двойной эффективностью. Есть тысячи безработных, малообеспеченных людей. Мы должны оценивать нашу работу их глазами&raquo;, - сказал президент.</p>\n<p class=\"article__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: medium; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">Глава государства поручил создать андижанский опыт выращивания сои между рядами хлопчатника.</p>\n<p class=\"article__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: medium; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">&laquo;Фермер должен выходить на поле не для плана, а для получения дохода. Если посадить сою, от одного поля можно заработать более чем в два раза больше, обеспечить работой еще больше людей. Получаемые от нее масло и корм имеют высокое качество и пользуются спросом на рынке. Да, это сложно. Но ведь не бывает легкой работы&raquo;, - отметил Мирзиёев.</p>\n<p class=\"article__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: medium; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">Подчеркнуто, что для развития агротехнологий важно создать высшее учебное заведение сельскохозяйственного направления на базе Андижанского областного филиала Ташкентского государственного аграрного университета.<img src=\"http://localhost:8000/storage/pages/June2020/article.png\" alt=\"\" /></p>', NULL, 'vospol-zovat-sya-informaciej-na-sajte', NULL, NULL, 'INACTIVE', '2020-06-07 05:15:29', '2020-06-07 05:33:00'),
(5, 1, 'Кун мавзуси', NULL, '', NULL, 'kun-mavzusi', NULL, NULL, 'INACTIVE', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(6, 1, 'Бизнинг жамоа', NULL, '', NULL, 'bizning-zhamoa', NULL, NULL, 'INACTIVE', '2020-06-07 05:17:22', '2020-06-07 05:17:22');

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
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(2, 'browse_bread', NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(3, 'browse_database', NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(4, 'browse_media', NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(5, 'browse_compass', NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(6, 'browse_menus', 'menus', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(7, 'read_menus', 'menus', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(8, 'edit_menus', 'menus', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(9, 'add_menus', 'menus', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(10, 'delete_menus', 'menus', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(11, 'browse_roles', 'roles', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(12, 'read_roles', 'roles', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(13, 'edit_roles', 'roles', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(14, 'add_roles', 'roles', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(15, 'delete_roles', 'roles', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(16, 'browse_users', 'users', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(17, 'read_users', 'users', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(18, 'edit_users', 'users', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(19, 'add_users', 'users', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(20, 'delete_users', 'users', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(21, 'browse_settings', 'settings', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(22, 'read_settings', 'settings', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(23, 'edit_settings', 'settings', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(24, 'add_settings', 'settings', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(25, 'delete_settings', 'settings', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(26, 'browse_categories', 'categories', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(27, 'read_categories', 'categories', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(28, 'edit_categories', 'categories', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(29, 'add_categories', 'categories', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(30, 'delete_categories', 'categories', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(31, 'browse_posts', 'posts', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(32, 'read_posts', 'posts', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(33, 'edit_posts', 'posts', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(34, 'add_posts', 'posts', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(35, 'delete_posts', 'posts', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(36, 'browse_pages', 'pages', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(37, 'read_pages', 'pages', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(38, 'edit_pages', 'pages', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(39, 'add_pages', 'pages', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(40, 'delete_pages', 'pages', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(41, 'browse_tags', 'tags', '2020-06-05 12:50:35', '2020-06-05 12:50:35'),
(42, 'read_tags', 'tags', '2020-06-05 12:50:35', '2020-06-05 12:50:35'),
(43, 'edit_tags', 'tags', '2020-06-05 12:50:35', '2020-06-05 12:50:35'),
(44, 'add_tags', 'tags', '2020-06-05 12:50:35', '2020-06-05 12:50:35'),
(45, 'delete_tags', 'tags', '2020-06-05 12:50:35', '2020-06-05 12:50:35'),
(46, 'browse_messages', 'messages', '2020-06-07 05:57:43', '2020-06-07 05:57:43'),
(47, 'read_messages', 'messages', '2020-06-07 05:57:43', '2020-06-07 05:57:43'),
(48, 'edit_messages', 'messages', '2020-06-07 05:57:43', '2020-06-07 05:57:43'),
(49, 'add_messages', 'messages', '2020-06-07 05:57:43', '2020-06-07 05:57:43'),
(50, 'delete_messages', 'messages', '2020-06-07 05:57:43', '2020-06-07 05:57:43'),
(51, 'browse_adverts', 'adverts', '2020-06-07 08:58:57', '2020-06-07 08:58:57'),
(52, 'read_adverts', 'adverts', '2020-06-07 08:58:57', '2020-06-07 08:58:57'),
(53, 'edit_adverts', 'adverts', '2020-06-07 08:58:57', '2020-06-07 08:58:57'),
(54, 'add_adverts', 'adverts', '2020-06-07 08:58:57', '2020-06-07 08:58:57'),
(55, 'delete_adverts', 'adverts', '2020-06-07 08:58:57', '2020-06-07 08:58:57');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `anons` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `view`, `created_at`, `updated_at`, `anons`) VALUES
(5, 1, 1, 'Президент Фарғонага амалий ташрифини бошлади', '', 'Обе пациентки заразились коронавирусом в результате контакта с больными. Одной 53 года, а другой 6 лет.', '<p class=\"big-post__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 13px; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">По информации Министерства здравоохранения, в Бухарской области вылечены и отправлены на реабилитацию два последних пациента с диагнозом COVID-19.</p>\n<p class=\"big-post__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 13px; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">Обе пациентки заразились коронавирусом в результате контакта с больными. Одной 53 года, а другой 6 лет.</p>', 'posts\\June2020\\cpgAz4fDAsN0lwB3nkSO.png', 'prezident-far-onaga-amalij-tashrifini-boshladi', '', '', 'PUBLISHED', 1, 26, '2020-06-05 13:02:53', '2020-06-07 12:53:53', NULL),
(6, 1, 2, 'title kril owhfoie', '', '«Soyadagi iqtisodiyotning o‘sishiga turtki bo‘ladigan omillardan biri - mehnat bozorida ishchilarning munosib haq to‘lanadigan ishni topa olmasligidir.  key', '', 'posts\\June2020\\I42IYbeBS3H2LVhBJy4v.png', 'title-kril-owhfoie', '', '', 'PUBLISHED', 0, 8, '2020-06-05 13:15:29', '2020-06-07 04:50:08', NULL),
(7, 1, 1, 'тест пост ', '', '', '', 'posts\\June2020\\MZ5u6LxrPHpFLeG2uL0N.png', 'test-post', '', '', 'PUBLISHED', 1, NULL, '2020-06-05 13:20:56', '2020-06-05 13:20:56', NULL),
(8, 1, 1, 'test post title kril', '', '', '', NULL, 'test-post-title-kril', '', '', 'PUBLISHED', 0, 1, '2020-06-05 23:47:28', '2020-06-06 08:54:21', NULL),
(9, 1, 2, 'test post22 kril', '', '', '', NULL, 'test-post22-kril', '', '', 'PUBLISHED', 0, NULL, '2020-06-05 23:47:40', '2020-06-07 04:36:18', NULL),
(10, 1, 1, 'test post3333 kril', '', '', '', NULL, 'test-post3333-kril', '', '', 'PUBLISHED', 0, 15, '2020-06-05 23:47:59', '2020-06-06 03:22:47', NULL),
(11, 1, 1, 'test post4444444 kril', '', '', '', NULL, 'test-post4444444-kril', '', '', 'PUBLISHED', 0, 8, '2020-06-05 23:48:17', '2020-06-07 12:52:52', NULL),
(12, 1, 1, 'По информации Министерства здравоохранения, в Бухарской области вылечены и отправлены на реабилитацию два последних пациента с диагнозом COVID-19.', '', 'Обе пациентки заразились коронавирусом в результате контакта с больными. Одной 53 года, а другой 6 лет.\n\nБухарская область наряду с Сурхандарьинской, Джизакской, Кашкадарьинской и Ферганской областями вошла в число территорий, свободных от COVID-19.', '<p class=\"big-post__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 13px; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">По информации Министерства здравоохранения, в Бухарской области вылечены и отправлены на реабилитацию два последних пациента с диагнозом COVID-19.</p>\n<p class=\"big-post__description\" style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 13px; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">Обе пациентки заразились коронавирусом в результате контакта с больными. Одной 53 года, а другой 6 лет.</p>\n<p class=\"big-post__description\" style=\"box-sizing: border-box; margin: 0px; font-size: 13px; color: #000000; opacity: 0.7; font-family: Montserrat, Arial, sans-serif;\">Бухарская область наряду с Сурхандарьинской, Джизакской, Кашкадарьинской и Ферганской областями вошла в число территорий, свободных от COVID-19.</p>', 'posts\\June2020\\q3aOZQ2NGgJ6DxI10Ijq.jpg', 'po-informacii-ministerstva-zdravoohraneniya-v-buharskoj-oblasti-vylecheny-i-otpravleny-na-reabilitaciyu-dva-poslednih-pacienta-s-diagnozom-covid-19', '', '', 'PUBLISHED', 1, 1, '2020-06-07 13:30:40', '2020-06-07 13:42:58', 1),
(13, 1, 1, '', '', '', '', 'posts\\June2020\\c90dTlJN9ZkkNGJG2oD4.jpg', '', '', '', 'PUBLISHED', 0, NULL, '2020-06-07 13:44:54', '2020-06-07 13:44:54', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, NULL),
(2, 6, 1, NULL, NULL),
(3, 7, 2, NULL, NULL),
(4, 12, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-06-05 12:47:59', '2020-06-05 12:47:59'),
(2, 'user', 'Normal User', '2020-06-05 12:47:59', '2020-06-05 12:47:59');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Президент', 'prizdent', '2020-06-05 12:53:04', '2020-06-05 12:53:04'),
(2, 'siyosat', 'siyosat', '2020-06-05 13:16:11', '2020-06-05 13:16:11');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-06-05 12:48:00', '2020-06-05 12:48:00'),
(31, 'data_types', 'display_name_singular', 5, 'uz', '', '2020-06-05 12:51:22', '2020-06-05 12:51:22'),
(32, 'data_types', 'display_name_singular', 5, 'ru', '', '2020-06-05 12:51:22', '2020-06-05 12:51:22'),
(33, 'data_types', 'display_name_plural', 5, 'uz', '', '2020-06-05 12:51:22', '2020-06-05 12:51:22'),
(34, 'data_types', 'display_name_plural', 5, 'ru', '', '2020-06-05 12:51:22', '2020-06-05 12:51:22'),
(35, 'tags', 'name', 1, 'uz', 'prizdent', '2020-06-05 12:53:04', '2020-06-05 12:53:04'),
(36, 'tags', 'name', 1, 'ru', 'Президент', '2020-06-05 12:53:04', '2020-06-05 12:53:04'),
(37, 'posts', 'title', 5, 'uz', 'Prezident Farg‘onaga amaliy tashrifini boshladi', '2020-06-05 13:02:53', '2020-06-05 13:14:10'),
(38, 'posts', 'title', 5, 'ru', 'Еще одна область стала зоной, свободной от Коронавируса', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(39, 'posts', 'seo_title', 5, 'uz', '', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(40, 'posts', 'seo_title', 5, 'ru', '', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(41, 'posts', 'excerpt', 5, 'uz', '«Davlat rahbari korteji dastlab Qo‘shtepa tumanidagi «Tursunov Yusufjon yeri» fermer xo‘jaligi yonida to‘xtadi.', '2020-06-05 13:02:53', '2020-06-05 13:14:10'),
(42, 'posts', 'excerpt', 5, 'ru', 'Еще одна область стала зоной, свободной от КоронавирусаЕще одна область стала зоной, свободной от Коронавируса', '2020-06-05 13:02:53', '2020-06-05 13:14:10'),
(43, 'posts', 'body', 5, 'uz', '', '2020-06-05 13:02:53', '2020-06-06 01:35:11'),
(44, 'posts', 'body', 5, 'ru', '<p style=\"box-sizing: border-box; outline: none; font-family: PTSerif; color: #000000; font-size: 19px;\"><span style=\"color: #000000; font-family: PTSerif;\"><span style=\"font-size: 19px;\">Еще одна область стала зоной, свободной от КоронавирусаЕще одна область стала зоной, свободной от КоронавирусаЕще одна область стала зоной, свободной от КоронавирусаЕще одна область стала зоной, свободной от КоронавирусаЕще одна область стала зоной, свободной от Коронавируса</span></span></p>', '2020-06-05 13:02:53', '2020-06-05 13:14:10'),
(45, 'posts', 'slug', 5, 'uz', 'prezident-farg-onaga-amaliy-tashrifini-boshladi', '2020-06-05 13:02:53', '2020-06-05 13:14:10'),
(46, 'posts', 'slug', 5, 'ru', 'eshe-odna-oblast-stala-zonoj-svobodnoj-ot-koronavirusa', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(47, 'posts', 'meta_description', 5, 'uz', '', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(48, 'posts', 'meta_description', 5, 'ru', '', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(49, 'posts', 'meta_keywords', 5, 'uz', '', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(50, 'posts', 'meta_keywords', 5, 'ru', '', '2020-06-05 13:02:53', '2020-06-05 13:02:53'),
(51, 'posts', 'title', 6, 'uz', 'O‘zbekistonda «soyadagi» iqtisodiyot saqlanib qolishiga ta\'lim tizimidagi kamchilik sababchimi? ', '2020-06-05 13:15:29', '2020-06-05 23:06:36'),
(52, 'posts', 'title', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(53, 'posts', 'seo_title', 6, 'uz', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(54, 'posts', 'seo_title', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(55, 'posts', 'excerpt', 6, 'uz', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(56, 'posts', 'excerpt', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(57, 'posts', 'body', 6, 'uz', '<p><span style=\"color: #000000; font-family: PTSerif; font-size: 19px;\">«Soyadagi iqtisodiyotning o‘sishiga turtki bo‘ladigan omillardan biri - mehnat bozorida ishchilarning munosib haq to‘lanadigan ishni topa olmasligidir. Bir yarim yil avval kichik tadbirkorlik sub\'yekti talab etayotgan kasblar va ta\'lim tizimi yetishtirib chiqayotgan kadrlar bog‘liqligini o‘rgandik. Shunda talabga ko‘ra mutaxassislar yetarlicha yetishmayotganini anglaganmiz», – deydi u.</span></p>', '2020-06-05 13:15:29', '2020-06-05 23:09:40'),
(58, 'posts', 'body', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(59, 'posts', 'slug', 6, 'uz', 'o-zbekistonda-soyadagi-iqtisodiyot-saqlanib-qolishiga-ta-lim-tizimidagi-kamchilik-sababchimi', '2020-06-05 13:15:29', '2020-06-05 23:06:36'),
(60, 'posts', 'slug', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(61, 'posts', 'meta_description', 6, 'uz', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(62, 'posts', 'meta_description', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(63, 'posts', 'meta_keywords', 6, 'uz', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(64, 'posts', 'meta_keywords', 6, 'ru', '', '2020-06-05 13:15:29', '2020-06-05 13:15:29'),
(65, 'tags', 'name', 2, 'uz', 'siyosat', '2020-06-05 13:16:11', '2020-06-05 13:16:11'),
(66, 'tags', 'name', 2, 'ru', 'сиёсат', '2020-06-05 13:16:11', '2020-06-05 13:16:11'),
(67, 'categories', 'slug', 1, 'uz', 'ozbekiston-yangiliklari', '2020-06-05 13:17:52', '2020-06-05 13:17:52'),
(68, 'categories', 'slug', 1, 'ru', 'novosti-uzbekistana', '2020-06-05 13:17:52', '2020-06-05 13:17:52'),
(69, 'categories', 'name', 1, 'uz', 'Ozbekiston yangiliklari', '2020-06-05 13:17:52', '2020-06-05 13:17:52'),
(70, 'categories', 'name', 1, 'ru', 'Новости Узбекистана', '2020-06-05 13:17:52', '2020-06-05 13:17:52'),
(71, 'categories', 'slug', 2, 'uz', 'dunyo-yangiliklari', '2020-06-05 13:18:58', '2020-06-05 13:18:58'),
(72, 'categories', 'slug', 2, 'ru', 'novosti-mira', '2020-06-05 13:18:58', '2020-06-05 13:18:58'),
(73, 'categories', 'name', 2, 'uz', 'Dunyo yangiliklari', '2020-06-05 13:18:58', '2020-06-05 13:18:58'),
(74, 'categories', 'name', 2, 'ru', 'Новости мира', '2020-06-05 13:18:58', '2020-06-05 13:18:58'),
(75, 'categories', 'slug', 3, 'uz', 'iqtisodiyot', '2020-06-05 13:19:39', '2020-06-05 13:19:39'),
(76, 'categories', 'slug', 3, 'ru', 'ekonomika', '2020-06-05 13:19:39', '2020-06-05 13:19:39'),
(77, 'categories', 'name', 3, 'uz', 'Iqtisodiyot', '2020-06-05 13:19:39', '2020-06-05 13:19:39'),
(78, 'categories', 'name', 3, 'ru', 'Экономика', '2020-06-05 13:19:39', '2020-06-05 13:19:39'),
(79, 'posts', 'title', 7, 'uz', 'test post title', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(80, 'posts', 'title', 7, 'ru', 'тест', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(81, 'posts', 'seo_title', 7, 'uz', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(82, 'posts', 'seo_title', 7, 'ru', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(83, 'posts', 'excerpt', 7, 'uz', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(84, 'posts', 'excerpt', 7, 'ru', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(85, 'posts', 'body', 7, 'uz', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(86, 'posts', 'body', 7, 'ru', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(87, 'posts', 'slug', 7, 'uz', 'test-post-title', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(88, 'posts', 'slug', 7, 'ru', 'test', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(89, 'posts', 'meta_description', 7, 'uz', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(90, 'posts', 'meta_description', 7, 'ru', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(91, 'posts', 'meta_keywords', 7, 'uz', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(92, 'posts', 'meta_keywords', 7, 'ru', '', '2020-06-05 13:20:56', '2020-06-05 13:20:56'),
(93, 'categories', 'slug', 4, 'uz', '', '2020-06-05 22:46:56', '2020-06-05 22:46:56'),
(94, 'categories', 'slug', 4, 'ru', '', '2020-06-05 22:46:56', '2020-06-05 22:46:56'),
(95, 'categories', 'name', 4, 'uz', '', '2020-06-05 22:46:56', '2020-06-05 22:46:56'),
(96, 'categories', 'name', 4, 'ru', '', '2020-06-05 22:46:56', '2020-06-05 22:46:56'),
(97, 'categories', 'slug', 5, 'uz', '', '2020-06-05 22:47:49', '2020-06-05 22:47:49'),
(98, 'categories', 'slug', 5, 'ru', 'obshestvo', '2020-06-05 22:47:49', '2020-06-05 22:47:49'),
(99, 'categories', 'name', 5, 'uz', 'Texnologiyalar', '2020-06-05 22:47:49', '2020-06-05 23:37:36'),
(100, 'categories', 'name', 5, 'ru', 'Технологии', '2020-06-05 22:47:49', '2020-06-05 23:37:36'),
(101, 'posts', 'title', 8, 'uz', 'test post title uzbb', '2020-06-05 23:47:28', '2020-06-05 23:51:26'),
(102, 'posts', 'title', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(103, 'posts', 'seo_title', 8, 'uz', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(104, 'posts', 'seo_title', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(105, 'posts', 'excerpt', 8, 'uz', 'rafa', '2020-06-05 23:47:28', '2020-06-07 04:50:52'),
(106, 'posts', 'excerpt', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(107, 'posts', 'body', 8, 'uz', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(108, 'posts', 'body', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(109, 'posts', 'slug', 8, 'uz', 'test-post-title-uzbb', '2020-06-05 23:47:28', '2020-06-05 23:51:26'),
(110, 'posts', 'slug', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(111, 'posts', 'meta_description', 8, 'uz', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(112, 'posts', 'meta_description', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(113, 'posts', 'meta_keywords', 8, 'uz', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(114, 'posts', 'meta_keywords', 8, 'ru', '', '2020-06-05 23:47:28', '2020-06-05 23:47:28'),
(115, 'posts', 'title', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(116, 'posts', 'title', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(117, 'posts', 'seo_title', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(118, 'posts', 'seo_title', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(119, 'posts', 'excerpt', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(120, 'posts', 'excerpt', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(121, 'posts', 'body', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(122, 'posts', 'body', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(123, 'posts', 'slug', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(124, 'posts', 'slug', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(125, 'posts', 'meta_description', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(126, 'posts', 'meta_description', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(127, 'posts', 'meta_keywords', 9, 'uz', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(128, 'posts', 'meta_keywords', 9, 'ru', '', '2020-06-05 23:47:40', '2020-06-05 23:47:40'),
(129, 'posts', 'title', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(130, 'posts', 'title', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(131, 'posts', 'seo_title', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(132, 'posts', 'seo_title', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(133, 'posts', 'excerpt', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(134, 'posts', 'excerpt', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(135, 'posts', 'body', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(136, 'posts', 'body', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(137, 'posts', 'slug', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(138, 'posts', 'slug', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(139, 'posts', 'meta_description', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(140, 'posts', 'meta_description', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(141, 'posts', 'meta_keywords', 10, 'uz', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(142, 'posts', 'meta_keywords', 10, 'ru', '', '2020-06-05 23:47:59', '2020-06-05 23:47:59'),
(143, 'posts', 'title', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(144, 'posts', 'title', 11, 'ru', 'tefwdtwgd', '2020-06-05 23:48:17', '2020-06-06 08:53:55'),
(145, 'posts', 'seo_title', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(146, 'posts', 'seo_title', 11, 'ru', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(147, 'posts', 'excerpt', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(148, 'posts', 'excerpt', 11, 'ru', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(149, 'posts', 'body', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(150, 'posts', 'body', 11, 'ru', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(151, 'posts', 'slug', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(152, 'posts', 'slug', 11, 'ru', 'tefwdtwgd', '2020-06-05 23:48:17', '2020-06-06 08:53:55'),
(153, 'posts', 'meta_description', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(154, 'posts', 'meta_description', 11, 'ru', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(155, 'posts', 'meta_keywords', 11, 'uz', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(156, 'posts', 'meta_keywords', 11, 'ru', '', '2020-06-05 23:48:17', '2020-06-05 23:48:17'),
(157, 'pages', 'title', 2, 'uz', '', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(158, 'pages', 'title', 2, 'ru', '', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(159, 'pages', 'slug', 2, 'uz', '', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(160, 'pages', 'slug', 2, 'ru', '', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(161, 'pages', 'body', 2, 'uz', '', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(162, 'pages', 'body', 2, 'ru', '', '2020-06-07 05:10:52', '2020-06-07 05:10:52'),
(163, 'menu_items', 'title', 15, 'uz', '', '2020-06-07 05:12:35', '2020-06-07 05:12:35'),
(164, 'menu_items', 'title', 15, 'ru', 'Информация о сайте', '2020-06-07 05:12:35', '2020-06-07 05:12:35'),
(165, 'menu_items', 'title', 16, 'uz', '', '2020-06-07 05:13:26', '2020-06-07 05:13:26'),
(166, 'menu_items', 'title', 16, 'ru', 'Реклама', '2020-06-07 05:13:26', '2020-06-07 05:13:26'),
(167, 'pages', 'title', 3, 'uz', '', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(168, 'pages', 'title', 3, 'ru', 'Реклама', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(169, 'pages', 'slug', 3, 'uz', '', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(170, 'pages', 'slug', 3, 'ru', 'reklama', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(171, 'pages', 'body', 3, 'uz', '', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(172, 'pages', 'body', 3, 'ru', '', '2020-06-07 05:13:59', '2020-06-07 05:13:59'),
(173, 'pages', 'title', 4, 'uz', '', '2020-06-07 05:15:29', '2020-06-07 05:15:29'),
(174, 'pages', 'title', 4, 'ru', 'Воспользоваться информацией на сайте', '2020-06-07 05:15:29', '2020-06-07 05:15:29'),
(175, 'pages', 'slug', 4, 'uz', '', '2020-06-07 05:15:29', '2020-06-07 05:15:29'),
(176, 'pages', 'slug', 4, 'ru', 'vospol-zovat-sya-informaciej-na-sajte', '2020-06-07 05:15:29', '2020-06-07 05:15:29'),
(177, 'pages', 'body', 4, 'uz', '', '2020-06-07 05:15:29', '2020-06-07 05:15:29'),
(178, 'pages', 'body', 4, 'ru', '', '2020-06-07 05:15:29', '2020-06-07 05:15:29'),
(179, 'menu_items', 'title', 17, 'uz', '', '2020-06-07 05:15:38', '2020-06-07 05:15:38'),
(180, 'menu_items', 'title', 17, 'ru', 'Воспользоваться информацией на сайте', '2020-06-07 05:15:38', '2020-06-07 05:15:38'),
(181, 'pages', 'title', 5, 'uz', '', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(182, 'pages', 'title', 5, 'ru', 'Темы дня', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(183, 'pages', 'slug', 5, 'uz', '', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(184, 'pages', 'slug', 5, 'ru', 'temy-dnya', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(185, 'pages', 'body', 5, 'uz', '', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(186, 'pages', 'body', 5, 'ru', '', '2020-06-07 05:16:29', '2020-06-07 05:16:29'),
(187, 'menu_items', 'title', 18, 'uz', '', '2020-06-07 05:16:38', '2020-06-07 05:16:38'),
(188, 'menu_items', 'title', 18, 'ru', 'Темы дня', '2020-06-07 05:16:38', '2020-06-07 05:18:47'),
(189, 'pages', 'title', 6, 'uz', '', '2020-06-07 05:17:22', '2020-06-07 05:17:22'),
(190, 'pages', 'title', 6, 'ru', 'Наша команда', '2020-06-07 05:17:22', '2020-06-07 05:17:22'),
(191, 'pages', 'slug', 6, 'uz', '', '2020-06-07 05:17:22', '2020-06-07 05:17:22'),
(192, 'pages', 'slug', 6, 'ru', 'nasha-komanda', '2020-06-07 05:17:22', '2020-06-07 05:17:22'),
(193, 'pages', 'body', 6, 'uz', '', '2020-06-07 05:17:22', '2020-06-07 05:17:22'),
(194, 'pages', 'body', 6, 'ru', '', '2020-06-07 05:17:22', '2020-06-07 05:17:22'),
(195, 'menu_items', 'title', 19, 'uz', '', '2020-06-07 05:17:35', '2020-06-07 05:17:35'),
(196, 'menu_items', 'title', 19, 'ru', 'Наша команда', '2020-06-07 05:17:35', '2020-06-07 05:17:35'),
(197, 'menu_items', 'title', 20, 'uz', '', '2020-06-07 05:23:49', '2020-06-07 05:23:49'),
(198, 'menu_items', 'title', 20, 'ru', 'Напишите нам', '2020-06-07 05:23:49', '2020-06-07 05:23:49'),
(199, 'data_types', 'display_name_singular', 9, 'uz', '', '2020-06-07 09:00:01', '2020-06-07 09:00:01'),
(200, 'data_types', 'display_name_singular', 9, 'ru', '', '2020-06-07 09:00:01', '2020-06-07 09:00:01'),
(201, 'data_types', 'display_name_plural', 9, 'uz', '', '2020-06-07 09:00:01', '2020-06-07 09:00:01'),
(202, 'data_types', 'display_name_plural', 9, 'ru', '', '2020-06-07 09:00:01', '2020-06-07 09:00:01'),
(203, 'posts', 'title', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(204, 'posts', 'title', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(205, 'posts', 'seo_title', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(206, 'posts', 'seo_title', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(207, 'posts', 'excerpt', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(208, 'posts', 'excerpt', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(209, 'posts', 'body', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(210, 'posts', 'body', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(211, 'posts', 'slug', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(212, 'posts', 'slug', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(213, 'posts', 'meta_description', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(214, 'posts', 'meta_description', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(215, 'posts', 'meta_keywords', 12, 'uz', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(216, 'posts', 'meta_keywords', 12, 'ru', '', '2020-06-07 13:30:40', '2020-06-07 13:30:40'),
(217, 'posts', 'title', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(218, 'posts', 'title', 13, 'ru', 'test novost rus', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(219, 'posts', 'seo_title', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(220, 'posts', 'seo_title', 13, 'ru', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(221, 'posts', 'excerpt', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(222, 'posts', 'excerpt', 13, 'ru', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(223, 'posts', 'body', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(224, 'posts', 'body', 13, 'ru', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(225, 'posts', 'slug', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(226, 'posts', 'slug', 13, 'ru', 'test-novost-rus', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(227, 'posts', 'meta_description', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(228, 'posts', 'meta_description', 13, 'ru', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(229, 'posts', 'meta_keywords', 13, 'uz', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54'),
(230, 'posts', 'meta_keywords', 13, 'ru', '', '2020-06-07 13:44:54', '2020-06-07 13:44:54');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '$2y$10$5/GxReUy21Sz2CFlmmNx5.ipsk81mPmdzTyZKjhqPaz0qmTDd63zq', 'RbiSa8xsRL8himfzLh85Za5n9Z8RDzzgd5Kl0AXSbztCCSuXCzqME4LhLt8F', NULL, '2020-06-05 12:47:59', '2020-06-05 12:47:59');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adverts_category_id_unique` (`category_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
