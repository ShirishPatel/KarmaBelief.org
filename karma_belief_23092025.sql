-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2025 at 04:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karma_belief`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_inquiry`
--

CREATE TABLE `about_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_inquiry`
--

INSERT INTO `about_inquiry` (`id`, `user_id`, `heading`, `btn_label`, `btn_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Let\'s Do Something Amazing Together!!', 'Get Started with us', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=vibrant_db&table=about_inquiry', 'Ready to elevate your online presence? Get in touch with us today for personalized solutions tailored to your business needs.', '2025-07-24 05:53:31', '2025-07-30 03:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `about_technologies`
--

CREATE TABLE `about_technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `tag_line` varchar(255) DEFAULT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_technologies`
--

INSERT INTO `about_technologies` (`id`, `heading`, `tag_line`, `data`, `image`, `btn_label`, `btn_link`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'We are nonprofit team and work worldwide', 'Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason', 'Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason', 'about_technologies/LuvekH0Qtv2h34Iima0YIbqJFrFVdGIKu604ykHq.jpg', 'Get Started with us', 'http://127.0.0.1:8000/about-us', '1', '2025-07-22 01:39:04', '2025-09-15 20:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_counter_`
--

CREATE TABLE `about_us_counter_` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_heading` varchar(255) DEFAULT NULL,
  `counters` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_counter_`
--

INSERT INTO `about_us_counter_` (`id`, `main_heading`, `counters`, `created_at`, `updated_at`) VALUES
(1, 'We Take Your Ideas And Make Them Happen', '[{\"title\":\"Distribution of Wheel Chairs\",\"value\":\"277,067\",\"city\":\"India\"},{\"title\":\"Service of Patients Meals\",\"value\":\"39,289,042\",\"city\":\"Gujarat\"},{\"title\":\"Distribution of Clothes\",\"value\":\"2,575\",\"city\":\"India\"},{\"title\":\"Blanket Distribution\",\"value\":\"192,000\",\"city\":\"India\"},{\"title\":\"Distribution of Crutches\",\"value\":\"301,304\",\"city\":\"India\"},{\"title\":\"Distribution of Calipers\",\"value\":\"366,961\",\"city\":\"India\"},{\"title\":\"Corrective Surgeries\",\"value\":\"429,917\",\"city\":\"India\"},{\"title\":\"Distribution of TriCycles\",\"value\":\"265,863\",\"city\":\"India\"}]', '2025-07-22 06:37:27', '2025-09-19 21:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_mission_vission`
--

CREATE TABLE `about_us_mission_vission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_1` varchar(255) DEFAULT NULL,
  `heading_2` varchar(255) DEFAULT NULL,
  `description_1` text DEFAULT NULL,
  `description_2` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_mission_vission`
--

INSERT INTO `about_us_mission_vission` (`id`, `heading_1`, `heading_2`, `description_1`, `description_2`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'Our Vision', 'We are dedicated to providing a wide range of services that satisfy our customers\' business demands at reasonable pricing. Our company strategy is to recognize, comprehend, and satisfy our clients\' needs. Maintain client relationships by acting as a trusted partner and assisting customers in resolving issues with the application. Maintain a positive work atmosphere that encourages, recognizes, and rewards top performers. Maintain a work atmosphere that promotes personal and professional development and long-term customer loyalty.', 'In an oncoming era of technology, to create an environment that denotes IT abundance, with innovative and stylish web development, mobile app development, software devlopment, and cloud solutions.', '2025-07-22 05:55:23', '2025-07-22 05:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_gallery`
--

CREATE TABLE `aiml_home_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_title` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_gallery`
--

INSERT INTO `aiml_home_gallery` (`id`, `tag_title`, `header`, `description`, `data`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'OurCorefeatures', 'Predictive Analytics:', 'Predictive Analytics: How We Helped E-commerce Giant Boost Sales by 45%\r\nView Case Study \r\nimage\r\nComputer Vision\r\nAI\r\nImplementing Smart Quality Control: Manufacturing Defect Detection System\r\nView Case Study \r\nimage\r\nNatural Language Processing\r\nAI-Powered Customer Service: Chatbot Solution Reduces Response Time by 80%\r\nView Case Study \r\nimage\r\nMachine Learning\r\nPredictive Analytics: How We Helped E-commerce Giant Boost Sales by 45%', '[{\"image\":\"aiml_gallery\\/0BZMe7opUWGIo9yELeKKfwbz3CrgoXdQdOfAeq57.png\",\"tags\":[\"Predictive\",\"commerce\",\"Analytics\"]},{\"image\":\"aiml_gallery\\/EukjKrNFeLn8VF1yEi2dJXsElOFoG61oF93m4MJE.png\",\"tags\":[\"Giant\",\"Sales\"]},{\"image\":\"aiml_gallery\\/bJ3FyAyNnQNDkC3NHND0nR54juFzNA3HbaXGC0E6.png\",\"tags\":[\"Helped\",\"Boost\"]}]', '1', '2025-07-30 07:44:09', '2025-07-30 20:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_gallery_tag`
--

CREATE TABLE `aiml_home_gallery_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_gallery_tag`
--

INSERT INTO `aiml_home_gallery_tag` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Mind Tech', 'mind-tech', '1', '2025-07-30 05:52:21', '2025-07-30 06:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero`
--

CREATE TABLE `aiml_home_hero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero`
--

INSERT INTO `aiml_home_hero` (`id`, `user_id`, `tag_line`, `heading`, `description`, `image`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Designing for the futurea', 'Empowering Your Business With Artificial', 'And In Order To Make A Business, Brand Advertising And Marketing Plays An Important Role. Similarly, In', 'home-hero-sections/NoifLJV5aAJFwxBwmyZX1FofrexhCdbBZQ35JWTL.png', 'Discover More', 'http://127.0.0.1:8000/admin/ai-ml', '2025-07-29 05:22:52', '2025-07-29 05:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero_about`
--

CREATE TABLE `aiml_home_hero_about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `about_company` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`about_company`)),
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero_about`
--

INSERT INTO `aiml_home_hero_about` (`id`, `user_id`, `title_tag`, `heading`, `description`, `btn_label`, `btn_link`, `about_company`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, '1', 'About Company', 'Experience intelligence like  never before', 'You can access SaaS applications through a web browser or mobile app, as long as you have an internet connection.', 'Discover More', 'http://127.0.0.1:8000/admin/ai-ml', '[\"Mistakes To Avoid to the\",\"Your Startup industry stan\",\"Mistakes To Avoid to the\",\"Your Startup industry stan\"]', 'about_company/8GVlCcNKrb6OEGb4LaFMBGiTH6lT0ybxYePtaMuE.png', 'about_company/dwv8Bn441Hice7ExhobkosEX9e8Rc5zn83uMIGcH.png', '2025-07-29 05:25:40', '2025-07-29 05:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero_process`
--

CREATE TABLE `aiml_home_hero_process` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `process` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`process`)),
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero_process`
--

INSERT INTO `aiml_home_hero_process` (`id`, `title_tag`, `heading`, `description`, `process`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'WORK PROCESS', 'Empowering You rBusiness With Artificial', 'Experience the transformation as we elevate your brand’s\r\nonline presence, making it unforgettable.', '[{\"title\":\"Assessment\",\"value\":\"Research ipsum dolor sit consec tetur sed diam in the aliquam tempor\"},{\"title\":\"Implementationplanning\",\"value\":\"Create ipsum dolor sit consec tetur sed diam in the aliquam tempor\"},{\"title\":\"Capabilities\",\"value\":\"Develope ipsum dolor sit consec tetur sed diam in the aliquam tempor\"},{\"title\":\"Innovation\",\"value\":\"Shop ipsum dolor sit consec tetur Malesuada sed diam in the\"}]', '1', '2025-07-29 05:56:01', '2025-07-29 05:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero_services`
--

CREATE TABLE `aiml_home_hero_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `image` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero_services`
--

INSERT INTO `aiml_home_hero_services` (`id`, `title_tag`, `heading`, `description`, `services`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Best Service', 'Unlocking The Potential Of Data With Ai', 'Experience the transformation as we elevate your brand’s\r\nonline presence, making it unforgettable.', '[{\"title\":\"AI Consult\",\"value\":\"We delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"},{\"title\":\"Neural Solutions\",\"value\":\"We delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"},{\"title\":\"Data Mind\",\"value\":\"OWe delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"},{\"title\":\"Wise Logic\",\"value\":\"We delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"}]', 'home-hero-services/mVngrsEqQ0VH2m2OqME2I4Yvycuz7SZPShWTdjsb.png', '1', '2025-07-29 05:28:09', '2025-07-29 05:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `award_testimonials`
--

CREATE TABLE `award_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `counter` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_testimonials`
--

INSERT INTO `award_testimonials` (`id`, `user_id`, `image`, `heading`, `tag_line`, `counter`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'about-tech/bJp8MTkSBuKfwE2edrppxWSbmLfc4gsL96tkHpLs.png,about-tech/NOfNibMsslNWkbnrAvp1Ph8uWTdISSAINUTXSJkT.png,about-tech/htykcFBPqhIU3yOPbaZlIYfENz8URXZA8LoAXIKf.png,about-tech/YoDDfHI55CpKL60KvZP7FAWEnJUXVxqiLI4vJF1J.png', 'Awards & Testimonials', 'Voices of Victory', '[{\"title\":\"verified reviews on Clutch\",\"value\":\"10+\"},{\"title\":\"Average rating on Clutch\",\"value\":\"5.0+\"}]', 'A satisfied client is the best indicator of collaboration success and approach to a project.', '2025-07-25 07:21:06', '2025-07-25 23:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `blog_description` longtext NOT NULL,
  `featured_image` text NOT NULL,
  `is_display` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`is_display`)),
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'technical', 'technical', '1', '1', '2025-07-26 02:09:33', '2025-07-27 23:06:58'),
(3, 'Health & Wellness', 'health-wellness', '1', '1', '2025-07-26 02:45:00', '2025-07-26 02:45:00'),
(4, 'keyword', 'keyword', '1', '1', '2025-07-27 23:07:32', '2025-07-27 23:07:32'),
(5, 'research', 'research', '1', '1', '2025-07-27 23:07:41', '2025-07-27 23:07:41'),
(6, 'information', 'information', '1', '1', '2025-07-27 23:07:50', '2025-07-27 23:07:50'),
(7, 'website', 'website', '1', '1', '2025-07-27 23:07:58', '2025-07-27 23:07:58'),
(8, 'page', 'page', '1', '1', '2025-07-27 23:08:08', '2025-07-27 23:08:08'),
(9, 'ios', 'ios', '1', '1', '2025-07-27 23:08:24', '2025-07-27 23:08:24'),
(10, 'technology', 'technology', '1', '1', '2025-07-27 23:08:33', '2025-07-27 23:08:33'),
(11, 'design', 'design', '1', '1', '2025-07-27 23:08:42', '2025-07-27 23:08:42'),
(12, 'marketing', 'marketing', '1', '1', '2025-07-27 23:08:50', '2025-07-27 23:08:50'),
(13, 'corporate', 'corporate', '1', '1', '2025-07-27 23:08:58', '2025-07-27 23:08:58'),
(14, 'seo', 'seo', '1', '1', '2025-07-27 23:09:06', '2025-07-27 23:09:06'),
(15, 'tech', 'tech', '1', '1', '2025-07-27 23:09:12', '2025-07-27 23:09:12'),
(16, 'media', 'media', '1', '1', '2025-07-27 23:09:19', '2025-07-27 23:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_categories`
--

CREATE TABLE `case_study_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_categories`
--

INSERT INTO `case_study_categories` (`id`, `name`, `description`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Brand Identity', 'Develop unique and memorable brand elements. Logo design, color palette, and typography selection.', 'brand-identity', '1', '1', '2025-07-29 06:36:32', '2025-07-29 06:36:32'),
(2, 'Content creation', 'Engaging and SEO-friendly copywriting for websites and marketing materials.', 'content-creation', '1', '1', '2025-07-29 06:37:28', '2025-07-29 06:37:28'),
(3, 'Development', 'Full-stack development for robust and scalable solutions. Customized web and mobile application development.', 'development', '1', '1', '2025-07-29 06:38:40', '2025-07-29 06:38:40'),
(4, 'Product Design', 'Conceptualize and design innovative digital products. Focus on user needs, functionality, and aesthetics.', 'product-design', '1', '1', '2025-07-29 06:38:52', '2025-07-29 06:38:52'),
(5, 'UI/UX Design', 'Craft visually appealing and user-friendly interfaces. Enhance user experience through intuitive design.', 'uiux-design', '1', '1', '2025-07-29 06:39:06', '2025-07-29 06:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_technologies`
--

CREATE TABLE `case_study_technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_technologies`
--

INSERT INTO `case_study_technologies` (`id`, `name`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Technologys', 'technologys', '1', '1', '2025-07-30 00:59:28', '2025-07-30 00:59:28'),
(2, 'Home & Kitchen', 'home-kitchen', '1', '1', '2025-07-30 01:26:56', '2025-07-30 01:26:56'),
(3, 'Development', 'development', '1', '1', '2025-07-30 10:44:15', '2025-07-30 10:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `client_stories`
--

CREATE TABLE `client_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `disc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_stories`
--

INSERT INTO `client_stories` (`id`, `user_id`, `heading`, `disc`, `created_at`, `updated_at`) VALUES
(1, '1', 'INITIAL DONATIONS', 'Dive into the success stories of Vibrant Software Technologies\'s clients—where digital dreams become reality.', '2025-07-23 00:33:52', '2025-09-09 20:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `client_stories_section`
--

CREATE TABLE `client_stories_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `client_heading` text NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_role` varchar(255) NOT NULL,
  `client_status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_stories_section`
--

INSERT INTO `client_stories_section` (`id`, `user_id`, `client_heading`, `client_image`, `client_name`, `client_role`, `client_status`, `created_at`, `updated_at`) VALUES
(6, '1', 'A heartfelt thank you for the generous donation of ₹50,001 towards our Tree Plantation\r\n                                    initiative. This contribution will help us plant and nurture trees, creating a greener\r\n                                    and healthier tomorrow. Your support inspires us to continue our mission of protecting\r\n                                    nature and serving humanity.', 'uploads/client_stories/WxEqOyKXm5v5TyTk6x4gFvLFC6jqLZRrSfJ7gMBf.jpg', 'Shirish Patel', 'Donor', '1', '2025-09-09 20:30:38', '2025-09-09 20:38:03'),
(7, '1', 'We sincerely thank you for the generous donation of ₹50,001 towards providing food,\r\n                                    clothing, and essentials to homeless individuals. Your kindness brings comfort, dignity,\r\n                                    and hope to those in need. Together, we can create a world where no one is left behind.', 'client_stories/PuAnwEZwlHQ8bfzQX8SC9c186kalDsPvUG2CAgCx.jpg', 'Jigisha Patel', 'Donor', '1', '2025-09-09 20:38:33', '2025-09-09 20:38:33'),
(8, '1', 'We deeply appreciate the generous donation of ₹50,001 towards helping the disabled. Your\r\n                                    support empowers differently-abled individuals with care, dignity, and opportunities to\r\n                                    live a better life. Together, we can build an inclusive society where everyone has the\r\n                                    chance to thrive.', 'client_stories/cbcB9muxWADNSfsaI4Qcxm7edbw97xVRU8t9IY4d.jpg', 'Bipinbhai Patel', 'Donor', '1', '2025-09-09 20:39:14', '2025-09-09 20:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_logo_dark` text DEFAULT NULL,
  `site_logo_light` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `social_facebook` varchar(255) DEFAULT NULL,
  `social_twitter` varchar(255) DEFAULT NULL,
  `social_instagram` varchar(255) DEFAULT NULL,
  `social_linkedin` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `footer_business_image` text DEFAULT NULL,
  `footer_business_description` text DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `site_name`, `site_logo_dark`, `site_logo_light`, `favicon`, `email`, `phone`, `address`, `social_facebook`, `social_twitter`, `social_instagram`, `social_linkedin`, `site_description`, `footer_business_image`, `footer_business_description`, `user_id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `from_email`, `created_at`, `updated_at`) VALUES
(1, 'Karma Belief', 'web_image/uBXDjsg86IQ0h0OAFnHtURbvZrwNhwvbR8EQxeO1.png', 'web_image/n1YqXivoxCh53eF3Ddat5VuVSBsRjvrRz56EjZmV.png', 'web_image/7pIPu3BjrBKwDrP94EP5ipHJgWYSY8JIRHRLdk7g.png', 'info@karmabelief.com', '0000000000', 'B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA)', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'web_image/h8Mn2cthUDcEle9qtCuxFIEJmwTf4hoVFicadLLz.png', 'Your insights matter! Drop us a line and share your thoughts. AgenShark values your feedback and looks forward to hearing from you.', '1', 'smtp', 'sandbox.smtp.mailtrap.io', '2525', '0761f483b96314', 'c27afcc38e02f6', 'hello@example.com', NULL, '2025-09-09 20:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `massage` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `subject_name`, `email`, `massage`, `created_at`, `updated_at`) VALUES
(2, 'Mehul Prajapati', '9662583837', 'Vision Computer', 'visioncomputer@gmail.com', 'Web development services', '2025-05-13 20:51:56', '2025-05-13 20:51:56'),
(3, 'prajapati prem', '9313591287', 'Error', 'prem81481@gmail.com', 'vsfdg', '2025-07-28 03:33:48', '2025-07-28 03:33:48'),
(5, 'Mukeshbhai Ishwarbhai Prajapati', '9874561214', 'About Validation Fail', 'admin.easycart@gmail.com', 'Multiple times we are noticed that a validation error may be occupired, when i make currect Mobile Number than They will Showing me The Number Formate is undefined', '2025-07-28 04:26:57', '2025-07-28 04:26:57'),
(6, 'Sinal Mevada', '5865542515', 'cONFIGURSTION', 'smp34@gmail.com', 'IDJB HF VIUCRED INDORTIOS JEXDO', '2025-07-28 23:32:17', '2025-07-28 23:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero`
--

CREATE TABLE `c_d_home_hero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero`
--

INSERT INTO `c_d_home_hero` (`id`, `user_id`, `tag_line`, `heading`, `description`, `image`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Building Your Digital Future', 'Custom Software Development Solutions', 'Transform your business with tailored software solutions that perfectly align with your unique requirements and goals.', 'home-hero-sections/5SPvnj97ysgQVXpSqZjSj7bloapQfu5CnAp0wl9i.png', 'Get Started', 'http://127.0.0.1:8000/custom-development', '2025-07-29 01:30:28', '2025-07-29 01:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero_expertise`
--

CREATE TABLE `c_d_home_hero_expertise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `expertise` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`expertise`)),
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero_expertise`
--

INSERT INTO `c_d_home_hero_expertise` (`id`, `user_id`, `title_tag`, `heading`, `description`, `btn_label`, `btn_link`, `expertise`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, '1', 'Our Expertise', 'Crafting Custom Solutions for Your Success', 'We specialize in developing tailored software solutions that drive innovation and efficiency in your business operations.', 'start your project', 'http://127.0.0.1:8000/admin/c-d-home-hero', '[\"Web Applications\",\"Enterprise Software\",\"Mobile Solutions\",\"API Integration\",\"Development\"]', 'expertise/qHLxD3VQJwdBUeYfnK0EALiJ6eHSM2UPpjN9iEoe.png', 'expertise/r7zam5oXL3YWlpAWRqNTwEVMMXnfuZXzDCdiJQky.png', '2025-07-29 02:01:41', '2025-07-29 02:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero_process`
--

CREATE TABLE `c_d_home_hero_process` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `process` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`process`)),
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero_process`
--

INSERT INTO `c_d_home_hero_process` (`id`, `title_tag`, `heading`, `description`, `process`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'DEVELOPMENT PROCESS', 'OurProven Development Methodology', 'We follow a systematic approach to deliver high-quality software solutions\r\nthat exceed expectations.', '[{\"title\":\"Requirements Analysis\",\"value\":\"Thorough analysis of your business needs and project requirements\"},{\"title\":\"Design & Planning\",\"value\":\"Creating detailed technical specifications and project roadmap\"},{\"title\":\"Development\",\"value\":\"Agile development with regular updates and iterations\"},{\"title\":\"Testing &  Deployment\",\"value\":\"Rigorous testing and smooth deployment process\"}]', '1', '2025-07-29 04:18:34', '2025-07-29 04:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero_services`
--

CREATE TABLE `c_d_home_hero_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `image` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero_services`
--

INSERT INTO `c_d_home_hero_services` (`id`, `title_tag`, `heading`, `description`, `services`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Services', 'Comprehensive Development Solutions', 'From concept to deployment, we deliver end-to-end custom software solutions\r\nthat drive your business forward.', '[{\"title\":\"API Integration\",\"value\":\"Seamless integration with third-party services and existing systems.\"},{\"title\":\"Mobile Apps\",\"value\":\"Enterprise Software\"},{\"title\":\"Cloud Solutions\",\"value\":\"Scalable cloud-based applications and infrastructure solutions.\"},{\"title\":\"DevOps Services\",\"value\":\"Continuous integration and deployment with modern DevOps practices.\"}]', 'home-hero-services/a4F0X290uYIEzirEu1Rc2fQSVFmc10mcQYDJIGBT.png', '1', '2025-07-29 03:09:27', '2025-07-29 03:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_inquiry`
--

CREATE TABLE `c_d_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_inquiry`
--

INSERT INTO `c_d_inquiry` (`id`, `user_id`, `heading`, `btn_label`, `btn_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Ready to Start Your Custom Development', 'Start Your Project', 'http://127.0.0.1:8000/admin/about-inquiry', 'Let\'s discuss your project requirements and create a solution that perfectly fits your needs. Get in touch with our development team today!', '2025-07-30 03:16:20', '2025-07-30 03:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_inquiry`
--

CREATE TABLE `dynamic_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dynamic_inquiry`
--

INSERT INTO `dynamic_inquiry` (`id`, `user_id`, `heading`, `btn_label`, `btn_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Ready to Transform Your Businessshape with Dynamic Solutions?', 'Start Your Transformation', 'http://127.0.0.1:8000/dynamic-solution', 'Let\'s discuss how our dynamic solutions can help your business grow. Get in touch with our team today!', '2025-07-30 03:18:25', '2025-07-30 03:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `home_hero_sections`
--

CREATE TABLE `home_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `btn_label_1` varchar(255) NOT NULL,
  `btn_link_1` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_hero_sections`
--

INSERT INTO `home_hero_sections` (`id`, `tag_line`, `heading`, `description`, `image`, `btn_label_1`, `btn_link_1`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Serving Humanity, Everywhere We Go.', 'We are nonprofit team and work worldwide', 'Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason', 'home_hero_sections/B130KpiehRhSC8bRmtgtidvGlV3KQl4cTCNV5KSw.png', 'Show more', 'http://127.0.0.1:8000/contact-us', '1', '2025-07-18 05:40:55', '2025-09-02 19:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `disc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `user_id`, `heading`, `title`, `disc`, `created_at`, `updated_at`) VALUES
(1, '1', 'Services and Portfolio', 'Our Services and  Works', 'Experience the transformation as we elevate your brand’s\r\nonline presence, making it unforgettable.', '2025-07-22 23:33:27', '2025-07-22 23:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_05_12_163633_create_configurations_table', 2),
(7, '2025_05_13_021355_create_testimonials_table', 3),
(8, '2025_05_13_160254_create_blogs_table', 4),
(9, '2025_05_14_015955_create_contacts_table', 5),
(10, '2025_07_18_104644_create_home_hero_sections_table', 6),
(11, '2025_07_21_052340_create_our_values_sections_table', 7),
(12, '2025_07_21_052352_create_our_values_table', 7),
(13, '2025_07_21_112321_create_smart_solutions_table', 8),
(14, '2025_07_21_112337_create_solutions_table', 8),
(15, '2025_07_22_054916_create_why_choose_us_table', 9),
(16, '2025_07_22_054935_create_why_choose_us_list_table', 9),
(17, '2025_07_22_060830_create_about_technologies_table', 10),
(18, '2025_07_22_075831_create_about_us_mission_vission_table', 11),
(19, '2025_07_22_075901_create_about_us_counter__table', 11),
(20, '2025_07_22_112941_create_success_table', 12),
(21, '2025_07_22_130041_create_about_our_values_table', 13),
(22, '2025_07_23_042406_create_home_services_table', 14),
(23, '2025_07_23_054219_create_client_stories_section_table', 15),
(24, '2025_07_23_054226_create_client_stories_table', 15),
(25, '2025_07_23_080204_create_solutions_btn_setting_table', 16),
(26, '2025_07_23_101414_create_our_progress_table', 17),
(27, '2025_07_23_101428_create_our_progress_section_table', 17),
(29, '2025_07_24_050548_create_team_members_table', 19),
(30, '2025_07_24_050727_create_team_members_section_table', 19),
(31, '2025_07_24_050019_create_about_inquiry_table', 20),
(32, '2025_07_24_103250_create_award_testimonials_table', 21),
(33, '2025_07_24_111207_create_testimonials_poster_table', 21),
(34, '2025_07_26_072006_create_blog_categories_table', 22),
(35, '2025_07_29_064944_create_c_d_home_hero_table', 23),
(36, '2025_07_29_072246_create_c_d_home_hero_expertise_table', 24),
(37, '2025_07_29_075846_create_c_d_home_hero_services_table', 25),
(38, '2025_07_29_092511_create_c_d_home_hero_process_table', 26),
(39, '2025_07_29_102737_create_aiml_home_hero_table', 27),
(40, '2025_07_29_103519_create_aiml_home_hero_about_table', 28),
(41, '2025_07_29_103528_create_aiml_home_hero_services_table', 28),
(42, '2025_07_29_112030_create_aiml_home_hero_process_table', 29),
(43, '2025_07_29_115944_create_case_study_categories_table', 30),
(44, '2025_07_29_120108_create_projects_table', 30),
(45, '2025_07_30_060538_create_case_study_technologies_table', 31),
(46, '2025_07_30_080600_create_c_d_inquiry_table', 32),
(47, '2025_07_30_080614_create_dynamic_inquiry_table', 32),
(49, '2025_07_30_100224_create_aiml_home_gallery_tag_table', 34),
(50, '2025_07_30_104354_change_headers_to_text_in_aiml_home_gallery_table', 35),
(51, '2025_07_30_104517_change_headers_to_text_in_aiml_home_gallery_table', 36),
(52, '2025_07_30_114549_create_aiml_home_gallery_table', 37),
(53, '2025_07_31_030125_create_terms_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `our_progress`
--

CREATE TABLE `our_progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_progress`
--

INSERT INTO `our_progress` (`id`, `user_id`, `heading`, `description`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Our Process', 'The procedure that moves a project ahead determines its success. Quality, consistent results, and business success follow a consistent process', 'Let\'s Talk', 'http://127.0.0.1:8000/admin/our-progress-section', '2025-07-23 05:17:49', '2025-07-23 07:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `our_progress_section`
--

CREATE TABLE `our_progress_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_progress_section`
--

INSERT INTO `our_progress_section` (`id`, `user_id`, `image`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'progress-section/zhckC3rNXhEpcypUjdXdmEIkvKNgEVkXPRwavo3F.png', 'On boarding', 'Get to Know Your Team\r\n\r\nWhen you deal with Vibrant Solution Technology, you have the support of our complete team behind you. The process begins with a kick-off meeting, which can be held in person or remotely via Zoom or Google Meet.', '1', '2025-07-23 05:37:34', '2025-07-23 06:12:12'),
(3, '1', 'progress-section/6AOvEEqqZUacopNWq2KlBT7aGmTuulgM3ikJ7p1L.png', 'Design & Development', 'Once your content is complete, your project will go to the design stage, where you will construct the general \"look\" of your new website. Our developers will next prepare the functionality and features of your website.', '1', '2025-07-23 05:44:24', '2025-07-23 06:12:49'),
(4, '1', 'progress-section/fNYWdgTp5XFxHAxALaCMZvwVdNX8Kz7Fe2949Epq.png', 'Launch', 'Go-Live & Project Wrap\r\n\r\nThe most thrilling portion is still to come! Your new website or mobile app is ready to be seen by the rest of the world.', '1', '2025-07-23 05:44:49', '2025-07-23 05:44:49'),
(6, '1', 'progress-section/UqXHHzfdqlMSDxAF7LMApJ9g9NJFIPMXmePgLycc.png', 'Support      & Maintenance', 'Your new product/application is up and running, but your business is constantly evolving! The best changes occur as a result of growth. Our team is ready to make modifications as soon as you request them', '1', '2025-07-23 05:48:12', '2025-07-23 05:48:12'),
(7, '1', 'progress-section/sQKZij3XVB55HLiCIvW4LeCW8hfinNNMcQ1C6W4L.png', 'Planning', 'When you contact Vibrant Solution Technology, you will initially speak with our customer service representative or sales and marketing vice president. Our goal is to listen to you and learn enough about your company so that we can offer you the most satisfactory solution.', '1', '2025-07-23 06:07:01', '2025-07-23 06:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `our_values`
--

CREATE TABLE `our_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_values`
--

INSERT INTO `our_values` (`id`, `user_id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, '1', 'GiveDonation', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'our-values/pcCXNjhJOnX8RELA4ju11HrbX58JcHS8SWo5hXzs.png', '2025-07-21 02:01:08', '2025-09-02 19:46:14'),
(8, '1', 'GiveInspiration', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'our-values/knumQa69AtcXbzqHTvo8RO9EYyFPecZmtMxsrUos.png', '2025-07-21 02:08:51', '2025-09-02 19:47:04'),
(9, '1', 'BecomeVolunteer', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'our-values/ngjMYA6ZXsFb72It2j6Z2YR1f7oQ4HR3Pln7LQ4R.png', '2025-07-21 02:09:14', '2025-09-02 20:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `our_values_sections`
--

CREATE TABLE `our_values_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_values_sections`
--

INSERT INTO `our_values_sections` (`id`, `heading`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Major Causes', 'Creepeth called face upon face yielding midst is after moveth', '1', '2025-07-21 00:13:54', '2025-09-02 20:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `tech_id` text DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text NOT NULL,
  `is_display` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`is_display`)),
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `tech_id`, `heading`, `short_description`, `description`, `image`, `is_display`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, '1,2', 'Skincare magicTM', 'Create visual materials such as logos, branding materials, marketing collateral, and web graphics.', '<div class=\"sofax-portfolio-authore\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Client :</p>\r\n<h4>Henry Company</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Services :</p>\r\n<h4>Web Design</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Date :</p>\r\n<h4>March 27, 2024</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Website :</p>\r\n<h4>Preview Project<a href=\"../../case-study-detail\"><img src=\"../../assets/images/portfolio/Icon1.png\" alt=\"\"></a></h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content3\">\r\n<h3>Project Overview :</h3>\r\n<p>\"Gradient Web Design\" sounds like a project focused on incorporating gradients into web design. Gradients are a popular design element that involve a smooth transition between two or more colors. By creating a comprehensive project overview, you can ensure that the Gradient Web Design project progresses smoothly and achieves its objectives effectivel</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-wrap\">\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>1. Objective</h4>\r\n<p>The objective of this project is to leverage gradient design elements to enhance the visual appeal, user experience, and overall aesthetics of our website.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>2. Scope</h4>\r\n<p>Integrating gradient designs into various components of the website, including but not limited to backgrounds, buttons, text elements, headers, &amp; illustrations.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>3. Target Audience</h4>\r\n<p>Our target audience consists of define your target to audience demographics, interests, etc. The gradient designs will resonate with this audience.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>4. Research</h4>\r\n<p>Conduct research on current trends in web design, specifically focusing. Analyze competitor websites industry-leading examples to gather inspiration &amp; identify.</p>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content-bottom\">\r\n<h3>Positive User Feedback :</h3>\r\n<p>User feedback on the gradient designs has been overwhelmingly positive, with many users expressing that appreciation for the visually appealing &amp; dynamic nature of the website. Users have reported that gradient designs contribute to a more immersive &amp; enjoyable browsing experience, encouraging them to spend more time exploring the site.</p>\r\n</div>', 'projects/s2Hgw3cG3Zthp6LTlb3AJ1ZxOVV6C61UAf3fPYm3.png', '[\"home\"]', 'skincare-magictm', '1', '1', '2025-07-30 21:02:31', '2025-07-30 21:02:31'),
(2, 5, '1,2,3', 'island*', 'Create iSLAND visual materials such as logos, branding materials, marketing collateral, and web graphics.', '<div class=\"sofax-portfolio-authore\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Client :</p>\r\n<h4>Henry Company</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Services :</p>\r\n<h4>Web Design</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Date :</p>\r\n<h4>March 27, 2024</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Website :</p>\r\n<h4>Preview Project<a href=\"../../case-study-detail\"><img src=\"../../assets/images/portfolio/Icon1.png\" alt=\"\"></a></h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content3\">\r\n<h3>Project Overview :</h3>\r\n<p>\"Gradient Web Design\" sounds like a project focused on incorporating gradients into web design. Gradients are a popular design element that involve a smooth transition between two or more colors. By creating a comprehensive project overview, you can ensure that the Gradient Web Design project progresses smoothly and achieves its objectives effectivel</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-wrap\">\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>1. Objective</h4>\r\n<p>The objective of this project is to leverage gradient design elements to enhance the visual appeal, user experience, and overall aesthetics of our website.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>2. Scope</h4>\r\n<p>Integrating gradient designs into various components of the website, including but not limited to backgrounds, buttons, text elements, headers, &amp; illustrations.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>3. Target Audience</h4>\r\n<p>Our target audience consists of define your target to audience demographics, interests, etc. The gradient designs will resonate with this audience.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>4. Research</h4>\r\n<p>Conduct research on current trends in web design, specifically focusing. Analyze competitor websites industry-leading examples to gather inspiration &amp; identify.</p>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content-bottom\">\r\n<h3>Positive User Feedback :</h3>\r\n<p>User feedback on the gradient designs has been overwhelmingly positive, with many users expressing that appreciation for the visually appealing &amp; dynamic nature of the website. Users have reported that gradient designs contribute to a more immersive &amp; enjoyable browsing experience, encouraging them to spend more time exploring the site.</p>\r\n</div>', 'projects/eQ4kFkuMdl9eKxVL0M3nroL1APF3vtZhlm4jGjT3.png', NULL, 'island', '1', '1', '2025-07-30 02:15:49', '2025-07-30 02:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `smart_solutions`
--

CREATE TABLE `smart_solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `solution_heading` varchar(255) NOT NULL,
  `solution_description` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smart_solutions`
--

INSERT INTO `smart_solutions` (`id`, `solution_heading`, `solution_description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Featured Causes', 'Creepeth called face upon face yielding midst is after moveth', '1', '2025-07-21 07:11:46', '2025-09-09 19:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `smart_title` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `smart_heading` varchar(255) NOT NULL,
  `smart_image` varchar(255) DEFAULT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `smart_title`, `user_id`, `smart_heading`, `smart_image`, `data`, `btn_label`, `btn_link`, `status`, `created_at`, `updated_at`) VALUES
(5, '250 Donor', '1', 'Education for every child 1', 'solutions/EEXBpKmzidD63584gfJWeb5ruM9V5xJ6aQm4GpOc.jpg', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', 'http://127.0.0.1:8000/', '1', '2025-07-21 23:11:02', '2025-09-09 19:37:34'),
(6, '100 Donor', '1', 'Education for every child', 'solutions/7kNHp9AN3d4gqzfWl7LngvAaVuXizQA38lphFQyG.jpg', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', '#', '1', '2025-07-21 23:12:15', '2025-09-02 21:27:34'),
(8, '100 Donor', '1', 'Education for every child', 'solutions/8RQsQT7BmRLIaFRWAkCCkzzWZbooUZThTa5NHtD6.jpg', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', '#', '1', '2025-09-02 21:26:03', '2025-09-02 21:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `poster_image` varchar(255) DEFAULT NULL,
  `success_title` varchar(255) NOT NULL,
  `success_heading` varchar(255) NOT NULL,
  `success_disc` text NOT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`id`, `user_id`, `background_image`, `poster_image`, `success_title`, `success_heading`, `success_disc`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'success_section/wk2V8WNYuHdrmzNAM1kLoX9iShkae4Z65URfjo7l.jpg', 'success_section/xSrAPmVyncHk1XqSjE0ulSoZHdreY9gzwu9Xzhai.png', 'Bring success with Vibrant Software Technologies !', 'Reach Out and Elevate Your Success Now !', 'Our Proven Work Process blends experience, precision, and innovation for consistently outstanding results.', 'Get Started with us', 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/tables-basic.html', '2025-07-22 06:18:47', '2025-07-22 07:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members_section`
--

CREATE TABLE `team_members_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_title` varchar(255) NOT NULL,
  `terms_slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_slug` varchar(255) DEFAULT NULL,
  `meta_content` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_og_title` varchar(255) DEFAULT NULL,
  `meta_og_description` text DEFAULT NULL,
  `meta_og_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_title`, `terms_slug`, `description`, `user_id`, `status`, `created_at`, `updated_at`, `meta_title`, `meta_slug`, `meta_content`, `meta_description`, `meta_keywords`, `meta_og_title`, `meta_og_description`, `meta_og_image`) VALUES
(1, 'Privacy', 'privacy', '<h1>Privacy Policy for KARMA BELIEF CHARITABLE TRUST</h1>\r\n<p>At KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from https://www.karmabelief.org, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by KARMA BELIEF CHARITABLE TRUST WEBSITE and how we use it.</p>\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in KARMA BELIEF CHARITABLE TRUST WEBSITE. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n<h2>Consent</h2>\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n<h2>Information we collect</h2>\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n<h2>How we use your information</h2>\r\n<p>We use the information we collect in various ways, including to:</p>\r\n<ul>\r\n<li>Provide, operate, and maintain our website</li>\r\n<li>Improve, personalize, and expand our website</li>\r\n<li>Understand and analyze how you use our website</li>\r\n<li>Develop new products, services, features, and functionality</li>\r\n<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n<li>Send you emails</li>\r\n<li>Find and prevent fraud</li>\r\n</ul>\r\n<h2>Log Files</h2>\r\n<p>KARMA BELIEF CHARITABLE TRUST WEBSITE follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p>\r\n<h2>Cookies and Web Beacons</h2>\r\n<p>Like any other website, KARMA BELIEF CHARITABLE TRUST WEBSITE uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>\r\n<h2>Google DoubleClick DART Cookie</h2>\r\n<p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL &ndash;&nbsp;<a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a></p>\r\n<h2>Our Advertising Partners</h2>\r\n<p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>\r\n<ul>\r\n<li>\r\n<p>Google</p>\r\n<p><a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a></p>\r\n</li>\r\n</ul>\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of KARMA BELIEF CHARITABLE TRUST WEBSITE.</p>\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on KARMA BELIEF CHARITABLE TRUST WEBSITE, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n<p>Note that KARMA BELIEF CHARITABLE TRUST WEBSITE has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n<h2>Third Party Privacy Policies</h2>\r\n<p>KARMA BELIEF CHARITABLE TRUST WEBSITE\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites.</p>\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n<p>Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n<p>Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n<h2>GDPR Data Protection Rights</h2>\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n<h2>Children\'s Information</h2>\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n<p>KARMA BELIEF CHARITABLE TRUST WEBSITE does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>', '1', '1', '2025-09-09 21:39:14', '2025-09-09 20:49:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Disclaimer', 'disclaimer', '<div class=\"container-fluid bg-white py-3 py-md-4 py-lg-5\">\r\n<div class=\"container-lg\">\r\n<h1>Interpretation and Definitions</h1>\r\n<h2>Interpretation</h2>\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n<h2>Definitions</h2>\r\n<p>For the purposes of this Disclaimer:</p>\r\n<ul>\r\n<li><strong>Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Disclaimer) refers to KARMA BELIEF CHARITABLE TRUST, B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA).</li>\r\n<li><strong>Service</strong>&nbsp;refers to the Website.</li>\r\n<li><strong>You</strong>&nbsp;means the individual accessing the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>\r\n<li><strong>Website</strong>&nbsp;refers to KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from&nbsp;<a href=\"https://www.karmabelief.org/\" target=\"_blank\" rel=\"external nofollow noopener\">https://www.karmabelief.org</a></li>\r\n</ul>\r\n<h1>Disclaimer</h1>\r\n<p>The information contained on the Service is for general information purposes only.</p>\r\n<p>The Company assumes no responsibility for errors or omissions in the contents of the Service.</p>\r\n<p>In no event shall the Company be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. The Company reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice. This Disclaimer has been created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/disclaimer-generator/\" target=\"_blank\" rel=\"noopener\">Disclaimer Generator</a>.</p>\r\n<p>The Company does not warrant that the Service is free of viruses or other harmful components.</p>\r\n<h1>External Links Disclaimer</h1>\r\n<p>The Service may contain links to external websites that are not provided or maintained by or in any way affiliated with the Company.</p>\r\n<p>Please note that the Company does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>\r\n<h1>Errors and Omissions Disclaimer</h1>\r\n<p>The information given by the Service is for general guidance on matters of interest only. Even if the Company takes every precaution to insure that the content of the Service is both current and accurate, errors can occur. Plus, given the changing nature of laws, rules and regulations, there may be delays, omissions or inaccuracies in the information contained on the Service.</p>\r\n<p>The Company is not responsible for any errors or omissions, or for the results obtained from the use of this information.</p>\r\n<h1>Fair Use Disclaimer</h1>\r\n<p>The Company may use copyrighted material which has not always been specifically authorized by the copyright owner. The Company is making such material available for criticism, comment, news reporting, teaching, scholarship, or research.</p>\r\n<p>The Company believes this constitutes a \"fair use\" of any such copyrighted material as provided for in section 107 of the United States Copyright law.</p>\r\n<p>If You wish to use copyrighted material from the Service for your own purposes that go beyond fair use, You must obtain permission from the copyright owner.</p>\r\n<h1>Views Expressed Disclaimer</h1>\r\n<p>The Service may contain views and opinions which are those of the authors and do not necessarily reflect the official policy or position of any other author, agency, organization, employer or company, including the Company.</p>\r\n<p>Comments published by users are their sole responsibility and the users will take full responsibility, liability and blame for any libel or litigation that results from something written in or as a direct result of something written in a comment. The Company is not liable for any comment published by users and reserves the right to delete any comment for any reason whatsoever.</p>\r\n<h1>No Responsibility Disclaimer</h1>\r\n<p>The information on the Service is provided with the understanding that the Company is not herein engaged in rendering legal, accounting, tax, or other professional advice and services. As such, it should not be used as a substitute for consultation with professional accounting, tax, legal or other competent advisers.</p>\r\n<p>In no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever arising out of or in connection with your access or use or inability to access or use the Service.</p>\r\n<h1>\"Use at Your Own Risk\" Disclaimer</h1>\r\n<p>All information in the Service is provided \"as is\", with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied, including, but not limited to warranties of performance, merchantability and fitness for a particular purpose.</p>\r\n<p>The Company will not be liable to You or anyone else for any decision made or action taken in reliance on the information given by the Service or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>\r\n<h1>Contact Us</h1>\r\n<p>If you have any questions about this Disclaimer, You can contact Us:</p>\r\n<ul>\r\n<li>By email: info@karmabelief.org</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container-fluid py-lg-5 py-3 bg-warning px-0 bg-footer\">\r\n<div class=\"container-lg py-lg-5\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3\">\r\n<div class=\"col-12 col-md-12 col-lg-8\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3\">\r\n<div class=\"col\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '1', '1', '2025-09-09 21:00:46', '2025-09-09 21:01:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Refund', 'refund', '<div class=\"container-fluid bg-white py-3 py-md-4 py-lg-5\">\r\n<div class=\"container-lg\">\r\n<p>Thank you for shopping at KARMA BELIEF CHARITABLE TRUST WEBSITE.</p>\r\n<p>If, for any reason, You are not completely satisfied with a purchase We invite You to review our policy on refunds and returns. This Return and Refund Policy has been created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/return-refund-policy-generator/\" target=\"_blank\" rel=\"noopener\">Return and Refund Policy Generator</a>.</p>\r\n<p>The following terms are applicable for any products that You purchased with Us.</p>\r\n<h1>Interpretation and Definitions</h1>\r\n<h2>Interpretation</h2>\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n<h2>Definitions</h2>\r\n<p>For the purposes of this Return and Refund Policy:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to KARMA BELIEF CHARITABLE TRUST, B/806 ASHIMA TOWER, NEAR SANDESH PRESS, VASTRAPUR, AHMEDABAD - 380054, GUJARAT, INDIA.</p>\r\n</li>\r\n<li>\r\n<p><strong>Goods</strong>&nbsp;refer to the items offered for sale on the Service.</p>\r\n</li>\r\n<li>\r\n<p><strong>Orders</strong>&nbsp;mean a request by You to purchase Goods from Us.</p>\r\n</li>\r\n<li>\r\n<p><strong>Service</strong>&nbsp;refers to the Website.</p>\r\n</li>\r\n<li>\r\n<p><strong>Website</strong>&nbsp;refers to KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from&nbsp;<a href=\"https://www.karmabelief.org/\" target=\"_blank\" rel=\"external nofollow noopener\">https://www.karmabelief.org</a></p>\r\n</li>\r\n<li>\r\n<p><strong>You</strong>&nbsp;means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>\r\n</li>\r\n</ul>\r\n<h1>Your Order Cancellation Rights</h1>\r\n<p>You are entitled to cancel Your Order within 7 days without giving any reason for doing so.</p>\r\n<p>The deadline for cancelling an Order is 7 days from the date on which You received the Goods or on which a third party you have appointed, who is not the carrier, takes possession of the product delivered.</p>\r\n<p>In order to exercise Your right of cancellation, You must inform Us of your decision by means of a clear statement. You can inform us of your decision by:</p>\r\n<ul>\r\n<li>\r\n<p>By email: info@karmabelief.org</p>\r\n</li>\r\n<li>\r\n<p>By mail: B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA)</p>\r\n</li>\r\n</ul>\r\n<p>We will reimburse You no later than 14 days from the day on which We receive the returned Goods. We will use the same means of payment as You used for the Order, and You will not incur any fees for such reimbursement.</p>\r\n<h1>Conditions for Returns</h1>\r\n<p>In order for the Goods to be eligible for a return, please make sure that:</p>\r\n<ul>\r\n<li>The Goods were purchased in the last 7 days</li>\r\n<li>The Goods are in the original packaging</li>\r\n</ul>\r\n<p>The following Goods cannot be returned:</p>\r\n<ul>\r\n<li>The supply of Goods made to Your specifications or clearly personalized.</li>\r\n<li>The supply of Goods which according to their nature are not suitable to be returned, deteriorate rapidly or where the date of expiry is over.</li>\r\n<li>The supply of Goods which are not suitable for return due to health protection or hygiene reasons and were unsealed after delivery.</li>\r\n<li>The supply of Goods which are, after delivery, according to their nature, inseparably mixed with other items.</li>\r\n</ul>\r\n<p>We reserve the right to refuse returns of any merchandise that does not meet the above return conditions in our sole discretion.</p>\r\n<p>Only regular priced Goods may be refunded. Unfortunately, Goods on sale cannot be refunded. This exclusion may not apply to You if it is not permitted by applicable law.</p>\r\n<h1>Returning Goods</h1>\r\n<p>You are responsible for the cost and risk of returning the Goods to Us. You should send the Goods at the following address:</p>\r\n<p>B/806 ASHIMA TOWER, NEAR<br>SANDESH PRESS,VASTRAPUR,<br>AHMEDABAD - 380054<br>GUJARAT (INDIA)</p>\r\n<p>We cannot be held responsible for Goods damaged or lost in return shipment. Therefore, We recommend an insured and trackable mail service. We are unable to issue a refund without actual receipt of the Goods or proof of received return delivery.</p>\r\n<h1>Gifts</h1>\r\n<p>If the Goods were marked as a gift when purchased and then shipped directly to you, You\'ll receive a gift credit for the value of your return. Once the returned product is received, a gift certificate will be mailed to You.</p>\r\n<p>If the Goods weren\'t marked as a gift when purchased, or the gift giver had the Order shipped to themselves to give it to You later, We will send the refund to the gift giver.</p>\r\n<h2>Contact Us</h2>\r\n<p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>\r\n<ul>\r\n<li>\r\n<p>By email: info@karmabelief.org</p>\r\n</li>\r\n<li>\r\n<p>By mail: B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA)</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container-fluid py-lg-5 py-3 bg-warning px-0 bg-footer\">\r\n<div class=\"container-lg py-lg-5\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3\">\r\n<div class=\"col-12 col-md-12 col-lg-8\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3\">\r\n<div class=\"col\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '1', '1', '2025-09-09 21:00:56', '2025-09-09 21:01:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Cookies', 'cookies', '<div class=\"container-fluid bg-white py-3 py-md-4 py-lg-5\">\r\n<div class=\"container-lg\">\r\n<p>This Cookies Policy explains what Cookies are and how We use them. You should read this policy so You can understand what type of cookies We use, or the information We collect using Cookies and how that information is used. This Cookies Policy has been created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/cookies-policy-generator/\" target=\"_blank\" rel=\"noopener\">Cookies Policy Generator</a>.</p>\r\n<p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store and keep your personal data secure, see our Privacy Policy.</p>\r\n<p>We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use.</p>\r\n<h1>Interpretation and Definitions</h1>\r\n<h2>Interpretation</h2>\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n<h2>Definitions</h2>\r\n<p>For the purposes of this Cookies Policy:</p>\r\n<ul>\r\n<li><strong>Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Cookies Policy) refers to KARMA BELIEF CHARITABLE TRUST, B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA).</li>\r\n<li><strong>Cookies</strong>&nbsp;means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li>\r\n<li><strong>Website</strong>&nbsp;refers to KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from&nbsp;<a href=\"https://www.karmabelief.org/\" target=\"_blank\" rel=\"external nofollow noopener\">https://www.karmabelief.org</a></li>\r\n<li><strong>You</strong>&nbsp;means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>\r\n</ul>\r\n<h1>The use of the Cookies</h1>\r\n<h2>Type of Cookies We Use</h2>\r\n<p>Cookies can be \"Persistent\" or \"Session\" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>\r\n<p>We use both session and persistent Cookies for the purposes set out below:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Necessary / Essential Cookies</strong></p>\r\n<p>Type: Session Cookies</p>\r\n<p>Administered by: Us</p>\r\n<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>\r\n</li>\r\n<li>\r\n<p><strong>Functionality Cookies</strong></p>\r\n<p>Type: Persistent Cookies</p>\r\n<p>Administered by: Us</p>\r\n<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>\r\n</li>\r\n</ul>\r\n<h2>Your Choices Regarding Cookies</h2>\r\n<p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>\r\n<p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>\r\n<p>If You\'d like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>\r\n<ul>\r\n<li>\r\n<p>For the Chrome web browser, please visit this page from Google:&nbsp;<a href=\"https://support.google.com/accounts/answer/32050\" target=\"_blank\" rel=\"external nofollow noopener\">https://support.google.com/accounts/answer/32050</a></p>\r\n</li>\r\n<li>\r\n<p>For the Internet Explorer web browser, please visit this page from Microsoft:&nbsp;<a href=\"http://support.microsoft.com/kb/278835\" target=\"_blank\" rel=\"external nofollow noopener\">http://support.microsoft.com/kb/278835</a></p>\r\n</li>\r\n<li>\r\n<p>For the Firefox web browser, please visit this page from Mozilla:&nbsp;<a href=\"https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored\" target=\"_blank\" rel=\"external nofollow noopener\">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>\r\n</li>\r\n<li>\r\n<p>For the Safari web browser, please visit this page from Apple:&nbsp;<a href=\"https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac\" target=\"_blank\" rel=\"external nofollow noopener\">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></p>\r\n</li>\r\n</ul>\r\n<p>For any other web browser, please visit your web browser\'s official web pages.</p>\r\n<h2>More Information about Cookies</h2>\r\n<p>You can learn more about cookies:&nbsp;<a href=\"https://www.privacypolicies.com/blog/cookies/\" target=\"_blank\" rel=\"noopener\">What Are Cookies?</a>.</p>\r\n<h2>Contact Us</h2>\r\n<p>If you have any questions about this Cookies Policy, You can contact us:</p>\r\n<ul>\r\n<li>By email: info@karmabelief.org</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container-fluid py-lg-5 py-3 bg-warning px-0 bg-footer\">\r\n<div class=\"container-lg py-lg-5\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3\">\r\n<div class=\"col-12 col-md-12 col-lg-8\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3\">\r\n<div class=\"col\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '1', '1', '2025-09-09 21:01:02', '2025-09-09 21:02:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avtar` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `display_show` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`display_show`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `avtar`, `position`, `company_name`, `description`, `user_id`, `status`, `display_show`, `created_at`, `updated_at`) VALUES
(2, 'Washim Jowader', 'testimonials/0XvwsTC8qMZDknqg0HFROek736S3ySjUyVMwRHnS.png', 'Software Developer', 'TechVibe Co', '“AgenShark not only impressed provided strategic guidance that helped us with their coding finesse but also brought an artistic touch to the functionality. Their team seamlessly translated our vision into a digital reality, providing not just a website but an interactive platform that reflects our tech-forward identity.”', '1', '1', NULL, '2025-05-12 21:15:39', '2025-07-25 23:38:00'),
(3, 'Nishan Khan', 'testimonials/Jjn0iJUohYPBAmhkZXNWNq9IeJmj5eQgavGEJ9r1.png', 'Founder', 'startup Innovations', '“As a startup, we needed a digital presence that would make a statement. AgenShark not only delivered a stunning website but also provided strategic guidance that helped us establish our brand identity. Their expertise and commitment to our project were instrumental in our initial success.”', '1', '1', NULL, '2025-07-25 23:35:58', '2025-07-25 23:35:58'),
(4, 'Prem', 'testimonials/tqc9aYdzQ4ALNelxQQE2k7rL6NYke99ZQPjQMlLP.png', 'Project Manager', 'FDI Solutions', 'zgdf hfds,gnhhdfl;kkpdfdjg rkgp[ogodfjgg roppkgkgpdfkgg;f dflkggpdkfgck polkggpdofofjg;sojtg[eri rarotjifpdjgpdfgyfghfdgdgf', '1', '1', NULL, '2025-07-26 00:51:26', '2025-07-26 00:54:57'),
(5, 'hghgc', 'testimonials/XKuDoOta7wa6rPxzRxM2ZT12hBCrjzb2FIP1IdGw.jpg', 'hfdjdf', 'kdkd', 'ddg', '1', '0', NULL, '2025-07-26 01:32:43', '2025-07-26 01:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_poster`
--

CREATE TABLE `testimonials_poster` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poster_title` varchar(255) DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials_poster`
--

INSERT INTO `testimonials_poster` (`id`, `poster_title`, `btn_label`, `btn_link`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Clutch', 'Go To TO Clutch', 'http://127.0.0.1:8000/case-study', '1', '2025-07-24 06:00:42', '2025-07-24 06:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile_image` text DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `last_name`, `phone`, `profile_image`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'Admin', NULL, '8888888885', 'web_image/81acafeeb8772b27767bad68460cf0f6.png', 'admin', NULL, '$2y$12$hsq0jmuSnd.ySWX0KPSCTOwvPs3K8VZzb/GgjCioTRp9BSwA3OF6K', 'PfPMnJAk1NtpNmkstsbaHgUJTzOAwCRlct45SnddvO2jCS9apCYm8cYrQ2Ag', '2025-05-12 10:01:31', '2025-08-30 11:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `user_id`, `image`, `image_2`, `title`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'why_choose_us/TebY8JJfcb4KsfvWRlLnmz0DgPTxNKmpZIjAisW5.png', 'why_choose_us/douXbAc2oyu0Vs6ln4512PMLmy2LjrV1JC2P8ZjG.png', 'Why Choose Us??', 'Our Tailored Strategies for Your Succes', 'Crafting precision in every detail, our tailored strategies pave the way for your unparalleled success in the digital landscape', '2025-07-22 01:09:12', '2025-07-22 03:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_list`
--

CREATE TABLE `why_choose_us_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `list_image` varchar(255) DEFAULT NULL,
  `list_heading` varchar(255) DEFAULT NULL,
  `list_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_list`
--

INSERT INTO `why_choose_us_list` (`id`, `user_id`, `list_image`, `list_heading`, `list_description`, `created_at`, `updated_at`) VALUES
(8, NULL, 'why_choose/OL4OlxLXtxPn1eXH5bL4NB4XCkRstP2BPrszpdhN.png', 'Reliable Technology Partner nn', 'You have a terrific company concept but are looking for a reliable tech partner to cooperate with? Vibrant Software...', '2025-07-22 03:24:04', '2025-07-22 03:34:27'),
(10, NULL, 'why_choose/vMuj6yuAN8O0JZr4ikQuntZviR56Hcvv30ESsVCJ.png', 'Skilled Staff', 'Our skilled staff stays on the cutting edge of the latest and the most successful technology...', '2025-07-22 03:24:04', '2025-07-22 03:35:06'),
(13, '1', 'why_choose/a2zcXJOVwA3OMxEauyjRNoSsBE2lxumm1qhDvhMZ.png', 'Customer Satisfaction', 'We provide the most successful projects, build long-term relationships\r\n                                        with our clients, and continue...', '2025-07-24 01:33:36', '2025-07-24 01:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_list_btn_setting`
--

CREATE TABLE `why_choose_us_list_btn_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_list_btn_setting`
--

INSERT INTO `why_choose_us_list_btn_setting` (`id`, `user_id`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Read More', 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/tables-basic.html', '2025-07-23 03:03:37', '2025-07-23 03:51:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_inquiry`
--
ALTER TABLE `about_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_technologies`
--
ALTER TABLE `about_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_counter_`
--
ALTER TABLE `about_us_counter_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_mission_vission`
--
ALTER TABLE `about_us_mission_vission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_gallery`
--
ALTER TABLE `aiml_home_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_gallery_tag`
--
ALTER TABLE `aiml_home_gallery_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero`
--
ALTER TABLE `aiml_home_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero_about`
--
ALTER TABLE `aiml_home_hero_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero_process`
--
ALTER TABLE `aiml_home_hero_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero_services`
--
ALTER TABLE `aiml_home_hero_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_testimonials`
--
ALTER TABLE `award_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_categories`
--
ALTER TABLE `case_study_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_technologies`
--
ALTER TABLE `case_study_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_stories`
--
ALTER TABLE `client_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_stories_section`
--
ALTER TABLE `client_stories_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero`
--
ALTER TABLE `c_d_home_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero_expertise`
--
ALTER TABLE `c_d_home_hero_expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero_process`
--
ALTER TABLE `c_d_home_hero_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero_services`
--
ALTER TABLE `c_d_home_hero_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_inquiry`
--
ALTER TABLE `c_d_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_inquiry`
--
ALTER TABLE `dynamic_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_hero_sections`
--
ALTER TABLE `home_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_progress`
--
ALTER TABLE `our_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_progress_section`
--
ALTER TABLE `our_progress_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_values`
--
ALTER TABLE `our_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_values_sections`
--
ALTER TABLE `our_values_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smart_solutions`
--
ALTER TABLE `smart_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members_section`
--
ALTER TABLE `team_members_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `terms_meta_slug_unique` (`meta_slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_poster`
--
ALTER TABLE `testimonials_poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_list`
--
ALTER TABLE `why_choose_us_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_list_btn_setting`
--
ALTER TABLE `why_choose_us_list_btn_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_inquiry`
--
ALTER TABLE `about_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_technologies`
--
ALTER TABLE `about_technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_counter_`
--
ALTER TABLE `about_us_counter_`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_mission_vission`
--
ALTER TABLE `about_us_mission_vission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_gallery`
--
ALTER TABLE `aiml_home_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aiml_home_gallery_tag`
--
ALTER TABLE `aiml_home_gallery_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aiml_home_hero`
--
ALTER TABLE `aiml_home_hero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_hero_about`
--
ALTER TABLE `aiml_home_hero_about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_hero_process`
--
ALTER TABLE `aiml_home_hero_process`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_hero_services`
--
ALTER TABLE `aiml_home_hero_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `award_testimonials`
--
ALTER TABLE `award_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `case_study_categories`
--
ALTER TABLE `case_study_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `case_study_technologies`
--
ALTER TABLE `case_study_technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_stories`
--
ALTER TABLE `client_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_stories_section`
--
ALTER TABLE `client_stories_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `c_d_home_hero`
--
ALTER TABLE `c_d_home_hero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_d_home_hero_expertise`
--
ALTER TABLE `c_d_home_hero_expertise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_d_home_hero_process`
--
ALTER TABLE `c_d_home_hero_process`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_d_home_hero_services`
--
ALTER TABLE `c_d_home_hero_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_d_inquiry`
--
ALTER TABLE `c_d_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dynamic_inquiry`
--
ALTER TABLE `dynamic_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_hero_sections`
--
ALTER TABLE `home_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `our_progress`
--
ALTER TABLE `our_progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_progress_section`
--
ALTER TABLE `our_progress_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_values`
--
ALTER TABLE `our_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `our_values_sections`
--
ALTER TABLE `our_values_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smart_solutions`
--
ALTER TABLE `smart_solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members_section`
--
ALTER TABLE `team_members_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials_poster`
--
ALTER TABLE `testimonials_poster`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us_list`
--
ALTER TABLE `why_choose_us_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `why_choose_us_list_btn_setting`
--
ALTER TABLE `why_choose_us_list_btn_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
