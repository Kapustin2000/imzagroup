-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 08 2017 г., 12:43
-- Версия сервера: 5.5.52-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `array` text NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `alias`, `array`, `img`) VALUES
(33, 'Alias of blog', 'a:10:{s:5:"alias";s:13:"Alias of blog";s:2:"id";s:2:"33";s:3:"img";s:4:"1012";s:5:"title";s:14:"Title of blog ";s:11:"dt_creation";s:25:"Date when it was written ";s:4:"text";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:5:"text2";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:4:"quot";s:151:"Lorem ipsum dolor sit amet, consectetur atatis et quaquia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";s:5:"text3";s:422:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit";s:6:"submit";s:4:"SEND";}', '1012'),
(34, 'alias12', 'a:8:{s:5:"alias";s:7:"alias12";s:5:"title";s:14:"Title of blog ";s:11:"dt_creation";s:25:"Date when it was written ";s:4:"text";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:5:"text2";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:4:"quot";s:151:"Lorem ipsum dolor sit amet, consectetur atatis et quaquia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";s:5:"text3";s:422:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit";s:6:"submit";s:4:"SEND";}', '4709'),
(35, 'Alias of blog', 'a:8:{s:5:"alias";s:13:"Alias of blog";s:5:"title";s:14:"Title of blog ";s:11:"dt_creation";s:25:"Date when it was written ";s:4:"text";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:5:"text2";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:4:"quot";s:151:"Lorem ipsum dolor sit amet, consectetur atatis et quaquia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";s:5:"text3";s:422:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit";s:6:"submit";s:4:"SEND";}', '3557'),
(36, 'new', 'a:8:{s:5:"alias";s:3:"new";s:5:"title";s:14:"Title of blog ";s:11:"dt_creation";s:25:"Date when it was written ";s:4:"text";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:5:"text2";s:423:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit>";s:4:"quot";s:151:"Lorem ipsum dolor sit amet, consectetur atatis et quaquia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";s:5:"text3";s:422:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit";s:6:"submit";s:4:"SEND";}', '4042');

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `user`, `message`, `date`) VALUES
(1, 'loxandro', 'Test Message', '2017-03-02 21:16:44'),
(2, 'not_u', 'New one', '2017-03-03 15:20:19'),
(3, 'loxandro', 'Loren IpsoneLoren IpsoneLoren IpsoneLoren IpsoneLoren IpsoneLoren IpsoneLoren IpsoneLoren IpsoneLoren Ipsone', '2017-03-03 15:26:45'),
(4, 'loxandro', 'Ð¹Ð¾Ñƒ Ð¹Ð¾Ñƒ Ð¹Ð¾Ñƒ', '2017-03-23 07:06:57'),
(5, 'loxandro', 'Test Message', '2017-06-08 09:09:57');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` tinyint(3) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(2, 'Micle', 'KapustinMM@mail.ru', 'Test2'),
(5, 'dwqd', 'dfwq@mail.ru', ''),
(6, 'uyuuyuyu', 'yuyuyu@mail.ru', 'yjyj7i7iujyhu');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `payout_type` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  `is_payed` int(1) NOT NULL,
  `is_complete` int(1) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `city`, `phone`, `price`, `payout_type`, `message`, `date`, `product_id`, `is_payed`, `is_complete`, `status`) VALUES
(1, 'ÐœÐ¸Ñ…Ð°Ð»Ñ‹Ñ‡', 'ÐžÐ´ÐµÑÑÐ°', '063626262', 0, 1, 'ÐÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ð´Ð¾ÑÑ‚Ð°Ð²Ð¸Ñ‚ÑŒ Ð´Ð¾Ð¼Ð¾Ð¹ ', '2017-02-26 09:54:44', 7, 0, 1, 'waiting'),
(2, 'Kapustin', 'ÐžÐ´ÐµÑÑÐ°', '0636729686', 1255, 1, 'Ð²Ð¹Ñ‹Ð²Ð¹Ð²Ð¹', '2017-02-26 09:54:47', 1, 0, 1, ''),
(4, 'du', 'Ð£ÐºÑ€Ð°Ð¸Ð½,ÐžÐ´ÐµÑ‡ÑÑÐ°', '52152', 25252, 1, '5252', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(5, '', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(6, '', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(7, '', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(8, 'fwf', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(9, 'fwf', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(10, 'fwf', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(11, 'fwf', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(12, '', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(13, 'dwsdwq', 'DWQ', 'DQW', 1, 1, 'DQWDQW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(14, 'dwsdwq', 'DWQ', 'DQW', 1, 1, 'DQWDQW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(15, 'dwsdwq', 'DWQ', 'DQW', 1, 1, 'DQWDQW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(16, 'dwsdwq', 'DWQ', 'DQW', 1, 1, 'DQWDQW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(17, 'dwsdwq', 'DWQ', 'DQW', 1, 1, 'DQWDQW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(18, 'dwsdwq', 'DWQ', 'DQW', 1, 1, 'DQWDQW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(19, 'FEQFQW', 'FWQFQW', '42442', 1, 1, '4242FQWFGW', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(20, '', '', '', 1, 1, '', '0000-00-00 00:00:00', 7, 0, 0, 'Waiting'),
(21, '', '', '', 1255, 1, '', '0000-00-00 00:00:00', 1, 0, 0, 'Waiting'),
(22, 'fwqfqwf', 'ÐœÑƒÐºÐ°Ñ‡ÐµÐ²Ð¾', '', 1255, 1, '', '0000-00-00 00:00:00', 1, 0, 0, 'Waiting');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` tinyint(3) unsigned NOT NULL,
  `page` varchar(100) NOT NULL,
  `array` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `page`, `array`) VALUES
