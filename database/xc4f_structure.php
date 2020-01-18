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
    `password` varchar(225) NOT NULL,
    `verify` varchar(225) NOT NULL,
    `type` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_temp);

$exec_workmen= "CREATE TABLE IF NOT EXISTS `$tbl_workmen` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `active` boolean,
    `fname` varchar(225) NULL,
    `lname` varchar(225) NULL,
    `uname` varchar(225) NULL,
    `phone` varchar(225) NULL,
    `country` varchar(225) NULL,
    `city` varchar(225) NULL,
    `image` varchar(225)  NULL,
    `qualification` varchar(225) NULL,
    `qualification_link` varchar(225) NULL,
    `{$const('wocman_token_column')}` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_workmen);

$exec_service= "CREATE TABLE IF NOT EXISTS `$tbl_services` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(225) NOT NULL,
    `description` varchar(225) NOT NULL,
    `qualification` varchar(225) NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_service);

$exec_service_type= "CREATE TABLE IF NOT EXISTS `$tbl_services_type` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `service_id` int(11) NOT NULL,
    `name` varchar(225) NOT NULL,
    `description` varchar(225) NOT NULL,
    `price` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_service_type);

$exec_workman_service_type= "CREATE TABLE IF NOT EXISTS `$tbl_workman_services_type` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `service_id` int(11) NOT NULL,
    `service_type_id` int(11) NOT NULL,
    `workman_id` int(11) NOT NULL,
    `scale` int(11) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_workman_service_type);


$exec_customer= "CREATE TABLE IF NOT EXISTS `$tbl_customer` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `name` varchar(225) NOT NULL,
    `username` varchar(225) NOT NULL,
    `phone` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `active` boolean,
    `image` varchar(225)  NULL,
    `location` varchar(225)  NULL,
    `{$const('wocman_token_column')}` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_customer);

$exec_workmen= "CREATE TABLE IF NOT EXISTS `$tbl_wocman` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(225) NOT NULL,
    `name` varchar(225) NOT NULL,
    `username` varchar(225) NOT NULL,
    `phone` varchar(225) NOT NULL,
    `password` varchar(225) NOT NULL,
    `image` varchar(225)  NULL,
    `location` varchar(225) NOT NULL,
    `secret_key` varchar(225) NOT NULL,
    `{$const('wocman_token_column')}` varchar(225) NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_workmen);


?>