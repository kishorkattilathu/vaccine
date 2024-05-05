/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.4.22-MariaDB : Database - vaccine
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vaccine` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `vaccine`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phone` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_name`,`admin_email`,`admin_phone`,`admin_password`) values 
(1,'admin','admin@gmail.com','123456789','123');

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `vacc_id` int(11) NOT NULL,
  `hosp_email` varchar(100) NOT NULL,
  `vacc_name` varchar(100) NOT NULL,
  `timing` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `vaccine_price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bookings` */

insert  into `bookings`(`booking_id`,`user_id`,`hosp_id`,`vacc_id`,`hosp_email`,`vacc_name`,`timing`,`quantity`,`gender`,`phone`,`user_email`,`date`,`vaccine_price`,`status`,`payment_status`) values 
(2,1,15,29,'aswini_hospital@gmail.com','Bacillus Calmette-Guérin ','09:00am-12:00pm','199','Male','7086788778','user@gmail.com','2024-05-05','500','Approved','Pending'),
(3,1,16,35,'general_hospital@gmail.com','Hepatitis B Vaccination','03:00pm-06:00pm','122','Male','25708248','user@gmail.com','2024-05-06','750','Pending','Pending'),
(4,2,15,29,'aswini_hospital@gmail.com','Bacillus Calmette-Guérin ','09:00am-12:00pm','197','Male','68454334','divya@gmail.com','2024-05-04','500','Approved','Paid'),
(5,2,16,36,'general_hospital@gmail.com','poliovirus','09:00am-12:00pm','198','Male','7086788778','divya@gmail.com','2024-05-05','550','Approved','Paid');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(1000) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `categories` */

insert  into `categories`(`cat_id`,`cat_name`,`cat_image`) values 
(1,'BCG','1695099620.jpg'),
(2,'Hep B','1695099694.jpg'),
(3,'Polio','1695099755.jpg'),
(4,'DTP','1695099912.jpg'),
(5,'Hib','1695099978.jpg'),
(6,'Pneumococcal','1695100054.jpg'),
(7,'Rotavirus','1695100135.jpg'),
(8,'Covid vaccine','1695100395.jpg');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaint` */

/*Table structure for table `hospital_registration` */

DROP TABLE IF EXISTS `hospital_registration`;

CREATE TABLE `hospital_registration` (
  `hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(100) NOT NULL,
  `hospital_email` varchar(100) NOT NULL,
  `hospital_phone` varchar(100) NOT NULL,
  `hospital_address` varchar(100) NOT NULL,
  `hospital_image` varchar(100) NOT NULL,
  `hospital_license` varchar(100) NOT NULL,
  `hospital_password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hospital_status` varchar(100) NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `hospital_registration` */

insert  into `hospital_registration`(`hospital_id`,`hospital_name`,`hospital_email`,`hospital_phone`,`hospital_address`,`hospital_image`,`hospital_license`,`hospital_password`,`type`,`hospital_status`) values 
(15,'Aswini','aswini_hospital@gmail.com','9876543210','Thrissur,Aswini Junction  kerala','1714738905.jpg','1714738905.jpg','123','Owner','Approved'),
(16,'General Hospital','general_hospital@gmail.com','9876543210','Thrissur Round,  kerala','1714744552.jpg','1714744552.jpg','123','Owner','Approved'),
(17,'Government Hospital','govt_hospital@gmail.com','577575675','Shornur,Railway station road','1714744670.jpg','1714744670.jpg','123','Owner','Approved'),
(18,'Thrissur Hospital','thrissur_hospital@gmail.com','57575757','Athani,medical college road,Thrissur Kerala','1714744777.jpg','1714744777.jpg','123','Owner','Approved');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `vacc_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `expiry_month` varchar(50) DEFAULT NULL,
  `expiry_year` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`user_id`,`hosp_id`,`vacc_id`,`name`,`card`,`cvv`,`amount`,`date`,`payment_status`,`expiry_month`,`expiry_year`,`user_email`) values 
(5,2,15,29,'Raj','425255232','123','500','0000-00-00','Paid','Jan','2029','divya@gmail.com'),
(6,2,16,36,'Deepak','411341341','232','550','0000-00-00','Paid','Jan','2029','divya@gmail.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`user_email`,`phone`,`password`) values 
(1,'user','user@gmail.com','2000072133','123'),
(2,'DIVYA M D','divya@gmail.com','9876543210','123'),
(3,'user2','user2@gmail.com','1234556','123'),
(4,'user3','user3@gmail.com','246926489','123'),
(5,'Rajesh','rajesh@gmail.com','689862626','123');

/*Table structure for table `vaccines` */

DROP TABLE IF EXISTS `vaccines`;

CREATE TABLE `vaccines` (
  `vac_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `hos_email` varchar(100) NOT NULL,
  `vac_name` varchar(100) NOT NULL,
  `vac_image` varchar(255) NOT NULL,
  `vac_time` varchar(1000) NOT NULL,
  `vac_quantity` varchar(100) NOT NULL,
  `vac_price` varchar(100) NOT NULL,
  PRIMARY KEY (`vac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vaccines` */

insert  into `vaccines`(`vac_id`,`hos_id`,`cat_id`,`hos_email`,`vac_name`,`vac_image`,`vac_time`,`vac_quantity`,`vac_price`) values 
(29,15,1,'aswini_hospital@gmail.com','Bacillus Calmette-Guérin ','1714751903.jpg','09:00am-12:00pm','197','500'),
(30,15,2,'aswini_hospital@gmail.com','Hepatitis B Vaccination','1714751975.jpg','09:00am-12:00pm','100','550'),
(31,15,3,'aswini_hospital@gmail.com','poliovirus','1714752036.jpg','09:00am-12:00pm','400','100'),
(32,15,4,'aswini_hospital@gmail.com','Diphtheria Tetanus Pertussis','1714752346.jpg','09:00am-12:00pm','300','550'),
(33,15,5,'aswini_hospital@gmail.com','Haemophilus influenzae','1714752416.jpg','09:00am-12:00pm','300','550'),
(34,16,1,'general_hospital@gmail.com','Bacillus Calmette-Guérin ','1714752674.jpg','12:00pm-03:00pm','300','500'),
(35,16,2,'general_hospital@gmail.com','Hepatitis B Vaccination','1714752719.jpg','03:00pm-06:00pm','122','750'),
(36,16,3,'general_hospital@gmail.com','poliovirus','1714752748.jpg','09:00am-12:00pm','198','550'),
(37,16,4,'general_hospital@gmail.com','Diphtheria Tetanus Pertussis','1714752782.jpg','12:00pm-03:00pm','100','500'),
(38,16,5,'general_hospital@gmail.com','Haemophilus influenzae','1714752826.jpg','12:00pm-03:00pm','200','750'),
(39,18,5,'thrissur_hospital@gmail.com','Haemophilus influenzae','1714752924.jpg','09:00am-12:00pm','100','550'),
(40,18,1,'thrissur_hospital@gmail.com','Bacillus Calmette-Guérin ','1714752951.jpg','09:00am-12:00pm','100','550'),
(41,18,3,'thrissur_hospital@gmail.com','poliovirus','1714752975.jpg','03:00pm-06:00pm','200','500'),
(42,18,4,'thrissur_hospital@gmail.com','Diphtheria Tetanus Pertussis','1714753012.jpg','12:00pm-03:00pm','100','750');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
