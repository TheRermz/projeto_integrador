-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 07:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `hellmasreview`
--
CREATE DATABASE IF NOT EXISTS `hellmasreview` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hellmasreview`;
-- --------------------------------------------------------
--
-- Table structure for table `articles`
--
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` tinytext NOT NULL,
  `abstract` tinytext NOT NULL,
  `reg_time` time NOT NULL,
  `reg_date` date NOT NULL,
  `article_content` mediumtext NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
--
-- Table structure for table `br_states`
--
CREATE TABLE IF NOT EXISTS `br_states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` tinytext NOT NULL,
  `state_abbr` char(2) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE = InnoDB AUTO_INCREMENT = 100 DEFAULT CHARSET = utf8;
--
-- Dumping data for table `br_states`
--
INSERT INTO `br_states` (`state_id`, `state_name`, `state_abbr`)
VALUES (1, 'Acre', 'AC'),
  (2, 'Alagoas', 'AL'),
  (3, 'Amazonas', 'AM'),
  (4, 'Amapá', 'AP'),
  (5, 'Bahia', 'BA'),
  (6, 'Ceará', 'CE'),
  (7, 'Distrito Federal', 'DF'),
  (8, 'Espírito Santo', 'ES'),
  (9, 'Goiás', 'GO'),
  (10, 'Maranhão', 'MA'),
  (11, 'Minas Gerais', 'MG'),
  (12, 'Mato Grosso do Sul', 'MS'),
  (13, 'Mato Grosso', 'MT'),
  (14, 'Pará', 'PA'),
  (15, 'Paraíba', 'PB'),
  (16, 'Pernambuco', 'PE'),
  (17, 'Piauí', 'PI'),
  (18, 'Paraná', 'PR'),
  (19, 'Rio de Janeiro', 'RJ'),
  (20, 'Rio Grande do Norte', 'RN'),
  (21, 'Rondônia', 'RO'),
  (22, 'Roraima', 'RR'),
  (23, 'Rio Grande do Sul', 'RS'),
  (24, 'Santa Catarina', 'SC'),
  (25, 'Sergipe', 'SE'),
  (26, 'São Paulo', 'SP'),
  (27, 'Tocantins', 'TO'),
  (28, 'Exterior', 'EX');
