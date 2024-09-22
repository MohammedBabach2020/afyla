-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 oct. 2021 à 17:58
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u334766851_larbio`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `defaulte` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(20, 'PANTS', 'c1.jpg', '2021-06-28 08:45:56', '2021-06-28 09:08:56'),
(21, 'JACKETS', 'c2.jpg', '2021-06-28 08:48:34', '2021-06-28 09:08:48'),
(22, 'DRESSES', 'c3.jpg', '2021-06-28 08:48:50', '2021-06-28 09:08:39'),
(23, 'SKIRTS', 'c4.jpg', '2021-06-28 08:49:06', '2021-06-28 09:08:32');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `continent` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id`, `continent`, `country`, `currency`) VALUES
(1, 'Africa', 'Algeria', 'DZD'),
(2, 'Africa', 'Angola', 'AOA'),
(3, 'Africa', 'Benin', 'XOF'),
(4, 'Africa', 'Botswana', 'BWP'),
(5, 'Africa', 'British Indian Ocean Territory (the)', 'USD'),
(6, 'Africa', 'Burkina Faso', 'XOF'),
(7, 'Africa', 'Burundi', 'BIF'),
(8, 'Africa', 'Cabo Verde', 'CVE'),
(9, 'Africa', 'Cameroon', 'XAF'),
(10, 'Africa', 'Central African Republic (the)', 'XAF'),
(11, 'Africa', 'Chad', 'XAF'),
(12, 'Africa', 'Comoros (the)', 'KMF'),
(13, 'Africa', 'Congo (the Democratic Republic of the)', 'CDF'),
(14, 'Africa', 'Congo (the)', 'XAF'),
(15, 'Africa', 'Djibouti', 'DJF'),
(16, 'Africa', 'Côte d\'Ivoire', 'XOF'),
(17, 'Africa', 'Egypt', 'EGP'),
(18, 'Africa', 'Equatorial Guinea', 'XAF'),
(19, 'Africa', 'Eritrea', 'ERN'),
(20, 'Africa', 'Eswatini', 'SZL'),
(21, 'Africa', 'Ethiopia', 'ETB'),
(22, 'Africa', 'Gabon', 'XAF'),
(23, 'Africa', 'Gambia (the)', 'GMD'),
(24, 'Africa', 'Ghana', 'GHS'),
(25, 'Africa', 'Guinea', 'GNF'),
(26, 'Africa', 'Guinea-Bissau', 'XOF'),
(27, 'Africa', 'Kenya', 'KES'),
(28, 'Africa', 'Lesotho', 'LSL/ZAR'),
(29, 'Africa', 'Liberia', 'LRD'),
(30, 'Africa', 'Libya', 'LYD'),
(31, 'Africa', 'Madagascar', 'MGA'),
(32, 'Africa', 'Malawi', 'MWK'),
(33, 'Africa', 'Mali', 'XOF'),
(34, 'Africa', 'Morocco', 'MAD'),
(35, 'Africa', 'Mauretania', 'MRU'),
(36, 'Africa', 'Mauritius', 'MUR'),
(37, 'Africa', 'Mozambique', 'MZN'),
(38, 'Africa', 'Namibia', 'NAD/ZAR'),
(39, 'Africa', 'Niger (the)', 'XOF'),
(40, 'Africa', 'Nigeria', 'NGN'),
(41, 'Africa', 'Rwanda', 'RWF'),
(42, 'Africa', 'Saint Helena, Ascension and Tristan da Cunha', 'SHP'),
(43, 'Africa', 'Sâo Tomé and Príncipe', 'STN'),
(44, 'Africa', 'Senegal', 'XOF'),
(45, 'Africa', 'Seychelles', 'SCR'),
(46, 'Africa', 'Sierra Leone', 'SLL'),
(47, 'Africa', 'Somalia', 'SOS'),
(48, 'Africa', 'South Africa', 'ZAR'),
(49, 'Africa', 'Sudan (the)', 'SDG'),
(50, 'Africa', 'South Sudan', 'SSP'),
(51, 'Africa', 'Tanzania, United Republic of', 'TZS'),
(52, 'Africa', 'Togo', 'XOF'),
(53, 'Africa', 'Tunisia', 'TND'),
(54, 'Africa', 'Uganda', 'UGX'),
(55, 'Africa', 'Western Sahara', 'MAD'),
(56, 'Africa', 'Zimbabwe', 'ZWL'),
(57, 'Africa', 'Zambia', 'ZMW'),
(58, 'Asia', 'Afghanistan', 'AFN'),
(59, 'Asia', 'Arab Emirates, United', 'AED'),
(60, 'Asia', 'Armenia', 'AMD'),
(61, 'Asia', 'Azerbaijan', 'AZN'),
(62, 'Asia', 'Bahrain', 'BHD'),
(63, 'Asia', 'Bangladesh', 'BDT'),
(64, 'Asia', 'Bhutan', 'BTN/INR'),
(65, 'Asia', 'Borneo, Southern', 'IDR'),
(66, 'Asia', 'Brunei Darussalam', 'BND'),
(67, 'Asia', 'Cambodia', 'KHR'),
(68, 'Asia', 'China', 'CNY'),
(69, 'Asia', 'Democratic People\'s Republic of Korea, former North Korea', 'KPW'),
(70, 'Asia', 'Lao People\'s Democratic Republic (the)', 'LAK'),
(71, 'Asia', 'Georgia', 'GEL'),
(72, 'Asia', 'Hong Kong', 'HKD'),
(73, 'Asia', 'India', 'INR'),
(74, 'Asia', 'Iraq', 'IQD'),
(75, 'Asia', 'Iran (Islamic Republic of)', 'IRR'),
(76, 'Asia', 'Israel', 'ILS'),
(77, 'Asia', 'Japan', 'JPY'),
(78, 'Asia', 'Jordan', 'JOD'),
(79, 'Asia', 'Kazakhstan', 'KZT'),
(80, 'Asia', 'Kyrgyzstan', 'KGS'),
(81, 'Asia', 'Korea, the Republic of, former South Korea', 'KRW'),
(82, 'Asia', 'Kuwait', 'KWD'),
(83, 'Asia', 'Lebanon', 'LBP'),
(84, 'Asia', 'Macau', 'MOP'),
(85, 'Asia', 'Malaysia', 'MYR'),
(86, 'Asia', 'Maldives', 'MVR'),
(87, 'Asia', 'Mongolia', 'MNT'),
(88, 'Asia', 'Myanmar', 'MMK'),
(89, 'Asia', 'Nepal', 'NPR'),
(90, 'Asia', 'Oman', 'OMR'),
(91, 'Asia', 'Pakistan', 'PKR'),
(92, 'Asia', 'Palestinian territories', '-'),
(93, 'Asia', 'Philippines (the)', 'PHP'),
(94, 'Asia', 'Qatar', 'QAR'),
(95, 'Asia', 'Saudi Arabia', 'SAR'),
(96, 'Asia', 'Singapore', 'SGD'),
(97, 'Asia', 'Sri Lanka', 'LKR'),
(98, 'Asia', 'Syrian Arab Republic', 'SYP'),
(99, 'Asia', 'Tajikistan', 'TJS'),
(100, 'Asia', 'Taiwan (Province of China)', 'TWD'),
(101, 'Asia', 'Thailand', 'THB'),
(102, 'Asia', 'Timor-Leste', 'USD'),
(103, 'Asia', 'Turkmenistan', 'TMT'),
(104, 'Asia', 'Uzbekistan', 'UZS'),
(105, 'Asia', 'Vietnam', 'VND'),
(106, 'Asia', 'Yemen', 'YER'),
(107, 'Europe', 'Albania', 'ALL'),
(108, 'Europe', 'Andorra', 'EUR'),
(109, 'Europe', 'Austria', 'EUR'),
(110, 'Europe', 'Belarus', 'BYN'),
(111, 'Europe', 'Belgium', 'EUR'),
(112, 'Europe', 'Bosnia and Herzegovina', 'BAM'),
(113, 'Europe', 'Bulgaria', 'BGN'),
(114, 'Europe', 'Ceuta', 'EUR'),
(115, 'Europe', 'Croatia', 'HRK'),
(116, 'Europe', 'Cyprus', 'EUR'),
(117, 'Europe', 'Czechia', 'CZK'),
(118, 'Europe', 'Denmark', 'DKK'),
(119, 'Europe', 'Estonia', 'EUR'),
(120, 'Europe', 'Faroe Islands (the)', 'DKK'),
(121, 'Europe', 'Finland', 'EUR'),
(122, 'Europe', 'France', 'EUR'),
(123, 'Europe', 'Gibraltar', 'GIP'),
(124, 'Europe', 'Greece', 'EUR'),
(125, 'Europe', 'Guernsey', 'GBP'),
(126, 'Europe', 'Hungary', 'HUF'),
(127, 'Europe', 'Holy See (the)', 'EUR'),
(128, 'Europe', 'Isle of Man', 'GBP'),
(129, 'Europe', 'Ireland', 'EUR'),
(130, 'Europe', 'Iceland', 'ISK'),
(131, 'Europe', 'Italy', 'EUR'),
(132, 'Europe', 'Jersey', 'GBP'),
(133, 'Europe', 'Kosovo', 'EUR'),
(134, 'Europe', 'Latvia', 'EUR'),
(135, 'Europe', 'Liechtenstein', 'CHF'),
(136, 'Europe', 'Lithuania', 'EUR'),
(137, 'Europe', 'Luxembourg', 'EUR'),
(138, 'Europe', 'Malta', 'EUR'),
(139, 'Europe', 'Melilla', 'EUR'),
(140, 'Europe', 'Montenegro', 'EUR'),
(141, 'Europe', 'Netherlands (the)', 'EUR'),
(142, 'Europe', 'Northern Ireland', 'GBP'),
(143, 'Europe', 'North Macedonia', 'MKD'),
(144, 'Europe', 'Norway', 'NOK'),
(145, 'Europe', 'Poland', 'PLN'),
(146, 'Europe', 'Portugal', 'EUR'),
(147, 'Europe', 'Republic of Moldova (the)', 'MDL'),
(148, 'Europe', 'Romania', 'RON'),
(149, 'Europe', 'Russian Federation (the)', 'RUB'),
(150, 'Europe', 'San Marino', 'EUR'),
(151, 'Europe', 'Sweden', 'SEK'),
(152, 'Europe', 'Switzerland', 'CHF'),
(153, 'Europe', 'Serbia (excl. Kosovo)', 'RSD'),
(154, 'Europe', 'Slovakia', 'EUR'),
(155, 'Europe', 'Slovenia', 'EUR'),
(156, 'Europe', 'Spain', 'EUR'),
(157, 'Europe', 'Turkey', 'TRY'),
(158, 'Europe', 'Ukraine', 'UAH'),
(159, 'Europe', 'United Kingdom(the) (excl. Guernsey, Jersey and Isle of Man)', 'GBP'),
(160, 'Europe', 'United Kingdom (the) (excl. Nothern Ireland)', 'GBP'),
(161, 'North America', 'Anguilla', 'XCD'),
(162, 'North America', 'Antigua and Barbuda', 'XCD'),
(163, 'North America', 'Aruba', 'AWG'),
(164, 'North America', 'Bahamas (the)', 'BSD'),
(165, 'North America', 'Barbados', 'BBD'),
(166, 'North America', 'Belize', 'BZD'),
(167, 'North America', 'Bermuda', 'BMD'),
(168, 'North America', 'Bonaire, Sint Eustatius and Saba', 'USD'),
(169, 'North America', 'British Virgin Islands', 'USD'),
(170, 'North America', 'Cayman Islands (the)', 'KYD'),
(171, 'North America', 'Canada', 'CAD'),
(172, 'North America', 'Costa Rica', 'CRC'),
(173, 'North America', 'Cuba', 'CUP/CUC'),
(174, 'North America', 'Dominica', 'XCD'),
(175, 'North America', 'Dominican Republic (the)', 'DOP'),
(176, 'North America', 'El Salvador', 'SVC/USD'),
(177, 'North America', 'Grenada', 'XCD'),
(178, 'North America', 'Greenland', 'DKK'),
(179, 'North America', 'Guatemala', 'GTQ'),
(180, 'North America', 'Haiti', 'HTG/USD'),
(181, 'North America', 'Honduras', 'HNL'),
(182, 'North America', 'Jamaica', 'JMD'),
(183, 'North America', 'Mexico', 'MXN'),
(184, 'North America', 'Montserrat', 'XCD'),
(185, 'North America', 'Nicaragua', 'NIO'),
(186, 'North America', 'Panama (incl. Canal Zone)', 'PAB/USD'),
(187, 'North America', 'Saint Kitts and Nevis', 'XCD'),
(188, 'North America', 'Saint Lucia', 'XCD'),
(189, 'North America', 'Saint Pierre and Miquelon', 'EUR'),
(190, 'North America', 'Saint Vincent and the Grenadines', 'XCD'),
(191, 'North America', 'Sint Maarten (Dutch)', 'ANG'),
(192, 'North America', 'Tobago and Trinidad', 'TTD'),
(193, 'North America', 'Turks and Caicos Islands', 'USD'),
(194, 'North America', 'United States of America (the)', 'USD'),
(195, 'North America', 'Virgin Islands of the United States', 'USD'),
(196, 'Oceania', 'American Samoa', 'USD'),
(197, 'Oceania', 'Antarctica', '-'),
(198, 'Oceania', 'Australia', 'AUD'),
(199, 'Oceania', 'Bouvet Island', 'NOK'),
(200, 'Oceania', 'Cocos (Keeling) Islands (the)', 'AUD'),
(201, 'Oceania', 'Cook Islands (the)', 'NZD'),
(202, 'Oceania', 'Christmas Island (Indian Ocean)', 'AUD'),
(203, 'Oceania', 'Christmas Island (Pacific Ocean)', 'AUD'),
(204, 'Oceania', 'Federated States of Micronesia', 'USD'),
(205, 'Oceania', 'Fiji', 'FJD'),
(206, 'Oceania', 'French Southern Territories (the)', 'EUR'),
(207, 'Oceania', 'French Polynesia', 'XPF'),
(208, 'Oceania', 'Guam', 'USD'),
(209, 'Oceania', 'Heard Island and the McDonald Islands', 'AUD'),
(210, 'Oceania', 'Kiribati', 'AUD'),
(211, 'Oceania', 'Marshall Islands (the)', 'USD'),
(212, 'Oceania', 'Nauru', 'AUD'),
(213, 'Oceania', 'New Caledonia', 'XPF'),
(214, 'Oceania', 'New Zealand', 'NZD'),
(215, 'Oceania', 'Niue', 'NZD'),
(216, 'Oceania', 'Northern Mariana Islands (the)', 'USD'),
(217, 'Oceania', 'Norfolk Island', 'AUD'),
(218, 'Oceania', 'Palau', 'USD'),
(219, 'Oceania', 'Papua New Guinea', 'PGK'),
(220, 'Oceania', 'Pitcairn Islands Group', 'NZD'),
(221, 'Oceania', 'Solomon Islands', 'SBD'),
(222, 'Oceania', 'Samoa', 'WST'),
(223, 'Oceania', 'South Georgia and South Sandwich Islands', '-'),
(224, 'Oceania', 'Tokelau', 'NZD'),
(225, 'Oceania', 'Tonga', 'TOP'),
(226, 'Oceania', 'Tuvalu', 'AUD'),
(227, 'Oceania', 'United States Minor Outlying Islands (the)', 'USD'),
(228, 'Oceania', 'Vanuatu', 'VUV'),
(229, 'Oceania', 'Wallis and Futuna (Islands)', 'XPF'),
(230, 'South America', 'Argentina', 'ARS'),
(231, 'South America', 'Bolivia (Plurinational State of)', 'BOB'),
(232, 'South America', 'Brazil', 'BRL'),
(233, 'South America', 'Chile', 'CLP'),
(234, 'South America', 'Colombia', 'COP'),
(235, 'South America', 'Curaçao', 'ANG'),
(236, 'South America', 'Ecuador', 'USD'),
(237, 'South America', 'Falkland Islands (the)', 'FKP'),
(238, 'South America', 'Guyana', 'GYD'),
(239, 'South America', 'Paraguay', 'PYG'),
(240, 'South America', 'Peru', 'PEN'),
(241, 'South America', 'Suriname', 'SRD'),
(242, 'South America', 'Uruguay', 'UYU'),
(243, 'South America', 'Venezuela (Bolivarian Republic of)', 'VES');

