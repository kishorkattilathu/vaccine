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
(1,'admin1','admin@gmail.com','123456789','123');

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `image` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `blog` */

insert  into `blog`(`blog_id`,`customer_id`,`title`,`content`,`image`) values 
(1,1,'dd','fhbhm  jbb mfba  fakafbf ahfhah haf hfah oaf h af','1706447417.jpg'),
(2,1,'ncan','fhbhm  jbb mfba  fakafbf ahfhah haf hfah oaf h af','1706447463.jpg'),
(3,1,'rqer','ZG;lk;fsjklbjlkdn fhgfhdskjh  hfshh','1706447499.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bookings` */

insert  into `bookings`(`booking_id`,`user_id`,`hosp_id`,`vacc_id`,`hosp_email`,`vacc_name`,`timing`,`quantity`,`gender`,`phone`,`user_email`,`date`,`vaccine_price`,`status`,`payment_status`) values 
(25,1,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','149','Male','74547634232323','user@gmail.com','2023-10-11','1000','Approved','Paid'),
(26,1,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','149','Male','74547634232323','user@gmail.com','2023-10-10','1000','Approved','Paid'),
(27,1,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','150','Male','74547634232323','user@gmail.com','2023-10-10','1000','Rejected','Pending'),
(28,1,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','150','Male','74547634232323','user@gmail.com','2023-10-10','1000','Approved','Pending'),
(29,1,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','150','Male','74547634232323','user@gmail.com','2023-10-10','1000','Rejected','Pending'),
(30,1,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','150','Male','74547634232323','user@gmail.com','2023-10-10','1000','Approved','Pending'),
(31,2,8,5,'hospital2@gmail.com','Diptheria, tetanus toxoids and pertussis','09:00pm-12:00pm','299','Female','9876543210','divya@gmail.com','2023-10-27','1000','Approved','Paid'),
(32,3,6,2,'hospital3@gmail.com','Tuberculosis','09:00pm-12:00pm','148','Male','12345678','user2@gmail.com','2023-10-21','1000','Approved','Paid'),
(34,5,7,15,'hospital1@gmail.com','Haemophilus influenzae','09:00pm-12:00pm','200','Male','68454334','rajesh@gmail.com','2024-02-13','700','Approved','Pending');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaint` */

insert  into `complaint`(`comp_id`,`user_id`,`user_name`,`user_email`,`message`,`reply`) values 
(1,1,'user','user@gmail.com','hie i have a complaint','done'),
(2,0,'New User','newuser@gmail.com','hie i am a new user','Pending'),
(3,0,'Raj','raj@gmail.com','hie i am raj i have a complaint','Pending'),
(4,0,'Raju','raju@gmail.com','hie i am raj i have a complaint','Pending'),
(5,0,'kjadbkjdsfg','gsgs@gmail.com','gsgssg','ok ok'),
(6,0,'Hospital 2','hospital2@gmail.com','faeqfg',''),
(7,0,'Hospital 2','hospital2@gmail.com','gwrhw','jhgvjhvgjh');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `hospital_registration` */

insert  into `hospital_registration`(`hospital_id`,`hospital_name`,`hospital_email`,`hospital_phone`,`hospital_address`,`hospital_image`,`hospital_license`,`hospital_password`,`type`,`hospital_status`) values 
(7,'Hospital 1','hospital1@gmail.com','123456789','Thrissur','1694674061.jpg','1694674061.jpg','123','Owner','Approved'),
(8,'Hospital 2','hospital2@gmail.com','123456789','Kerala','1694674149.jpg','1694674149.jpg','123','Owner','Approved'),
(10,'Hospital 4','hospital4@gmail.com','123654789','Thrissur','1694674643.jpg','1694674643.jpg','123','Admin','Approved');

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
(1,1,6,2,'user','987463120231','123','1000','2023-09-30','Paid',NULL,NULL,NULL),
(2,1,6,2,'user','6554664645','456','1000','2023-09-29','Paid',NULL,NULL,NULL),
(3,1,6,2,'Raj','123456768909','123','1000','0000-00-00','Paid','July','2024',NULL),
(4,2,8,5,'divya dinesan','1122334455667788','100','1000','0000-00-00','Paid','Apr','2025',NULL),
(5,0,6,2,'Raj','13462434545','311','1000','0000-00-00','Paid','Jan','2025',NULL),
(6,0,6,2,'Raj','531135','133','1000','0000-00-00','Paid','Jan','3414',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vaccines` */

insert  into `vaccines`(`vac_id`,`hos_id`,`cat_id`,`hos_email`,`vac_name`,`vac_image`,`vac_time`,`vac_quantity`,`vac_price`) values 
(2,6,1,'hospital3@gmail.com','Tuberculosis','1695103264.jpg','09:00pm-12:00pm','149','price'),
(3,8,2,'hospital2@gmail.com','hepatitisss','1695103413.jpg','12:00pm-03:00pm','200','500'),
(5,8,4,'hospital2@gmail.com','Diptheria, tetanus toxoids and pertussis','1695274953.jpg','09:00pm-12:00pm','299','1000'),
(10,7,1,'hospital1@gmail.com','Tuberculosis','1695276547.jpg','03:00pm-06:00pm','105','500'),
(11,7,2,'hospital1@gmail.com','Hepatitis B vaccine','1695276611.jpg','09:00pm-12:00pm','150','700'),
(12,7,3,'hospital1@gmail.com','Poliomyelitis','1695276640.jpg','12:00pm-03:00pm','300','600'),
(13,7,4,'hospital1@gmail.com','Diptheria, tetanus toxoids and pertussis','1695276672.jpg','03:00pm-06:00pm','200','500'),
(15,7,5,'hospital1@gmail.com','Haemophilus influenzae','1695277302.png','09:00pm-12:00pm','200','700'),
(16,7,8,'hospital1@gmail.com','Corona Virus','1695277434.jpg','03:00pm-06:00pm','200','500'),
(18,6,2,'hospital3@gmail.com','Hepatitis B vaccine','1695357849.png','12:00pm-03:00pm','200','600'),
(19,6,3,'hospital3@gmail.com','Poliomyelitis','1695357894.jpg','09:00am-12:00pm','1000','700'),
(20,6,4,'hospital3@gmail.com','DPT vaccine','1695357958.jpg','09:00am-12:00pm','200','1000'),
(21,6,5,'hospital3@gmail.com','Haemophilus influenzae type B vaccine','1695358115.jpg','09:00am-12:00pm','150','550'),
(22,6,6,'hospital3@gmail.com',' pneumoniae','1695358372.jpg','09:00am-12:00pm','100','700'),
(23,8,1,'hospital2@gmail.com','tuberculosis','1695358503.jpg','09:00am-12:00pm','600','800'),
(24,8,3,'hospital2@gmail.com','Poliomyelitis','1695358544.jpg','09:00am-12:00pm','1000','600');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
