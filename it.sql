-- MySQL dump 10.13  Distrib 5.7.18, for Linux (i686)
--
-- Host: localhost    Database: it
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `img_id` int(3) DEFAULT NULL,
  `item_id` varchar(10) DEFAULT NULL,
  `img` text,
  KEY `item_id` (`item_id`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'1','CB.gif'),(2,'2','burger.jpg'),(3,'3','noodles.jpeg'),(4,'4','kebab.jpeg'),(5,'5','cc.jpg'),(6,'6','eb.jpeg'),(7,'7','idli.jpg'),(8,'8','poori-bhaji.png'),(9,'9','plain.jpg'),(10,'10','masala.jpg'),(11,'11','cr.jpg'),(12,'12','rs.jpg'),(13,'13','fries.jpeg'),(14,'14','tea.jpg'),(15,'15','pastry.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `password` varchar(30) DEFAULT NULL,
  `std_id` varchar(20) DEFAULT NULL,
  KEY `std_id` (`std_id`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `register` (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_e`
--

DROP TABLE IF EXISTS `login_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_e` (
  `password` varchar(30) DEFAULT NULL,
  `emp_id` varchar(20) DEFAULT NULL,
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `login_e_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `register_e` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_e`
--

LOCK TABLES `login_e` WRITE;
/*!40000 ALTER TABLE `login_e` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_e` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `available` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES ('1','Chicken briyani','This biryani is one of India\'s most popular types of biryani. It incorporates chicken meat that is marinated and cooked along with the rice and has coconut/saffron seasonings.',65,1),('10','Masala Dosa','Dosa is a type of pancake made from fermented batter and spicy chutney,butter and aloo fry.It is crispy and tasty and served with coconut chutney and sambar or with potato curry.',30,0),('11','Curd Rice','Curd rice is a popular rice with yogurt which is very tasty and served with gratted carrots and tadaka',25,0),('12','Sambar Rice','Sambar rice is a south indian dish with rice and tamilanu style sambar.',25,0),('13','French fried','French fries or simply fries or chips, are pieces of potato that have been deep-fried.French fries have numerous variants, from thick-cut to shoestring, crinkle, curly and many other names.',45,0),('14','Tea','Tea is an aromatic beverage which are prepared with boiled water,Assam tea leaves,sugar and Milk,which is mostly consumed by everyone.',8,0),('15','pastry','Pastry is a baked dough with different flavours.It is a best served desert which is made of flour and fat bound with water to form paste.',50,0),('2','chicken burger','These burgers are seasoned with garam masala, a blend of ground spices including cinnamon, cumin, dried chiles, and coriander. Top with a dab of tomato sauce and chesse',50,0),('3','chicken noodles','one would assume with a name itself that it is a china dish.In sodexo chicken noodles are prepared with pure spices,tossed in a thick savoury and spicy sauce.Served with tomato sauce',50,0),('4','chicken kebab(4 pcs)','chicken kebab in sodexo with made with all the fresh spices.They are juicy which are served with onions and lemon',44,0),('5','chilli chicken ','Chilli chicken is an indo-chinese dish of chicken.Here we prepare with boned chicken and serve you with veg salad',59,0),('6','Egg Briyani ','Egg Briyani is made with amazing spices which is served with boiled egg on the top.',47,0),('7','Idli','Most popular breakfast!!!Idli is a savoury rice cake,which is served with sambar and coconut chutney',17,0),('8','puri-bhaji','It is traditional breakfast in North India.A flaky deep fried indian bread served with potato curry(bhaji).',30,0),('9','Plain Dosa','Dosa is a type of pancake made from fermented batter.It is crispy and tasty and served with coconut chutney and sambar or with potato curry.',25,0);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order1`
--

DROP TABLE IF EXISTS `order1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order1` (
  `order_id` varchar(10) NOT NULL,
  `quantity` int(3) DEFAULT NULL,
  `item_id` varchar(10) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `order1_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order1`
--

LOCK TABLES `order1` WRITE;
/*!40000 ALTER TABLE `order1` DISABLE KEYS */;
/*!40000 ALTER TABLE `order1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `card_no` varchar(30) DEFAULT NULL,
  `order_id` varchar(10) DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `time1` time DEFAULT NULL,
  KEY `order_id` (`order_id`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order1` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `std_id` varchar(20) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `cpassword` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('','','','','','',''),('potti','goud','123@gmail.com','123','123456','female','asdfg'),('abc','xyz','xyz@gmail.com','12398','poiu','female','poiu'),('asda','sdf','adsad@a.com','abcd','1234','male','1234');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register_e`
--

DROP TABLE IF EXISTS `register_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register_e` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `emp_id` varchar(20) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `cpassword` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register_e`
--

LOCK TABLES `register_e` WRITE;
/*!40000 ALTER TABLE `register_e` DISABLE KEYS */;
INSERT INTO `register_e` VALUES ('abc','xyz','xyz@gmail.com','12398','1234','male','1234');
/*!40000 ALTER TABLE `register_e` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-15 13:24:00
