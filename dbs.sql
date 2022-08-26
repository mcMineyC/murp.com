CREATE DATABASE /*!32312 IF NOT EXISTS*/ `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog`;
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
`title` varchar(100) DEFAULT NULL,
`body` longtext DEFAULT NULL,
`date` varchar(10) DEFAULT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
LOCK TABLES `posts` WRITE;
INSERT INTO `posts` VALUES ('Development of This Blog Underway!','Development has <b>just</b> started on this blog.<br><img src=\'icon.png\'><br>See ya later!','05/18/2022',1),('Development Update!','Most main features are done! Fine details and UI/UX are still under development.','06/10/2022',2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
`name` varchar(1000) DEFAULT NULL,
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`money` float DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
LOCK TABLES `projects` WRITE;
INSERT INTO `projects` VALUES ('Smart Room',1,50);
UNLOCK TABLES;
DROP TABLE IF EXISTS `snippets`;
CREATE TABLE `snippets` (
`lang` varchar(20) DEFAULT NULL,
`code` varchar(255) NOT NULL,
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
LOCK TABLES `snippets` WRITE;
INSERT INTO `snippets` VALUES ('Javascript','alert(confirm(prompt(\"Name:\") + \", correct?\") ? \"correct name\" : \"wrong name\")',1);
UNLOCK TABLES;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ `room` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `room`;