-- --------------------------------------------------------
--
-- Table structure for table `country`
--
CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name_pt` tinytext NOT NULL,
  `country_name` tinytext NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE = InnoDB AUTO_INCREMENT = 253 DEFAULT CHARSET = utf8;
--
-- Dumping data for table `country`
--
INSERT INTO `country` (`country_id`, `country_name_pt`, `country_name`)
VALUES (1, 'AFEGANISTÃO', 'AFGHANISTAN'),
  (2, 'ACROTÍRI E DECELIA', 'AKROTIRI E DEKÉLIA'),
  (3, 'ÁFRICA DO SUL', 'SOUTH AFRICA'),
  (4, 'ALBÂNIA', 'ALBANIA'),
  (5, 'ALEMANHA', 'GERMANY'),
  (6, 'AMERICAN SAMOA', 'AMERICAN SAMOA'),
  (7, 'ANDORRA', 'ANDORRA'),
  (8, 'ANGOLA', 'ANGOLA'),
  (9, 'ANGUILLA', 'ANGUILLA'),
  (10, 'ANTÍGUA E BARBUDA', 'ANTIGUA AND BARBUDA'),
  (
    11,
    'ANTILHAS NEERLANDESAS',
    'NETHERLANDS ANTILLES'
  ),
  (12, 'ARÁBIA SAUDITA', 'SAUDI ARABIA'),
  (13, 'ARGÉLIA', 'ALGERIA'),
  (14, 'ARGENTINA', 'ARGENTINA'),
  (15, 'ARMÉNIA', 'ARMENIA'),
  (16, 'ARUBA', 'ARUBA'),
  (17, 'AUSTRÁLIA', 'AUSTRALIA'),
  (18, 'ÁUSTRIA', 'AUSTRIA'),
  (19, 'AZERBAIJÃO', 'AZERBAIJAN'),
  (20, 'BAHAMAS', 'BAHAMAS, THE'),
  (21, 'BANGLADECHE', 'BANGLADESH'),
  (22, 'BARBADOS', 'BARBADOS'),
  (23, 'BARÉM', 'BAHRAIN'),
  (24, 'BASSAS DA ÍNDIA', 'BASSAS DA INDIA'),
  (25, 'BÉLGICA', 'BELGIUM'),
  (26, 'BELIZE', 'BELIZE'),
  (27, 'BENIM', 'BENIN'),
  (28, 'BERMUDAS', 'BERMUDA'),
  (29, 'BIELORRÚSSIA', 'BELARUS'),
  (30, 'BOLÍVIA', 'BOLIVIA'),
  (
    31,
    'BÓSNIA E HERZEGOVINA',
    'BOSNIA AND HERZEGOVINA'
  ),
  (32, 'BOTSUANA', 'BOTSWANA'),
  (33, 'BRASIL', 'BRAZIL'),
  (34, 'BRUNEI DARUSSALAM', 'BRUNEI DARUSSALAM'),
  (35, 'BULGÁRIA', 'BULGARIA'),
  (36, 'BURQUINA FASO', 'BURKINA FASO'),
  (37, 'BURUNDI', 'BURUNDI'),
  (38, 'BUTÃO', 'BHUTAN'),
  (39, 'CABO VERDE', 'CAPE VERDE'),
  (40, 'CAMARÕES', 'CAMEROON'),
  (41, 'CAMBOJA', 'CAMBODIA'),
  (42, 'CANADÁ', 'CANADA'),
  (43, 'CATAR', 'QATAR'),
  (44, 'CAZAQUISTÃO', 'KAZAKHSTAN'),
  (
    45,
    'CENTRO-AFRICANA REPÚBLICA',
    'CENTRAL AFRICAN REPUBLIC'
  ),
  (46, 'CHADE', 'CHAD'),
  (47, 'CHILE', 'CHILE'),
  (48, 'CHINA', 'CHINA'),
  (49, 'CHIPRE', 'CYPRUS'),
  (50, 'COLÔMBIA', 'COLOMBIA'),
  (51, 'COMORES', 'COMOROS'),
  (52, 'CONGO', 'CONGO'),
  (
    53,
    'CONGO REPÚBLICA DEMOCRÁTICA',
    'CONGO DEMOCRATIC REPUBLIC'
  ),
  (54, 'COREIA DO NORTE', 'KOREA NORTH'),
  (55, 'COREIA DO SUL', 'KOREA SOUTH'),
  (56, 'COSTA DO MARFIM', 'IVORY COAST'),
  (57, 'COSTA RICA', 'COSTA RICA'),
  (58, 'CROÁCIA', 'CROATIA'),
  (59, 'CUBA', 'CUBA'),
  (60, 'DINAMARCA', 'DENMARK'),
  (61, 'DOMÍNICA', 'DOMINICA'),
  (62, 'EGIPTO', 'EGYPT'),
  (
    63,
    'EMIRADOS ÁRABES UNIDOS',
    'UNITED ARAB EMIRATES'
  ),
  (64, 'EQUADOR', 'ECUADOR'),
  (65, 'ERITREIA', 'ERITREA'),
  (66, 'ESLOVÁQUIA', 'SLOVAKIA'),
  (67, 'ESLOVÉNIA', 'SLOVENIA'),
  (68, 'ESPANHA', 'SPAIN'),
  (69, 'ESTADOS UNIDOS', 'UNITED STATES'),
  (70, 'ESTÓNIA', 'ESTONIA'),
  (71, 'ETIÓPIA', 'ETHIOPIA'),
  (72, 'FAIXA DE GAZA', 'GAZA STRIP'),
  (73, 'FIJI', 'FIJI'),
  (74, 'FILIPINAS', 'PHILIPPINES'),
  (75, 'FINLÂNDIA', 'FINLAND'),
  (76, 'FRANÇA', 'FRANCE'),
  (77, 'GABÃO', 'GABON'),
  (78, 'GÂMBIA', 'GAMBIA'),
  (79, 'GANA', 'GHANA'),
  (80, 'GEÓRGIA', 'GEORGIA'),
  (81, 'GIBRALTAR', 'GIBRALTAR'),
  (82, 'GRANADA', 'GRENADA'),
  (83, 'GRÉCIA', 'GREECE'),
  (84, 'GRONELÂNDIA', 'GREENLAND'),
  (85, 'GUADALUPE', 'GUADELOUPE'),
  (86, 'GUAM', 'GUAM'),
  (87, 'GUATEMALA', 'GUATEMALA'),
  (88, 'GUERNSEY', 'GUERNSEY'),
  (89, 'GUIANA', 'GUYANA'),
  (90, 'GUIANA FRANCESA', 'FRENCH GUIANA'),
  (91, 'GUINÉ', 'GUINEA'),
  (92, 'GUINÉ EQUATORIAL', 'EQUATORIAL GUINEA'),
  (93, 'GUINÉ-BISSAU', 'GUINEA-BISSAU'),
  (94, 'HAITI', 'HAITI'),
  (95, 'HONDURAS', 'HONDURAS'),
  (96, 'HONG KONG', 'HONG KONG'),
  (97, 'HUNGRIA', 'HUNGARY'),
  (98, 'IÉMEN', 'YEMEN'),
  (99, 'ILHA BOUVET', 'BOUVET ISLAND'),
  (100, 'ILHA CHRISTMAS', 'CHRISTMAS ISLAND'),
  (101, 'ILHA DE CLIPPERTON', 'CLIPPERTON ISLAND'),
  (
    102,
    'ILHA DE JOÃO DA NOVA',
    'JUAN DE NOVA ISLAND'
  ),
  (103, 'ILHA DE MAN', 'ISLE OF MAN'),
  (104, 'ILHA DE NAVASSA', 'NAVASSA ISLAND'),
  (105, 'ILHA EUROPA', 'EUROPA ISLAND'),
  (106, 'ILHA NORFOLK', 'NORFOLK ISLAND'),
  (107, 'ILHA TROMELIN', 'TROMELIN ISLAND'),
  (
    108,
    'ILHAS ASHMORE E CARTIER',
    'ASHMORE AND CARTIER ISLANDS'
  ),
  (109, 'ILHAS CAIMAN', 'CAYMAN ISLANDS'),
  (
    110,
    'ILHAS COCOS (KEELING)',
    'COCOS (KEELING) ISLANDS'
  ),
  (111, 'ILHAS COOK', 'COOK ISLANDS'),
  (
    112,
    'ILHAS DO MAR DE CORAL',
    'CORAL SEA ISLANDS'
  ),
  (
    113,
    'ILHAS FALKLANDS (ILHAS MALVINAS)',
    'FALKLAND ISLANDS (ISLAS MALVINAS)'
  ),
  (114, 'ILHAS FEROE', 'FAROE ISLANDS'),
  (
    115,
    'ILHAS GEÓRGIA DO SUL E SANDWICH DO SUL',
    'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'
  ),
  (
    116,
    'ILHAS MARIANAS DO NORTE',
    'NORTHERN MARIANA ISLANDS'
  ),
  (117, 'ILHAS MARSHALL', 'MARSHALL ISLANDS'),
  (118, 'ILHAS PARACEL', 'PARACEL ISLANDS'),
  (119, 'ILHAS PITCAIRN', 'PITCAIRN ISLANDS'),
  (120, 'ILHAS SALOMÃO', 'SOLOMON ISLANDS'),
  (121, 'ILHAS SPRATLY', 'SPRATLY ISLANDS'),
  (
    122,
    'ILHAS VIRGENS AMERICANAS',
    'UNITED STATES VIRGIN ISLANDS'
  ),
  (
    123,
    'ILHAS VIRGENS BRITÂNICAS',
    'BRITISH VIRGIN ISLANDS'
  ),
  (124, 'ÍNDIA', 'INDIA'),
  (125, 'INDONÉSIA', 'INDONESIA'),
  (126, 'IRÃO', 'IRAN'),
  (127, 'IRAQUE', 'IRAQ'),
  (128, 'IRLANDA', 'IRELAND'),
  (129, 'ISLÂNDIA', 'ICELAND'),
  (130, 'ISRAEL', 'ISRAEL'),
  (131, 'ITÁLIA', 'ITALY'),
  (132, 'JAMAICA', 'JAMAICA'),
  (133, 'JAN MAYEN', 'JAN MAYEN'),
  (134, 'JAPÃO', 'JAPAN'),
  (135, 'JERSEY', 'JERSEY'),
  (136, 'JIBUTI', 'DJIBOUTI'),
  (137, 'JORDÂNIA', 'JORDAN'),
  (138, 'KIRIBATI', 'KIRIBATI'),
  (139, 'KOWEIT', 'KUWAIT'),
  (140, 'LAOS', 'LAOS'),
  (141, 'LESOTO', 'LESOTHO'),
  (142, 'LETÓNIA', 'LATVIA'),
  (143, 'LÍBANO', 'LEBANON'),
  (144, 'LIBÉRIA', 'LIBERIA'),
  (145, 'LÍBIA', 'LIBYAN ARAB JAMAHIRIYA'),
  (146, 'LISTENSTAINE', 'LIECHTENSTEIN'),
  (147, 'LITUÂNIA', 'LITHUANIA'),
  (148, 'LUXEMBURGO', 'LUXEMBOURG'),
  (149, 'MACAU', 'MACAO'),
  (150, 'MACEDÓNIA', 'MACEDONIA'),
  (151, 'MADAGÁSCAR', 'MADAGASCAR'),
  (152, 'MALÁSIA', 'MALAYSIA'),
  (153, 'MALAVI', 'MALAWI'),
  (154, 'MALDIVAS', 'MALDIVES'),
  (155, 'MALI', 'MALI'),
  (156, 'MALTA', 'MALTA'),
  (157, 'MARROCOS', 'MOROCCO'),
  (158, 'MARTINICA', 'MARTINIQUE'),
  (159, 'MAURÍCIA', 'MAURITIUS'),
  (160, 'MAURITÂNIA', 'MAURITANIA'),
  (161, 'MAYOTTE', 'MAYOTTE'),
  (162, 'MÉXICO', 'MEXICO'),
  (163, 'MIANMAR', 'MYANMAR BURMA'),
  (164, 'MICRONÉSIA', 'MICRONESIA'),
  (165, 'MOÇAMBIQUE', 'MOZAMBIQUE'),
  (166, 'MOLDÁVIA', 'MOLDOVA'),
  (167, 'MÓNACO', 'MONACO'),
  (168, 'MONGÓLIA', 'MONGOLIA'),
  (169, 'MONTENEGRO', 'MONTENEGRO'),
  (170, 'MONTSERRAT', 'MONTSERRAT'),
  (171, 'NAMÍBIA', 'NAMIBIA'),
  (172, 'NAURU', 'NAURU'),
  (173, 'NEPAL', 'NEPAL'),
  (174, 'NICARÁGUA', 'NICARAGUA'),
  (175, 'NÍGER', 'NIGER'),
  (176, 'NIGÉRIA', 'NIGERIA'),
  (177, 'NIUE', 'NIUE'),
  (178, 'NORUEGA', 'NORWAY'),
  (179, 'NOVA CALEDÓNIA', 'NEW CALEDONIA'),
  (180, 'NOVA ZELÂNDIA', 'NEW ZEALAND'),
  (181, 'OMÃ', 'OMAN'),
  (182, 'PAÍSES BAIXOS', 'NETHERLANDS'),
  (183, 'PALAU', 'PALAU'),
  (184, 'PALESTINA', 'PALESTINE'),
  (185, 'PANAMÁ', 'PANAMA'),
  (186, 'PAPUÁSIA-NOVA GUINÉ', 'PAPUA NEW GUINEA'),
  (187, 'PAQUISTÃO', 'PAKISTAN'),
  (188, 'PARAGUAI', 'PARAGUAY'),
  (189, 'PERU', 'PERU'),
  (190, 'POLINÉSIA FRANCESA', 'FRENCH POLYNESIA'),
  (191, 'POLÓNIA', 'POLAND'),
  (192, 'PORTO RICO', 'PUERTO RICO'),
  (193, 'PORTUGAL', 'PORTUGAL'),
  (194, 'QUÉNIA', 'KENYA'),
  (195, 'QUIRGUIZISTÃO', 'KYRGYZSTAN'),
  (196, 'REINO UNIDO', 'UNITED KINGDOM'),
  (197, 'REPÚBLICA CHECA', 'CZECH REPUBLIC'),
  (
    198,
    'REPÚBLICA DOMINICANA',
    'DOMINICAN REPUBLIC'
  ),
  (199, 'ROMÉNIA', 'ROMANIA'),
  (200, 'RUANDA', 'RWANDA'),
  (201, 'RÚSSIA', 'RUSSIAN FEDERATION'),
  (202, 'SAHARA OCCIDENTAL', 'WESTERN SAHARA'),
  (203, 'SALVADOR', 'EL SALVADOR'),
  (204, 'SAMOA', 'SAMOA'),
  (205, 'SANTA HELENA', 'SAINT HELENA'),
  (206, 'SANTA LÚCIA', 'SAINT LUCIA'),
  (207, 'SANTA SÉ', 'HOLY SEE'),
  (
    208,
    'SÃO CRISTÓVÃO E NEVES',
    'SAINT KITTS AND NEVIS'
  ),
  (209, 'SÃO MARINO', 'SAN MARINO'),
  (
    210,
    'SÃO PEDRO E MIQUELÃO',
    'SAINT PIERRE AND MIQUELON'
  ),
  (
    211,
    'SÃO TOMÉ E PRÍNCIPE',
    'SAO TOME AND PRINCIPE'
  ),
  (
    212,
    'SÃO VICENTE E GRANADINAS',
    'SAINT VINCENT AND THE GRENADINES'
  ),
  (213, 'SEICHELES', 'SEYCHELLES'),
  (214, 'SENEGAL', 'SENEGAL'),
  (215, 'SERRA LEOA', 'SIERRA LEONE'),
  (216, 'SÉRVIA', 'SERBIA'),
  (217, 'SINGAPURA', 'SINGAPORE'),
  (218, 'SÍRIA', 'SYRIA'),
  (219, 'SOMÁLIA', 'SOMALIA'),
  (220, 'SRI LANCA', 'SRI LANKA'),
  (221, 'SUAZILÂNDIA', 'SWAZILAND'),
  (222, 'SUDÃO', 'SUDAN'),
  (223, 'SUÉCIA', 'SWEDEN'),
  (224, 'SUÍÇA', 'SWITZERLAND'),
  (225, 'SURINAME', 'SURINAME'),
  (226, 'SVALBARD', 'SVALBARD'),
  (227, 'TAILÂNDIA', 'THAILAND'),
  (228, 'TAIWAN', 'TAIWAN'),
  (229, 'TAJIQUISTÃO', 'TAJIKISTAN'),
  (230, 'TANZÂNIA', 'TANZANIA'),
  (
    231,
    'TERRITÓRIO BRITÂNICO DO OCEANO ÍNDICO',
    'BRITISH INDIAN OCEAN TERRITORY'
  ),
  (
    232,
    'TERRITÓRIO DAS ILHAS HEARD E MCDONALD',
    'HEARD ISLAND AND MCDONALD ISLANDS'
  ),
  (233, 'TIMOR-LESTE', 'TIMOR-LESTE'),
  (234, 'TOGO', 'TOGO'),
  (235, 'TOKELAU', 'TOKELAU'),
  (236, 'TONGA', 'TONGA'),
  (237, 'TRINDADE E TOBAGO', 'TRINIDAD AND TOBAGO'),
  (238, 'TUNÍSIA', 'TUNISIA'),
  (
    239,
    'TURKS E CAICOS',
    'TURKS AND CAICOS ISLANDS'
  ),
  (240, 'TURQUEMENISTÃO', 'TURKMENISTAN'),
  (241, 'TURQUIA', 'TURKEY'),
  (242, 'TUVALU', 'TUVALU'),
  (243, 'UCRÂNIA', 'UKRAINE'),
  (244, 'UGANDA', 'UGANDA'),
  (245, 'URUGUAI', 'URUGUAY'),
  (246, 'USBEQUISTÃO', 'UZBEKISTAN'),
  (247, 'VANUATU', 'VANUATU'),
  (248, 'VENEZUELA', 'VENEZUELA'),
  (249, 'VIETNAME', 'VIETNAM'),
  (250, 'WALLIS E FUTUNA', 'WALLIS AND FUTUNA'),
  (251, 'ZÂMBIA', 'ZAMBIA'),
  (252, 'ZIMBABUÉ', 'ZIMBABWE');
-- --------------------------------------------------------
--
-- Table structure for table `images`
--
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `image` varchar(32) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
--
-- Table structure for table `paswd`
--
CREATE TABLE IF NOT EXISTS `paswd` (
  `passwd_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  PRIMARY KEY (`passwd_id`)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `surname` tinytext NOT NULL,
  `username` text NOT NULL,
  `md5_passwd` varchar(32) NOT NULL,
  `type` enum('comum', 'editor', 'administrador') NOT NULL,
  `ban` bit(1) NOT NULL,
  `status` bit(1) NOT NULL,
  `reg_day` date NOT NULL,
  `twitchuser` tinytext DEFAULT NULL,
  `twitteruser` tinytext DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`) USING HASH
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;