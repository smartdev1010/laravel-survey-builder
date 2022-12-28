/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.22-MariaDB : Database - rvtsmdqo_vw_diagnosiaziendale
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rvtsmdqo_vw_diagnosiaziendale` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `rvtsmdqo_vw_diagnosiaziendale`;

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` char(1) NOT NULL,
  `help_info` char(1) DEFAULT NULL,
  `questionimage` char(1) DEFAULT NULL,
  `score` char(1) DEFAULT NULL,
  `userid` int(10) unsigned NOT NULL,
  `test_id` char(1) NOT NULL,
  `question_type` char(1) DEFAULT NULL,
  `questionpage` char(1) DEFAULT NULL,
  `questionorder` char(1) NOT NULL,
  `width` int(10) unsigned DEFAULT NULL,
  `indent` int(10) unsigned DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `state` char(1) DEFAULT NULL,
  `help_info_location` char(1) DEFAULT NULL,
  `title_location` char(1) DEFAULT NULL,
  `max_width` int(10) unsigned DEFAULT NULL,
  `min_width` int(10) unsigned DEFAULT NULL,
  `size` int(10) unsigned DEFAULT NULL,
  `question_bg_color` char(1) NOT NULL,
  `more_than_one_answer` char(1) DEFAULT NULL,
  `fontsize` int(10) unsigned DEFAULT NULL,
  `titlelocation` char(1) NOT NULL,
  `imagefit` char(1) DEFAULT NULL,
  `imagewidth` int(10) unsigned DEFAULT NULL,
  `imageheight` int(10) unsigned DEFAULT NULL,
  `answerposition` char(1) NOT NULL,
  `image_aligment` char(1) NOT NULL,
  `answer_aligment` char(1) NOT NULL,
  `imageposition` char(1) NOT NULL,
  `content` char(1) DEFAULT NULL,
  `logic` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `questions` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
