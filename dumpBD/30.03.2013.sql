-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 30 2013 г., 23:46
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `messdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci NOT NULL,
  `short_text` text CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci NOT NULL,
  `full_text` text CHARACTER SET cp1251 COLLATE cp1251_ukrainian_ci,
  `created_date` int(11) NOT NULL,
  `update_date` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=222 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `short_text`, `full_text`, `created_date`, `update_date`) VALUES
(199, 'Misha', 'hjgfhf', 'hjgfhfhgfgf', 1364651790, 1364678795),
(200, 'Р»С€С‚РїРїРїРїРї', ' \r\n nc', ' \r\n nczxvxcnvncx\r\n \r\nlolllllllllllll                                                ', 1364651795, 1364678804),
(201, 'fkdsbfsdmf', ' \r\n nv', ' \r\n nvxcbvmcxb\r\n                                ', 1364662553, 1364678816),
(202, 'Mishga', ' fbvad', ' fbvadfvbsdnbbnfsd\r\n                ', 1364662847, 0),
(204, 'С‚СЊРёСЊРёСЊРёРѕ', 'СЊС‚С‚', 'СЊС‚С‚СЊСЊС‚С‚СЊС‚СЊС‚СЊ	', 1364673124, 0),
(205, 'dnbasfbhsdmnf', 'nbsdbn', 'nbsdbnfsdfs	', 1364676677, 0),
(207, 'vcxmvbxcnv', 'v,nxvn', 'v,nxvnxnv	', 1364678508, 0),
(208, ',mvcznvnbxmn', 'vnxcvx', 'vnxcvxcnvx	', 1364678515, 0),
(209, ',mvcznvnbxmn', 'vnxcvx', 'vnxcvxcnvx	', 1364678576, 0),
(210, 'kcxncv,x', 'nczxnv', 'nczxnvnxcm	', 1364678582, 0),
(211, 'kcxncv,x', 'nczxnv', 'nczxnvnxcm	', 1364678594, 0),
(212, 'nv vxkvbcxbn', 'n,vx,n', 'n,vx,nbvvcxb	', 1364678602, 0),
(213, 'Р»С€С‚РїРїРїРїРї', ' \r\n \r\n', ' \r\n \r\nnkfsdfndsfksdfksdkjf	                                ', 1364678618, 0),
(214, 'Misha', ' \r\n \r\n', ' \r\n \r\nnkfsdfndsfksdfksdkjf	                                ', 1364678629, 0),
(215, 'Misha', ' cmzxb', ' cmzxbczxbncvzxm\r\n \r\n \r\nnkfsdfndsfksdfksdkjf	                                                ', 1364678651, 0),
(216, 'Р»С€С‚РїРїРїРїРї', ' \r\n \r\n', ' \r\n \r\nlolllllllllllll                                ', 1364678680, 0),
(217, 'Misha', ' \r\n cv', ' \r\n cvbdbvbxvmxmvxmvbvxcvxnvxnbcvnxcmvmcxvcxnvxcvnxcvnxcnbvbcxnvncxnbvcx\r\n \r\nnkfsdfndsfksdfksdkjf	                                                                ', 1364678768, 0),
(218, 'Misha', 'hjgfhf', 'hjgfhfhgfgf', 1364678795, 0),
(219, 'Р»С€С‚РїРїРїРїРї', ' \r\n nc', ' \r\n nczxvxcnvncx\r\n \r\nlolllllllllllll                                                ', 1364678804, 0),
(220, 'fkdsbfsdmf', ' \r\n nv', ' \r\n nvxcbvmcxb\r\n                                ', 1364678816, 0),
(221, 'Mishan9', '	dfbsd', '	dfbsdfbsdkjfbsdkfhskjf', 1364679841, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
