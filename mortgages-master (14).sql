-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 06:03 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mortgages-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cattitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcattitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cattitle`, `subcattitle`, `slug`, `catimage`, `created_at`, `updated_at`) VALUES
(1, 'Life line', '[\"News\",\"white suit\"]', 'life-line', '/public/images/categorie/fff.png', '2019-12-09 23:19:02', '2019-12-09 23:29:50'),
(2, 'Buy to Let', '[\"Let buy\"]', 'buy-to-let', '/public/images/categorie/fff.png', '2019-12-12 06:21:03', '2019-12-12 06:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_posts`
--

CREATE TABLE `custom_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `postimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awardyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_posts`
--

INSERT INTO `custom_posts` (`id`, `title`, `slug`, `description`, `postimage`, `awardyear`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(8, 'amrinder singh laravel devloper', 'love-to-meet-you', '<p>asdasdasdsads</p>', NULL, NULL, '/public/images/customposts/430364901.png', '/public/images/customposts/797604321.png', '/public/images/customposts/1177446721.jpg', '2019-12-12 01:46:04', '2019-12-12 01:46:04'),
(11, 'amrinder singh laravel devloper', 'first-time-buyers', '<p>asdasdasdasdasd</p>', NULL, NULL, '/public/images/customposts/732348208.png', NULL, NULL, '2019-12-12 02:03:15', '2019-12-12 02:03:15'),
(14, 'What Mortgage Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576146887.png', '2019', NULL, NULL, NULL, '2019-12-12 05:04:47', '2019-12-12 05:04:47'),
(15, 'British Mortgage Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576146940.png', '2018', NULL, NULL, NULL, '2019-12-12 05:05:40', '2019-12-12 05:05:40'),
(16, 'Bath Life Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576146984.png', '2017', NULL, NULL, NULL, '2019-12-12 05:06:24', '2019-12-12 05:06:24'),
(17, 'AIG Life Quality Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147017.png', '2018', NULL, NULL, NULL, '2019-12-12 05:06:57', '2019-12-12 05:06:57'),
(18, 'Mortgage Introducer Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147087.png', '2017', NULL, NULL, NULL, '2019-12-12 05:08:07', '2019-12-12 05:08:07'),
(19, 'Personal Finance Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147142.png', '2019', NULL, NULL, NULL, '2019-12-12 05:09:02', '2019-12-12 05:09:02'),
(20, 'UK Search Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147187.png', '2017', NULL, NULL, NULL, '2019-12-12 05:09:47', '2019-12-12 05:09:47'),
(21, 'Lending Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147236.png', '2017', NULL, NULL, NULL, '2019-12-12 05:10:36', '2019-12-12 05:10:36'),
(22, 'Lending Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147271.png', '2017', NULL, NULL, NULL, '2019-12-12 05:11:11', '2019-12-12 05:11:11'),
(23, 'AIG Life Quality Awards', 'awards-data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.', '/public/images/customposts/1576147307.png', '2012', NULL, NULL, NULL, '2019-12-12 05:11:47', '2019-12-12 05:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_25_131353_create_posts_table', 1),
(5, '2019_11_26_061505_create_categories_table', 1),
(6, '2019_12_04_072833_create_posttags_table', 1),
(7, '2019_12_09_092116_create_contacts_table', 1),
(8, '2019_12_10_061626_add_email_id_to_contacts_table', 2),
(9, '2019_12_10_080256_create_custom_posts_table', 3),
(10, '2019_12_11_102751_create_testimonials_table', 4),
(11, '2019_12_12_065735_add_image1_and_image2_and_image3_to_custom_posts_table', 5),
(12, '2019_12_12_070245_add_image1_and_image2_and_image3_to_custom_posts_table', 6),
(13, '2019_12_12_075753_create_awards_table', 7),
(14, '2019_12_12_101816_add_awardyear_to_custom_posts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `postimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkPublish` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `description`, `postimage`, `checkPublish`, `category`, `subcategory`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'amrinder singh laravel devloper', 'aman', 'amrinder-singh-laravel-devloper', '<p>sdsadasds</p>', '/public/images/posts/1576225174.jpg', NULL, '[\"Life line\",\"Buy to Let\"]', NULL, NULL, '2019-12-09 23:19:37', '2019-12-13 02:49:34'),
(2, 'amrinder singh laravel devloper', 'asdasdasd', 'amrinder-singh-laravel-devloper-1', '<p>asdasdsad</p>', '/public/images/posts/1575954017.jpg', 'on', '[\"Life line\"]', '[\"white suit\"]', '[\"gurvinder\"]', '2019-12-09 23:30:17', '2019-12-09 23:30:17'),
(3, 'my first postasd', 'post', 'my-first-postasd', '<p>dadas asdasdas asd asd asdsadsadsa asdasdasdas asd</p>', '/public/images/posts/1576044828.jpg', 'on', '[\"Life line\"]', '[]', '[\"gurvinder\"]', '2019-12-11 00:43:48', '2019-12-11 00:43:48'),
(4, 'asdasd', 'asdasdasd', 'asdasd', '<p>sadasdsdsadamrinder singh laravel devloper</p>', '/public/images/posts/1576044880.jpg', 'on', '[\"Life line\"]', '[]', '[\"gurvinder\"]', '2019-12-11 00:44:40', '2019-12-11 00:44:40'),
(5, 'Shared ownership boost for lower earners', 'aman', 'shared-ownership-boost-for-lower-earners', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '/public/images/posts/1576152637.jpg', 'on', '[\"Life line\",\"Buy to Let\"]', '[]', '[\"gurvinder\"]', '2019-12-12 06:40:37', '2019-12-12 06:40:37'),
(6, 'Shared ownership boost for lower earners', 'aman', 'shared-ownership-boost-for-lower-earners-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '/public/images/posts/1576153177.jpg', 'on', '[\"Buy to Let\"]', '[]', '[\"gurvinder\"]', '2019-12-12 06:49:37', '2019-12-12 06:49:37'),
(7, 'Shared ownership boost for lower earners', 'lower earners', 'shared-ownership-boost-for-lower-earners-2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '/public/images/posts/1576153413.jpg', 'on', '[\"Life line\"]', '[]', '[\"gurvinder\"]', '2019-12-12 06:53:33', '2019-12-12 06:53:33'),
(8, 'Shared ownership boost for lower earners', 'aman', 'shared-ownership-boost-for-lower-earners-3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '/public/images/posts/1576230584.jpg', NULL, '[\"Life line\",\"Buy to Let\"]', '[\"Let buy\"]', '[\"gurvinder\"]', '2019-12-12 06:55:43', '2019-12-13 04:19:44'),
(9, 'Shared ownership boost for lower earners', 'lower earners', 'shared-ownership-boost-for-lower-earners-4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '/public/images/posts/1576230303.jpg', NULL, '[\"Life line\",\"Buy to Let\"]', NULL, '[\"gurvinder\"]', '2019-12-12 06:56:40', '2019-12-13 04:15:03'),
(10, 'Shared ownership boost for lower earners', 'post', 'shared-ownership-boost-for-lower-earners-5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus vitae animi voluptas libero obcaecati culpa accusantium fugit sapiente qui fuga, necessitatibus molestiae ducimus nihil architecto harum aperiam earum dolor dignissimos.', '/public/images/posts/1576228300.jpg', 'on', '[\"Life line\",\"Buy to Let\"]', '[]', '[\"gurvinder\"]', '2019-12-13 03:41:40', '2019-12-13 03:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `posttags`
--

CREATE TABLE `posttags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtagtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posttags`
--

INSERT INTO `posttags` (`id`, `tagtitle`, `subtagtitle`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'gurvinder', 'gurvinder', 'gurvinder', '2019-12-09 23:19:33', '2019-12-09 23:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyWebsite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `fullname`, `slug`, `email`, `companyName`, `companyWebsite`, `heading`, `testimonial`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Mishen Walker', 'fast-and-very-easy-application-process-here', 'aman@gmail.com', 'CEO Company', 'google.com', 'Fast and very easy application process here', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '/public/images/testimonial/1576066315.png', '2019-12-11 06:41:55', '2019-12-11 06:41:55'),
(9, 'Mishen Walker', 'fast-and-very-easy-application-process-here-1', 'mishenwalker@gmail.com', 'stark company', 'google.com', 'Fast and very easy application process here', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '/public/images/testimonial/1576069820.png', '2019-12-11 07:40:20', '2019-12-11 07:40:20'),
(10, 'Manish Arora', 'fast-and-very-easy-application-process-here-2', 'manisharora@gmail.com', 'Arora farm', 'google.com', 'Fast and very easy application process here', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum similique distinctio eos explicabo quia ipsa quidem vitae harum fugit voluptate magnam, ullam deserunt libero, rerum mollitia! Quod, cumque, aliquid! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum similique distinctio eos explicabo quia ipsa quidem vitae harum fugit voluptate magnam, ullam deserunt libero, rerum mollitia! Quod, cumque, aliquid!', '/public/images/testimonial/1576129788.jpg', '2019-12-12 00:19:48', '2019-12-12 00:19:48'),
(11, 'Akash Khatri', 'fast-and-very-easy-application-process-here-3', 'akashkhatri@gmail.com', 'Khatri cloths', 'http://kushlynacademy.com', 'Fast and very easy application process here', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '/public/images/testimonial/1576129996.png', '2019-12-12 00:23:16', '2019-12-12 00:23:16'),
(12, 'Ritesh Jangir', 'fast-and-very-easy-application-process-here-4', 'riteshjangir@gmail.com', 'Jangir vestige store', 'google.com', 'Fast and very easy application process here', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '/public/images/testimonial/1576130142.png', '2019-12-12 00:25:42', '2019-12-12 00:25:42'),
(13, 'Akhilesh Bhandari', 'fast-and-very-easy-application-process-here-5', 'akhileshbhandari@gmail.com', 'Bhandari vestige store', 'akhileshbhandari.com', 'Fast and very easy application process here', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '/public/images/testimonial/1576130296.png', '2019-12-12 00:28:16', '2019-12-12 00:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amrinder', 'sembi', 'aman@gmail.com', NULL, '$2y$10$9b.5VGloB4/VW0io1kS2tuvBtvrYK1PyJrKcEzilbXR/IHEITPvly', '/public/images/1575884104.png', NULL, '2019-12-09 04:05:04', '2019-12-09 04:05:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_posts`
--
ALTER TABLE `custom_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posttags`
--
ALTER TABLE `posttags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `custom_posts`
--
ALTER TABLE `custom_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posttags`
--
ALTER TABLE `posttags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
