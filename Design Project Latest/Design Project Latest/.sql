CREATE TABLE IF NOT EXISTS `customers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `firstname` varchar(50) NOT NULL,
 `lastname` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
 );
 
 CREATE TABLE IF NOT EXISTS `feedback` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `firstname` varchar(50) NOT NULL,
 `lastname` varchar(50) NOT NULL,
 `subject` text(200) NOT NULL,
 PRIMARY KEY (`id`)
 );