(2, 'imza', 'a:36:{s:10:"all_u_need";s:4:"test";s:4:"imza";s:4:"test";s:8:"top_text";s:138:"LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. ENIM AD MINIM";s:12:"block1_title";s:4:"test";s:11:"block1_text";s:138:"LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. ENIM AD MINIM";s:12:"block2_title";s:4:"test";s:11:"block2_text";s:138:"LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. ENIM AD MINIM";s:12:"block3_title";s:4:"test";s:11:"block3_text";s:138:"LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. ENIM AD MINIM";s:10:"perc1_text";s:18:"Test it is working";s:13:"perc1_percent";s:2:"10";s:10:"perc2_text";s:15:"it is working 3";s:13:"perc2_percent";s:2:"30";s:10:"perc3_text";s:15:"it is working 2";s:13:"perc3_percent";s:2:"20";s:10:"perc4_text";s:15:"it is working 4";s:13:"perc4_percent";s:2:"99";s:10:"perc5_text";s:15:"it is working 5";s:13:"perc5_percent";s:2:"60";s:10:"perc6_text";s:16:"it is working 7 ";s:13:"perc6_percent";s:1:"5";s:10:"perc7_text";s:15:"it is working 6";s:13:"perc7_percent";s:2:"90";s:10:"perc8_text";s:15:"it is working 8";s:13:"perc8_percent";s:2:"99";s:10:"perc9_text";s:15:"it is working 9";s:13:"perc9_percent";s:2:"50";s:11:"perc10_text";s:16:"it is working 11";s:14:"perc10_percent";s:1:"5";s:11:"perc11_text";s:16:"it is working 10";s:14:"perc11_percent";s:2:"10";s:11:"perc12_text";s:16:"it is working 12";s:14:"perc12_percent";s:2:"88";s:10:"footer_ask";s:15:"Ready to start?";s:4:"Hire";s:7:"Hear us";s:6:"submit";s:4:"SEND";}'),
(3, 'contacts', 'a:10:{s:7:"page_h1";s:10:"Contact us";s:2:"h1";s:12:"GET IN TOUCH";s:2:"h2";s:23:"Start a project with us";s:9:"main_text";s:90:"ÐœÑ‹ ÐºÐ¾Ð¼Ð°Ð½Ð´Ð° Ð¼Ð¾Ð»Ð¾Ð´Ñ‹Ñ… Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸ÐºÐ¾Ð² Ð¸Ñ‰ÐµÐ¼ Ð¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð¾Ð².";s:6:"adress";s:25:"Address 28 May City Point";s:5:"phone";s:20:"Phone +994XXXXX-XXXX";s:4:"mail";s:24:"Email hello@imzagroup.az";s:4:"days";s:36:"Monday to Friday 9.00 am to 12.00 pm";s:5:"days2";s:33:"Saturday from 9.00 am to 12.00 pm";s:6:"submit";s:9:"Save page";}'),
(4, 'service', 'a:25:{s:2:"h1";s:18:"Service is working";s:9:"block1_h1";s:9:"TRAININGS";s:9:"block1_h2";s:35:"We are ready to share our knowledge";s:11:"block1_text";s:256:"The world of finance and in general, constantly evolving and does not stand still. First-class instructors inspired by the aim of our project came together with Ä°MZA GROUP that would share their knowledge with newcomers and their experiences with experts.";s:9:"what_get1";s:11:"What u get?";s:17:"block1_icon1_text";s:9:"Trainings";s:17:"block1_icon2_text";s:9:"Trainings";s:17:"block1_icon3_text";s:9:"Trainings";s:9:"block2_h1";s:10:"ACCOUNTING";s:9:"block2_h2";s:39:"We are here to save your time and money";s:11:"block2_text";s:60:"We know the taxation system. We will show how to optimize yo";s:11:"What_u_get2";s:11:"What u get?";s:17:"block2_icon1_text";s:9:"Trainings";s:17:"block2_icon2_text";s:9:"Trainings";s:17:"block2_icon3_text";s:9:"Trainings";s:9:"block3_h1";s:9:"TRAININGS";s:9:"block3_h2";s:29:"Another way to train yourself";s:11:"block3_text";s:257:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in";s:9:"what_get3";s:11:"What u get?";s:17:"block3_icon1_text";s:9:"Trainings";s:17:"block3_icon2_text";s:9:"Trainings";s:17:"block3_icon3_text";s:9:"Trainings";s:10:"footer_ask";s:15:"Ready to start?";s:4:"Hire";s:7:"HIRE US";s:6:"submit";s:4:"SEND";}'),
(5, 'main', 'a:15:{s:2:"h1";s:17:"WE ARE IMZA GROUP";s:2:"h2";s:119:"AT THE HEART OF IMZA GROUP CAN BE FOUND EXPERTS IN FINANCE AND AUDIT WITH YEARS OF EXPERIENCE UNITED BY ONE COMMON GOAL";s:13:"section_title";s:15:"How can we help";s:15:"section_describ";s:41:"Find out what we can do for your business";s:12:"block1_title";s:9:"Trainings";s:11:"block1_text";s:43:"  We know our job and we are ready to share";s:12:"block2_title";s:11:" Accounting";s:11:"block2_text";s:48:"  Corporate guarantee - our liability is insured";s:12:"block3_title";s:13:"   Consulting";s:11:"block3_text";s:66:"  Wealth of consultancy experience in a broad spectrum of business";s:8:"all_need";s:12:"ALL YOU NEED";s:4:"imza";s:9:"IMZA CLUB";s:9:"imza_text";s:139:" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim";s:4:"blog";s:13:"View the BLOG";s:6:"submit";s:4:"SEND";}'),
(6, 'about', 'a:29:{s:2:"h1";s:5:"ABOUT";s:2:"h2";s:23:"WHAT MAKES US DIFFERENT";s:12:"block1_title";s:11:"Flexibility";s:11:"block1_text";s:48:"We understand YOUR problem and provide solutions";s:12:"block2_title";s:9:"KNOWLEDGE";s:11:"block2_text";s:56:"We forecast future difficulties - and we know what to do";s:12:"block3_title";s:10:"EXPERIENCE";s:11:"block3_text";s:64:"We are the only company that guarantees zero problems with taxes";s:12:"block4_title";s:4:"TEAM";s:11:"block4_text";s:62:"We instruct, guide and share valuable knowledge and experience";s:11:"icons_title";s:7:"results";s:11:"icon1_title";s:3:"45+";s:10:"icon1_text";s:6:"people";s:11:"icon2_title";s:3:"45+";s:10:"icon2_text";s:6:"people";s:11:"icon3_title";s:3:"45+";s:10:"icon3_text";s:6:"people";s:11:"icon4_title";s:3:"45+";s:10:"icon4_text";s:6:"people";s:11:"after_icons";s:199:"We have a goal: to create a high-end financial platform in Azerbaijan. How we do it? We offer audit and accounting services, tax consulting services; we instruct, guide and share valuable experience.";s:14:"testim1_author";s:6:"people";s:12:"testim1_text";s:164:"New text motherfuckerdskadasdsadsad daskdaskdlaskdasldkasl daskdlas  dkasldkas dasldkasld kdlasdkasdlas              dsalkdasldkasld              kdsladkasldaskldas";s:14:"testim2_author";s:6:"people";s:12:"testim2_text";s:347:"  Lorem ipsum dolor sit amet,oluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";s:14:"testim3_author";s:6:"people";s:12:"testim3_text";s:347:"  Lorem ipsum dolor sit amet,oluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";s:10:"footer_ask";s:15:"Ready to start?";s:4:"Hire";s:7:"Here us";s:6:"submit";s:4:"SEND";}');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `array` text NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `alias`, `array`, `img`) VALUES
(0, 'alias of project', 'a:8:{s:5:"alias";s:16:"Alias of project";s:5:"title";s:16:"Title of project";s:6:"client";s:6:"Client";s:11:"your_client";s:11:"Your client";s:8:"category";s:8:"Category";s:15:"description_top";s:18:"Description on top";s:18:"description_bottom";s:147:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, ";s:6:"submit";s:4:"SEND";}', '4883'),
(0, 'new2', 'a:8:{s:5:"alias";s:4:"new2";s:5:"title";s:16:"Title of project";s:6:"client";s:6:"Client";s:11:"your_client";s:11:"Your client";s:8:"category";s:8:"Category";s:15:"description_top";s:18:"Description on top";s:18:"description_bottom";s:147:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, ";s:6:"submit";s:4:"SEND";}', '1588'),
(0, 'alias of project', 'a:8:{s:5:"alias";s:16:"Alias of project";s:5:"title";s:16:"Title of project";s:6:"client";s:6:"Client";s:11:"your_client";s:11:"Your client";s:8:"category";s:8:"Category";s:15:"description_top";s:18:"Description on top";s:18:"description_bottom";s:147:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, ";s:6:"submit";s:4:"SEND";}', '4991'),
(0, 'Alias of project2', 'a:10:{s:2:"id";s:1:"0";s:3:"img";s:4:"4883";s:5:"alias";s:17:"Alias of project2";s:5:"title";s:16:"Title of project";s:6:"client";s:6:"Client";s:11:"your_client";s:11:"Your client";s:8:"category";s:8:"Category";s:15:"description_top";s:18:"Description on top";s:18:"description_bottom";s:148:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam,  ";s:6:"submit";s:4:"SEND";}', ''),
(0, 'Alias of project2', 'a:10:{s:2:"id";s:1:"0";s:3:"img";s:0:"";s:5:"alias";s:17:"Alias of project2";s:5:"title";s:16:"Title of project";s:6:"client";s:6:"Client";s:11:"your_client";s:11:"Your client";s:8:"category";s:8:"Category";s:15:"description_top";s:18:"Description on top";s:18:"description_bottom";s:149:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam,   ";s:6:"submit";s:4:"SEND";}', '');

