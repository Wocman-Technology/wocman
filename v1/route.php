<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Justice
 *
 */

//routes

//workman route
define("workman_login", "POST,workman_login,false,all");
define("workman_register", "POST,workman_register,false,all");


//cusstomer route
define("customer_register", "POST,customer_register,false,all");
define("customer_login", "POST,customer_login,false,all");


//admin route
define("delete_qualification", "POST,delete_qualification,true,admin");
define("update_qualification", "POST,update_qualification,true,admin");
define("create_qualification", "POST,create_qualification,true,admin");
define("qualification", "GET,qualification,true,admin");
define("delete_location", "POST,delete_location,true,admin");
define("update_location", "POST,update_location,true,admin");
define("create_location", "POST,create_location,true,admin");
define("location", "GET,location,true,admin");
define("wocman_register", "POST,wocman_register,false,admin");
define("wocman_login", "POST,wocman_login,false,admin");


//general
define("get_token", "GET,tokennizer_wocman,false,admin");
define("get_location", "GET,location,false,all");
define("get_qualification", "GET,qualification,false,all");
define("logout", "GET,logout,false,all");


