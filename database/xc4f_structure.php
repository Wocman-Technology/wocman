<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Ugbogu Justice, 08138184872
 *
*/

$exec_temp= "CREATE TABLE IF NOT EXISTS `$tbl_temp` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `name` varchar(225) NOT NULL,
    `phone` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `qualification` varchar(225)  NULL,
    `image` varchar(225)  NULL,
    `type` varchar(225) NOT NULL,
    `location` varchar(225)  NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_temp);

$exec_customer= "CREATE TABLE IF NOT EXISTS `$tbl_customer` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `name` varchar(225) NOT NULL,
    `phone` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `active` boolean,
    `image` varchar(225)  NULL,
    `location` varchar(225)  NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_customer);


$exec_workmen= "CREATE TABLE IF NOT EXISTS `$tbl_workmen` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `name` varchar(225) NOT NULL,
    `phone` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `qualification` varchar(225) NOT  NULL,
    `active` boolean,
    `image` varchar(225)  NULL,
    `location` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_workmen);

$exec_workmen= "CREATE TABLE IF NOT EXISTS `$tbl_wocman` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `name` varchar(225) NOT NULL,
    `phone` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `image` varchar(225)  NULL,
    `location` varchar(225) NOT NULL,
    `secret_key` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_workmen);


$exec_qualification = "CREATE TABLE IF NOT EXISTS `$tbl_qualification` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(225) NOT NULL,
    `description` varchar(225) NOT NULL,
    `image` varchar(225)  NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_qualification);

$exec_location = "CREATE TABLE IF NOT EXISTS `$tbl_location` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(225) NOT NULL,
    `description` varchar(225) NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_location);

$exec_category= "CREATE TABLE IF NOT EXISTS `$tbl_category` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(225) NOT NULL,
    `description` varchar(225) NOT NULL,
    `image` varchar(225)  NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_category);

$exec_work= "CREATE TABLE IF NOT EXISTS `$tbl_work` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `category_workman_id` int(11) NOT NULL,
    `customer_workman_id` int(11) NOT NULL,
    `status` varchar(225)  NULL,
    `rate` varchar(225)  NULL,
    `image` varchar(225)  NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_work);

$exec_category_workman= "CREATE TABLE IF NOT EXISTS `$tbl_category_workman` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `workman_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_category_workman);

$exec_customer_workman= "CREATE TABLE IF NOT EXISTS `$tbl_customer_workman` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `workman_id` int(11) NOT NULL,
    `customer_id` int(11) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_customer_workman);


?>