-- --------------------------------------------------------

--
-- Structure de la table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `days` varchar(255) DEFAULT NULL,
  `mounths` varchar(255) DEFAULT NULL,
  `years` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dates`
--

INSERT INTO `dates` (`id`, `days`, `mounths`, `years`) VALUES
(1, '1', '1', '1900'),
(2, '2', '2', '1901'),
(3, '3', '3', '1902'),
(4, '4', '4', '1903'),
(5, '5', '5', '1904'),
(6, '6', '6', '1905'),
(7, '7', '7', '1906'),
(8, '8', '8', '1907'),
(9, '9', '9', '1908'),
(10, '10', '10', '1909'),
(11, '11', '11', '1910'),
(12, '12', '12', '1911'),
(13, '13', NULL, '1912'),
(14, '14', NULL, '1913'),
(15, '15', NULL, '1914'),
(16, '16', NULL, '1915'),
(17, '17', NULL, '1916'),
(18, '18', NULL, '1917'),
(19, '19', NULL, '1918'),
(20, '20', NULL, '1919'),
(21, '21', NULL, '1920'),
(22, '22', NULL, '1921'),
(23, '23', NULL, '1922'),
(24, '24', NULL, '1923'),
(25, '25', NULL, '1924'),
(26, '26', NULL, '1925'),
(27, '27', NULL, '1926'),
(28, '28', NULL, '1927'),
(29, '29', NULL, '1928'),
(30, '30', NULL, '1929'),
(31, '31', NULL, '1930'),
(32, NULL, NULL, '1931'),
(33, NULL, NULL, '1932'),
(34, NULL, NULL, '1933'),
(35, NULL, NULL, '1934'),
(36, NULL, NULL, '1935'),
(37, NULL, NULL, '1936'),
(38, NULL, NULL, '1937'),
(39, NULL, NULL, '1938'),
(40, NULL, NULL, '1939'),
(41, NULL, NULL, '1940'),
(42, NULL, NULL, '1941'),
(43, NULL, NULL, '1942'),
(44, NULL, NULL, '1943'),
(45, NULL, NULL, '1944'),
(46, NULL, NULL, '1945'),
(47, NULL, NULL, '1946'),
(48, NULL, NULL, '1947'),
(49, NULL, NULL, '1948'),
(50, NULL, NULL, '1949'),
(51, NULL, NULL, '1950'),
(52, NULL, NULL, '1951'),
(53, NULL, NULL, '1952'),
(54, NULL, NULL, '1953'),
(55, NULL, NULL, '1954'),
(56, NULL, NULL, '1955'),
(57, NULL, NULL, '1956'),
(58, NULL, NULL, '1957'),
(59, NULL, NULL, '1958'),
(60, NULL, NULL, '1959'),
(61, NULL, NULL, '1960'),
(62, NULL, NULL, '1961'),
(63, NULL, NULL, '1962'),
(64, NULL, NULL, '1963'),
(65, NULL, NULL, '1964'),
(66, NULL, NULL, '1965'),
(67, NULL, NULL, '1966'),
(68, NULL, NULL, '1967'),
(69, NULL, NULL, '1968'),
(70, NULL, NULL, '1969'),
(71, NULL, NULL, '1970'),
(72, NULL, NULL, '1971'),
(73, NULL, NULL, '1972'),
(74, NULL, NULL, '1973'),
(75, NULL, NULL, '1974'),
(76, NULL, NULL, '1975'),
(77, NULL, NULL, '1976'),
(78, NULL, NULL, '1977'),
(79, NULL, NULL, '1978'),
(80, NULL, NULL, '1979'),
(81, NULL, NULL, '1980'),
(82, NULL, NULL, '1981'),
(83, NULL, NULL, '1982'),
(84, NULL, NULL, '1983'),
(85, NULL, NULL, '1984'),
(86, NULL, NULL, '1985'),
(87, NULL, NULL, '1986'),
(88, NULL, NULL, '1987'),
(89, NULL, NULL, '1988'),
(90, NULL, NULL, '1989'),
(91, NULL, NULL, '1990'),
(92, NULL, NULL, '1991'),
(93, NULL, NULL, '1992'),
(94, NULL, NULL, '1993'),
(95, NULL, NULL, '1994'),
(96, NULL, NULL, '1995'),
(97, NULL, NULL, '1996'),
(98, NULL, NULL, '1997'),
(99, NULL, NULL, '1998'),
(100, NULL, NULL, '1999'),
(101, NULL, NULL, '2000'),
(102, NULL, NULL, '2001'),
(103, NULL, NULL, '2002'),
(104, NULL, NULL, '2003'),
(105, NULL, NULL, '2004'),
(106, NULL, NULL, '2005'),
(107, NULL, NULL, '2006'),
(108, NULL, NULL, '2007'),
(109, NULL, NULL, '2008'),
(110, NULL, NULL, '2009'),
(111, NULL, NULL, '2010'),
(112, NULL, NULL, '2011'),
(113, NULL, NULL, '2012'),
(114, NULL, NULL, '2013'),
(115, NULL, NULL, '2014'),
(116, NULL, NULL, '2015'),
(117, NULL, NULL, '2016'),
(118, NULL, NULL, '2017'),
(119, NULL, NULL, '2018'),
(120, NULL, NULL, '2019'),
(121, NULL, NULL, '2020'),
(122, NULL, NULL, '2021');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `address`, `phone`, `email`) VALUES
(1, 'أزلي الجنوبي مراكش', '0666.85.39.52', 'larbio.larbio.100@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `montant` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `montant` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `uni` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `trends` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `stock`, `uni`, `image`, `description`, `trends`, `created_at`, `updated_at`) VALUES
(1, 'LOOK 1', 'PANTS', '20', 'U', 'c1.jpg', 'Lorem ipsum 1', '0', '2021-06-29 23:31:01', '2021-06-29 23:31:01'),
(2, 'LOOK 2', 'PANTS', '16', 'U', 'c2.jpg', 'Lorem ipsum 2', '0', '2021-06-29 23:32:35', '2021-09-10 18:03:14'),
(3, 'LOOK 3', 'PANTS', '20', 'U', 'c3.jpg', 'Lorem ipsum 3', '0', '2021-06-29 23:34:23', '2021-06-29 23:34:23');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `ship`
--

CREATE TABLE `ship` (
  `id` int(11) NOT NULL,
  `shipping` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ship`