-- --------------------------------------------------------

--
-- Структура таблицы `subs`
--

CREATE TABLE IF NOT EXISTS `subs` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subs`
--

INSERT INTO `subs` (`id`, `name`, `email`) VALUES
(1, 'Micle', 'kapustinmm@mail.ru'),
(2, 'tetst', 'kapustinmm@mail.ru'),
(3, 'tetst', 'kapustinmm@mail.ru'),
(4, 'tetst', 'kapustinmm@mail.ru'),
(5, 'ÐšÐ°Ð¿ÑƒÑÑ‚Ð¸Ð½', 'kapustinmm@mail.ru'),
(6, 'test', 'kapustinomm@gmail.com'),
(7, 'Anar', 'mranar4ik@gmail.com'),
(8, 'Anar', 'mranar4ik@gmail.com'),
(9, 'ÐœÐ¸Ñ…Ð°Ð¸Ð»', 'kapustinomm@gmail.com'),
(10, 'ÐœÐ¸Ñ…Ð°Ð¸Ð»Ð°', 'kapustinomm@gmail.com'),
(11, 'tytytytyyry', 'hyjyjyj@msail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transaltor`
--

CREATE TABLE IF NOT EXISTS `transaltor` (
  `id` int(11) NOT NULL,
  `language` varchar(10) NOT NULL,
  `array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transaltor`
--

INSERT INTO `transaltor` (`id`, `language`, `array`) VALUES
(0, 'en', 'b:0;'),
(1, 'az', 'a:3:{s:600:"lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,oluptas&nbsp;sit&nbsp;aspernatur&nbsp;aut&nbsp;odit&nbsp;aut&nbsp;fugit,&nbsp;sed&nbsp;quia&nbsp;consequuntur&nbsp;magni&nbsp;dolores&nbsp;eos&nbsp;qui&nbsp;ratione&nbsp;voluptatem&nbsp;sequi&nbsp;nesciunt.&nbsp;neque&nbsp;porro&nbsp;quisquam&nbsp;est,&nbsp;qui&nbsp;dolorem&nbsp;ipsum&nbsp;quia&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur,&nbsp;adipisci&nbsp;velit,&nbsp;sed&nbsp;quia&nbsp;non&nbsp;numquam&nbsp;eius&nbsp;modi&nbsp;tempora&nbsp;incidunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magnam&nbsp;aliquam&nbsp;quaerat&nbsp;voluptatem.";s:600:"lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,oluptas&nbsp;sit&nbsp;aspernatur&nbsp;aut&nbsp;odit&nbsp;aut&nbsp;fugit,&nbsp;sed&nbsp;quia&nbsp;consequuntur&nbsp;magni&nbsp;dolores&nbsp;eos&nbsp;qui&nbsp;ratione&nbsp;voluptatem&nbsp;sequi&nbsp;nesciunt.&nbsp;neque&nbsp;porro&nbsp;quisquam&nbsp;est,&nbsp;qui&nbsp;dolorem&nbsp;ipsum&nbsp;quia&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur,&nbsp;adipisci&nbsp;velit,&nbsp;sed&nbsp;quia&nbsp;non&nbsp;numquam&nbsp;eius&nbsp;modi&nbsp;tempora&nbsp;incidunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magnam&nbsp;aliquam&nbsp;quaerat&nbsp;voluptatem.";s:6:"people";s:7:"working";s:115:"ÐœÑ‹&nbsp;ÐºÐ¾Ð¼Ð°Ð½Ð´Ð°&nbsp;Ð¼Ð¾Ð»Ð¾Ð´Ñ‹Ñ…&nbsp;Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸ÐºÐ¾Ð²&nbsp;Ð¸Ñ‰ÐµÐ¼&nbsp;Ð¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð¾Ð².";s:37:"vfy6bfv6btfy6bfv6ybf6vyfb6yvfy6bfvy6b";}'),
(2, 'ru', 'a:2:{s:72:"we&nbsp;are&nbsp;imza&nbsp;group&nbsp;a&nbsp;<br>consulting&nbsp;company";s:151:"&nbsp;ÐœÐ«&nbsp;ÐšÐžÐœÐŸÐÐÐ˜Ð¯&nbsp;ÐœÐžÐ›ÐžÐ”Ð«Ð¥&nbsp;Ð ÐÐ—Ð ÐÐ‘ÐžÐ¢Ð§Ð˜ÐšÐžÐ’,<br>ÐÐÐ£Ð§Ð˜Ðœ&nbsp;Ð’ÐÐ¡&nbsp;ÐŸÐ ÐžÐ“Ð ÐÐœÐœÐ˜Ð ÐžÐ’ÐÐÐ˜Ð®";s:32:"we&nbsp;are&nbsp;imza&nbsp;group";s:32:"ÐœÑ‹&nbsp;ÐµÑÑ‚ÑŒ&nbsp;Ð˜Ð¼Ð·Ð°";}');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) unsigned NOT NULL,
  `login` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL DEFAULT 'admin',
  `password` char(32) NOT NULL,
  `phone` int(20) NOT NULL,
  `is_active` tinyint(1) unsigned DEFAULT '1',
  `dt_registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `role`, `password`, `phone`, `is_active`, `dt_registration`) VALUES
(5, 'kapa', 'Kapustinmm@mail.ru', 'user', 'd5ff859aad90db944d352d95d0ee6717', 0, 1, '2017-03-05 13:57:52'),
(7, 'loxandro', 'loxandro', 'admin', '690a292ec3f8b42f51a70994c4d09361', 34424242, 1, '2017-02-28 16:01:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transaltor`
--
ALTER TABLE `transaltor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `subs`
--
ALTER TABLE `subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
