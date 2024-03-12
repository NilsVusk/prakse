-- Adminer 4.8.1 MySQL 8.0.36-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `about` (
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `about` (`name`, `content`, `image`) VALUES
('About us',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida metus semper leo imperdiet, at maximus sem blandit. Donec varius neque sem, vel elementum lorem condimentum eget. Aenean id nisi non elit rhoncus tincidunt. Suspendisse ac euismod mi. Sed consectetur turpis lectus, a lobortis enim ultrices quis. Proin tempor auctor venenatis. Aenean eu neque pellentesque, laoreet arcu eget, imperdiet ante ?<br>',	'[\"logo.png\",\"renault-1.png\",\"volvo-logo.png\"]');

CREATE TABLE `config` (
  `logo` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `config` (`logo`, `adress`, `email`, `phone`) VALUES
('renault-1.png',	'eaae',	'eaeeee@gmail.com',	'2432523553');

CREATE TABLE `gallery` (
  `galleryID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mainImage` varchar(255) DEFAULT NULL,
  `images` text,
  PRIMARY KEY (`galleryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `gallery` (`galleryID`, `name`, `mainImage`, `images`) VALUES
(1,	'gallery3',	'volvo_akcija2020.jpg',	'[\"\",\"\",\"\",\"\",\"\"]'),
(7,	'gallery1',	'backg_original.jpg',	'[\"\",\"\",\"\"]');

CREATE TABLE `news` (
  `news_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `context` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `news` (`news_id`, `name`, `main_image`, `context`) VALUES
(2,	'sidenews2',	'https://picsum.photos/100',	'Ut eu eros sed enim sodales laoreet Lorem ipsum dolor sit amet'),
(3,	'sidenews3',	'https://picsum.photos/100',	'Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet'),
(4,	'sidenews4',	'new_instagram.png',	'<p>Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet <b>Sed sollicitudin augue</b> sed ex fermentum efficitur<br> </p><p>Lorem ipsum dolor sit amet Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet Sed sollicitudin augue sed ex fermentum efficitur Lorem ipsum dolor sit amet</p>'),
(5,	'TestTemplate22',	'renault-logo.png',	'<p>xdfgxdfhdfxdfhxdfhxdfhh<br></p>');

CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `products` (`product_id`, `image`, `name`, `desc`, `price`) VALUES
(1,	'profile-pic.png',	'Test',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus \r\nleo vel urna ultrices vestibulum. Suspendisse condimentum ex turpis, a \r\nmolestie magna aliquet vitae. Nulla aliquet sem ut diam fermentum \r\nmaximus. Nullam rhoncus posuere eros, eu faucibus mauris bibendum at. \r\nMauris a risus augue. 9',	2.99),
(3,	'v90_side2.png',	'testproduct43',	'<p>\r\n                            Lorem ipsum dolor sit amet, consectetur \r\nadipiscing elit. Morbi faucibus leo vel urna ultrices vestibulum. \r\nSuspendisse condimentum ex turpis, a molestie magna aliquet vitae. Nulla\r\n aliquet sem ut diam fermentum maximus. Nullam rhoncus posuere eros, eu \r\nfaucibus mauris bibendum at. Mauris a risus augue. 8<br></p>',	3.16),
(4,	'profile-pic.png',	'testproduct434355',	'<p>\r\n                            Lorem ipsum dolor sit amet, consectetur \r\nadipiscing elit. Morbi faucibus leo vel urna ultrices vestibulum. \r\nSuspendisse condimentum ex turpis, a molestie magna aliquet vitae. Nulla\r\n aliquet sem ut diam fermentum maximus. Nullam rhoncus posuere eros, eu \r\nfaucibus mauris bibendum at. Mauris a risus augue. 4567<br></p>',	601.34),
(5,	'profile-pic.png',	'testproduct4323444',	'<p>kjftfuuhhhuhuo\r\n                            Lorem ipsum dolor sit amet, consectetur \r\nadipiscing elit. Morbi faucibus leo vel urna ultrices vestibulum. \r\nSuspendisse condimentum ex turpis, a molestie magna aliquet vitae. Nulla\r\n aliquet sem ut diam fermentum maximus. Nullam rhoncus posuere eros, eu \r\nfaucibus mauris bibendum at. Mauris a risus augue. 9</p>',	4.85),
(6,	'renault-logo.png',	'testproduct49889',	'<p>\r\n                            Lorem ipsum dolor sit amet, consectetur \r\nadipiscing elit. Morbi faucibus leo vel urna ultrices vestibulum. \r\nSuspendisse condimentum ex turpis, a molestie magna aliquet vitae. Nulla\r\n aliquet sem ut diam fermentum maximus. Nullam rhoncus posuere eros, eu \r\nfaucibus mauris bibendum at. Mauris a risus augue. 978976899</p>',	3.74),
(7,	'logo.png',	'dddddddd ddddddddd ddddddddddddddd dddddddddd ddddddd',	'',	91.25),
(8,	'in_stock.png',	'rarer',	'',	86.98),
(9,	'dacia-logo1.png',	'name23',	'<p>eawfwafafsdasd<br></p>',	70.00),
(10,	'apkure.png',	'apkere23',	'<p>sfafeaffsdasd<br></p>',	60.00);

CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(2,	'nils13',	'nils1@aleksale.lv',	'');

-- 2024-03-12 14:50:26