--

INSERT INTO `ship` (`id`, `shipping`) VALUES
(1, '10');

-- --------------------------------------------------------

--
-- Structure de la table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sizes`
--

INSERT INTO `sizes` (`id`, `prod_id`, `size`, `price`) VALUES
(29, '2', '44', '120'),
(30, '2', '50', '99'),
(31, '2', '32', '520'),
(32, '2', '40', '33');

-- --------------------------------------------------------

--
-- Structure de la table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `mounth` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `phone`, `password`, `country`, `day`, `mounth`, `year`, `created_at`, `updated_at`, `role`) VALUES
(13, 'Admin', NULL, 'admin@afyla.com', NULL, '$2y$10$oAD1n9z5.DYQBmixNWmK4ebVenhIRd.O9hRfpXDUCxkmAPTeTclAy', NULL, NULL, NULL, NULL, '2021-10-03 21:13:55', '2021-10-03 21:13:55', '2'),
(14, 'dabla', 'simo', 'dabla@gmail.com', '65464654', '$2y$10$3l8VZT99sA6/m5JjBojaHOjAoavzUINj.XMINIJM6qtR9jqXAb8EO', 'USA', '16', '9', '1916', '2021-10-12 13:28:04', '2021-10-12 17:53:00', '2');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `prodId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT pour la table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
