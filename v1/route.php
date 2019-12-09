<?php

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
define("qualification", "POST,qualification,true,admin");
define("delete_location", "POST,delete_location,true,admin");
define("update_location", "POST,update_location,true,admin");
define("create_location", "POST,create_location,true,admin");
define("location", "POST,location,true,admin");

//general
define("get_token", "GET,tokennizer_wocman,false,admin");


