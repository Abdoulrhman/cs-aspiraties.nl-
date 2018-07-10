-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 02:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asp`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivments`
--

CREATE TABLE `achivments` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `achivments`
--

INSERT INTO `achivments` (`id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`, `title_ar`, `body_ar`, `title_ned`, `body_ned`) VALUES
(1, 29, 'Web APP', 'Dynamic Web app', '2018-04-18 08:55:10', '2018-04-18 08:55:10', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` text COLLATE utf8_unicode_ci NOT NULL,
  `body_en` text COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `photo_id`, `title_ar`, `title_en`, `title_ned`, `body_ar`, `body_en`, `body_ned`, `created_at`, `updated_at`) VALUES
(1, 34, 'ما هو \"لوريم إيبسوم\" ؟', 'What is Lorem Ipsum?', 'Wat is Lorem Ipsum?', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.\r\n\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', '2018-04-26 09:40:14', '2018-04-26 11:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `var-name` text NOT NULL,
  `ara` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `eng` text NOT NULL,
  `ned` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `var-name`, `ara`, `eng`, `ned`) VALUES
(172, 'home', 'الرئيسية', 'Home', 'Home'),
(174, 'about_us', 'من نحن', 'About Us', 'over ons'),
(175, 'contact_us', 'اتصل بنا', 'Contact Us', 'Contact Us'),
(176, 'portfolio', 'الانجازات', 'Portfolio', 'Portefeuille'),
(177, 'websites', 'المواقع', 'Websites', 'Websites'),
(178, 'applications', 'تطبيقات', 'Applications', 'Toepassingen\r\n'),
(179, 'all_projects', 'كل الانجازات', 'All projects', 'Alle projecten\r\n'),
(180, 'our_blog', 'مدونتنا', 'Our blog', 'Onze blog\r\n'),
(181, 'hosting', 'الاستضافه', 'Hosting', 'Hosting'),
(182, 'budget_plan', 'خطة الميزانيه', 'Budget Plan', 'Budget Plan'),
(183, 'reseller_plan', 'خطة التجزئه', 'Reseller Plan', 'Reseller Schema'),
(184, 'W_W_D', 'اعمالنا', 'what we do ', 'wat we doen\r\n'),
(185, 'web_app', 'تطبيقات الانترنت', 'Web Applications', 'Web applicaties'),
(186, 'mobile_app', 'تطبيقات المحمول', 'Mobile applications', 'Mobiele applicaties\r\n'),
(187, 'social_media', 'وسائل التواصل الاجنماعي', 'Social media', 'Sociale media\r\n'),
(188, 'seo_op', 'تحسين اداء البحث', 'seo optimization', 'seo optimalisatie\r\n'),
(189, 'logo_d', 'تصميم شعار', 'Logo design', 'Logo ontwerp\r\n'),
(190, 'web_design', 'تصميم مواقع ', 'Web design', 'Web ontwerp\r\n'),
(191, 'view_more', 'المزيد', 'View More', 'Bekijk meer\r\n'),
(192, 'real_cust', 'الزبائن الحقيقيين\r\n', 'Real customers', 'Echte klanten\r\n'),
(193, 'real_rev', 'الاستعراضات الحقيقية\r\n', 'Real reviews', 'Echte beoordelingen\r\n'),
(194, 'enter_domin', 'ادخل الدومين ', 'Enter your domain', 'voer je domein in\r\n'),
(195, 'search', 'ابحث', 'Search', 'zoeken'),
(196, 'choose_vps', 'اخطر خطتك', 'CHOOSE YOUR Plan\r\n', 'KIES UW Plan\r\n'),
(197, 'r_u_reseller', 'هل انت بائع\r\n', 'Are you reseller', 'Bent u wederverkoper?\r\n'),
(198, 'view_details', 'تفاصيل اكتر', 'View details', 'Bekijk details\r\n'),
(199, 'Our_branches', 'فروعنا', 'Our branches', 'Onze vestigingen\r\n'),
(200, 'quick_links', 'روابط سريعه', 'Quick links', 'Snelle links\r\n'),
(201, 'stay_updated', 'كن على اطلاع\r\n', 'Stay Updated', 'Blijf op de hoogte\r\n\r\n'),
(202, 'follow_fb', 'تابعنا على فيسبوك\r\n', 'Follow us on Facebook', 'Volg ons op Facebook\r\n'),
(203, 'follow_tw', 'تابعنا علي تويتر', 'Follow us on Twitter', 'Volg ons op Twitter\r\n'),
(204, 'holanda', 'هولندا', 'Netherlands', 'Nederland'),
(205, 'dont', '! لا تنتظر أكثر! دعونا نبدأ خلق شيء رائع\r\n', 'Don\'t wait more! Let’s start creating something cool!', 'Wacht niet langer! Laten we beginnen met iets cools te maken!\r\n\r\n'),
(206, 'dont_hes', ' ! لا تتردد ، اتصل بنا\r\n', 'DON’T HESITATE, CONTACT US!\r\n', 'AARZEL NIET, NEEM CONTACT MET ONS OP!\r\n'),
(207, 'new_anim', 'محرك الرسوم المتحركة الجديد\r\n', 'NEW ANIMATION ENGINE', 'NIEUWE ANIMATIEMOTOR\r\n'),
(208, 'with_stu', 'مع تأثيرات مذهلة\r\n', 'with stunning effects\r\n', 'met verbluffende effecten\r\n'),
(209, 'anim_every', 'كل شيء مثير\r\n', 'ANIMATE EVERYTHING', 'ALLES ANIMEREN\r\n'),
(210, 'more_than', 'أكثر من 200 انتقال شرائح محددة مسبقًا ،\r\nالمنظر ، في تأثير 3D & كين بيرنز ،\r\nتحوم والمشي وعروض متحركة متعددة الخطوات\r\nplayByScroll & timelines', 'more than 200 pre-defined slide transitions,\r\nparallax, even in 3D & Ken Burns effect,\r\nhover, loop & multi-step animations\r\nplayByScroll & timelines,', 'meer dan 200 vooraf gedefinieerde dia-overgangen,\r\nparallax, zelfs in 3D & Ken Burns-effect,\r\nhover, loop & multi-step animaties\r\nplayByScroll & tijdlijnen,'),
(211, 'call_us', 'اتصل بنا اليوم\r\n', 'Call us Today', 'Bel ons vandaag\r\nvandaag\r\n'),
(212, 'visit_our', 'زور مكتبنا\r\n', 'Visit our Office\r\n', 'Bezoek ons kantoor\r\n'),
(213, 'in', 'قي', 'In', 'In'),
(214, 'email', 'البريد الالكتروني', 'Email', 'Email'),
(215, 'send_us', 'ارسل لنا رساله', 'SEND US MESSAGE\r\n', 'STUUR ONS BERICHT\r\n'),
(216, 'we_will', 'سنسعد بالتواصل معك\r\n', 'we will be happy to hear from you\r\n', 'we zullen blij zijn om van je te horen\r\nzijn\r\n'),
(217, 'w_d', 'تصميم الموقع\r\n', 'Website Design', 'Website ontwerp\r\n'),
(218, 'm_a', 'تطبيق الجوال\r\n', 'Mobile App\r\n', 'Mobiele app\r\n'),
(219, 'hosting_s', 'خدمات الاستضافة\r\n', 'Hosting Services\r\n', 'Hosting Services\r\n'),
(220, 'news', 'اخبار', 'News', 'News'),
(221, 'logo', 'logoARA', 'logo', 'logoNED'),
(222, 'do_you', 'هل تريد اس اس ال ؟', 'Do You Want SSL ?\r\n', 'Wilt u SSL?\r\n'),
(223, 'yes', 'نعم', 'Yes', 'Ja'),
(224, 'no', 'لا', 'No', 'Nee.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`, `title_ar`, `body_ar`, `title_ned`, `body_ned`) VALUES
(1, 30, 'logo1', 'company logo', '2018-04-18 11:16:32', '2018-04-18 11:16:32', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_04_11_104843_create_photos_table', 1),
('2018_04_11_132422_create_services_table', 1),
('2018_04_12_052349_create_slide_ones_table', 1),
('2018_04_12_065327_create_slide_twos_table', 1),
('2018_04_12_104202_create_blogs_table', 1),
('2018_04_12_133412_create_slide_threes_table', 1),
('2018_04_13_142613_create_slide_one_titles_table', 1),
('2018_04_17_104634_create_products_table', 2),
('2018_04_17_104657_create_stats_table', 3),
('2018_04_17_104715_create_icons_table', 3),
('2018_04_17_111830_add_titleAR_to_products_table', 4),
('2018_04_18_084952_create_achivments_table', 5),
('2018_04_18_130531_create_logos_table', 6),
('2018_04_18_142152_create_seos_table', 7),
('2018_04_19_070629_create_socials_table', 8),
('2018_04_19_070907_add_three_cols_to_seos_table', 8),
('2018_04_19_074934_drop_icons_table', 9),
('2018_04_19_081610_create_mobiles_table', 10),
('2018_04_19_084001_create_apps_table', 11),
('2018_04_21_075126_drop_stats_table', 12),
('2018_04_21_075400_add_stat_table', 13),
('2018_04_21_080227_drop_stat_table', 14),
('2018_04_21_080302_create_stats_table', 15),
('2018_04_21_090840_create_testis_table', 16),
('2018_04_26_080706_create_offers_table', 17),
('2018_04_26_083131_add_to_stats', 18),
('2018_04_26_083928_add_to_achivments', 19),
('2018_04_26_084129_add_to_seo', 20),
('2018_04_26_084221_add_to_social', 21),
('2018_04_26_084342_add_to_logo', 21),
('2018_04_26_084505_add_to_mobile', 21),
('2018_04_26_084550_add_to_app', 21),
('2018_04_26_090559_add_to_services', 22),
('2018_04_26_091250_add_to_slide2', 23),
('2018_04_26_092351_add_to_slide1', 24),
('2018_04_27_072440_create_section_ones_table', 25),
('2018_04_27_073039_add_to_section1', 26),
('2018_04_27_085947_create_section_twos_table', 27),
('2018_04_27_110419_create_section_threes_table', 28),
('2018_04_27_112739_create_section_fours_table', 29),
('2018_04_27_121003_create_section_fives_table', 30),
('2018_04_30_082221_update_services', 31),
('2018_04_30_083658_update_once_services', 32),
('2018_04_30_091143_update_another_services', 33);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title1_ar`, `title1_en`, `title1_ned`, `title2_ar`, `title2_en`, `title2_ned`, `created_at`, `updated_at`) VALUES
(1, 'احصل على خصم 10٪ اليوم\r\n', 'GET 10% OFF TODAY', 'KRIJG VANDAAG 10% KORTING!\r\n', 'عن طريق تسجيل اسم المجال\r\n', 'by register a domain name', 'door een domeinnaam te registreren\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'feature-templates-1.jpg', '2018-04-16 12:20:58', '2018-04-16 12:20:58'),
(2, 'feature-templates-2.jpg', '2018-04-16 12:21:34', '2018-04-16 12:21:34'),
(3, 'feature-templates-3.jpg', '2018-04-16 12:22:10', '2018-04-16 12:22:10'),
(4, 'feature-templates-4.jpg', '2018-04-16 12:22:30', '2018-04-16 12:22:30'),
(5, 'feature-templates-5.jpg', '2018-04-16 12:22:54', '2018-04-16 12:22:54'),
(6, 'feature-templates-6.jpg', '2018-04-16 12:24:02', '2018-04-16 12:24:02'),
(7, 'feature-templates-7.jpg', '2018-04-16 12:24:29', '2018-04-16 12:24:29'),
(8, 'feature-templates-8.jpg', '2018-04-16 12:25:07', '2018-04-16 12:25:07'),
(9, 'feature-templates-9.jpg', '2018-04-16 12:25:32', '2018-04-16 12:25:32'),
(10, 'api-bg-grad.jpg', '2018-04-16 12:26:15', '2018-04-16 12:26:15'),
(11, 'ruler-compressor.png', '2018-04-16 12:29:09', '2018-04-16 12:29:09'),
(12, 'headphone-compressor.png', '2018-04-16 12:29:53', '2018-04-16 12:29:53'),
(13, 'clips-part-1-compressor.png', '2018-04-16 12:30:47', '2018-04-16 12:30:47'),
(14, 'clips-part-2-compressor.png', '2018-04-16 12:31:11', '2018-04-16 12:31:11'),
(15, 'pencil1-compressor.png', '2018-04-16 12:32:26', '2018-04-16 12:32:26'),
(16, 'pencil2-compressor.png', '2018-04-16 12:32:49', '2018-04-16 12:32:49'),
(17, 'tablet.png', '2018-04-16 12:33:18', '2018-04-16 12:33:18'),
(18, 'screen.png', '2018-04-16 12:33:41', '2018-04-16 12:33:41'),
(19, 'camera.png', '2018-04-16 12:34:07', '2018-04-16 12:34:07'),
(20, 'coffee.png', '2018-04-16 12:34:25', '2018-04-16 12:34:25'),
(21, 'car.png', '2018-04-16 12:35:04', '2018-04-16 12:35:04'),
(22, 'compasses.png', '2018-04-16 12:35:33', '2018-04-16 12:35:33'),
(23, 'Jellyfish.jpg', '2018-04-17 09:31:47', '2018-04-17 09:31:47'),
(24, 'TREEANDSHRUBPRUNNG3_78x78.png', '2018-04-18 05:04:43', '2018-04-18 05:04:43'),
(25, 'TREEANDSHRUBPRUNNG3_78x78.png', '2018-04-18 05:05:25', '2018-04-18 05:05:25'),
(26, 'TREEANDSHRUBPRUNNG2_78x78.png', '2018-04-18 05:05:39', '2018-04-18 05:05:39'),
(27, 'TREEANDSHRUBPRUNNG_78x78.png', '2018-04-18 05:06:56', '2018-04-18 05:06:56'),
(28, 'TREEANDSHRUBPRUNNG1_78x78.png', '2018-04-18 05:07:32', '2018-04-18 05:07:32'),
(29, 'wbo_400x343.jpg', '2018-04-18 08:55:09', '2018-04-18 08:55:09'),
(30, 'wbo_400x343.jpg', '2018-04-18 11:16:32', '2018-04-18 11:16:32'),
(31, '30722810_938139676348191_6857384925557948416_n.jpg', '2018-04-21 07:24:42', '2018-04-21 07:24:42'),
(32, '1511339_619630198163794_4965664088626961916_n.jpg', '2018-04-21 08:32:08', '2018-04-21 08:32:08'),
(33, '1511339_619630198163794_4965664088626961916_n.jpg', '2018-04-26 09:40:14', '2018-04-26 09:40:14'),
(34, 'Lighthouse.jpg', '2018-04-26 11:16:29', '2018-04-26 11:16:29'),
(35, 'NEWANMATONENGNE.png', '2018-04-27 05:54:19', '2018-04-27 05:54:19'),
(36, 'NEWANMATONENGNE.png', '2018-04-27 06:00:36', '2018-04-27 06:00:36'),
(37, 'THELAYERSLDEREDTOR.png', '2018-04-27 07:30:49', '2018-04-27 07:30:49'),
(38, 'feature-templates-9.jpg', '2018-04-27 09:14:07', '2018-04-27 09:14:07'),
(39, 'DYNAMONTENT.png', '2018-04-27 09:34:53', '2018-04-27 09:34:53'),
(40, 'PERFETFT.png', '2018-04-27 10:18:01', '2018-04-27 10:18:01'),
(41, '02-1.png', '2018-04-30 07:32:04', '2018-04-30 07:32:04'),
(42, '01-1.png', '2018-04-30 07:32:23', '2018-04-30 07:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_nld` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_nld` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`, `title_ar`, `body_ar`, `title_nld`, `body_nld`) VALUES
(1, 24, 'Websites', 'We provide our clients with all the range of services. We will fix any malfunction in record terms so you will have no worries! We', '2018-04-18 05:04:43', '2018-04-18 05:20:37', '', '', '', ''),
(2, 26, 'MObile Apps', 'We provide our clients with all the range of services. We will fix any malfunction in record terms so you will have no worries! We', '2018-04-18 05:05:25', '2018-04-18 05:20:55', '', '', '', ''),
(3, 27, 'SEO', 'We provide our clients with all the range of services. We will fix any malfunction in record terms so you will have no worries! We\r\n\r\n', '2018-04-18 05:06:56', '2018-04-18 05:21:09', '', '', '', ''),
(4, 28, 'Social Media', 'We provide our clients with all the range of services. We will fix any malfunction in record terms so you will have no worries! We\r\n\r\n', '2018-04-18 05:07:32', '2018-04-18 05:21:26', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_fives`
--

CREATE TABLE `section_fives` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ar` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_en` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ned` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_fives`
--

INSERT INTO `section_fives` (`id`, `photo_id`, `title1_ar`, `title2_ar`, `title3_ar`, `title4_ar`, `title1_en`, `title2_en`, `title3_en`, `title4_en`, `title1_ned`, `title2_ned`, `title3_ned`, `title4_ned`, `created_at`, `updated_at`) VALUES
(1, 40, '', '', '', '', 'PERFECT FIT', 'on all of your devices', 'ADDITIONAL FEATURES INCLUDE ...', 'full width, full size, hero scene and fullscreen sliderslooks and works perfectly on every device out of the boxalternative device-specific layouts in the same slider18 skins, theming options, and many more customization options', '', '', '', '', NULL, '2018-04-27 10:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `section_fours`
--

CREATE TABLE `section_fours` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ar` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_en` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ned` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_fours`
--

INSERT INTO `section_fours` (`id`, `photo_id`, `title1_ar`, `title2_ar`, `title3_ar`, `title4_ar`, `title1_en`, `title2_en`, `title3_en`, `title4_en`, `title1_ned`, `title2_ned`, `title3_ned`, `title4_ned`, `created_at`, `updated_at`) VALUES
(1, 39, '', '', '', '', 'DYNAMIC CONTENT *', 'from WP posts & pages', 'USE IT TO ...', 'pull content dynamically from posts & pagesbuild auto-updating news and content slidersimport/embed content from popular services like Flickr (coming soon)', '', '', '', '', NULL, '2018-04-27 09:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `section_ones`
--

CREATE TABLE `section_ones` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3a_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3b_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4a_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4b_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3a_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3b_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4a_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4b_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3a_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3b_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4a_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4b_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_ones`
--

INSERT INTO `section_ones` (`id`, `title1_ar`, `title2_ar`, `title3a_ar`, `title3b_ar`, `title4a_ar`, `title4b_ar`, `title1_en`, `title2_en`, `title3a_en`, `title3b_en`, `title4a_en`, `title4b_en`, `title1_ned`, `title2_ned`, `title3a_ned`, `title3b_ned`, `title4a_ned`, `title4b_ned`, `created_at`, `updated_at`, `photo_id`) VALUES
(1, '', '', '', '', '', '', 'NEW ANIMATION ENGINE', 'with stunning effects', 'ANIMATE EVERYTHING', 'more than 200 pre-defined slide transitions,parallax, even in 3D & Ken Burns effect,hover, loop & multi-step animationsplayByScroll & timelines,', 'ANIMATE EVERYTHING', 'filters & layer masks,random & cycle properties,animate colors & common CSS propertiesstatic layers & pop-out-of-slider effects', '', '', '', '', '', '', NULL, '2018-04-27 06:00:36', 36);

-- --------------------------------------------------------

--
-- Table structure for table `section_threes`
--

CREATE TABLE `section_threes` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ar` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_en` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ned` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_threes`
--

INSERT INTO `section_threes` (`id`, `photo_id`, `title1_ar`, `title2_ar`, `title3_ar`, `title4_ar`, `title1_en`, `title2_en`, `title3_en`, `title4_en`, `title1_ned`, `title2_ned`, `title3_ned`, `title4_ned`, `created_at`, `updated_at`) VALUES
(1, 38, '', '', '', '', 'PREMIUM SLIDER TEMPLATES *', 'released and updated regularly', 'USE THEM FOR ...', 'personal needs (e.g. slideshow of family photos)professional business websitepresentation of your creative workretail and commercial purposesor even for ads on billboards', '', '', '', '', NULL, '2018-04-27 09:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `section_twos`
--

CREATE TABLE `section_twos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ar` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_en` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ned` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_twos`
--

INSERT INTO `section_twos` (`id`, `photo_id`, `title1_ar`, `title2_ar`, `title3_ar`, `title4_ar`, `title1_en`, `title2_en`, `title3_en`, `title4_en`, `title1_ned`, `title2_ned`, `title3_ned`, `title4_ned`, `created_at`, `updated_at`) VALUES
(1, 37, '', '', '', '', 'THE LAYERSLIDER EDITOR *', 'focused on user experience & usability', 'SMART & INTUITIVE', 'drag & drop visual editor with undo/redogroup selection, rulers with guides, copy & paste layers optionspopout editor to edit everything in one place without scrollingimage editor powered by Adobe Creative Cloud,timeline with color-coded markerskeyboard shortcuts& a lot more...', '', '', '', '', NULL, '2018-04-27 07:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `main_title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title5_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title5_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title6_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title6_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `value1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value6` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo_id`, `main_title`, `created_at`, `updated_at`, `main_title_ar`, `main_title_ned`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title1_ar`, `title1_ned`, `title2_ar`, `title2_ned`, `title3_ar`, `title3_ned`, `title4_ar`, `title4_ned`, `title5_ar`, `title5_ned`, `title6_ar`, `title6_ned`, `price`, `value1`, `value2`, `value3`, `value4`, `value5`, `value6`) VALUES
(1, 41, 'STARTER', NULL, '2018-04-30 07:32:04', '', '', 'DISK SPACE\r\n', 'DOMAIN TRANS.\r\n', 'DOMIN NO.\r\n', 'BANDWIDTH', 'EMAIL NO.\r\n', 'ADS OFFERS\r\n', '', '', '', '', '', '', '', '', '', '', '', '', 10, '2 CORES', '2 GB', '200 GB', '2000 GB', 'FREE', 'UP TO 2'),
(2, 42, 'BASIC', NULL, '2018-04-30 07:32:23', '', '', 'DISK SPACE\r\n', 'DOMAIN TRANS.\r\n', 'DOMIN NO.\r\n', 'BANDWIDTH\r\n', 'EMAIL NO.\r\n', 'ADS OFFERS\r\n', '', '', '', '', '', '', '', '', '', '', '', '', 10, '1 CORE', '1  GB', '100 GB', '1000 GB', 'FREE', 'UP TO 1');

-- --------------------------------------------------------

--
-- Table structure for table `slide_ones`
--

CREATE TABLE `slide_ones` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_ones`
--

INSERT INTO `slide_ones` (`id`, `title`, `photo_id`, `created_at`, `updated_at`) VALUES
(1, 'pic1', 1, '2018-04-16 12:20:58', '2018-04-16 12:20:58'),
(2, 'pic2', 2, '2018-04-16 12:21:34', '2018-04-16 12:21:34'),
(3, 'pic3', 3, '2018-04-16 12:22:10', '2018-04-16 12:22:10'),
(4, 'pic4', 4, '2018-04-16 12:22:30', '2018-04-16 12:22:30'),
(5, 'pic5', 5, '2018-04-16 12:22:55', '2018-04-16 12:22:55'),
(6, 'pic6', 6, '2018-04-16 12:24:02', '2018-04-16 12:24:02'),
(7, 'pic7', 7, '2018-04-16 12:24:29', '2018-04-16 12:24:29'),
(8, 'pic8', 8, '2018-04-16 12:25:07', '2018-04-16 12:25:07'),
(9, 'pic9', 9, '2018-04-16 12:25:32', '2018-04-16 12:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `slide_one_titles`
--

CREATE TABLE `slide_one_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title5_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title6_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title7_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title8_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title5_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title6_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title7_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title8_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_one_titles`
--

INSERT INTO `slide_one_titles` (`id`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `created_at`, `updated_at`, `title1_ar`, `title2_ar`, `title3_ar`, `title4_ar`, `title5_ar`, `title6_ar`, `title7_ar`, `title8_ar`, `title1_ned`, `title2_ned`, `title3_ned`, `title4_ned`, `title5_ned`, `title6_ned`, `title7_ned`, `title8_ned`) VALUES
(1, 'Welcome to LayerSlider!', 'A new standard in web animations', '7', 'version', 'Imagine & Create', 'Like millions of LayerSlider users!', 'We would like to show you how!', 'LET\'S START IT!!!!', NULL, '2018-04-16 06:31:41', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide_threes`
--

CREATE TABLE `slide_threes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_threes`
--

INSERT INTO `slide_threes` (`id`, `title`, `photo_id`, `created_at`, `updated_at`) VALUES
(1, 'pic1', 10, '2018-04-16 12:26:15', '2018-04-16 12:26:15'),
(2, 'pic2', 11, '2018-04-16 12:29:09', '2018-04-16 12:29:09'),
(3, 'pic3', 12, '2018-04-16 12:29:53', '2018-04-16 12:29:53'),
(4, 'pic4', 13, '2018-04-16 12:30:48', '2018-04-16 12:30:48'),
(5, 'pic5', 14, '2018-04-16 12:31:11', '2018-04-16 12:31:11'),
(6, 'pic6', 15, '2018-04-16 12:32:26', '2018-04-16 12:32:26'),
(7, 'pic7', 16, '2018-04-16 12:32:49', '2018-04-16 12:32:49'),
(8, 'pic8', 17, '2018-04-16 12:33:18', '2018-04-16 12:33:18'),
(9, 'pic9', 18, '2018-04-16 12:33:41', '2018-04-16 12:33:41'),
(10, 'pic10', 19, '2018-04-16 12:34:07', '2018-04-16 12:34:07'),
(11, 'pic11', 20, '2018-04-16 12:34:25', '2018-04-16 12:34:25'),
(12, 'pic12', 21, '2018-04-16 12:35:04', '2018-04-16 12:35:04'),
(13, 'pic13', 22, '2018-04-16 12:35:33', '2018-04-16 12:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `slide_twos`
--

CREATE TABLE `slide_twos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4a` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4b` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title1_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4a_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4b_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title3_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4a_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title4b_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_twos`
--

INSERT INTO `slide_twos` (`id`, `title1`, `title2`, `title3`, `title4a`, `title4b`, `body`, `created_at`, `updated_at`, `title1_ar`, `title2_ar`, `title3_ar`, `title4a_ar`, `title4b_ar`, `body_ar`, `title1_ned`, `title2_ned`, `title3_ned`, `title4a_ned`, `title4b_ned`, `body_ned`) VALUES
(1, 'Creating is easy!', 'No need to coding', 'with', 'LayerSlider', 'PowerBuilder', 'Building sliders has never been easier. Our drag & drop visual slider builder also supports smart features like undo/redo, multi-select, keyboard shortcuts etc. It also incorporates services like the Adobe CC Image Editor to provide Photoshop-like image e', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ned` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `icon`, `num`, `title`, `created_at`, `updated_at`, `title_ar`, `title_ned`) VALUES
(1, 'expert', 12, 'Active Experts', NULL, '2018-04-30 05:52:55', '', ''),
(2, 'happy', 15, 'Happy clients', NULL, '2018-04-30 05:59:34', '', ''),
(3, 'dev_hand', 88, 'Developer Hand', NULL, '2018-04-30 05:59:54', '', ''),
(4, 'com', 100, 'Copmleted Projects', NULL, '2018-04-30 06:00:04', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testis`
--

CREATE TABLE `testis` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testis`
--

INSERT INTO `testis` (`id`, `photo_id`, `body`, `created_at`, `updated_at`) VALUES
(2, 32, 'the modification or control of a process or system by its results or effects, for example in a biochemical pathway or behavioural response.', '2018-04-21 08:32:08', '2018-04-21 08:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `photo_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_active`, `photo_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'admin', 'admin@admin.com', '$2y$10$hBBRGPaEt4C/A0RwzURc5eCSclV0dOH2sBcznPS1Pg/Gee/qnWb4K', 'XNyMFZrBFa3Ppmg7QLxhndqfvjGCDMoBcgJvBLaFRGsR0ZT0pRsktOe9JFSM', '2018-04-17 18:05:02', '2018-04-28 09:58:49'),
(2, 0, 0, 'Abdoulrhman salah', 'abdoulrhman_salah@hotmail.com', '$2y$10$gKudPK3o/3mNZz3kx8Zruu3h3zt4ajTJu4ipJzXMXmYk/C1JwKnqC', NULL, '2018-04-19 04:56:03', '2018-04-19 04:56:03'),
(3, 0, 0, 'Abdoulrhman ', 'ahmed_95@gmail.com', '$2y$10$vI9eMHK.s3Pzoi1BiNAdnuBx.vCVvRPZpxShvtN3s02CZBdB6g7gu', NULL, '2018-04-24 05:25:05', '2018-04-24 05:25:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achivments`
--
ALTER TABLE `achivments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achivments_photo_id_index` (`photo_id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apps_photo_id_index` (`photo_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_photo_id_index` (`photo_id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logos_photo_id_index` (`photo_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobiles_photo_id_index` (`photo_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_fives`
--
ALTER TABLE `section_fives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_fives_photo_id_index` (`photo_id`);

--
-- Indexes for table `section_fours`
--
ALTER TABLE `section_fours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_fours_photo_id_index` (`photo_id`);

--
-- Indexes for table `section_ones`
--
ALTER TABLE `section_ones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_ones_photo_id_index` (`photo_id`);

--
-- Indexes for table `section_threes`
--
ALTER TABLE `section_threes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_threes_photo_id_index` (`photo_id`);

--
-- Indexes for table `section_twos`
--
ALTER TABLE `section_twos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_twos_photo_id_index` (`photo_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seos_photo_id_index` (`photo_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_photo_id_index` (`photo_id`);

--
-- Indexes for table `slide_ones`
--
ALTER TABLE `slide_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_one_titles`
--
ALTER TABLE `slide_one_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_threes`
--
ALTER TABLE `slide_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_twos`
--
ALTER TABLE `slide_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socials_photo_id_index` (`photo_id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testis`
--
ALTER TABLE `testis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testis_photo_id_index` (`photo_id`);

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
-- AUTO_INCREMENT for table `achivments`
--
ALTER TABLE `achivments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section_fives`
--
ALTER TABLE `section_fives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `section_fours`
--
ALTER TABLE `section_fours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `section_ones`
--
ALTER TABLE `section_ones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `section_threes`
--
ALTER TABLE `section_threes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `section_twos`
--
ALTER TABLE `section_twos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slide_ones`
--
ALTER TABLE `slide_ones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slide_one_titles`
--
ALTER TABLE `slide_one_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide_threes`
--
ALTER TABLE `slide_threes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slide_twos`
--
ALTER TABLE `slide_twos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testis`
--
ALTER TABLE `testis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
