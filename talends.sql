-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 10:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talends`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `banner`, `description`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Who Else Wants To Be Successful With Business', 'who-else-wants-to-be-successful-with-business', 'img-01.jpg', '<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed utem perspiciatis undesieu omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaqueiu ipsa quae ab illo inventore veritatisetm quasitea architecto beatae vitae dictaed quia consequuntur magni dolores eos quist ratione voluptatem sequei nesciunt. Neque porro quam est qui dolorem ipsum quia dolor sitem amet consectetur adipisci velit sed quianon numquam eius modi tempora incidunt ut labore etneise dolore magnam aliquam quaerat tatem dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>\r\n                    <blockquote class=\"wt-blockquotevone\"><span><i class=\"lnr lnr-bookmark\"></i></span> <q>&rdquo; Adipisicing elit, sed dote eiusmod tempor olak magna aliqua okaeine mikaru itniesce.&rdquo;</q></blockquote>\r\n                    <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiate nulla pariatur. Excepteur sint occaecat cupidatat ainon proident sunt in culpa qui officia deserunt mollit anim id est laborum ut perspiciatis unde.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-articlessingleone\"><img class=\"test\" src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-02.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde omnis iste natus error sit voluptatem.</span></figcaption>\r\n                    </figure>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n                    <ul>\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi quaerat voluptatem.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-alignleft\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-03.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde</span></figcaption>\r\n                    </figure>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lum, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictation explicabo. nemo enim ipsam voluptatem quia voluptas orem ipsum quia dolor sit.</p>\r\n                    <ul class=\"wt-blogliststyle\">\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiuste modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                    <p class=\"wt-clear\">Excepteur sint eccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et qaenuasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-alignright\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-04.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde</span></figcaption>\r\n                    </figure>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-blogliststyle\">\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p class=\"wt-clear\">Excepteur sint eccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasite architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <div class=\"wt-video\">\r\n                    <figure><a href=\"https://www.youtube.com/watch?v=J37W6DjqT3Q\" rel=\"prettyPhoto[video]\" data-rel=\"prettyPhoto[video]\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/video-img.jpg\" alt=\"image description\" /></a></figure>\r\n                    </div>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <ul>\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>', '2022-02-01 11:40:30', '2022-02-01 11:40:30', 1),
(2, '20 Top Tips For Business', '20-top-tips-for-business', 'img-02.jpg', '<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed utem perspiciatis undesieu omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaqueiu ipsa quae ab illo inventore veritatisetm quasitea architecto beatae vitae dictaed quia consequuntur magni dolores eos quist ratione voluptatem sequei nesciunt. Neque porro quam est qui dolorem ipsum quia dolor sitem amet consectetur adipisci velit sed quianon numquam eius modi tempora incidunt ut labore etneise dolore magnam aliquam quaerat tatem dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>\r\n                    <blockquote class=\"wt-blockquotevone\"><span><i class=\"lnr lnr-bookmark\"></i></span> <q>&rdquo; Adipisicing elit, sed dote eiusmod tempor olak magna aliqua okaeine mikaru itniesce.&rdquo;</q></blockquote>\r\n                    <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiate nulla pariatur. Excepteur sint occaecat cupidatat ainon proident sunt in culpa qui officia deserunt mollit anim id est laborum ut perspiciatis unde.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-articlessingleone\"><img class=\"test\" src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-02.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde omnis iste natus error sit voluptatem.</span></figcaption>\r\n                    </figure>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n                    <ul>\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi quaerat voluptatem.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-alignleft\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-03.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde</span></figcaption>\r\n                    </figure>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lum, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictation explicabo. nemo enim ipsam voluptatem quia voluptas orem ipsum quia dolor sit.</p>\r\n                    <ul class=\"wt-blogliststyle\">\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiuste modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                    <p class=\"wt-clear\">Excepteur sint eccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et qaenuasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-alignright\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-04.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde</span></figcaption>\r\n                    </figure>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-blogliststyle\">\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p class=\"wt-clear\">Excepteur sint eccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasite architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <div class=\"wt-video\">\r\n                    <figure><a href=\"https://www.youtube.com/watch?v=J37W6DjqT3Q\" rel=\"prettyPhoto[video]\" data-rel=\"prettyPhoto[video]\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/video-img.jpg\" alt=\"image description\" /></a></figure>\r\n                    </div>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <ul>\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>', '2022-02-01 11:40:30', '2022-02-01 11:40:30', 1),
(3, 'Clear And Unbiased Facts About Business (Without All The Hype)', 'clear-and-unbiased-facts-about-business-without-all-the-hype', 'img-04.jpg', '<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed utem perspiciatis undesieu omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaqueiu ipsa quae ab illo inventore veritatisetm quasitea architecto beatae vitae dictaed quia consequuntur magni dolores eos quist ratione voluptatem sequei nesciunt. Neque porro quam est qui dolorem ipsum quia dolor sitem amet consectetur adipisci velit sed quianon numquam eius modi tempora incidunt ut labore etneise dolore magnam aliquam quaerat tatem dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>\r\n                    <blockquote class=\"wt-blockquotevone\"><span><i class=\"lnr lnr-bookmark\"></i></span> <q>&rdquo; Adipisicing elit, sed dote eiusmod tempor olak magna aliqua okaeine mikaru itniesce.&rdquo;</q></blockquote>\r\n                    <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiate nulla pariatur. Excepteur sint occaecat cupidatat ainon proident sunt in culpa qui officia deserunt mollit anim id est laborum ut perspiciatis unde.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-articlessingleone\"><img class=\"test\" src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-02.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde omnis iste natus error sit voluptatem.</span></figcaption>\r\n                    </figure>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n                    <ul>\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi quaerat voluptatem.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-alignleft\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-03.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde</span></figcaption>\r\n                    </figure>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lum, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictation explicabo. nemo enim ipsam voluptatem quia voluptas orem ipsum quia dolor sit.</p>\r\n                    <ul class=\"wt-blogliststyle\">\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiuste modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                    <p class=\"wt-clear\">Excepteur sint eccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et qaenuasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <figure class=\"wt-blogdetailimgvtwo wt-alignright\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/img-04.jpg\" alt=\"image description\" />\r\n                    <figcaption><span>As per current survey perspiciatis unde</span></figcaption>\r\n                    </figure>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-blogliststyle\">\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p class=\"wt-clear\">Excepteur sint eccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasite architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <div class=\"wt-video\">\r\n                    <figure><a href=\"https://www.youtube.com/watch?v=J37W6DjqT3Q\" rel=\"prettyPhoto[video]\" data-rel=\"prettyPhoto[video]\"><img src=\"http://www.amentotech.com/projects/worketic/images/article/articlessingle/video-img.jpg\" alt=\"image description\" /></a></figure>\r\n                    </div>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>\r\n                    <ul>\r\n                    <li><span>Nemo enim ipsam voluptatem quia</span></li>\r\n                    <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>\r\n                    <li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>\r\n                    <li><span>qui dolorem ipsum quia dolor sit amet</span></li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>', '2022-02-01 11:40:30', '2022-02-01 11:40:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `title`, `slug`, `abstract`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PSD Web Template', 'psd-web-template', NULL, NULL, '2022-02-01 11:40:30', '2022-02-01 11:40:30'),
(2, 'Digital Marketing', 'digital-marketing', NULL, NULL, '2022-02-01 11:40:30', '2022-02-01 11:40:30'),
(3, 'PHP Development', 'php-development', NULL, NULL, '2022-02-01 11:40:30', '2022-02-01 11:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `article_category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `article_category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 3),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `title`, `slug`, `image`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Gold', 'gold', 'featured.png', '#f1c40f', '2022-02-01 11:40:25', '2022-02-01 11:40:25'),
(2, 'Silver', 'silver', 'featured.png', '#e67e22', '2022-02-01 11:40:25', '2022-02-01 11:40:25'),
(3, 'Bronze', 'Bronze', 'featured.png', '#2ecc71', '2022-02-01 11:40:25', '2022-02-01 11:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `catables`
--

CREATE TABLE `catables` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `catable_id` int(11) NOT NULL,
  `catable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catables`
--

INSERT INTO `catables` (`id`, `category_id`, `catable_id`, `catable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(2, 2, 1, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(3, 3, 1, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(4, 4, 2, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(5, 5, 2, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(6, 6, 3, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(7, 7, 3, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(8, 8, 4, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(9, 1, 4, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(10, 2, 5, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(11, 3, 5, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(12, 4, 6, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(13, 5, 6, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(14, 6, 7, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(15, 7, 7, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(16, 8, 8, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(17, 3, 8, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(18, 4, 9, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(19, 1, 9, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(20, 5, 10, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(21, 6, 10, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(22, 7, 11, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(23, 8, 11, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(24, 1, 12, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(25, 2, 12, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(26, 3, 13, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(27, 4, 13, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(28, 5, 14, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(29, 6, 14, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(30, 7, 15, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(31, 8, 15, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(32, 8, 16, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(33, 7, 16, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(34, 6, 17, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(35, 5, 17, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(36, 5, 18, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(37, 4, 18, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(38, 3, 19, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(39, 2, 20, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(40, 1, 21, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(41, 5, 22, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(42, 4, 23, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(43, 3, 24, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(44, 4, 19, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(45, 5, 20, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(46, 6, 21, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(47, 7, 22, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(48, 8, 23, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(49, 1, 24, 'App\\Job', '2022-02-01 11:40:27', '2022-02-01 11:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `abstract`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mobiles', 'mobiles', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '1.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(2, 'Digital Marketing', 'digital-marketing', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '2.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(3, 'Writing & Translation', 'writing-translation', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '3.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(4, 'Video & Animation', 'video-animation', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '4.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(5, 'Music & Audio', 'music-audio', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '5.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(6, 'Programming & Tech', 'programming-tech', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '6.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(7, 'Business', 'business', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '7.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(8, 'Fun & Lifestyle', 'fun-lifestyle', 'Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.', '8.png', '2022-02-01 11:40:23', '2022-02-01 11:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `child_location`
--

CREATE TABLE `child_location` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_pages`
--

CREATE TABLE `child_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_pages`
--

INSERT INTO `child_pages` (`id`, `parent_id`, `child_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(2, 1, 2, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(3, 1, 5, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(4, 1, 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(5, 1, 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(6, 1, 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(7, 1, 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_times`
--

CREATE TABLE `delivery_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_times`
--

INSERT INTO `delivery_times` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '1 Day', '1-day', '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(2, '2 Days', '2-days', '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(3, '3 Days', '3-days', '2022-02-01 11:40:29', '2022-02-01 11:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Accounting and Finance', 'accounting-and-finance', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(2, 'Customer Service or Operations', 'customer-service-or-operations', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(3, 'Engineering or Product Management', 'engineering-or-product-management', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(4, 'Human Resource Management', 'human-resource-management', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(5, 'Marketing', 'marketing', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(6, 'Production', 'production', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(7, 'Purchasing', 'purchasing', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(8, 'Research And Development', 'research-and-development', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(9, 'Sales', 'sales', NULL, '2022-02-01 11:40:24', '2022-02-01 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `disputes`
--

CREATE TABLE `disputes` (
  `id` int(10) UNSIGNED NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_type_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `admin_email`, `email_type_id`, `title`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Registration', 'New User Registered', '<p>Hi <strong>%name%!</strong> Thanks for registering at Worketic. You can now login to manage your account using the following credentials:<br /> <strong>Username:</strong> %name%<br /> <strong>Password:</strong> %password%<br /> <strong>Email:</strong> %email%<br /> %signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(2, NULL, 2, 'Verification Code', 'Verification Code Received', '<p>Hi <strong>%name%!</strong> Thanks for registering at Worketic.<br /> Here is your verification code to complete registration process<br /> <strong>Name :</strong> %name%<br /> <strong>Email :</strong> %email%<br /> <strong>Verification Code:</strong> %verification_code%<br /> %signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(3, NULL, 3, 'Lost Password', 'Forgot Password', '<p>Hi <strong>%name%!</strong> <strong>Lost Password reset</strong></p>\r\n                    <p>Someone requested to reset the password of following account:<br /> <strong>Email Address:</strong> %account_email%<br /> If this was a mistake, just ignore this email and nothing will happen.<br /> To reset your password, click reset link below:<br /> <a href=\"%link%\"><strong>Reset</strong></a></p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(4, NULL, 4, 'Account Verification', 'Account Verification', '<p>Hi <strong>%name%</strong>! <strong>Verify Your Account</strong></p>\r\n                    <p>You account has created with below given email address:</p>\r\n                    <p><strong>Email Address:</strong> %account_email%</p>\r\n                    <p>If this was a mistake, just ignore this email and nothing will happen.</p>\r\n                    <p>To verifiy your account, click below link:</p>\r\n                    <p><strong><a href=\"%link%\">Verify</a> </strong></p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(5, NULL, 5, 'Invitation', 'Invitation', '<p>Hi,</p>\r\n                    <p><strong>%username%</strong> has invited you to signup at <strong>%link%</strong>.</p>\r\n                    <p>You have invitation message given below</p>\r\n                    <p><strong>%message% </strong></p>\r\n                    <p><strong>%signature%</strong></p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(6, NULL, 6, 'Contact Form Received', 'Contact Form Received', '<p>Hi,</p>\r\n                    <p>A person has contacted you,</p>\r\n                    <p>Description of message is given below.</p>\r\n                    <p><strong>Subject :</strong> %subject%</p>\r\n                    <p><strong>Name :</strong> %name%</p>\r\n                    <p><strong>Email :</strong> %email%</p>\r\n                    <p><strong>Phone Number :</strong> %phone%</p>\r\n                    <p><strong>Message :</strong> %message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(7, 'info@yourdomain.com', 7, 'Admin Email Content - Registration', 'New Registration!', '<p>Hey!</p>\r\n                    <p>A new user <strong>\"%username%\"</strong> with email address <strong>\"%email%\"</strong> has registered on your website.<br /> Please login to check user detail.<br /> You can check user detail at: <strong>%link% </strong></p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(8, 'info@yourdomain.com', 8, 'Admin Email Content - Account Delete', 'Account Delete', '<p>Hi, An existing user has deleted account due to following</p>\r\n                    <p><strong>Reason:</strong> %reason%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(9, 'info@yourdomain.com', 9, 'Admin Email Content - Report Employer', 'Employer Reported', '<p>Hello,</p>\r\n                    <p>An employer <strong><a href=\"%link%\"> %reported_employer% </a></strong> has been reported by <strong><a href=\"%report_by_link%\">%reported_by% </a></strong></p>\r\n                    <p>Message is given below.</p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(10, 'info@yourdomain.com', 10, 'Admin Email Content - Report Project', 'Project Reported', '<p>Hello,</p>\r\n                    <p>A project <strong><a href=\"%link\">%reported_project%</a></strong> has been reported by <strong><a href=\"%report_by_link%\">%reported_by% </a></strong></p>\r\n                    <p>Message is given below.</p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(11, 'info@yourdomain.com', 11, 'Admin Email Content - Report Freelancer', 'A freelancer has been reported!', '<p>Hello,</p>\r\n                    <p>A freelancer <a href=\"%link%\"><strong>%reported_freelancer%</strong></a> has been reported by<strong> <a href=\"%report_by_link%\">%reported_by% </a></strong>&nbsp;</p>\r\n                    <p>Message is given below.</p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(12, 'info@yourdomain.com', 12, 'Admin Email Content - Job Posted', 'New Job Posted', '<p>Hello,</p>\r\n                    <p>A new job is posted by <strong><a href=\"%employer_link%\">%employer_name%</a></strong>.</p>\r\n                    <p>Click to view the job link.</p>\r\n                    <p><a href=\"%job_link%\" target=\"_blank\" rel=\"noopener\"><strong>%job_title%</strong></a></p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(13, 'info@yourdomain.com', 13, 'Admin Email Content - Job Completed', 'Job Completed', '<p>Hello,</p>\r\n                    <p>The <a href=\"%freelancer_link%\"><strong>%freelancer_name%</strong></a> has completed the following project (<strong><a href=\"%project_link%\">%project_title%</a></strong>).</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(14, NULL, 14, 'Employer Email Content - Proposal Received', 'Proposal Received', '<p>Hello <strong>%employer_name%</strong>,</p>\r\n                    <p><strong> <a href=\"%freelancer_link%\">%freelancer_name%</a></strong> has sent a new proposal on the following project <a href=\"%project_link%\"><strong>%project_title%</strong></a>. Project Information is given below.</p>\r\n                    <p><strong>Proposal Amount :</strong> %proposal_amount%</p>\r\n                    <p><strong>Project Duration :</strong> %proposal_duration%</p>\r\n                    <p><strong>Message:</strong></p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(15, NULL, 15, 'Employer Email Content - New Job Posted', 'New Job Posted', '<p>Hello,</p>\r\n                    <p>A new job is posted by you <strong><a href=\"%employer_link%\">%employer_name%</a></strong>.</p>\r\n                    <p>Click to view the job link. <strong><a href=\"%job_link%\" target=\"_blank\" rel=\"noopener\">%job_title%</a></strong>&nbsp;</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(16, NULL, 16, 'Employer Email Content - Proposal Message', 'Proposal Message', '<p>Hello <strong><a href=\"%employer_link%\">%employer_name%</a></strong>,</p>\r\n                    <p>The <a href=\"%freelancer_link%\"><strong>%freelancer_name%</strong></a> have submitted the proposal message on this job <strong><a href=\"%project_link%\">%project_title%</a></strong>.</p>\r\n                    <p>Login to view your proposal message.</p>\r\n                    <p><strong>Message: </strong></p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(17, NULL, 17, 'Employer Email Content - Package Purchased', 'Package Purchased', '<p>Hello <a href=\"%employer_link%\"><strong>%employer_name%</strong></a>,</p>\r\n                    <p>You have subscribed to the following</p>\r\n                    <p><strong>%package_name%</strong> package at cost of <strong>%package_price%</strong> which will be expired on <strong>%package_expiry%</strong>.</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(18, NULL, 18, 'Freelancer Email Content - New Proposal Submitted', 'New Proposal Submitted', '<p>Hello <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>,</p>\r\n                    <p>You have submitted the proposal against this job <strong><a href=\"%project_link%\">%project_title%</a></strong>. With the following details.</p>\r\n                    <p><strong>Project Proposal Amount :</strong> %proposal_amount%</p>\r\n                    <p><strong>Project Duration :</strong> %proposal_duration%</p>\r\n                    <p><strong>Message:</strong> %message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(19, NULL, 19, 'Freelancer Email Content - Hire Freelancer', 'Congratulation You are hired!', '<p>Hello <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>,</p>\r\n                    <p>The <strong><a href=\"%employer_link%\">%employer_name%</a></strong> hired you for the following job <strong><a href=\"%project_link%\">%project_title%</a></strong>.</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(20, NULL, 20, 'Freelancer Email Content - Send Offer', 'Offer Received', '<p>Hi <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>,</p>\r\n                    <p>The <a href=\"%employer_link%\"><strong>%employer_name%</strong></a> would like to invite you to consider working on the following project&nbsp;&nbsp;</p>\r\n                    <p><strong>Project Name :</strong> <strong><a href=\"%project_link%\">%project_title%</a> </strong></p>\r\n                    <p><strong>Message:</strong></p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(21, NULL, 21, 'Freelancer Email Content - Cancel Job', 'Job Cancelled', '<p>Hello <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>,</p>\r\n                    <p>Unfortunately <strong><a href=\"%employer_link%\">%employer_name%</a></strong> cancelled the <strong><a href=\"%project_link%\">%project_title%</a></strong> due to following reasons.</p>\r\n                    <p>Job Cancel Reasons Below.</p>\r\n                    <p><strong>Message:</strong></p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(22, NULL, 22, 'Freelancer Email Content - Proposal Message', 'Proposal Message', '<p>Hello <strong><a href=\"%employer_link%\">%employer_name%</a></strong>,</p>\r\n                    <p>The <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>&nbsp;has submitted the proposal message on this job <strong><a href=\"%project_link%\">%project_title%</a></strong>.</p>\r\n                    <p>Login to view your proposal message.</p>\r\n                    <p><strong>Message:</strong></p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(23, NULL, 23, 'Freelancer Email Content - Package Subscribed', 'Package Purchased', '<p>Hello <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>,</p>\r\n                    <p>You have subscribed to the following <strong>%package_name%</strong> package at cost of <strong>%package_price%</strong> which will be expired on <strong>%package_expiry%</strong>.</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(24, NULL, 24, 'Freelancer Email Content - Job Completed', 'Job Completed', '<p>Hello <strong><a href=\"%freelancer_link%\">%freelancer_name%</a></strong>,</p>\r\n                    <p>The <strong><a href=\"%employer_link%\">%employer_name%</a></strong>&nbsp;has confirmed that the following project (<a href=\"%project_link%\">\"<strong>%project_title%</strong>\"</a>) is completed.</p>\r\n                    <p>You have received the following ratings from employer.</p>\r\n                    <p><strong>Message: </strong></p>\r\n                    <p>%message%</p>\r\n                    <p><strong>Ratings:</strong> %rating%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(25, 'info@yourdomain.com', 25, 'Admin Email Content - Dispute Raised', 'A dispute has been rasied', '<p>Hello,</p>\r\n                    <p>A dispute has been raised by freelancer <strong><a href=\"%freelancer_link%\"> %freelancer_name% </a></strong> against <a href=\"%project_link%\">\"<strong>%project_title%</strong>\"</a>&nbsp;.</p>\r\n                    <p><strong>Reason:</strong> \"%reason%\"</p>\r\n                    <p>Message is given below.</p>\r\n                    <p>%message%</p>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(26, NULL, 26, 'Password Reset', 'Password Reset', '<p>Hello <strong>%name%</strong>,</p>\r\n                    <p>You password has been reset successfully.</p>\r\n                    <p>You can login to your account with new credentials</p>\r\n                    <p><strong>Email: </strong>%email%</p>\r\n                    <p><strong>Password: </strong>%password%</p><br>\r\n                    <p>%signature%</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(27, 'info@yourdomain.com', 27, 'Admin Email Content - Job Cancelled', 'Job Cancelled', '  <p>Hello,</p>\r\n                                    <p>An Employer <a href=\"%employer_link%\">%employer_name%</a> has cancelled his ongoing project <a href=\"%project_link%\">%project_title%</a> assigned to <a href=\"%freelancer_link%\"> %freelancer_name% </a></p>\r\n                                    <p>Job Cancel Reason is given below.</p>\r\n                                    <p>%message%</p>\r\n                                    <p>%signature%,</p>', '2022-02-01 11:40:24', '2022-02-01 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `email_types`
--

CREATE TABLE `email_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email_type` enum('new_user','verification_code','lost_password','account_verification','invitation','contact_form_received','admin_email_registration','admin_email_delete_account','admin_email_report_employer','admin_email_report_project','admin_email_report_freelancer','admin_email_new_job_posted','admin_email_job_completed','employer_email_proposal_received','employer_email_new_job_posted','employer_email_proposal_message','employer_email_package_subscribed','freelancer_email_new_proposal_submitted','freelancer_email_hire_freelancer','freelancer_email_send_offer','freelancer_email_cancel_job','freelancer_email_proposal_message','freelancer_email_package_subscribed','freelancer_email_job_completed','admin_email_dispute_raised','reset_password_email','admin_email_cancel_job') COLLATE utf8mb4_unicode_ci NOT NULL,
  `variables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_types`
--

INSERT INTO `email_types` (`id`, `role_id`, `email_type`, `variables`, `created_at`, `updated_at`) VALUES
(1, NULL, 'new_user', 'a:6:{i:0;a:2:{s:3:\"key\";s:4:\"name\";s:5:\"value\";s:6:\"%name%\";}i:1;a:2:{s:3:\"key\";s:5:\"email\";s:5:\"value\";s:7:\"%email%\";}i:2;a:2:{s:3:\"key\";s:8:\"username\";s:5:\"value\";s:10:\"%username%\";}i:3;a:2:{s:3:\"key\";s:8:\"password\";s:5:\"value\";s:10:\"%password%\";}i:4;a:2:{s:3:\"key\";s:17:\"verification_code\";s:5:\"value\";s:19:\"%verification_code%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(2, NULL, 'verification_code', 'a:4:{i:0;a:2:{s:3:\"key\";s:4:\"name\";s:5:\"value\";s:6:\"%name%\";}i:1;a:2:{s:3:\"key\";s:5:\"email\";s:5:\"value\";s:7:\"%email%\";}i:2;a:2:{s:3:\"key\";s:17:\"verification_code\";s:5:\"value\";s:19:\"%verification_code%\";}i:3;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(3, NULL, 'lost_password', 'a:3:{i:0;a:2:{s:3:\"key\";s:4:\"name\";s:5:\"value\";s:6:\"%name%\";}i:1;a:2:{s:3:\"key\";s:4:\"link\";s:5:\"value\";s:6:\"%link%\";}i:2;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(4, NULL, 'account_verification', 'a:3:{i:0;a:2:{s:3:\"key\";s:4:\"name\";s:5:\"value\";s:6:\"%name%\";}i:1;a:2:{s:3:\"key\";s:4:\"link\";s:5:\"value\";s:6:\"%link%\";}i:2;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(5, NULL, 'invitation', 'a:4:{i:0;a:2:{s:3:\"key\";s:8:\"username\";s:5:\"value\";s:10:\"%username%\";}i:1;a:2:{s:3:\"key\";s:4:\"link\";s:5:\"value\";s:6:\"%link%\";}i:2;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:3;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(6, NULL, 'contact_form_received', 'a:6:{i:0;a:2:{s:3:\"key\";s:7:\"subject\";s:5:\"value\";s:9:\"%subject%\";}i:1;a:2:{s:3:\"key\";s:4:\"name\";s:5:\"value\";s:6:\"%name%\";}i:2;a:2:{s:3:\"key\";s:5:\"email\";s:5:\"value\";s:7:\"%email%\";}i:3;a:2:{s:3:\"key\";s:5:\"phone\";s:5:\"value\";s:7:\"%phone%\";}i:4;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(7, 1, 'admin_email_registration', 'a:4:{i:0;a:2:{s:3:\"key\";s:8:\"username\";s:5:\"value\";s:10:\"%username%\";}i:1;a:2:{s:3:\"key\";s:4:\"link\";s:5:\"value\";s:6:\"%link%\";}i:2;a:2:{s:3:\"key\";s:5:\"email\";s:5:\"value\";s:7:\"%email%\";}i:3;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(8, 1, 'admin_email_delete_account', 'a:5:{i:0;a:2:{s:3:\"key\";s:6:\"reason\";s:5:\"value\";s:8:\"%reason%\";}i:1;a:2:{s:3:\"key\";s:8:\"username\";s:5:\"value\";s:10:\"%username%\";}i:2;a:2:{s:3:\"key\";s:5:\"email\";s:5:\"value\";s:7:\"%email%\";}i:3;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:4;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(9, 1, 'admin_email_report_employer', 'a:6:{i:0;a:2:{s:3:\"key\";s:17:\"reported_employer\";s:5:\"value\";s:19:\"%reported_employer%\";}i:1;a:2:{s:3:\"key\";s:17:\"reported_employer\";s:5:\"value\";s:19:\"%reported_employer%\";}i:2;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:3;a:2:{s:3:\"key\";s:9:\"user_link\";s:5:\"value\";s:11:\"%user_link%\";}i:4;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(10, 1, 'admin_email_report_project', 'a:6:{i:0;a:2:{s:3:\"key\";s:16:\"reported_project\";s:5:\"value\";s:18:\"%reported_project%\";}i:1;a:2:{s:3:\"key\";s:11:\"reported_by\";s:5:\"value\";s:13:\"%reported_by%\";}i:2;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:3;a:2:{s:3:\"key\";s:9:\"user_link\";s:5:\"value\";s:11:\"%user_link%\";}i:4;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(11, 1, 'admin_email_report_freelancer', 'a:6:{i:0;a:2:{s:3:\"key\";s:19:\"reported_freelancer\";s:5:\"value\";s:21:\"%reported_freelancer%\";}i:1;a:2:{s:3:\"key\";s:11:\"reported_by\";s:5:\"value\";s:13:\"%reported_by%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:3;a:2:{s:3:\"key\";s:9:\"user_link\";s:5:\"value\";s:11:\"%user_link%\";}i:4;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(12, 1, 'admin_email_new_job_posted', 'a:5:{i:0;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:1;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:2;a:2:{s:3:\"key\";s:9:\"job_title\";s:5:\"value\";s:11:\"%job_title%\";}i:3;a:2:{s:3:\"key\";s:8:\"job_link\";s:5:\"value\";s:10:\"%job_link%\";}i:4;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(13, 1, 'admin_email_job_completed', 'a:5:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:4;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(14, 2, 'employer_email_proposal_received', 'a:9:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:3;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:5;a:2:{s:3:\"key\";s:15:\"proposal_amount\";s:5:\"value\";s:17:\"%proposal_amount%\";}i:6;a:2:{s:3:\"key\";s:17:\"proposal_duration\";s:5:\"value\";s:19:\"%proposal_duration%\";}i:7;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:8;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(15, 2, 'employer_email_new_job_posted', 'a:5:{i:0;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:1;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:2;a:2:{s:3:\"key\";s:9:\"job_title\";s:5:\"value\";s:11:\"%job_title%\";}i:3;a:2:{s:3:\"key\";s:8:\"job_link\";s:5:\"value\";s:10:\"%job_link%\";}i:4;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(16, 2, 'employer_email_proposal_message', 'a:8:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:6;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:7;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(17, 2, 'employer_email_package_subscribed', 'a:6:{i:0;a:2:{s:3:\"key\";s:12:\"package_name\";s:5:\"value\";s:14:\"%package_name%\";}i:1;a:2:{s:3:\"key\";s:13:\"package_price\";s:5:\"value\";s:15:\"%package_price%\";}i:2;a:2:{s:3:\"key\";s:14:\"package_expiry\";s:5:\"value\";s:16:\"%package_expiry%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(18, 3, 'freelancer_email_new_proposal_submitted', 'a:8:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:4;a:2:{s:3:\"key\";s:15:\"proposal_amount\";s:5:\"value\";s:17:\"%proposal_amount%\";}i:5;a:2:{s:3:\"key\";s:17:\"proposal_duration\";s:5:\"value\";s:19:\"%proposal_duration%\";}i:6;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:7;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(19, 3, 'freelancer_email_hire_freelancer', 'a:7:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:6;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(20, 3, 'freelancer_email_send_offer', 'a:8:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:6;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:7;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(21, 3, 'freelancer_email_cancel_job', 'a:8:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:6;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:7;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(22, 3, 'freelancer_email_proposal_message', 'a:8:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:6;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:7;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(23, 3, 'freelancer_email_package_subscribed', 'a:6:{i:0;a:2:{s:3:\"key\";s:12:\"package_name\";s:5:\"value\";s:14:\"%package_name%\";}i:1;a:2:{s:3:\"key\";s:13:\"package_price\";s:5:\"value\";s:15:\"%package_price%\";}i:2;a:2:{s:3:\"key\";s:14:\"package_expiry\";s:5:\"value\";s:16:\"%package_expiry%\";}i:3;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:4;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:5;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(24, 3, 'freelancer_email_job_completed', 'a:9:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:2;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:3;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:4;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:5;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:6;a:2:{s:3:\"key\";s:7:\"ratings\";s:5:\"value\";s:9:\"%ratings%\";}i:7;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:8;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(25, 1, 'admin_email_dispute_raised', 'a:7:{i:0;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:1;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:2;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:3;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:4;a:2:{s:3:\"key\";s:6:\"reason\";s:5:\"value\";s:8:\"%reason%\";}i:5;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:6;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(26, NULL, 'reset_password_email', 'a:3:{i:0;a:2:{s:3:\"key\";s:4:\"name\";s:5:\"value\";s:6:\"%name%\";}i:1;a:2:{s:3:\"key\";s:5:\"email\";s:5:\"value\";s:7:\"%email%\";}i:2;a:2:{s:3:\"key\";s:8:\"password\";s:5:\"value\";s:10:\"%password%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(27, NULL, 'admin_email_cancel_job', 'a:8:{i:0;a:2:{s:3:\"key\";s:13:\"employer_link\";s:5:\"value\";s:15:\"%employer_link%\";}i:1;a:2:{s:3:\"key\";s:13:\"employer_name\";s:5:\"value\";s:15:\"%employer_name%\";}i:2;a:2:{s:3:\"key\";s:12:\"project_link\";s:5:\"value\";s:14:\"%project_link%\";}i:3;a:2:{s:3:\"key\";s:13:\"project_title\";s:5:\"value\";s:15:\"%project_title%\";}i:4;a:2:{s:3:\"key\";s:15:\"freelancer_link\";s:5:\"value\";s:17:\"%freelancer_link%\";}i:5;a:2:{s:3:\"key\";s:15:\"freelancer_name\";s:5:\"value\";s:17:\"%freelancer_name%\";}i:6;a:2:{s:3:\"key\";s:7:\"message\";s:5:\"value\";s:9:\"%message%\";}i:7;a:2:{s:3:\"key\";s:9:\"signature\";s:5:\"value\";s:11:\"%signature%\";}}', '2022-02-01 11:40:24', '2022-02-01 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `follower` int(11) DEFAULT NULL,
  `following` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `payer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_tax` double NOT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_amount` double DEFAULT NULL,
  `handling_amount` double DEFAULT NULL,
  `insurance_amount` double DEFAULT NULL,
  `paypal_fee` double NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `type` enum('trial','package','project') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transection_doc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `title`, `price`, `payer_name`, `payer_email`, `seller_email`, `currency_code`, `payer_status`, `transaction_id`, `sales_tax`, `invoice_id`, `customer_id`, `shipping_amount`, `handling_amount`, `insurance_amount`, `paypal_fee`, `payment_mode`, `paid`, `type`, `created_at`, `updated_at`, `detail`, `transection_doc`) VALUES
(1, 'Invoice No. 1', 0, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'trial', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(2, 'Invoice No. 2', 90, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'package', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(3, 'Invoice No. 3', 120, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'package', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(4, 'Invoice No. 4', 180, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'package', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(5, 'Invoice No. 5', 60, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'package', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(6, 'Invoice No. 6', 90, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'package', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(7, 'Invoice No. 7', 120, 'Test Payer', 'payer@gmail.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'package', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL),
(8, 'Invoice No. xxx-xx', 8000, 'Cooper White', 'white@amentotech.com', 'seller@gmail.com', 'USD', 'unverified', 'xxxx_xxxx_xxxx', 0, 'xxx_xxx', NULL, 0, 0, 0, 0, 'paypal', 1, 'project', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `subscriber` int(11) NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` double NOT NULL,
  `item_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `invoice_id`, `product_id`, `subscriber`, `item_name`, `item_price`, `item_qty`, `created_at`, `updated_at`, `type`) VALUES
(1, 1, 1, 2, 'Trial Employer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(2, 1, 1, 3, 'Trial Employer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(3, 2, 6, 4, 'Platinum', 90, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(4, 8, 3, 4, 'Web Content Developer', 8000, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(5, 3, 7, 5, 'Silver', 120, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(6, 4, 8, 6, 'Gold', 180, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(7, 1, 1, 7, 'Trial Employer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(8, 2, 6, 8, 'Platinum', 90, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(9, 3, 7, 9, 'Silver', 120, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(10, 4, 8, 10, 'Gold', 180, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(11, 1, 1, 11, 'Trial Employer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(12, 2, 6, 12, 'Platinum', 90, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(13, 1, 2, 13, 'Trial Freelancer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(14, 5, 3, 14, 'Basic', 60, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(15, 6, 4, 15, 'Plus Members', 90, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(16, 7, 5, 16, 'Pro Members', 120, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(17, 1, 2, 17, 'Trial Freelancer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(18, 5, 3, 18, 'Basic', 60, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(19, 6, 4, 19, 'Plus Members', 90, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(20, 7, 5, 20, 'Pro Members', 120, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(21, 1, 2, 21, 'Trial Freelancer', 0, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(22, 5, 3, 22, 'Basic', 60, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(23, 6, 4, 23, 'Plus Members', 90, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(24, 7, 5, 24, 'Pro Members', 120, 1, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `i_p_n_statuses`
--

CREATE TABLE `i_p_n_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('posted','hired','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'posted',
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_level` enum('basic','medium','expensive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelancer_type` enum('pro_independent','pro_agency','independent','agency','rising_talent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_level` enum('basic','conversational','fluent','native','professional') COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_type` enum('hourly','fixed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `slug`, `status`, `duration`, `project_level`, `freelancer_type`, `english_level`, `project_type`, `price`, `description`, `location_id`, `address`, `longitude`, `latitude`, `is_featured`, `show_attachments`, `attachments`, `code`, `created_at`, `updated_at`, `expiry_date`) VALUES
(1, 2, 'Internet Developer', 'internet-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 786, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 1, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(2, 3, 'Intranet Developer', 'intranet-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 96, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 2, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(3, 4, 'Web Content Developer', 'web-content-developers', 'hired', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 8500, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 3, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(4, 5, 'Wildlife Conservation Professor', 'wildlife-conservation-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 780, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 4, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(5, 6, 'Forest Biometrics Professor', 'forest-biometrics-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 74, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 5, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(6, 7, 'Forest Ecology Professor', 'forest-ecology-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 1000, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 6, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(7, 8, 'Forest Management Professor', 'forest-management-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 150, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 7, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(8, 9, 'Forest Pathology Professor', 'forest-pathology-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 2000, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(9, 10, 'Forest Resources Professor', 'forest-resources-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 2050, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(10, 11, 'Forest Technology Professor', 'forest-technology-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 1120, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 1, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(11, 12, 'Silviculture Professor', 'silviculture-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 7850, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 2, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(12, 2, 'Timber Management Professor', 'timber-management-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 700, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 3, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(13, 2, 'Computer Programming Professor', 'computer-programming-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 500, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 4, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(14, 3, 'Information Systems Professor', 'information-systems-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 99, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 5, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL);
INSERT INTO `jobs` (`id`, `user_id`, `title`, `slug`, `status`, `duration`, `project_level`, `freelancer_type`, `english_level`, `project_type`, `price`, `description`, `location_id`, `address`, `longitude`, `latitude`, `is_featured`, `show_attachments`, `attachments`, `code`, `created_at`, `updated_at`, `expiry_date`) VALUES
(15, 4, 'Information Technology Professor', 'information-technology-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 193, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 6, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(16, 5, 'IT Professor', 'it-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 450, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 7, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(17, 5, 'Java Programming Professor', 'java-programming-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 743, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(18, 6, 'Ecology Professor', 'ecology-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 950, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(19, 7, 'Environmental Conservation Professor', 'environmental-conservation-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 750, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 1, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(20, 8, 'C++ Professor', 'c-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 800, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 2, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(21, 9, 'Visual Designer', 'visual-designer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 900, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 3, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(22, 10, 'Graphic Designer', 'graphic-designer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 500, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 4, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(23, 11, 'Graphic Artist', 'graphic-artist', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 400, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 5, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(24, 11, 'Catalogue Illustrator', 'catalogue-illustrator', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 900, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 6, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(25, 12, 'Software Applications Designer', 'software-applications-designer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 760, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 7, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(26, 1, 'Software Applications Architect', 'software-applications-architect', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 980, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(27, 2, 'Computer Information Systems Professor', 'computer-information-systems-professor', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 1145, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(28, 3, 'Mainframe Programmer', 'mainframe-programmer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 750, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 1, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL);
INSERT INTO `jobs` (`id`, `user_id`, `title`, `slug`, `status`, `duration`, `project_level`, `freelancer_type`, `english_level`, `project_type`, `price`, `description`, `location_id`, `address`, `longitude`, `latitude`, `is_featured`, `show_attachments`, `attachments`, `code`, `created_at`, `updated_at`, `expiry_date`) VALUES
(29, 4, 'Systems Programmer', 'systems-programmer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 850, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 2, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(30, 5, 'Application Integration Engineer', 'application-integration-engineer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 950, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 3, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(31, 6, 'Applications Developer', 'applications-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 100, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 4, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(32, 8, 'Computer Applications Developer', 'computer-applications-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 746, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 5, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(33, 9, 'Computer Applications Engineer', 'computer-applications-engineer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 147, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 6, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(34, 10, 'Database Developer', 'database-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 965, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 7, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(35, 11, 'Software Application Designer', 'software-application-designer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 784, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(36, 12, 'Web Content Developer', 'web-content-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 1200, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(37, 1, 'Web Designer', 'web-designer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 1500, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 1, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(38, 2, 'Web Developer', 'web-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 2000, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 2, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(39, 3, 'Applications Programmer', 'applications-programmer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'hourly', 15, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 3, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(40, 4, 'Computer Language Coder', 'computer-language-coder', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'hourly', 10, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 4, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(41, 5, 'Computer Programmer', 'computer-programmer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'hourly', 100, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 5, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(42, 6, 'Junior Software Developer', 'junior-software-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'hourly', 50, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 6, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL);
INSERT INTO `jobs` (`id`, `user_id`, `title`, `slug`, `status`, `duration`, `project_level`, `freelancer_type`, `english_level`, `project_type`, `price`, `description`, `location_id`, `address`, `longitude`, `latitude`, `is_featured`, `show_attachments`, `attachments`, `code`, `created_at`, `updated_at`, `expiry_date`) VALUES
(43, 7, 'Intranet Developer', 'intranet-developers', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'hourly', 90, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 7, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(44, 8, 'Internet Developer', 'internet-developers', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'hourly', 80, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL),
(45, 9, 'Internet Application Developer', 'internet-application-developer', 'posted', 'weekly', 'basic', 'pro_independent', 'basic', 'fixed', 10, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>qui dolorem ipsum quia dolor sit amet</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>\r\n                    <p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>\r\n                    <ul class=\"wt-projectliststyle\">\r\n                    <li>Adipisci velit, sed quia non numquam eius modi tempora</li>\r\n                    <li>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>\r\n                    <li>Qui dolorem ipsum quia dolor sit amet</li>\r\n                    <li>Nemo enim ipsam voluptatem quia</li>\r\n                    </ul>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>  ', 8, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'true', 'true', 'a:3:{i:0;s:39:\"1554458958-demo-import-in-WordPress.zip\";i:1;s:52:\"1554458958-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1554458958-WordPress-customization.pdf\";}', 'A1UDS262', '2022-02-01 11:40:26', '2022-02-01 11:40:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_skill`
--

CREATE TABLE `job_skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_skill`
--

INSERT INTO `job_skill` (`id`, `job_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(2, 1, 11, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(3, 1, 12, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(4, 2, 15, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(5, 2, 12, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(6, 3, 5, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(7, 3, 12, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(8, 4, 11, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(9, 5, 11, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(10, 6, 3, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(11, 7, 4, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(12, 8, 5, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(13, 9, 12, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(14, 10, 12, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(15, 11, 10, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(16, 12, 1, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(17, 13, 13, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(18, 14, 6, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(19, 15, 4, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(20, 16, 3, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(21, 17, 5, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(22, 18, 6, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(23, 19, 7, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(24, 20, 8, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(25, 21, 9, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(26, 22, 10, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(27, 23, 11, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(28, 24, 12, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(29, 10, 13, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(30, 11, 15, '2022-02-01 11:40:26', '2022-02-01 11:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `langables`
--

CREATE TABLE `langables` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `langable_id` int(11) NOT NULL,
  `langable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langables`
--

INSERT INTO `langables` (`id`, `language_id`, `langable_id`, `langable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(2, 2, 2, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(3, 3, 3, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(4, 4, 3, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(5, 5, 4, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(6, 6, 4, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(7, 7, 5, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(8, 8, 6, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(9, 9, 6, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(10, 10, 7, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(11, 11, 8, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(12, 12, 9, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(13, 13, 10, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(14, 14, 11, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(15, 15, 12, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(16, 16, 13, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(17, 17, 14, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(18, 18, 15, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(19, 19, 16, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(20, 20, 17, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(21, 21, 18, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(22, 22, 18, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(23, 23, 19, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(24, 24, 20, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(25, 23, 21, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(26, 24, 22, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(27, 23, 23, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(28, 24, 24, 'App\\User', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(29, 10, 1, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(30, 11, 2, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(31, 12, 3, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(32, 16, 4, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(33, 17, 5, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(34, 15, 6, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(35, 11, 7, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(36, 17, 8, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(37, 23, 9, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(38, 24, 10, 'App\\Job', '2022-02-01 11:40:26', '2022-02-01 11:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Abkhazian', 'ab', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(2, 'Afar', 'aa', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(3, 'Arabic', 'arabic', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(4, 'Afrikaans', 'af', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(5, 'Akan', 'ak', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(6, 'Bambara', 'bm', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(7, 'Bengali', 'bn', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(8, 'Bulgarian', 'bg', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(9, 'Chamorro', 'ch', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(10, 'Chinese', 'zh', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(11, 'Danish', 'da', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(12, 'Dzongkha', 'dz', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(13, 'English', 'en', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(14, 'Esperanto', 'eo', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(15, 'Faroese', 'fo', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(16, 'Fulah', 'ff', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(17, 'Galician', 'gl', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(18, 'Hausa', 'ha', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(19, 'Hindi', 'hi', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(20, 'Irish', 'ga', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(21, 'Indonesian', 'id', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(22, 'Japanese', 'ja', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(23, 'Kannada', 'kn', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(24, 'Kanuri', 'kr', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `title`, `slug`, `parent`, `flag`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 'australia', 0, 'aus.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(2, 'Canada', 'canada', 0, 'can.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(3, 'England', 'england', 0, 'eng.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(4, 'India', 'india', 0, 'in.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(5, 'Turkey', 'turkey', 0, 'tu.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(6, 'United Emirates', 'united-emirates', 0, 'ue.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(7, 'United Kingdom', 'united-kingdom', 0, 'uk.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(8, 'United States', 'united-states', 0, 'us.png', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `receiver_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `receiver_id`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 21, 'Donec placerat, massa eu tincidunt volutpat.', 1, '2022-02-01 11:40:28', '2022-02-01 11:40:28'),
(2, 21, 4, 'Donec placerat, massa eu tincidunt volutpat, lectus nibh commodo nisl, quis fermentum neque quam et erat. In vel dictum dui. In hac habitasse platea dictumst. Suspendisse vel libero libero.', 1, '2022-02-01 11:40:28', '2022-02-01 11:40:28'),
(3, 4, 21, 'Donec placerat, massa eu tincidunt volutpat, lectus nibh commodo nisl, quis fermentum neque quam et erat. In vel dictum dui. In hac habitasse platea dictumst. Suspendisse vel libero libero.Donec placerat, massa eu tincidunt volutpat, lectus nibh commodo nisl, quis fermentum neque quam et erat. In vel dictum dui. In hac habitasse platea dictumst. Suspendisse vel libero libero.', 1, '2022-02-01 11:40:28', '2022-02-01 11:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `meta_key`, `meta_value`, `metable_type`, `metable_id`, `created_at`, `updated_at`) VALUES
(1, 'content0', 'a:4:{s:11:\"description\";s:1477:\"<div class=\'wt-greetingcontent\'>\r\n        <div class=\'wt-sectionhead\'>\r\n        <div class=\'wt-sectiontitle\'>\r\n        <h2>Greetings &amp; Welcome</h2>\r\n        <span>Start Today For a Great Future</span></div>\r\n        <div class=\'wt-description\'>\r\n        <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce anim id est laborumed.</p>\r\n        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborumed perspiciatis unde omnis isteatus error aluptatem accusantium doloremque laudantium.</p>\r\n        </div>\r\n        </div>\r\n        <div id=\'wt-statistics\' class=\'wt-statistics\'>\r\n        <div class=\'wt-statisticcontent wt-countercolor1\'>\r\n        <h3 data-from=\'0\' data-to=\'1500\' data-speed=\'8000\' data-refresh-interval=\'50\'>1,500</h3>\r\n        <em>k</em>\r\n        <h4>Active Projects</h4>\r\n        </div>\r\n        <div class=\'wt-statisticcontent wt-countercolor2\'>\r\n        <h3 data-from=\'0\' data-to=\'99\' data-speed=\'8000\' data-refresh-interval=\'5.9\'>99</h3>\r\n        <em>%</em>\r\n        <h4>Great Feedback</h4>\r\n        </div>\r\n        <div class=\'wt-statisticcontent wt-countercolor3\'>\r\n        <h3 data-from=\'0\' data-to=\'5000\' data-speed=\'8000\' data-refresh-interval=\'100\'>5,000</h3>\r\n        <em>k</em>\r\n        <h4>Active Freelancers</h4>\r\n        </div>\r\n        </div>\r\n        </div>\";s:12:\"sectionColor\";s:7:\"#f7f7f7\";s:2:\"id\";i:4;s:11:\"parentIndex\";i:0;}', 'App\\Page', 2, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(2, 'title', '1', 'App\\Page', 2, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(3, 'cat1', 'a:6:{s:5:\"title\";s:18:\"Explore Categories\";s:8:\"subtitle\";s:26:\"Professional by categories\";s:11:\"description\";s:135:\"<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget leo rutrum, ullamcorper dolor eu, faucibus massa.</span></p>\";s:2:\"id\";i:2;s:11:\"parentIndex\";i:1;s:12:\"sectionColor\";s:7:\"#ffffff\";}', 'App\\Page', 5, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(4, 'welcome_sections3', 'a:11:{s:18:\"welcome_background\";s:32:\"1579153406-1557484284-banner.jpg\";s:11:\"first_title\";s:16:\"Start As Company\";s:9:\"first_url\";s:1:\"#\";s:16:\"first_url_button\";s:8:\"JOIN NOW\";s:17:\"first_description\";s:172:\"Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.\";s:12:\"second_title\";s:19:\"Start As Freelancer\";s:10:\"second_url\";s:1:\"#\";s:17:\"second_url_button\";s:8:\"JOIN NOW\";s:18:\"second_description\";s:172:\"Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.\";s:2:\"id\";i:4;s:11:\"parentIndex\";i:3;}', 'App\\Page', 5, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(5, 'sliders0', 'a:17:{s:5:\"style\";s:6:\"style1\";s:12:\"slider_image\";a:1:{i:0;s:14:\"banner-img.jpg\";}s:18:\"inner_banner_image\";s:26:\"1579153511-img-01inner.png\";s:16:\"floating_image01\";s:21:\"1579153511-img-02.png\";s:16:\"floating_image02\";s:21:\"1579153511-img-03.png\";s:5:\"title\";s:23:\"Hire expert freelancers\";s:8:\"subtitle\";s:19:\"for any job, Online\";s:11:\"description\";s:108:\"<p>Consectetur adipisicing elit sed dotem eiusmod tempor incuntes ut labore etdolore maigna aliqua enim.</p>\";s:10:\"video_link\";s:43:\"https://www.youtube.com/watch?v=J37W6DjqT3Q\";s:11:\"video_title\";s:17:\"See For Yourself!\";s:17:\"video_description\";s:43:\"How it works & experience the ultimate joy.\";s:2:\"id\";i:1;s:11:\"parentIndex\";i:0;s:10:\"titleColor\";s:7:\"#ffffff\";s:13:\"subtitleColor\";s:7:\"#ffffff\";s:12:\"taglineColor\";s:7:\"#ffffff\";s:12:\"sectionColor\";s:7:\"#d1d1d1\";}', 'App\\Page', 5, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(6, 'app_section4', 'a:13:{s:5:\"title\";s:20:\"Limitless Experience\";s:8:\"subtitle\";s:30:\"Roam Around With Your Business\";s:11:\"description\";s:460:\"<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce.</p>\r\n    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget leo rutrum, ullamcorper dolor eu, faucibus massa. Etiam placerat mattis pellentesque. Mauris eu mollis arcu. Nullam tincidunt auctor mattis. Donec pretium porta est ut ullamcorper.&nbsp;</p>\";s:11:\"andriod_url\";s:1:\"#\";s:7:\"ios_url\";s:1:\"#\";s:5:\"style\";s:6:\"style1\";s:16:\"background_image\";s:0:\"\";s:9:\"app_image\";s:47:\"1579153406-1558518016-1557484284-mobile-img.png\";s:2:\"id\";i:5;s:11:\"parentIndex\";i:4;s:12:\"sectionColor\";s:7:\"#ffffff\";s:9:\"ios_image\";s:21:\"1590762784-img-02.png\";s:13:\"android_image\";s:21:\"1590762784-img-01.png\";}', 'App\\Page', 5, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(7, 'title', '0', 'App\\Page', 5, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(8, 'freelancers3', 'a:6:{s:5:\"title\";s:15:\"Top Freelancers\";s:8:\"subtitle\";s:24:\"Start With Great Peoples\";s:11:\"description\";s:135:\"<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget leo rutrum, ullamcorper dolor eu, faucibus massa.</span></p>\";s:2:\"id\";i:4;s:11:\"parentIndex\";i:3;s:12:\"sectionColor\";s:7:\"#ffffff\";}', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(9, 'services1', 'a:6:{s:5:\"title\";s:20:\"Explore Top Services\";s:8:\"subtitle\";s:27:\"Picked Top Serviced For You\";s:11:\"description\";s:259:\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget leo rutrum, ullamcorper dolor eu, faucibus massa. Etiam placerat mattis pellentesque. Mauris eu mollis arcu. Nullam tincidunt auctor mattis. Donec pretium porta est ut ullamcorper.&nbsp;</p>\";s:2:\"id\";i:6;s:11:\"parentIndex\";i:1;s:12:\"sectionColor\";s:7:\"#ffffff\";}', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(10, 'work_tabs2', 'a:15:{s:16:\"background_image\";s:21:\"1579165004-img-05.jpg\";s:14:\"first_tab_icon\";s:21:\"1579165004-img-01.png\";s:15:\"second_tab_icon\";s:21:\"1579165004-img-02.png\";s:14:\"third_tab_icon\";s:21:\"1579165004-img-03.png\";s:5:\"title\";s:12:\"How It Works\";s:8:\"subtitle\";s:15:\"We Made It Easy\";s:11:\"description\";s:163:\"<p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>\";s:15:\"first_tab_title\";s:12:\"Professional\";s:18:\"first_tab_subtitle\";s:18:\"Search Best Online\";s:16:\"second_tab_title\";s:11:\"Appointment\";s:19:\"second_tab_subtitle\";s:11:\"Get Instant\";s:15:\"third_tab_title\";s:8:\"Feedback\";s:18:\"third_tab_subtitle\";s:10:\"Leave Your\";s:2:\"id\";i:3;s:11:\"parentIndex\";i:2;}', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(11, 'sliders0', 'a:14:{s:5:\"style\";s:6:\"style2\";s:12:\"slider_image\";a:4:{i:0;s:21:\"1579164321-img-01.jpg\";i:1;s:21:\"1579164321-img-02.jpg\";i:2;s:21:\"1579164321-img-03.jpg\";i:3;s:21:\"1579164321-img-04.jpg\";}s:5:\"title\";s:23:\"Hire expert freelancers\";s:8:\"subtitle\";s:19:\"for any job, Online\";s:11:\"description\";s:160:\"<p>Consectetur adipisicing elition sed dotem eiusmod tempor incuntes ut labore etdolore maigna aliqua enim adion minim veniam quistan neostrud exercitation.</p>\";s:10:\"video_link\";s:28:\"https://youtu.be/B-ph2g5o2K4\";s:11:\"video_title\";s:17:\"See For Yourself!\";s:17:\"video_description\";s:43:\"How it works & experience the ultimate joy.\";s:2:\"id\";i:1;s:11:\"parentIndex\";i:0;s:10:\"titleColor\";s:7:\"#ffffff\";s:13:\"subtitleColor\";s:7:\"#ffffff\";s:12:\"taglineColor\";s:7:\"#ffffff\";s:12:\"sectionColor\";s:7:\"#afafaf\";}', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(12, 'app_section4', 'a:13:{s:5:\"title\";s:19:\"Introducing All New\";s:8:\"subtitle\";s:21:\"Our Native Mobile App\";s:11:\"description\";s:163:\"<p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>\";s:11:\"andriod_url\";s:1:\"#\";s:7:\"ios_url\";s:1:\"#\";s:5:\"style\";s:6:\"style2\";s:16:\"background_image\";s:21:\"1579165080-img-06.jpg\";s:9:\"app_image\";s:21:\"1579165080-img-05.png\";s:2:\"id\";i:5;s:11:\"parentIndex\";i:4;s:12:\"sectionColor\";s:7:\"#ffffff\";s:9:\"ios_image\";s:21:\"1590762784-img-02.png\";s:13:\"android_image\";s:21:\"1590762784-img-01.png\";}', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(13, 'articles5', 'a:6:{s:5:\"title\";s:15:\"Latest Articles\";s:8:\"subtitle\";s:26:\"Stay Updated With Our News\";s:11:\"description\";s:164:\" <p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>\";s:2:\"id\";i:10;s:11:\"parentIndex\";i:5;s:12:\"sectionColor\";s:7:\"#ffffff\";}', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(14, 'title', '0', 'App\\Page', 6, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(15, 'freelancers3', 'a:6:{s:5:\"title\";s:15:\"Top Freelancers\";s:8:\"subtitle\";s:24:\"Start With Great Peoples\";s:11:\"description\";s:135:\"<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget leo rutrum, ullamcorper dolor eu, faucibus massa.</span></p>\";s:2:\"id\";i:4;s:11:\"parentIndex\";i:2;s:12:\"sectionColor\";s:7:\"#ffffff\";}', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(16, 'services1', 'a:6:{s:5:\"title\";s:20:\"Explore Top Services\";s:8:\"subtitle\";s:27:\"Picked Top Serviced For You\";s:11:\"description\";s:259:\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget leo rutrum, ullamcorper dolor eu, faucibus massa. Etiam placerat mattis pellentesque. Mauris eu mollis arcu. Nullam tincidunt auctor mattis. Donec pretium porta est ut ullamcorper.&nbsp;</p>\";s:2:\"id\";i:5;s:11:\"parentIndex\";i:1;s:12:\"sectionColor\";s:7:\"#f7f7f7\";}', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(17, 'work_videos2', 'a:8:{s:5:\"title\";s:13:\" How It Works\";s:8:\"subtitle\";s:15:\"We Made It Easy\";s:11:\"description\";s:163:\"<p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>\";s:2:\"id\";i:3;s:11:\"parentIndex\";i:3;s:5:\"video\";s:28:\"https://youtu.be/B-ph2g5o2K4\";s:12:\"video_poster\";s:21:\"1579689887-img-01.png\";s:12:\"sectionColor\";s:7:\"#f7f7f7\";}', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(18, 'sliders0', 'a:16:{s:5:\"style\";s:6:\"style3\";s:12:\"slider_image\";a:2:{i:0;s:21:\"1579166079-img-04.jpg\";i:1;s:21:\"1579166079-img-05.jpg\";}s:5:\"title\";s:23:\"Buy expert’s Services\";s:8:\"subtitle\";s:19:\"for any job, Online\";s:11:\"description\";s:160:\"<p>Consectetur adipisicing elition sed dotem eiusmod tempor incuntes ut labore etdolore maigna aliqua enim adion minim veniam quistan neostrud exercitation.</p>\";s:10:\"video_link\";s:28:\"https://youtu.be/B-ph2g5o2K4\";s:11:\"video_title\";s:17:\"See For Yourself!\";s:17:\"video_description\";s:43:\"How it works & experience the ultimate joy.\";s:2:\"id\";i:1;s:11:\"parentIndex\";i:0;s:10:\"titleColor\";s:7:\"#ff5851\";s:13:\"subtitleColor\";s:7:\"#323232\";s:12:\"taglineColor\";s:7:\"#000000\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:16:\"floating_image01\";s:32:\"1590064417-1579166079-img-05.png\";s:16:\"floating_image02\";s:21:\"1590064417-img-06.png\";}', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(19, 'app_section4', 'a:13:{s:5:\"title\";s:19:\"Introducing All New\";s:8:\"subtitle\";s:21:\"Our Native Mobile App\";s:11:\"description\";s:163:\"<p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>\";s:11:\"andriod_url\";s:1:\"#\";s:7:\"ios_url\";s:1:\"#\";s:5:\"style\";s:6:\"style2\";s:16:\"background_image\";s:21:\"1579591173-img-06.jpg\";s:9:\"app_image\";s:32:\"1579520549-1579165080-img-05.png\";s:2:\"id\";i:7;s:11:\"parentIndex\";i:4;s:12:\"sectionColor\";s:7:\"#ffffff\";s:9:\"ios_image\";s:21:\"1590762784-img-02.png\";s:13:\"android_image\";s:21:\"1590762784-img-01.png\";}', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(20, 'articles5', 'a:6:{s:5:\"title\";s:15:\"Latest Articles\";s:8:\"subtitle\";s:26:\"Stay Updated With Our News\";s:11:\"description\";s:164:\" <p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>\";s:2:\"id\";i:6;s:11:\"parentIndex\";i:5;s:12:\"sectionColor\";s:7:\"#ffffff\";}', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(21, 'title', '0', 'App\\Page', 7, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(22, 'app_section3', 'a:21:{s:5:\"title\";s:8:\"Download\";s:8:\"titleTwo\";s:18:\"Mobile Application\";s:8:\"subtitle\";s:22:\"Double Your Experience\";s:11:\"description\";s:698:\"<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore ete dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><ul class=\"wt-mobapp-listing\"><li><span>Duis aute irure dolor in reprehenderit</span></li><li><span>Voluptate velit esse cillum dolore</span></li><li><span>Fugiat nulla pariatur. Excepteur sint occaecat</span></li><li><span>Cupidatat non proident sunt in culpa</span></li><li><span>Qui officia deserunt mollit anim</span></li></ul><div class=\"wt-description\"><p>Laborum ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p></div>\";s:11:\"andriod_url\";s:1:\"#\";s:7:\"ios_url\";s:1:\"#\";s:16:\"background_image\";s:21:\"1588069315-img-05.png\";s:9:\"app_image\";s:21:\"1588069315-mobile.png\";s:5:\"style\";s:6:\"style3\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#f62b84\";s:13:\"subtitleColor\";s:7:\"#3d4461\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:4;s:11:\"parentIndex\";i:3;s:9:\"ios_image\";s:21:\"1590763420-img-02.png\";s:13:\"android_image\";s:21:\"1590763420-img-01.png\";}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(23, 'categoriesSecondVersion1', 'a:16:{s:5:\"title\";s:8:\"Trending\";s:8:\"subtitle\";s:14:\"Top Categories\";s:11:\"description\";s:75:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:13:\"backgroundImg\";s:21:\"1588069315-img-04.png\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"subtitleColor\";s:7:\"#f62b84\";s:13:\"showAllBtnUrl\";s:1:\"#\";s:12:\"lastTabTitle\";s:18:\"Explore Categories\";s:11:\"lastTabDesc\";s:59:\"Consectetur adipisicing elit deius temor incididunt utnenbo\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:2;s:11:\"parentIndex\";i:1;}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(24, 'freelancersSecondVersion4', 'a:13:{s:5:\"title\";s:3:\"Top\";s:8:\"titleTwo\";s:11:\"Freelancers\";s:11:\"description\";s:83:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina ilukita\";s:13:\"backgroundImg\";s:21:\"1588069315-img-03.png\";s:12:\"sectionColor\";s:7:\"#f5f7fa\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#f62b84\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";s:3:\"108\";s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:5;s:11:\"parentIndex\";i:4;}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(25, 'jobs2', 'a:13:{s:5:\"title\";s:6:\"Latest\";s:8:\"titleTwo\";s:12:\"Jobs Opening\";s:11:\"description\";s:83:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina ilukita\";s:13:\"backgroundImg\";s:21:\"1588069316-img-02.png\";s:12:\"sectionColor\";s:7:\"#f5f7fa\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#f62b84\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";s:3:\"108\";s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:3;s:11:\"parentIndex\";i:2;}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(26, 'packages5', 'a:13:{s:5:\"title\";s:3:\"Top\";s:8:\"titleTwo\";s:8:\"Packages\";s:11:\"description\";s:83:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina ilukita\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:13:\"backgroundImg\";s:21:\"1588652284-img-04.png\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#f62b84\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:3:\"100\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";s:1:\"0\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:6;s:11:\"parentIndex\";i:5;}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(27, 'bannerFirstVersion0', 'a:17:{s:5:\"title\";s:23:\"Most Powerful Directory\";s:8:\"subtitle\";s:31:\"Available for Service Providers\";s:10:\"videoTitle\";s:17:\"See For Yourself!\";s:9:\"videoDesc\";s:43:\"How it works & experience the ultimate joy.\";s:8:\"videoUrl\";s:1:\"#\";s:13:\"backgroundImg\";s:21:\"1588069316-img-01.jpg\";s:8:\"frontImg\";s:32:\"1588069316-1587028317-img-01.png\";s:14:\"showSearchForm\";b:1;s:12:\"sectionColor\";s:7:\"#ffffff\";s:10:\"titleColor\";s:7:\"#ffffff\";s:13:\"subtitleColor\";s:7:\"#ffffff\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"96\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"96\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:1;s:11:\"parentIndex\";i:0;}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(28, 'header', 'style4', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(29, 'footer', 'style2', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(30, 'title', '0', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(31, 'app_section3', 'a:21:{s:5:\"title\";s:8:\"Download\";s:8:\"titleTwo\";s:18:\"Mobile Application\";s:8:\"subtitle\";s:22:\"Double Your Experience\";s:11:\"description\";s:664:\"<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore ete dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><ul class=\"wt-mobapp-listing\"><li><span>Duis aute irure dolor in reprehenderit</span></li><li><span>Voluptate velit esse cillum dolore</span></li><li><span>Fugiat nulla pariatur. Excepteur sint occaecat</span></li><li><span>Cupidatat non proident sunt in culpa</span></li><li><span>Qui officia deserunt mollit anim</span></li></ul><p>Laborum ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>\";s:11:\"andriod_url\";s:1:\"#\";s:7:\"ios_url\";s:1:\"#\";s:16:\"background_image\";s:21:\"1588246876-img-05.png\";s:9:\"app_image\";s:21:\"1588246876-mobile.png\";s:5:\"style\";s:6:\"style3\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#f62b84\";s:13:\"subtitleColor\";s:7:\"#3d4461\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:4;s:11:\"parentIndex\";i:3;s:9:\"ios_image\";s:21:\"1590763876-img-02.png\";s:13:\"android_image\";s:21:\"1590763876-img-01.png\";}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(32, 'freelancersSecondVersion4', 'a:13:{s:5:\"title\";s:3:\"Top\";s:8:\"titleTwo\";s:11:\"Freelancers\";s:11:\"description\";s:90:\"<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina ilukita</p>\";s:13:\"backgroundImg\";s:21:\"1588246876-img-03.png\";s:12:\"sectionColor\";s:7:\"#f5f7fa\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#9013fe\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";s:3:\"108\";s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:5;s:11:\"parentIndex\";i:4;}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(33, 'jobs2', 'a:13:{s:5:\"title\";s:6:\"Latest\";s:8:\"titleTwo\";s:12:\"Jobs Opening\";s:11:\"description\";s:83:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina ilukita\";s:13:\"backgroundImg\";s:21:\"1588246877-img-02.png\";s:12:\"sectionColor\";s:7:\"#f5f7fa\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#9013f3\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:2:\"80\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";s:3:\"108\";s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:3;s:11:\"parentIndex\";i:2;}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(34, 'packages5', 'a:13:{s:5:\"title\";s:3:\"Top\";s:8:\"titleTwo\";s:8:\"Packages\";s:11:\"description\";s:83:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna alie enim poskina ilukita\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:13:\"backgroundImg\";s:21:\"1588246877-img-04.png\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#9013fe\";s:7:\"padding\";a:5:{s:3:\"top\";s:2:\"80\";s:5:\"right\";i:0;s:6:\"bottom\";s:3:\"100\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:6;s:11:\"parentIndex\";i:5;}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(35, 'sliders0', 'a:24:{s:5:\"style\";s:6:\"style4\";s:12:\"slider_image\";a:4:{i:0;s:21:\"1588246877-img-01.jpg\";i:1;s:21:\"1588246878-img-02.jpg\";i:2;s:21:\"1588246878-img-03.jpg\";i:3;s:21:\"1588246878-img-04.jpg\";}s:5:\"title\";s:15:\"Title Your Need\";s:8:\"subtitle\";s:16:\"We Have Everyone\";s:7:\"tagline\";s:25:\"Looking For Professional?\";s:11:\"description\";s:208:\"<p>Consectetur adipisicing elition sedames dotem iusmod temporei incuntes utnalo labore etdolore maina aliqua enim adion minim veniam quis nsitrud exercitation ullamco laboris nisiutaliquip ex ea commodo.</p>\";s:10:\"video_link\";N;s:11:\"video_title\";N;s:17:\"video_description\";s:0:\"\";s:12:\"taglineColor\";s:7:\"#ffffff\";s:10:\"titleColor\";s:7:\"#ffffff\";s:13:\"subtitleColor\";s:7:\"#ffffff\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:7:\"padding\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:1;s:11:\"parentIndex\";i:0;s:18:\"enable_search_form\";b:1;s:17:\"search_form_title\";s:25:\"That Help You To Go Ahead\";s:20:\"search_form_subtitle\";s:22:\"Best Service Providers\";s:17:\"price_range_title\";s:12:\"Price Range:\";s:15:\"listing_tagline\";s:33:\"more than 2500 listings available\";}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(36, 'categoriesThirdVersion1', 'a:16:{s:5:\"title\";s:9:\"Versatile\";s:8:\"titleTwo\";s:10:\"Categories\";s:8:\"subtitle\";s:16:\"Explore with our\";s:11:\"description\";s:200:\"<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eunfugiat nulla pariatur lokaim urianewce sint.</p>\";s:12:\"sectionColor\";s:7:\"#ffffff\";s:13:\"backgroundImg\";s:21:\"1588246878-img-01.png\";s:10:\"titleColor\";s:7:\"#3d4461\";s:13:\"titleTwoColor\";s:7:\"#9013fe\";s:13:\"subtitleColor\";s:7:\"#3d4461\";s:13:\"showAllBtnUrl\";s:1:\"#\";s:7:\"padding\";a:5:{s:3:\"top\";s:3:\"160\";s:5:\"right\";i:0;s:6:\"bottom\";s:3:\"160\";s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:6:\"margin\";a:5:{s:3:\"top\";i:0;s:5:\"right\";i:0;s:6:\"bottom\";i:0;s:4:\"left\";i:0;s:4:\"unit\";s:2:\"px\";}s:9:\"sectionId\";N;s:12:\"sectionClass\";N;s:2:\"id\";i:2;s:11:\"parentIndex\";i:1;}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(37, 'header', 'style5', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(38, 'footer', 'style3', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(39, 'title', '0', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(40, 'header_styling', 'a:4:{s:4:\"logo\";N;s:9:\"menuColor\";s:7:\"#ffffff\";s:14:\"menuHoverColor\";s:7:\"#fbde44\";s:5:\"color\";s:7:\"#ffffff\";}', 'App\\Page', 9, '2022-02-01 11:40:27', '2022-02-01 11:40:27'),
(41, 'header_styling', 'a:4:{s:4:\"logo\";N;s:9:\"menuColor\";s:7:\"#ffffff\";s:14:\"menuHoverColor\";s:7:\"#fbde44\";s:5:\"color\";s:7:\"#ffffff\";}', 'App\\Page', 8, '2022-02-01 11:40:27', '2022-02-01 11:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_21_082930_create_site_managements_table', 1),
(4, '2019_01_21_083223_create_categories_table', 1),
(5, '2019_01_21_083659_create_pages_table', 1),
(6, '2019_01_21_084005_child_pages', 1),
(7, '2019_01_21_084332_create_locations_table', 1),
(8, '2019_01_21_084630_create_skills_table', 1),
(9, '2019_01_21_084946_private_messages', 1),
(10, '2019_01_21_085428_private_messages_to', 1),
(11, '2019_01_21_103956_create_languages_table', 1),
(12, '2019_01_21_104105_create_jobs_table', 1),
(13, '2019_01_21_105235_create_proposals_table', 1),
(14, '2019_01_21_105802_proposal_documents', 1),
(15, '2019_01_23_063619_create_child_location_table', 1),
(16, '2019_01_23_064221_create_permission_tables', 1),
(17, '2019_01_25_070119_profile', 1),
(18, '2019_01_25_074332_departments', 1),
(19, '2019_01_29_113201_create_skill_user_table', 1),
(20, '2019_01_29_130030_create_catables_table', 1),
(21, '2019_02_01_140348_create_langables_table', 1),
(22, '2019_02_12_082928_create_job_skill_table', 1),
(23, '2019_02_16_103711_create_reports_table', 1),
(24, '2019_02_26_122204_followers', 1),
(25, '2019_02_28_115604_create_email_types_table', 1),
(26, '2019_02_28_115655_create_email_templates_table', 1),
(27, '2019_03_01_071107_create_review-options_table', 1),
(28, '2019_03_01_124110_create_reviews_table', 1),
(29, '2019_03_04_070237_create_packages_table', 1),
(30, '2019_03_04_085836_create_invoices_table', 1),
(31, '2019_03_04_112418_create_orders_table', 1),
(32, '2019_03_04_112537_create_items_table', 1),
(33, '2019_03_04_112635_create_i_p_n_statuses_table', 1),
(34, '2019_03_15_103524_create_messages_table', 1),
(35, '2019_03_19_125626_create_offers_table', 1),
(36, '2019_03_19_125645_create_disputes_table', 1),
(37, '2019_04_06_122330_create_badges_table', 1),
(38, '2019_04_10_131904_create_payouts_table', 1),
(39, '2019_06_17_080227_create_delivery_time_table', 1),
(40, '2019_06_17_080252_create_response_time_table', 1),
(41, '2019_06_17_084715_create_services_table', 1),
(42, '2019_06_18_113753_create_service_user_table', 1),
(43, '2019_06_25_121752_update_profile', 1),
(44, '2019_06_25_135732_update_private_messages', 1),
(45, '2019_06_26_070540_delete_profile_rating', 1),
(46, '2019_07_01_123323_update_reviews', 1),
(47, '2019_07_02_124918_update_payouts', 1),
(48, '2019_07_03_130706_update_packages', 1),
(49, '2019_07_31_080556_update_profile_payout', 1),
(50, '2019_08_01_095648_add_to_payout_type', 1),
(51, '2019_08_05_083823_add_is_active_to_users', 1),
(52, '2019_10_18_133239_add_paid_to_proposals', 1),
(53, '2019_10_18_133520_add_paid_to_service_user', 1),
(54, '2019_10_28_123201_add_videos_to_profiles_table', 1),
(55, '2019_10_31_083735_add_paid_progress_to_proposals', 1),
(56, '2019_10_31_085942_add_paid_progress_to_service_user', 1),
(57, '2019_10_31_104244_add_projects_ids_to_payouts', 1),
(58, '2019_12_17_080700_add_expiry_to_jobs_table', 1),
(59, '2019_12_18_150007_add_bank_column_to_invoices_table', 1),
(60, '2019_12_20_105734_add_type_to_orders_table', 1),
(61, '2019_12_20_142840_add_type_to_items_table', 1),
(62, '2019_12_24_140115_create_metas_table', 1),
(63, '2019_12_24_142522_add_sections_to_pages_table', 1),
(64, '2020_01_20_055407_create_article_categories_table', 1),
(65, '2020_01_20_061623_create_articles_table', 1),
(66, '2020_01_20_062131_create_article_category_table', 1),
(67, '2020_04_14_140545_add_image_to_packages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 11),
(2, 'App\\User', 12),
(3, 'App\\User', 13),
(3, 'App\\User', 14),
(3, 'App\\User', 15),
(3, 'App\\User', 16),
(3, 'App\\User', 17),
(3, 'App\\User', 18),
(3, 'App\\User', 19),
(3, 'App\\User', 20),
(3, 'App\\User', 21),
(3, 'App\\User', 22),
(3, 'App\\User', 23),
(3, 'App\\User', 24);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `role_id` int(11) NOT NULL,
  `trial` tinyint(4) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `subtitle`, `slug`, `cost`, `role_id`, `trial`, `badge_id`, `options`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Trial Employer', '30 Days Trial', 'trial-employer', 0.00, 2, 1, 0, 'a:5:{s:4:\"jobs\";s:1:\"5\";s:13:\"featured_jobs\";s:1:\"2\";s:8:\"duration\";s:2:\"30\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(2, 'Trial Freelancer', '30 Days Trial', 'trial-freelancer', 0.00, 3, 1, 0, 'a:7:{s:14:\"no_of_connects\";s:2:\"10\";s:12:\"no_of_skills\";s:1:\"3\";s:14:\"no_of_services\";s:1:\"5\";s:23:\"no_of_featured_services\";s:1:\"5\";s:8:\"duration\";s:2:\"10\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL),
(3, 'Basic', 'Extended Plan For Managerial', 'basic', 60.00, 3, 0, 1, 'a:8:{s:14:\"no_of_connects\";s:2:\"60\";s:12:\"no_of_skills\";s:2:\"15\";s:14:\"no_of_services\";s:1:\"8\";s:23:\"no_of_featured_services\";s:1:\"5\";s:8:\"duration\";s:2:\"10\";s:5:\"badge\";s:1:\"1\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', '1588830253-img-01.jpg'),
(4, 'Plus Members', 'Starter Plan For Newbie', 'plus-member', 90.00, 3, 0, 2, 'a:8:{s:14:\"no_of_connects\";s:2:\"90\";s:12:\"no_of_skills\";s:2:\"20\";s:14:\"no_of_services\";s:2:\"10\";s:23:\"no_of_featured_services\";s:1:\"8\";s:8:\"duration\";s:2:\"10\";s:5:\"badge\";s:1:\"2\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', '1588830373-img-02.jpg'),
(5, 'Pro Members', 'Popular Plan For Professionals', 'pro-members', 120.00, 3, 0, 3, 'a:8:{s:14:\"no_of_connects\";s:3:\"120\";s:12:\"no_of_skills\";s:2:\"30\";s:14:\"no_of_services\";s:2:\"20\";s:23:\"no_of_featured_services\";s:2:\"10\";s:8:\"duration\";s:2:\"10\";s:5:\"badge\";s:1:\"3\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', '1588830460-img-03.jpg'),
(6, 'Paltinum', 'For Employers', 'paltinum', 90.00, 2, 0, 0, 'a:5:{s:4:\"jobs\";s:2:\"15\";s:13:\"featured_jobs\";s:1:\"5\";s:8:\"duration\";s:2:\"10\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', '1588830571-img-03.jpg'),
(7, 'Silver', 'Package for Employers', 'silver', 120.00, 2, 0, 0, 'a:5:{s:4:\"jobs\";s:1:\"5\";s:13:\"featured_jobs\";s:1:\"3\";s:8:\"duration\";s:2:\"30\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', '1588830532-img-01.jpg'),
(8, 'Gold', 'Package for Employers', 'gold', 180.00, 2, 0, 0, 'a:5:{s:4:\"jobs\";s:2:\"10\";s:13:\"featured_jobs\";s:1:\"5\";s:8:\"duration\";s:3:\"360\";s:13:\"banner_option\";s:4:\"true\";s:12:\"private_chat\";s:4:\"true\";}', '2022-02-01 11:40:25', '2022-02-01 11:40:25', '1588830552-img-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sections` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `body`, `relation_type`, `created_at`, `updated_at`, `sections`) VALUES
(1, 'Main', 'main', '<div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">\r\n                    <div class=\"wt-greeting-holder\">\r\n                    <div class=\"row\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 float-left\">\r\n                    <div class=\"wt-greetingcontent\">\r\n                    <div class=\"wt-sectionhead\">\r\n                    <div class=\"wt-sectiontitle\">\r\n                    <h2>Greetings &amp; Welcome</h2>\r\n                    Start Today For a Great Future</div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce anim id est laborumed.</p>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborumed perspiciatis unde omnis isteatus error aluptatem accusantium doloremque laudantium.</p>\r\n                    </div>\r\n                    </div>\r\n                    <div id=\"wt-statistics\" class=\"wt-statistics\">\r\n                    <div class=\"wt-statisticcontent wt-countercolor1\">\r\n                    <h3 data-from=\"0\" data-to=\"1500\" data-speed=\"8000\" data-refresh-interval=\"50\">1,500</h3>\r\n                    <em>k</em>\r\n                    <h4>Active Projects</h4>\r\n                    </div>\r\n                    <div class=\"wt-statisticcontent wt-countercolor2\">\r\n                    <h3 data-from=\"0\" data-to=\"99.6\" data-speed=\"8000\" data-refresh-interval=\"5.9\">75</h3>\r\n                    <em>%</em>\r\n                    <h4>Great Feedback</h4>\r\n                    </div>\r\n                    <div class=\"wt-statisticcontent wt-countercolor3\">\r\n                    <h3 data-from=\"0\" data-to=\"5000\" data-speed=\"8000\" data-refresh-interval=\"100\">5,000</h3>\r\n                    <em>k</em>\r\n                    <h4>Active Freelancers</h4>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 float-left\">\r\n                    <div class=\"wt-greetingvideo\">\r\n                    <figure><a href=\"https://www.youtube.com/watch?v=B-ph2g5o2K4\" rel=\"prettyPhoto[video]\" data-rel=\"prettyPhoto[video]\"><img src=\"http://www.amentotech.com/projects/worketic/images/video-img.png\" alt=\"video\" width=\"415\" height=\"450\" /> </a></figure>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>', 0, '2022-02-01 11:40:27', '2022-02-01 11:40:27', NULL),
(2, 'About Us', 'about-us', 'null', 1, '2022-02-01 11:40:27', '2022-02-01 11:40:27', 'a:1:{i:0;O:8:\"stdClass\":5:{s:4:\"name\";s:19:\"Description Section\";s:7:\"section\";s:15:\"content_section\";s:5:\"value\";s:7:\"content\";s:4:\"icon\";s:10:\"img-09.png\";s:2:\"id\";i:4;}}'),
(3, 'How It Works', 'how-it-works', '<div class=\"wt-contentwrappers\">\r\n                    <div class=\"container\">\r\n                    <div class=\"row\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 float-left\">\r\n                    <div class=\"wt-howitwork-hold wt-bgwhite wt-haslayout\">\r\n                    <ul class=\"wt-navarticletab wt-navarticletabvtwo nav navbar-nav\">\r\n                    <li class=\"nav-item\"><a id=\"all-tab\" class=\"active\" href=\"#forhiring\" data-toggle=\"tab\">For Hiring</a></li>\r\n                    <li class=\"nav-item\"><a id=\"business-tab\" href=\"#forfreelancing\" data-toggle=\"tab\">For Freelancing</a></li>\r\n                    <li class=\"nav-item\"><a id=\"trading-tab\" href=\"#faq\" data-toggle=\"tab\">FAQ</a></li>\r\n                    </ul>\r\n                    <div class=\"tab-content wt-haslayout\">\r\n                    <div id=\"forhiring\" class=\"wt-contentarticle tab-pane active fade show\">\r\n                    <div class=\"row\">\r\n                    <div class=\"wt-starthiringhold wt-innerspace wt-haslayout\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 float-left\">\r\n                    <div class=\"wt-starthiringcontent\">\r\n                    <div class=\"wt-sectionhead\">\r\n                    <div class=\"wt-sectiontitle\">\r\n                    <h2>How To Start Hiring</h2>\r\n                    Start Today For a Great Future</div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce animid <a>Learn more</a></p>\r\n                    </div>\r\n                    </div>\r\n                    <ul class=\"wt-accordionhold accordion\">\r\n                    <li>\r\n                    <div id=\"headingOne\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapseOne\">Adipisicing elit, sed do eiusmod tempor incididunt?</div>\r\n                    <div id=\"collapseOne\" class=\"wt-accordiondetails collapse show\" aria-labelledby=\"headingOne\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingtwo\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsetwo\">Dolore magna aliqua enim ad minim veniam?</div>\r\n                    <div id=\"collapsetwo\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingtwo\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingthreea\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsethree\">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo?</div>\r\n                    <div id=\"collapsethree\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingthreea\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    </ul>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 float-right\">\r\n                    <div class=\"wt-howtoworkimg\">\r\n                    <figure><img src=\"http://www.amentotech.com/projects/worketic/images/work/img-01.jpg\" alt=\"img description\" width=\"415\" height=\"386\" /></figure>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"wt-starthiringhold wt-innerspace wt-haslayout\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 float-right\">\r\n                    <div class=\"wt-starthiringcontent\">\r\n                    <div class=\"wt-sectionhead\">\r\n                    <div class=\"wt-sectiontitle\">\r\n                    <h2>Getting Into Business</h2>\r\n                    Focus on Your Work &amp; Team</div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce animid learn <a>more</a></p>\r\n                    </div>\r\n                    </div>\r\n                    <ul class=\"wt-accordionhold accordion\">\r\n                    <li>\r\n                    <div id=\"headingtwo2\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsetwo2\">Nostrud exercitation ullamco laboris nisi ut aliquip?</div>\r\n                    <div id=\"collapsetwo2\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingtwo2\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingtwo4\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsetwo4\">Commodo consequat aute irure dolor in reprehenderit in voluptate velit?</div>\r\n                    <div id=\"collapsetwo4\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingtwo4\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingthree2\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsethree2\">Cillum dolore eu fugiat nulla pariatur?</div>\r\n                    <div id=\"collapsethree2\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingthree2\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    </ul>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 float-left\">\r\n                    <div class=\"wt-howtoworkimg\">\r\n                    <figure><img src=\"http://www.amentotech.com/projects/worketic/images/work/img-02.jpg\" alt=\"img description\" /></figure>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"wt-starthiringhold wt-innerspace wt-haslayout\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 float-left\">\r\n                    <div class=\"wt-starthiringcontent\">\r\n                    <div class=\"wt-sectionhead\">\r\n                    <div class=\"wt-sectiontitle\">\r\n                    <h2>Making Serious Profit</h2>\r\n                    Manage Your Profitable Account</div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce animid learn <a>more</a></p>\r\n                    </div>\r\n                    </div>\r\n                    <ul class=\"wt-accordionhold accordion\">\r\n                    <li>\r\n                    <div id=\"headingOne3\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapseOne3\">Excepteur sint occaecat cupidatat non proident?</div>\r\n                    <div id=\"collapseOne3\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingOne3\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingtwo3\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsetwo3\">Sunt in culpa qui officia deserunt mollit anim id est laborum?</div>\r\n                    <div id=\"collapsetwo3\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingtwo3\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingthree3\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsethree3\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem?</div>\r\n                    <div id=\"collapsethree3\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingthree3\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    </ul>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 float-right\">\r\n                    <div class=\"wt-howtoworkimg\">\r\n                    <figure><img src=\"http://www.amentotech.com/projects/worketic/images/work/img-03.jpg\" alt=\"img description\" width=\"415\" height=\"386\" /></figure>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    <div id=\"forfreelancing\" class=\"wt-contentarticle tab-pane fade\">\r\n                    <div class=\"row\">\r\n                    <div class=\"wt-starthiringhold wt-innerspace wt-haslayout\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 float-right\">\r\n                    <div class=\"wt-starthiringcontent\">\r\n                    <div class=\"wt-sectionhead\">\r\n                    <div class=\"wt-sectiontitle\">\r\n                    <h2>How To Start Hiring</h2>\r\n                    Start Today For a Great Future</div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce animid learn <a>more</a></p>\r\n                    </div>\r\n                    </div>\r\n                    <ul class=\"wt-accordionhold accordion\">\r\n                    <li>\r\n                    <div id=\"headingOneq\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapseOneq\">Adipisicing elit, sed do eiusmod tempor incididunt?</div>\r\n                    <div id=\"collapseOneq\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingOneq\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingtwoq\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsetwoq\">Dolore magna aliqua enim ad minim veniam?</div>\r\n                    <div id=\"collapsetwoq\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingtwoq\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingthreeq\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsethreeq\">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo?</div>\r\n                    <div id=\"collapsethreeq\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingthreeq\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    </ul>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 float-left\">\r\n                    <div class=\"wt-howtoworkimg\">\r\n                    <figure><img src=\"http://www.amentotech.com/projects/worketic/images/work/img-01.jpg\" alt=\"img description\" width=\"415\" height=\"386\" /></figure>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    <div id=\"faq\" class=\"wt-contentarticle tab-pane fade\">\r\n                    <div class=\"row\">\r\n                    <div class=\"wt-starthiringhold wt-innerspace wt-haslayout\">\r\n                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-7 float-left\">\r\n                    <div class=\"wt-starthiringcontent\">\r\n                    <div class=\"wt-sectionhead\">\r\n                    <div class=\"wt-sectiontitle\">\r\n                    <h2>How To Start Hiring</h2>\r\n                    Start Today For a Great Future</div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce animid learn <a>more</a></p>\r\n                    </div>\r\n                    </div>\r\n                    <ul class=\"wt-accordionhold accordion\">\r\n                    <li>\r\n                    <div id=\"headingOnea\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapseOnea\">Nostrud exercitation ullamco laboris nisi ut aliquip?</div>\r\n                    <div id=\"collapseOnea\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingOne\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingtwoa\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsetwoa\">Commodo consequat aute irure dolor in reprehenderit in voluptate velit?</div>\r\n                    <div id=\"collapsetwoa\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingtwoa\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    <li>\r\n                    <div id=\"headingthree\" class=\"wt-accordiontitle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsethreea\">Cillum dolore eu fugiat nulla pariatur?</div>\r\n                    <div id=\"collapsethreea\" class=\"wt-accordiondetails collapse\" aria-labelledby=\"headingthree\">\r\n                    <div class=\"wt-title\">\r\n                    <h3>Digital Marketing</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit sed aeiusmisuod tempor incididunt labore dolore ma alaeiqua enim ade minim veniam quis nostr xecitation ullamcoaris nisi ut aliquipa extaea coedmmmodo equate irure dolawor in reprehenderit.</p>\r\n                    </div>\r\n                    <div class=\"wt-likeunlike\">Did you find this useful?</div>\r\n                    </div>\r\n                    </li>\r\n                    </ul>\r\n                    </div>\r\n                    </div>\r\n                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-5 float-right\">\r\n                    <div class=\"wt-howtoworkimg\">\r\n                    <figure><img src=\"http://www.amentotech.com/projects/worketic/images/work/img-01.jpg\" alt=\"img description\" width=\"415\" height=\"386\" /></figure>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>', 0, '2022-02-01 11:40:27', '2022-02-01 11:40:27', NULL),
(4, 'Privacy Policy', 'privacy-policy', '<div id=\"wt-twocolumns\" class=\"wt-twocolumns wt-haslayout\">\r\n                    <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left\">\r\n                    <aside id=\"wt-sidebar\" class=\"wt-sidebar\">\r\n                    <div class=\"wt-widget wt-effectiveholder\">\r\n                    <div class=\"wt-widgettitle\">\r\n                    <h2>Effective T&amp;C</h2>\r\n                    </div>\r\n                    <div class=\"wt-widgetcontent\">\r\n                    <ul class=\"wt-effectivecontent\">\r\n                    <li><a>Adipisicing elit sed do eiusmod</a></li>\r\n                    <li><a>Tempor incididunt</a></li>\r\n                    <li><a>How To Submit Claim Report</a></li>\r\n                    <li><a>Ut enim ad minim veniam</a></li>\r\n                    <li><a>Quis nostrud exercitation</a></li>\r\n                    <li><a>Ullamco laboris nisiut</a></li>\r\n                    <li><a>Aliquip ex ea commodo</a></li>\r\n                    <li><a>Consequat duis aute</a></li>\r\n                    <li><a>Irure dolorin</a></li>\r\n                    <li><a>Reprehenderit</a></li>\r\n                    <li><a>Voluptate velit esse cillum</a></li>\r\n                    </ul>\r\n                    </div>\r\n                    </div>\r\n                    </aside>\r\n                    </div>\r\n                    <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left\">\r\n                    <div class=\"wt-submitreportholder wt-bgwhite\">\r\n                    <div class=\"wt-titlebar\">\r\n                    <h2>How To Submit Claim Report</h2>\r\n                    </div>\r\n                    <div class=\"wt-reportdescription\">\r\n                    <div class=\"wt-description\">\r\n                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <a href=\"javascrip:void(0);\"> exercitation ullamco laboris</a> nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut <a href=\"javascrip:void(0);\"> perspiciatis unde</a> omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia magnam aliquam quaerat voluptatem.</p>\r\n                    </div>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Step #01</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n                    <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia magnam aliquam quaerat voluptatem.</p>\r\n                    </div>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Step #02</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n                    <p>Consequuntur magni dolores eios qui ratione voluptatem sequi nesciunt. Nequerro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia magnam aliquam quaerat voluptatem.</p>\r\n                    </div>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Step #03</h3>\r\n                    </div>\r\n                    <div class=\"wt-description\">\r\n                    <p>Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit.</p>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>\r\n                    </div>', 0, '2022-02-01 11:40:27', '2022-02-01 11:40:27', NULL),
(5, 'Home v1', 'home-v1', 'null', 1, '2022-02-01 11:40:27', '2022-02-01 11:40:27', 'a:4:{i:0;O:8:\"stdClass\":5:{s:4:\"name\";s:14:\"Slider Section\";s:7:\"section\";s:6:\"slider\";s:5:\"value\";s:7:\"sliders\";s:4:\"icon\";s:10:\"img-01.png\";s:2:\"id\";i:1;}i:1;O:8:\"stdClass\":5:{s:4:\"name\";s:16:\"Category Section\";s:7:\"section\";s:8:\"category\";s:5:\"value\";s:3:\"cat\";s:4:\"icon\";s:10:\"img-02.png\";s:2:\"id\";i:2;}i:2;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Welcome Section\";s:7:\"section\";s:15:\"welcome_section\";s:5:\"value\";s:16:\"welcome_sections\";s:4:\"icon\";s:10:\"img-03.png\";s:2:\"id\";i:4;}i:3;O:8:\"stdClass\":5:{s:4:\"name\";s:11:\"APP Section\";s:7:\"section\";s:11:\"app_section\";s:5:\"value\";s:11:\"app_section\";s:4:\"icon\";s:10:\"img-04.png\";s:2:\"id\";i:5;}}'),
(6, 'Home V2', 'home-v2', 'null', 1, '2022-02-01 11:40:27', '2022-02-01 11:40:27', 'a:6:{i:0;O:8:\"stdClass\":5:{s:4:\"name\";s:14:\"Slider Section\";s:7:\"section\";s:6:\"slider\";s:5:\"value\";s:7:\"sliders\";s:4:\"icon\";s:10:\"img-01.png\";s:2:\"id\";i:1;}i:1;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Service Section\";s:7:\"section\";s:15:\"service_section\";s:5:\"value\";s:8:\"services\";s:4:\"icon\";s:10:\"img-05.png\";s:2:\"id\";i:6;}i:2;O:8:\"stdClass\":5:{s:4:\"name\";s:23:\"How it work tab section\";s:7:\"section\";s:16:\"work_tab_section\";s:5:\"value\";s:9:\"work_tabs\";s:4:\"icon\";s:10:\"img-07.png\";s:2:\"id\";i:3;}i:3;O:8:\"stdClass\":5:{s:4:\"name\";s:18:\"Freelancer section\";s:7:\"section\";s:18:\"freelancer_section\";s:5:\"value\";s:11:\"freelancers\";s:4:\"icon\";s:10:\"img-08.png\";s:2:\"id\";i:4;}i:4;O:8:\"stdClass\":5:{s:4:\"name\";s:11:\"APP Section\";s:7:\"section\";s:11:\"app_section\";s:5:\"value\";s:11:\"app_section\";s:4:\"icon\";s:10:\"img-04.png\";s:2:\"id\";i:5;}i:5;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Article Section\";s:7:\"section\";s:15:\"article_section\";s:5:\"value\";s:8:\"articles\";s:4:\"icon\";s:10:\"img-10.png\";s:2:\"id\";i:10;}}'),
(7, 'Home v3', 'home-v3', 'null', 1, '2022-02-01 11:40:27', '2022-02-01 11:40:27', 'a:6:{i:0;O:8:\"stdClass\":5:{s:4:\"name\";s:14:\"Slider Section\";s:7:\"section\";s:6:\"slider\";s:5:\"value\";s:7:\"sliders\";s:4:\"icon\";s:10:\"img-01.png\";s:2:\"id\";i:1;}i:1;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Service Section\";s:7:\"section\";s:15:\"service_section\";s:5:\"value\";s:8:\"services\";s:4:\"icon\";s:10:\"img-05.png\";s:2:\"id\";i:5;}i:2;O:8:\"stdClass\":5:{s:4:\"name\";s:18:\"Freelancer section\";s:7:\"section\";s:18:\"freelancer_section\";s:5:\"value\";s:11:\"freelancers\";s:4:\"icon\";s:10:\"img-08.png\";s:2:\"id\";i:4;}i:3;O:8:\"stdClass\":5:{s:4:\"name\";s:25:\"How it work video section\";s:7:\"section\";s:18:\"work_video_section\";s:5:\"value\";s:11:\"work_videos\";s:4:\"icon\";s:10:\"img-06.png\";s:2:\"id\";i:3;}i:4;O:8:\"stdClass\":5:{s:4:\"name\";s:11:\"APP Section\";s:7:\"section\";s:11:\"app_section\";s:5:\"value\";s:11:\"app_section\";s:4:\"icon\";s:10:\"img-04.png\";s:2:\"id\";i:7;}i:5;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Article Section\";s:7:\"section\";s:15:\"article_section\";s:5:\"value\";s:8:\"articles\";s:4:\"icon\";s:10:\"img-09.png\";s:2:\"id\";i:6;}}'),
(8, 'Home V4', 'home-v4', 'null', 1, '2022-02-01 11:40:27', '2022-02-01 11:40:27', 'a:6:{i:0;O:8:\"stdClass\":5:{s:4:\"name\";s:17:\"Banner Section V1\";s:7:\"section\";s:8:\"bannerV1\";s:5:\"value\";s:18:\"bannerFirstVersion\";s:4:\"icon\";s:10:\"img-12.png\";s:2:\"id\";i:1;}i:1;O:8:\"stdClass\":5:{s:4:\"name\";s:19:\"Category Section V2\";s:7:\"section\";s:10:\"categoryV2\";s:5:\"value\";s:23:\"categoriesSecondVersion\";s:4:\"icon\";s:10:\"img-07.png\";s:2:\"id\";i:2;}i:2;O:8:\"stdClass\":5:{s:4:\"name\";s:12:\"Jobs Section\";s:7:\"section\";s:12:\"jobs_section\";s:5:\"value\";s:4:\"jobs\";s:4:\"icon\";s:10:\"img-11.png\";s:2:\"id\";i:3;}i:3;O:8:\"stdClass\":5:{s:4:\"name\";s:11:\"APP Section\";s:7:\"section\";s:11:\"app_section\";s:5:\"value\";s:11:\"app_section\";s:4:\"icon\";s:10:\"img-04.png\";s:2:\"id\";i:4;}i:4;O:8:\"stdClass\":5:{s:4:\"name\";s:21:\"Freelancer Section V2\";s:7:\"section\";s:21:\"freelancer_section_v2\";s:5:\"value\";s:24:\"freelancersSecondVersion\";s:4:\"icon\";s:10:\"img-08.png\";s:2:\"id\";i:5;}i:5;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Package Section\";s:7:\"section\";s:15:\"package_section\";s:5:\"value\";s:8:\"packages\";s:4:\"icon\";s:10:\"img-09.png\";s:2:\"id\";i:6;}}'),
(9, 'Home V5', 'home-v5', 'null', 1, '2022-02-01 11:40:27', '2022-02-01 11:40:27', 'a:6:{i:0;O:8:\"stdClass\":5:{s:4:\"name\";s:14:\"Slider Section\";s:7:\"section\";s:6:\"slider\";s:5:\"value\";s:7:\"sliders\";s:4:\"icon\";s:10:\"img-01.png\";s:2:\"id\";i:1;}i:1;O:8:\"stdClass\":5:{s:4:\"name\";s:19:\"Category Section V3\";s:7:\"section\";s:10:\"categoryV3\";s:5:\"value\";s:22:\"categoriesThirdVersion\";s:4:\"icon\";s:10:\"img-12.png\";s:2:\"id\";i:2;}i:2;O:8:\"stdClass\":5:{s:4:\"name\";s:12:\"Jobs Section\";s:7:\"section\";s:12:\"jobs_section\";s:5:\"value\";s:4:\"jobs\";s:4:\"icon\";s:10:\"img-11.png\";s:2:\"id\";i:3;}i:3;O:8:\"stdClass\":5:{s:4:\"name\";s:11:\"APP Section\";s:7:\"section\";s:11:\"app_section\";s:5:\"value\";s:11:\"app_section\";s:4:\"icon\";s:10:\"img-04.png\";s:2:\"id\";i:4;}i:4;O:8:\"stdClass\":5:{s:4:\"name\";s:21:\"Freelancer Section V2\";s:7:\"section\";s:21:\"freelancer_section_v2\";s:5:\"value\";s:24:\"freelancersSecondVersion\";s:4:\"icon\";s:10:\"img-08.png\";s:2:\"id\";i:5;}i:5;O:8:\"stdClass\":5:{s:4:\"name\";s:15:\"Package Section\";s:7:\"section\";s:15:\"package_section\";s:5:\"value\";s:8:\"packages\";s:4:\"icon\";s:10:\"img-09.png\";s:2:\"id\";i:6;}}');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `type` enum('job','service') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'job',
  `bank_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projects_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_messages`
--

CREATE TABLE `private_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_type` enum('job','service') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'job'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_messages`
--

INSERT INTO `private_messages` (`id`, `author_id`, `proposal_id`, `content`, `attachments`, `notify`, `created_at`, `updated_at`, `project_type`) VALUES
(1, 4, 1, '<p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in risus id mauris convallis sollicitudin. Etiam porta, massa finibus bibendum fermentum, velit diam hendrerit libero, eu consectetur sapien velit ac nibh. Ut in volutpat nisi, et suscipit libero.</span></p>', NULL, 0, '2022-02-01 11:40:28', '2022-02-01 11:40:28', 'job'),
(2, 21, 1, 'Donec placerat, massa eu tincidunt volutpat.', 'a:1:{i:0;s:52:\"1555913392-How-to-run-mysql-command-in-database.docx\";}', 0, '2022-02-01 11:40:28', '2022-02-01 11:40:28', 'job'),
(3, 4, 1, 'Donec placerat, massa eu tincidunt volutpat.', NULL, 0, '2022-02-01 11:40:28', '2022-02-01 11:40:28', 'job'),
(4, 21, 1, 'Donec placerat, massa eu tincidunt volutpat.', 'a:1:{i:0;s:52:\"1555913456-How-to-run-mysql-command-in-database.docx\";}', 0, '2022-02-01 11:40:28', '2022-02-01 11:40:28', 'job');

-- --------------------------------------------------------

--
-- Table structure for table `private_messages_to`
--

CREATE TABLE `private_messages_to` (
  `id` int(10) UNSIGNED NOT NULL,
  `private_message_id` int(11) DEFAULT NULL,
  `recipent_id` int(11) NOT NULL,
  `message_read` tinyint(4) NOT NULL,
  `read_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_messages_to`
--

INSERT INTO `private_messages_to` (`id`, `private_message_id`, `recipent_id`, `message_read`, `read_date`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 0, NULL, '2022-02-01 11:40:28', '2022-02-01 11:40:28'),
(2, 2, 4, 0, NULL, '2022-02-01 11:40:28', '2022-02-01 11:40:28'),
(3, 3, 21, 0, NULL, '2022-02-01 11:40:28', '2022-02-01 11:40:28'),
(4, 4, 4, 0, NULL, '2022-02-01 11:40:28', '2022-02-01 11:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `no_of_employees` int(11) DEFAULT NULL,
  `freelancer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_level` enum('basic','conversational','fluent','native','professional') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hourly_rate` int(11) DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awards` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projects` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved_freelancer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved_jobs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved_employers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_searchable` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_blocked` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekly_alerts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_alerts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saved_services` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `department_id`, `no_of_employees`, `freelancer_type`, `english_level`, `hourly_rate`, `experience`, `education`, `awards`, `projects`, `saved_freelancer`, `offers`, `saved_jobs`, `saved_employers`, `address`, `longitude`, `latitude`, `avater`, `banner`, `gender`, `tagline`, `description`, `delete_reason`, `delete_description`, `payout_id`, `profile_searchable`, `profile_blocked`, `weekly_alerts`, `message_alerts`, `created_at`, `updated_at`, `saved_services`, `ratings`, `payout_settings`, `videos`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a.jpg', 'b.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(2, 2, 1, 1, 'agency', 'fluent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Larapinta Dr Alice Springs NT 0870 Australia', '133.368101', '-24.004758', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(3, 3, 2, 10, 'independent', 'conversational', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23 Multa Rd Haasts Bluff NT 0872 Australia', '131.881749629974', '23.4475749078235', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(4, 4, 3, 100, 'rising_talent', 'native', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lot 39 Anmatjere NT 0872 Australia', '132.609851360321', '-21.2475322804021', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(5, 5, 4, 500, 'independent', 'professional', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-58 John D\'Or Prairie, AB Canada', '-115.151181221008', '58.4925724410151', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(6, 6, 5, 1000, 'independent', 'conversational', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10009 99 St High Level, AB T0H 1Z0 Canada', '-117.131303250789', '58.5168370527763', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(7, 7, 6, 5000, 'agency', 'fluent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9809 100 St High Level, AB T0H 1Z0 Canada', '-117.130516022443', '58.5191843284108', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(8, 8, 7, 1, 'rising_talent', 'native', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit 3, Paynes Lane Ind. Est 11 Paynes Ln Rugby CV21 2UH UK', '-1.28647327423095', '52.3749008022389', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(9, 9, 8, 10, 'agency', 'conversational', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12 Paynes Ln Rugby CV21 2UH UK', '-1.28587514162063', '52.3748533156522', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(10, 10, 9, 100, 'independent', 'native', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31 Bridget St Rugby CV21 2BH UK', '-1.27051681280136', '52.3737889477259', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(11, 11, 1, 500, 'independent', 'fluent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gate Chaurai, Madhya Pradesh 480115 India', '79.2477750778198', '22.0512229130773', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(12, 12, 2, 1000, 'independent', 'basic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Barkhudar Bava Badasab Bava. Dargah Mahelaj, Gujarat 387530 India', '72.5970500707626', '22.681497230492', 'a.jpg', 'b.jpg', NULL, 'Excepteur sint occaecat cupidatat non proident', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(13, 13, NULL, NULL, 'agency', 'conversational', 25, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Mahakali Temple Mahelaj, Gujarat 387530 India', '72.6193284988403', '22.69013144544', 'a.jpg', 'b.jpg', 'female', 'Pioneers Of ECommerce Data Entry', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(14, 14, NULL, NULL, 'rising_talent', 'basic', 12, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, 'a:1:{i:0;i:3;}', NULL, 'Yenidoğan Mahallesi İstanbul Cd. 71200 Kırıkkale Merkez/Kırıkkale Turkey', '33.5064741969108', '39.841945184348', 'a.jpg', 'b.jpg', 'male', 'SEO Expert & Consultant', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(15, 15, NULL, NULL, 'independent', 'conversational', 44, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Yaylacık Mahallesi 373. Sk. No:2 71100 Kırıkkale Merkez/Kırıkkale Turkey', '33.4971870481967', '39.8404170632178', 'a.jpg', 'b.jpg', 'female', 'Skilled Full Stack Web Developer', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(16, 16, NULL, NULL, 'agency', 'basic', 98, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Yaylacık Mahallesi 332. Sk. No:6 71100 Kırıkkale Merkez/Kırıkkale Turkey', '33.4949138760566', '39.8400257598855', 'a.jpg', 'b.jpg', 'male', 'SEO/PPC Social Media Marketing Expert', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(17, 17, NULL, NULL, 'rising_talent', 'conversational', 25, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Baqala Al Kamal Abu Dhabi United Arab Emirates', '53.6993788182735', '23.6520498992703', 'a.jpg', 'b.jpg', 'male', 'Classifieds Posting, Data Entry, Typing', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(18, 18, NULL, NULL, 'agency', 'professional', 32, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Western Souk & Mall Tarif - Liwa Rd Abu Dhabi United Arab Emirate', '53.7038487195968', '23.6499492330274', 'a.jpg', 'b.jpg', 'male', 'Driving the Communication Revolution', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(19, 19, NULL, NULL, 'independent', 'professional', 84, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Madinat Zayed Adult Education Center for Female Abu Dhabi United Arab Emirates', '53.704422712326', '23.6435928614812', 'a.jpg', 'b.jpg', 'female', 'Effortlessly manages all your information', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL);
INSERT INTO `profiles` (`id`, `user_id`, `department_id`, `no_of_employees`, `freelancer_type`, `english_level`, `hourly_rate`, `experience`, `education`, `awards`, `projects`, `saved_freelancer`, `offers`, `saved_jobs`, `saved_employers`, `address`, `longitude`, `latitude`, `avater`, `banner`, `gender`, `tagline`, `description`, `delete_reason`, `delete_description`, `payout_id`, `profile_searchable`, `profile_blocked`, `weekly_alerts`, `message_alerts`, `created_at`, `updated_at`, `saved_services`, `ratings`, `payout_settings`, `videos`) VALUES
(20, 20, NULL, NULL, 'independent', 'conversational', 55, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Thomas Sherriff & Co Ltd Old Bongate Mill Bongate Jedburgh TD8 6DU UK', '-2.54719734191894', '55.4847967166874', 'a.jpg', 'b.jpg', 'female', 'Experience IT', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(21, 21, NULL, NULL, 'rising_talent', 'professional', 12, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Jed Tyre & Exhaust Centre Friars Burn/High St Jedburgh TD8 6AG UK', '-2.55555510520935', '55.4785859361283', 'a.jpg', 'b.jpg', 'male', 'How Communication Happens', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(22, 22, NULL, NULL, 'rising_talent', 'fluent', 98, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Hassendean Station Cottage 2 Hassendean Station Hawick TD9 8PX UK', '-2.71619260311126', '55.4753116211057', 'a.jpg', 'b.jpg', 'male', 'High Performance Delivered', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(23, 23, NULL, NULL, 'agency', 'native', 47, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Christmas City Gifts 609 S Nance Ave Minden, NE 68959', '-98.95441532135', '40.4909568065246', 'a.jpg', 'b.jpg', 'female', 'Imagination at Work', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL),
(24, 24, NULL, NULL, 'independent', 'basic', 25, 'a:2:{i:0;a:5:{s:9:\"job_title\";s:21:\"SEO Expert Consultant\";s:10:\"start_date\";s:10:\"2019-04-18\";s:8:\"end_date\";s:10:\"2019-04-20\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}i:1;a:5:{s:9:\"job_title\";s:13:\"Start & Sound\";s:10:\"start_date\";s:10:\"2019-04-26\";s:8:\"end_date\";s:10:\"2019-04-28\";s:13:\"company_title\";s:10:\"Amentotech\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:1:{i:0;a:5:{s:12:\"degree_title\";s:22:\"Information Technology\";s:10:\"start_date\";s:10:\"2019-04-09\";s:8:\"end_date\";s:10:\"2019-04-17\";s:15:\"institute_title\";s:35:\"Amento Tech Institute of Technology\";s:11:\"description\";s:461:\"Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\";}}', 'a:4:{i:0;a:3:{s:11:\"award_title\";s:10:\"Best Theme\";s:10:\"award_date\";s:8:\"12-12-31\";s:18:\"award_hidden_image\";s:22:\"15543822240-img-03.jpg\";}i:1;a:3:{s:11:\"award_title\";s:23:\"Monster Developer Award\";s:10:\"award_date\";s:8:\"12-01-14\";s:18:\"award_hidden_image\";s:22:\"15544736871-img-09.jpg\";}i:2;a:3:{s:11:\"award_title\";s:23:\"Best Communication 2015\";s:10:\"award_date\";s:8:\"19-02-01\";s:18:\"award_hidden_image\";s:22:\"15544736872-img-10.jpg\";}i:3;a:3:{s:11:\"award_title\";s:23:\"Best Logo Design Winner\";s:10:\"award_date\";s:8:\"20-10-09\";s:18:\"award_hidden_image\";s:22:\"15544736873-img-12.jpg\";}}', 'a:6:{i:0;a:3:{s:13:\"project_title\";s:8:\"Worketic\";s:11:\"project_url\";s:39:\"http://amentotech.com/projects/worketic\";s:20:\"project_hidden_image\";s:26:\"15543822240-banner-img.jpg\";}i:1;a:3:{s:13:\"project_title\";s:9:\"Videohive\";s:11:\"project_url\";s:17:\"www.videohive.net\";s:20:\"project_hidden_image\";s:10:\"img-01.jpg\";}i:2;a:3:{s:13:\"project_title\";s:10:\"Codecanyon\";s:11:\"project_url\";s:18:\"www.codecanyon.net\";s:20:\"project_hidden_image\";s:10:\"img-03.jpg\";}i:3;a:3:{s:13:\"project_title\";s:12:\"Graphicriver\";s:11:\"project_url\";s:20:\"www.graphicriver.net\";s:20:\"project_hidden_image\";s:10:\"img-04.jpg\";}i:4;a:3:{s:13:\"project_title\";s:9:\"Photodune\";s:11:\"project_url\";s:17:\"www.photodune.net\";s:20:\"project_hidden_image\";s:10:\"img-05.jpg\";}i:5;a:3:{s:13:\"project_title\";s:11:\"Audiojungle\";s:11:\"project_url\";s:19:\"www.audiojungle.net\";s:20:\"project_hidden_image\";s:10:\"img-06.jpg\";}}', NULL, NULL, NULL, NULL, 'Pioneer Aerial Applicators 886 W St Clair St Minden, NE 68959', '-98.9599245786666', '40.4894003885342', 'a.jpg', 'b.jpg', 'male', 'Innovation and Excellence', 'Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.\r\nLaborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 11:40:25', '2022-02-01 11:40:25', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(10) UNSIGNED NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `completion_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('pending','hired','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paid` enum('pending','completed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_progress` enum('in-progress','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in-progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `freelancer_id`, `job_id`, `content`, `amount`, `completion_time`, `attachments`, `hired`, `status`, `created_at`, `updated_at`, `paid`, `paid_progress`) VALUES
(1, 21, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in risus id mauris convallis sollicitudin. Etiam porta, massa finibus bibendum fermentum, velit diam hendrerit libero, eu consectetur sapien velit ac nibh. Ut in volutpat nisi, et suscipit libero. In molestie blandit elit in condimentum. Vivamus cursus ultrices risus sed consectetur. Etiam hendrerit erat tellus. Nullam iaculis mauris sed elit consequat tempus. In hac habitasse platea dictumst. Donec nibh augue, tristique vel metus ut, bibendum pellentesque dolor. Sed id pharetra dolor, vel tincidunt nisi. Suspendisse potenti. Quisque eu blandit magna, eget porttitor urna.\r\n\r\n                    Morbi tincidunt finibus dapibus. Proin sit amet sagittis erat. In at velit tincidunt, ultrices lacus in, convallis tortor. Donec placerat, massa eu tincidunt volutpat, lectus nibh commodo nisl, quis fermentum neque quam et erat. In vel dictum dui. In hac habitasse platea dictumst. Suspendisse vel libero libero.', 8000, 'weekly', 'a:3:{i:0;s:39:\"1555913141-demo-import-in-WordPress.zip\";i:1;s:52:\"1555913141-How-to-run-mysql-command-in-database.docx\";i:2;s:38:\"1555913141-WordPress-customization.pdf\";}', 1, 'hired', '2022-02-01 11:40:28', '2022-02-01 11:40:28', NULL, 'in-progress');

-- --------------------------------------------------------

--
-- Table structure for table `proposal_documents`
--

CREATE TABLE `proposal_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reportable_id` int(11) NOT NULL,
  `reportable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `response_times`
--

CREATE TABLE `response_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `response_times`
--

INSERT INTO `response_times` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '1 Hour', '1-hour', '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(2, '2 Hours', '2-hours', '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(3, '3 Hours', '3-hours', '2022-02-01 11:40:29', '2022-02-01 11:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `receiver_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avg_rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_type` enum('job','service') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'job',
  `service_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `receiver_id`, `job_id`, `feedback`, `rating`, `avg_rating`, `created_at`, `updated_at`, `project_type`, `service_id`) VALUES
(1, 4, 21, 3, 'Donec placerat, massa eu tincidunt volutpat.', 'a:4:{i:0;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:1;}i:1;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:2;}i:2;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:3;}i:3;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:4;}}', 5, '2022-02-01 11:40:31', '2022-02-01 11:40:31', 'job', NULL),
(2, 4, 22, 1, 'Donec placerat, massa eu tincidunt volutpat.', 'a:4:{i:0;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:1;}i:1;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:2;}i:2;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:3;}i:3;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:4;}}', 4, '2022-02-01 11:40:31', '2022-02-01 11:40:31', 'job', NULL),
(3, 4, 23, 27, 'Donec placerat, massa eu tincidunt volutpat.', 'a:4:{i:0;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:1;}i:1;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:2;}i:2;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:3;}i:3;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:4;}}', 3, '2022-02-01 11:40:31', '2022-02-01 11:40:31', 'job', NULL),
(4, 4, 20, 15, 'Donec placerat, massa eu tincidunt volutpat.', 'a:4:{i:0;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:1;}i:1;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:2;}i:2;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:3;}i:3;a:2:{s:6:\"rating\";i:5;s:6:\"reason\";i:4;}}', 4, '2022-02-01 11:40:31', '2022-02-01 11:40:31', 'job', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review_options`
--

CREATE TABLE `review_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_options`
--

INSERT INTO `review_options` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'How was my proffesional behaviour?', 'how-was-my-proffesional-behaviour?', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(2, 'How was my quality of work?', 'how-was-my-quality-of-work?', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(3, 'Was I focused to deadline?', 'was-i-focused-to-deadline?', '2022-02-01 11:40:24', '2022-02-01 11:40:24'),
(4, 'Was it worth it having my services?', 'was-it-worth-it-having-my-services?', '2022-02-01 11:40:24', '2022-02-01 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `role_type`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'web', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(2, 'employer', 'employer', 'web', '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(3, 'freelancer', 'freelancer', 'web', '2022-02-01 11:40:23', '2022-02-01 11:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `delivery_time_id` int(11) NOT NULL,
  `response_time_id` int(11) NOT NULL,
  `english_level` enum('basic','conversational','fluent','native','professional') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `status`, `delivery_time_id`, `response_time_id`, `english_level`, `price`, `description`, `location_id`, `address`, `longitude`, `latitude`, `is_featured`, `show_attachments`, `attachments`, `code`, `views`, `created_at`, `updated_at`) VALUES
(1, 'I Will Develop Ios And Android Mobile App Using React Native', 'i-will-develop-ios-and-android-mobile-app-using-react-native', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562309590-17.jpg\";i:1;s:17:\"1562309590-18.jpg\";i:2;s:41:\"1562309590-Ios And Android Mobile App.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(2, 'I Will Create, Fix, Customize, Your WordPress Website', 'i-will-develop-ios-and-android-mobile-app-using-react-native-2', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562309667-08.jpg\";i:1;s:17:\"1562309667-11.jpg\";i:2;s:18:\"1562309667-015.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(3, 'I Will Provide Pro SEO Report, Competitor Website Audit And Analysis', 'i-will-develop-ios-and-android-mobile-app-using-react-native-3', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562309752-02.jpg\";i:1;s:17:\"1562309752-03.jpg\";i:2;s:17:\"1562309752-04.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(4, 'I Will Do SEO Full On Page And Off Page Optimization For Any Site', 'i-will-develop-ios-and-android-mobile-app-using-react-native-4', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562309822-05.jpg\";i:1;s:17:\"1562309822-06.jpg\";i:2;s:18:\"1562309822-015.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(5, 'I Will Edit And Master Your Audiobook For Acx', 'i-will-develop-ios-and-android-mobile-app-using-react-native-5', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562310441-12.jpg\";i:1;s:17:\"1562310441-19.jpg\";i:2;s:17:\"1562310441-20.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(6, 'I Will Make Professional Excel And Google Sheets', 'i-will-develop-ios-and-android-mobile-app-using-react-native-6', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562310491-02.jpg\";i:1;s:17:\"1562310491-03.jpg\";i:2;s:17:\"1562310491-16.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(7, 'I Will Be Your Ios Developer And Update Old Apps', 'i-will-develop-ios-and-android-mobile-app-using-react-native-7', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562310551-07.jpg\";i:1;s:17:\"1562310551-10.jpg\";i:2;s:17:\"1562310551-11.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(8, 'I Will Create Automated Shopify Dropshipping Store', 'i-will-develop-ios-and-android-mobile-app-using-react-native-8', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562310637-04.jpg\";i:1;s:17:\"1562310637-05.jpg\";i:2;s:17:\"1562310637-16.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(9, 'I Will Test Your Applications Or Websites For Usability', 'i-will-develop-ios-and-android-mobile-app-using-react-native-9', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562311011-13.jpg\";i:1;s:17:\"1562311011-19.jpg\";i:2;s:41:\"1562311011-Ios And Android Mobile App.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(10, 'I Will Write And Publish A Guest Post On Da 80 Dofollow Post', 'i-will-develop-ios-and-android-mobile-app-using-react-native-10', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562311071-03.jpg\";i:1;s:17:\"1562311071-08.jpg\";i:2;s:17:\"1562311071-10.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(11, 'I Will Write And Publish A Guest Post On Da 80 Dofollow Post', 'i-will-develop-ios-and-android-mobile-app-using-react-native-11', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562311115-11.jpg\";i:1;s:17:\"1562311115-16.jpg\";i:2;s:17:\"1562311115-20.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(12, 'I Will Do Embedded C Coding For Tiva C And Other Microcontrollers', 'i-will-develop-ios-and-android-mobile-app-using-react-native-12', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562311202-06.jpg\";i:1;s:17:\"1562311202-19.jpg\";i:2;s:41:\"1562311202-Ios And Android Mobile App.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(13, 'I Will Create Automated Shopify Store For Dropshipping', 'i-will-develop-ios-and-android-mobile-app-using-react-native-13', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:22:\"1562311523-andriod.jpg\";i:1;s:46:\"1562311523-Ios And Android Mobile App copy.jpg\";i:2;s:41:\"1562311523-Ios And Android Mobile App.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(14, 'I Will Create, Fix, Customize, Your WordPress Website', 'i-will-develop-ios-and-android-mobile-app-using-react-native-14', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562311602-10.jpg\";i:1;s:17:\"1562311602-14.jpg\";i:2;s:17:\"1562311602-16.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(15, 'I Will Test Your Website Or Apps Functionality, Usability And More', 'i-will-develop-ios-and-android-mobile-app-using-react-native-15', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562311698-20.jpg\";i:1;s:22:\"1562311698-andriod.jpg\";i:2;s:46:\"1562311698-Ios And Android Mobile App copy.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(16, 'I Will Create Automated Shopify Dropshipping Store, Shopify Website', 'i-will-develop-ios-and-android-mobile-app-using-react-native-16', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:16:\"1562311833-1.jpg\";i:1;s:17:\"1562311833-14.jpg\";i:2;s:18:\"1562311833-015.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(17, 'I Will Launch Your Shopify Dropshipping Store', 'i-will-develop-ios-and-android-mobile-app-using-react-native-17', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:16:\"1562312105-2.jpg\";i:1;s:17:\"1562312105-03.jpg\";i:2;s:17:\"1562312105-04.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(18, 'I Will Setup 7 Figure Shopify Website Shopify Store', 'i-will-develop-ios-and-android-mobile-app-using-react-native-18', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562312214-19.jpg\";i:1;s:17:\"1562312214-20.jpg\";i:2;s:22:\"1562312214-andriod.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(19, 'I Will Redesign Shopify Dropshipping Store To Boost Sales', 'i-will-develop-ios-and-android-mobile-app-using-react-native-19', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562312251-16.jpg\";i:1;s:17:\"1562312251-17.jpg\";i:2;s:17:\"1562312251-18.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29'),
(20, 'I Will Make A Hybrid Application With Android, Php', 'i-will-develop-ios-and-android-mobile-app-using-react-native-20', 'published', 3, 3, 'fluent', 20, '<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu.</p>\r\n                    <p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventoren veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quistm ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor situe sitem amet conctetur adipisci velit sedate quianon.</p>\r\n                    <div class=\"wt-title\">\r\n                    <h3>Why Should You Hire Me?</h3>\r\n                    </div>\r\n                    <p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>\r\n                    <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequei porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitn, sed quia nonae numquam eius modi tempora incidunt labore omnis iste natus error sites voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaem ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq aeuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 6, 'test address', '4568', '4512', 'true', 'true', 'a:3:{i:0;s:17:\"1562312303-04.jpg\";i:1;s:17:\"1562312303-07.jpg\";i:2;s:17:\"1562312303-08.jpg\";}', 'K7YLR93Q', 0, '2022-02-01 11:40:29', '2022-02-01 11:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `service_user`
--

CREATE TABLE `service_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `type` enum('seller','employer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'seller',
  `status` enum('hired','completed','cancelled','pending','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `paid` enum('pending','completed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_progress` enum('in-progress','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in-progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_user`
--

INSERT INTO `service_user` (`id`, `service_id`, `user_id`, `seller_id`, `type`, `status`, `paid`, `paid_progress`) VALUES
(1, 1, 21, 21, 'seller', 'published', NULL, 'in-progress'),
(2, 2, 21, 21, 'seller', 'published', NULL, 'in-progress'),
(3, 3, 21, 21, 'seller', 'published', NULL, 'in-progress'),
(4, 4, 21, 21, 'seller', 'published', NULL, 'in-progress'),
(5, 5, 22, 22, 'seller', 'published', NULL, 'in-progress'),
(6, 6, 22, 22, 'seller', 'published', NULL, 'in-progress'),
(7, 7, 22, 22, 'seller', 'published', NULL, 'in-progress'),
(8, 8, 22, 22, 'seller', 'published', NULL, 'in-progress'),
(9, 9, 13, 13, 'seller', 'published', NULL, 'in-progress'),
(10, 10, 13, 13, 'seller', 'published', NULL, 'in-progress'),
(11, 11, 13, 13, 'seller', 'published', NULL, 'in-progress'),
(12, 12, 13, 13, 'seller', 'published', NULL, 'in-progress'),
(13, 13, 14, 14, 'seller', 'published', NULL, 'in-progress'),
(14, 14, 14, 14, 'seller', 'published', NULL, 'in-progress'),
(15, 15, 14, 14, 'seller', 'published', NULL, 'in-progress'),
(16, 16, 14, 14, 'seller', 'published', NULL, 'in-progress'),
(17, 17, 15, 15, 'seller', 'published', NULL, 'in-progress'),
(18, 18, 15, 15, 'seller', 'published', NULL, 'in-progress'),
(19, 19, 15, 15, 'seller', 'published', NULL, 'in-progress'),
(20, 20, 15, 15, 'seller', 'published', NULL, 'in-progress');

-- --------------------------------------------------------

--
-- Table structure for table `site_managements`
--

CREATE TABLE `site_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_managements`
--

INSERT INTO `site_managements` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 'home_settings', 'a:1:{i:0;a:8:{s:11:\"home_banner\";s:14:\"banner-img.jpg\";s:17:\"home_banner_image\";s:10:\"img-01.png\";s:12:\"banner_title\";s:23:\"Hire expert freelancers\";s:15:\"banner_subtitle\";s:19:\"for any job, Online\";s:18:\"banner_description\";s:101:\"Consectetur adipisicing elit sed dotem eiusmod tempor incuntes ut labore etdolore maigna aliqua enim.\";s:10:\"video_link\";s:43:\"https://www.youtube.com/watch?v=B-ph2g5o2K4\";s:11:\"video_title\";s:17:\"See For Yourself!\";s:10:\"video_desc\";s:43:\"How it works & experience the ultimate joy.\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(2, 'app_desc', '<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce.</p>\r\n                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumed perspiciatis.</p>', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(3, 'app_android_link', 'https://play.google.com/store/apps/details?id=com.app.amento.worketic', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(4, 'app_ios_link', '#', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(5, 'socials', 'a:5:{i:0;a:2:{s:5:\"title\";s:8:\"facebook\";s:3:\"url\";s:1:\"#\";}i:1;a:2:{s:5:\"title\";s:7:\"twitter\";s:3:\"url\";s:1:\"#\";}i:2;a:2:{s:5:\"title\";s:7:\"youtube\";s:3:\"url\";s:1:\"#\";}i:3;a:2:{s:5:\"title\";s:9:\"instagram\";s:3:\"url\";s:1:\"#\";}i:4;a:2:{s:5:\"title\";s:10:\"googleplus\";s:3:\"url\";s:1:\"#\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(6, 'footer_settings', 'a:8:{s:11:\"footer_logo\";s:20:\"1554450384-flogo.png\";s:9:\"footer_bg\";s:21:\"1590754782-img-02.jpg\";s:12:\"footer_style\";s:6:\"style1\";s:11:\"description\";s:187:\"Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce\";s:9:\"copyright\";s:61:\"Copyright © 2019 The Worketic, All Right Reserved Amentotech\";s:12:\"menu_title_1\";s:7:\"Company\";s:12:\"menu_pages_1\";a:3:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";}s:5:\"pages\";a:3:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(7, 'commision', 'a:1:{i:0;a:4:{s:9:\"commision\";s:2:\"20\";s:10:\"min_payout\";s:3:\"250\";s:14:\"payment_method\";a:2:{i:0;s:6:\"paypal\";i:1;s:6:\"stripe\";}s:8:\"currency\";s:3:\"USD\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(8, 'menu_title', 'Explore More', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(9, 'search_menu', 'a:4:{i:0;a:2:{s:5:\"title\";s:18:\"Freelancers in USA\";s:3:\"url\";s:1:\"#\";}i:1;a:2:{s:5:\"title\";s:21:\"Freelancers in Turkey\";s:3:\"url\";s:1:\"#\";}i:2;a:2:{s:5:\"title\";s:11:\"Jobs in USA\";s:3:\"url\";s:1:\"#\";}i:3;a:2:{s:5:\"title\";s:9:\"Find Jobs\";s:3:\"url\";s:1:\"#\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(10, 'settings', 'a:1:{i:0;a:5:{s:5:\"title\";s:8:\"Worketic\";s:5:\"email\";s:20:\"exprotest3@gmail.com\";s:16:\"connects_per_job\";N;s:12:\"gmap_api_key\";N;s:4:\"logo\";s:19:\"1555333800-logo.png\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(11, 'email_data', 'a:1:{i:0;a:7:{s:10:\"from_email\";s:16:\"info@noreply.com\";s:13:\"from_email_id\";s:16:\"info@noreply.com\";s:11:\"sender_name\";s:6:\"Amento\";s:14:\"sender_tagline\";s:17:\"Your Work Partner\";s:10:\"sender_url\";s:39:\"http://amentotech.com/projects/worketic\";s:10:\"email_logo\";s:22:\"1555743744-favicon.png\";s:12:\"email_banner\";s:21:\"1555743744-banner.jpg\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(12, 'section_settings', 'a:1:{i:0;a:12:{s:20:\"home_section_display\";s:4:\"true\";s:10:\"section_bg\";s:21:\"1557484284-banner.jpg\";s:13:\"company_title\";s:16:\"Start As Company\";s:12:\"company_desc\";s:172:\"Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.\";s:11:\"company_url\";s:1:\"#\";s:16:\"freelancer_title\";s:19:\"Start As Freelancer\";s:15:\"freelancer_desc\";s:172:\"Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.\";s:14:\"freelancer_url\";s:1:\"#\";s:19:\"app_section_display\";s:4:\"true\";s:16:\"download_app_img\";s:36:\"1558518016-1557484284-mobile-img.png\";s:9:\"app_title\";s:20:\"Limitless Experience\";s:12:\"app_subtitle\";s:30:\"Roam Around With Your Business\";}}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(13, 'show-page-1', 'true', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(14, 'show-page-3', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(15, 'access_type', 'both', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(16, 'show-page-5', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(17, 'show-banner-5', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(18, 'show-page-6', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(19, 'show-banner-6', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(20, 'show-page-7', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(21, 'show-banner-7', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(22, 'homepage', 'a:1:{s:4:\"home\";s:1:\"5\";}', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(23, 'show-page-2', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(24, 'show-banner-2', '1', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(25, 'page-banner-2', '1579950098-img-02.jpg', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(26, 'show-page-8', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(27, 'show-banner-8', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(28, 'show-page-9', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(29, 'show-banner-9', '0', '2022-02-01 11:40:26', '2022-02-01 11:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Android', 'android', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(2, 'API', 'api', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(3, 'C++', 'c', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(4, 'Content Writing', 'content-writing', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(5, 'CSS', 'css', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(6, 'Facebook API', 'facebook-api', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(7, 'Graphic Design', 'graphic-design', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(8, 'HTML 5', 'html-5', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(9, 'Java', 'java', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(10, 'Jquery', 'jquery', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(11, 'My SQL', 'my-sql', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(12, 'PHP', 'php', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(13, 'SEO', 'seo', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(14, 'Website Design', 'website-design', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23'),
(15, 'WordPress', 'wordpress', NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `skill_user`
--

CREATE TABLE `skill_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `skill_rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_user`
--

INSERT INTO `skill_user` (`id`, `user_id`, `skill_id`, `skill_rating`, `created_at`, `updated_at`) VALUES
(1, 13, 2, 100, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(2, 13, 3, 100, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(3, 14, 4, 90, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(4, 14, 5, 70, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(5, 14, 6, 80, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(6, 15, 7, 65, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(7, 16, 8, 75, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(8, 17, 9, 90, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(9, 17, 10, 50, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(10, 17, 4, 78, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(11, 18, 7, 69, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(12, 18, 8, 84, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(13, 19, 13, 100, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(14, 19, 14, 80, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(15, 20, 2, 15, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(16, 20, 3, 21, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(17, 20, 4, 99, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(18, 20, 5, 85, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(19, 21, 10, 14, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(20, 21, 11, 89, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(21, 22, 12, 23, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(22, 23, 15, 35, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(23, 19, 9, 72, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(24, 18, 13, 95, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(25, 23, 8, 45, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(26, 24, 8, 45, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(27, 24, 10, 45, '2022-02-01 11:40:26', '2022-02-01 11:40:26'),
(28, 15, 98, 80, '2022-02-01 11:40:26', '2022-02-01 11:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `verification_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_verified` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_disabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `slug`, `email`, `password`, `badge_id`, `expiry_date`, `location_id`, `verification_code`, `user_verified`, `remember_token`, `created_at`, `updated_at`, `is_disabled`) VALUES
(1, 'chris', 'evans', 'chris-evans', 'admin@amentotech.com', '$2y$10$6tuGhSdGHnOaVZZrQdiV7uWFhTq4JR6rRRfg2KZ6PS1PXOY4HuZve', NULL, NULL, 1, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(2, 'Ava', 'Nguyen', 'ava-nguyen', 'ava@amentotech.com', '$2y$10$GNnJkiXOjeZztvB5YAA7reLaAA0olQK1fN0BRR5psQQ56hO4i6JLu', NULL, '2022-03-03 16:40:21', 1, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(3, 'Charlotte', 'Morton', 'charlotte-morton', 'Charlotte@amentotech.com', '$2y$10$vYlFqP/QdV/xGmuEPHORNeWpvksl70ZLaQ4ay9SGcRXFKh97LF9/S', NULL, '2022-03-03 16:40:21', 1, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(4, 'Cooper', 'White', 'cooper-white', 'white@amentotech.com', '$2y$10$7yVFwqKjPXAmcqxaYcydX.KMxAGypONCBF/Btr5to5GL5wDpBVJ2m', NULL, '2022-02-11 16:40:21', 1, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(5, 'Elijah', 'Johnson', 'elijah-johnson', 'johnson@amentotech.com', '$2y$10$ggfh8fvznJmIgbxM9WcNkuUZjVkPDHSLyxN5sGmckxV9qzvw9XZpm', NULL, '2022-03-03 16:40:21', 2, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(6, 'Brooklyn', 'Chan', 'brooklyn-chan', 'chan@amentotech.com', '$2y$10$VYAay6yzSH.GFM9StB1V5.504heP7/LWr5Twn38sjhzyuMQCVr58W', NULL, '2023-01-27 16:40:21', 2, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(7, 'Beau', 'Simard', 'beau-simard', 'beau@amentotech.com', '$2y$10$DXnanVMvkKA09jBItawTg.MMvYs9IAR2iemvtJ.7o80hN9hWCxdqK', NULL, '2022-03-03 16:40:21', 2, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(8, 'Isobel', 'Jones', 'isobel-jones', 'isobel@amentotech.com', '$2y$10$BxAveWy8jqyYqXmA.fszQet/8j6gsLjYzAZW.ayUVPjeWgoRr4Bv2', NULL, '2022-02-11 16:40:21', 3, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(9, 'Kian', 'Johnson', 'kian-johnson', 'kian@amentotech.com', '$2y$10$cHhW7U9dld7m7zoVAlyquO3KXQYmbanolTEj/PRABkKy4crL720Uu', NULL, '2022-03-03 16:40:21', 3, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(10, 'Sarah', 'Chapman', 'sarah-chapman', 'sarah@amentotech.com', '$2y$10$VEOAhCfJKFSPfTOkRPCM5e5zgp.CrEX.QiHipCg.4Wmm3Uvf2kc5G', NULL, '2023-01-27 16:40:21', 3, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(11, 'Abhinav', 'Balasubramanium', 'abhinav-balasubramanium', 'balasubramanium@amentotech.com', '$2y$10$W1Gb6W2eK6D1EMRjAWEwh.9oIat4uob1mH37gcfN7WhqMk9VPYrHG', NULL, '2022-03-03 16:40:21', 4, NULL, 1, NULL, '2022-02-01 11:40:21', '2022-02-01 11:40:21', 'false'),
(12, 'Anika', 'Gavde', 'anika-gavde', 'anika@amentotech.com', '$2y$10$xaTPRGAkY1jX6q6wzYnhxuVrLFy/Aem5NzZa1gVzTtnn79oAvGoFO', '1', '2022-02-11 16:40:22', 4, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(13, 'Shreyas', 'Malhotra', 'shreyas-malhotra', 'shreyas@amentotech.com', '$2y$10$yYEONwBUAKM3zDEHkI/fu.HnpN6NbHWVv0bnGX6b1E/KctZtSv5/O', '3', '2022-03-03 16:40:22', 4, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(14, 'Alara', 'Tekin', 'alara-tekin', 'tekin@amentotech.com', '$2y$10$4HgMUCC61afXhNB8FFn7Wu1YlHytecQxO6blgTEEIPKKkC9hKVD2K', '1', '2022-03-03 16:40:22', 5, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(15, 'Sait', 'Karaca', 'sait-karaca', 'karaca@amentotech.com', '$2y$10$G/2NM7DYUkedoPV6aPDvNu0OMmHC/A.iX1tggANG2ddQ3CgGgBvE.', '1', '2022-03-03 16:40:22', 5, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(16, 'Hüsnü', 'Çomak', 'hüsnü-comak', 'comak@amentotech.com', '$2y$10$BQnIqNwFLZh7E.hZbSbfMemMNWyS4rocQAnmG/v3MIXic49QTztkq', '2', '2023-01-27 16:40:22', 5, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(17, 'Jack', 'Mills', 'jack-mills', 'mills@amentotech.com', '$2y$10$5HfLSQpE9Q38x7gJw/DFIOyde7RG6FzBHtdSpKrxZ1zvO0SBEL98u', '3', '2022-03-03 16:40:22', 6, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(18, 'Judy', 'Dixon', 'judy-dixon', 'dixon@amentotech.com', '$2y$10$0XgaMo1tQap3wSvd/T2qH.juzcEQWL0RKpKwz3nWg5Xudozmtou5y', '2', '2022-03-03 16:40:22', 6, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(19, 'Ann', 'Coleman', 'ann-coleman', 'coleman@amentotech.com', '$2y$10$fGvk17egylbpqTuNBcYgC.PZbMAYp5XlLc3cxSGkZcIMVSiKJ28Vq', '1', '2022-03-03 16:40:22', 6, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(20, 'Louis', 'James', 'louis-james', 'james@amentotech.com', '$2y$10$0JDkuzHi/NFB8nuTSeUUj.B7tLCEtd2v9vZ6iz5//W0lcVm5/Azum', '3', '2023-01-27 16:40:22', 7, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(21, 'Kai', 'Clarke', 'kai-clarke', 'kai@amentotech.com', '$2y$10$GqI.zWDyzi/4UcxeV5yHouCTiQ/jde63oBdxgveLG6ziCZ0AJEUcO', NULL, '2022-03-03 16:40:22', 7, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(22, 'Georgia', 'Baker', 'georgia-baker', 'baker@amentotech.com', '$2y$10$t6PI9QgGtMKIzOHiQ5nPEefSnonPHpWsdua5diFeHi/HdQyfDT3vC', '2', '2022-03-03 16:40:22', 7, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(23, 'Ralph', 'Davis', 'ralph-davis', 'davis@amentotech.com', '$2y$10$kEPS2dLB5mXj2uWk741am.kXDPjsTnACUhg1QlmJA/zzv4BeidkUy', '3', '2022-03-03 16:40:22', 8, NULL, 1, NULL, '2022-02-01 11:40:22', '2022-02-01 11:40:22', 'false'),
(24, 'Alexa', 'Xavier', 'jhon-xavier', 'jhon@amentotech.com', '$2y$10$tnWKq2nlban8EjvCNkQCLON29frN9Jr4HPUpG2S8FI.H4Ss36cpM.', '2', '2023-01-27 16:40:23', 8, NULL, 1, NULL, '2022-02-01 11:40:23', '2022-02-01 11:40:23', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_article_id_foreign` (`article_id`),
  ADD KEY `article_category_article_category_id_foreign` (`article_category_id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catables`
--
ALTER TABLE `catables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_location`
--
ALTER TABLE `child_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_pages`
--
ALTER TABLE `child_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_times`
--
ALTER TABLE `delivery_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disputes`
--
ALTER TABLE `disputes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_types`
--
ALTER TABLE `email_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `i_p_n_statuses`
--
ALTER TABLE `i_p_n_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobs_slug_unique` (`slug`),
  ADD KEY `jobs_user_id_index` (`user_id`);

--
-- Indexes for table `job_skill`
--
ALTER TABLE `job_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langables`
--
ALTER TABLE `langables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_slug_unique` (`slug`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_slug_unique` (`slug`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_index` (`user_id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metas_metable_type_metable_id_index` (`metable_type`,`metable_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `packages_slug_unique` (`slug`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payouts_user_id_index` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_messages`
--
ALTER TABLE `private_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_messages_to`
--
ALTER TABLE `private_messages_to`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal_documents`
--
ALTER TABLE `proposal_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response_times`
--
ALTER TABLE `response_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_index` (`user_id`);

--
-- Indexes for table `review_options`
--
ALTER TABLE `review_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `service_user`
--
ALTER TABLE `service_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_managements`
--
ALTER TABLE `site_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_slug_unique` (`slug`);

--
-- Indexes for table `skill_user`
--
ALTER TABLE `skill_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catables`
--
ALTER TABLE `catables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `child_location`
--
ALTER TABLE `child_location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_pages`
--
ALTER TABLE `child_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `delivery_times`
--
ALTER TABLE `delivery_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `disputes`
--
ALTER TABLE `disputes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `email_types`
--
ALTER TABLE `email_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `i_p_n_statuses`
--
ALTER TABLE `i_p_n_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `job_skill`
--
ALTER TABLE `job_skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `langables`
--
ALTER TABLE `langables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_messages`
--
ALTER TABLE `private_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `private_messages_to`
--
ALTER TABLE `private_messages_to`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proposal_documents`
--
ALTER TABLE `proposal_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `response_times`
--
ALTER TABLE `response_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review_options`
--
ALTER TABLE `review_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_user`
--
ALTER TABLE `service_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `site_managements`
--
ALTER TABLE `site_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `skill_user`
--
ALTER TABLE `skill_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_categories` (`id`),
  ADD CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payouts`
--
ALTER TABLE `payouts`
  ADD CONSTRAINT `payouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
