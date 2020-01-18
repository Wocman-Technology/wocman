<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Ugbogu Justice, 08138184872
 *
*/
require '../database/xc4f_config.php';
require WOCMAN_DIR.'database/'.WOCMAN_PREFIX_FILE.'mysqli.php';
require WOCMAN_DIR.WOCMAN_PREFIX_FILE.'clean.php';
require WOCMAN_DIR.WOCMAN_PREFIX_FILE.'function.php';

define('COOKIE_FILE', 'cookie.txt');
$_SESSION['token']  = isset($_SESSION['token'])?$_SESSION['token']:getToken(120);

if (isset($_GET['wocman_route'])?$_GET['wocman_route']:'' == (string)wocman_route) {
    //var_dump($_SESSION);
}else{
    echo json_encode(["status" => "Invalid access route"]);
    return false;
}


$rout = getCurrentUri();
$route = explode("&", $rout);
$routes = $route[0];

$invalid_url = website_link;
$url = website_link;

if($routes == "?workman_signupwithjustemail") { 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
        

    $error = "Email Input Violation Error";
    $email = remove_tags(isset($email)?$email:'error');$ee= filter_email($email);$ee= stringLength($ee,5,50);   $customer_email_address=normalize($ee, $url, $error);
    $error = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $psd =  remove_tags(isset($password)?$password:'error');$ee= filter_password($psd);   $ee= stringLength($ee,8,50);$cusomer_password=normalize($ee, $url, $error);

    $key = password_hash($cusomer_password, PASSWORD_DEFAULT);

    $check = $mysqli->query("SELECT * FROM $tbl_temp WHERE email='$customer_email_address'  AND password='$key'  ");
    if ($check->num_rows < 1) {
        $type = "workman";
        $verify = getToken(120);
        if($mysqli->query("INSERT INTO $tbl_temp(`email`,`password`,`verify`,`type`) VALUES('$customer_email_address','$key','$verify','$type') ")){

            $url_email = website_link."verify/?url=".$verify.WOCMAN_SPLIT.$customer_email_address.WOCMAN_SPLIT.$type;
            // var_dump($url_email);

            $bodyTitle = "Wocman Technology Account Confirmatoin";
            $subject = "Workman Account Confirmation";
            $bodyText = '<h3>Welcome!</h3>
                                    We indeed are glad that you have chosen to create an account with us. Please, you have just one step to complete the process. We require our clients to validate their accounts before creation to ensure continued security.
                                <br/>
                                All you have to do is to click on the link below to activate your account so you get access to our numerous services.
                                <br/>
                                <br/>
                                <center>
                                    <a href="'.$url_email.'"><button style="padding:10px;background-color:#022F8E;color:white;border:0px;font-family:\'Manjari\',sans-serif;outline:none;font-weight:bold">Activate Account</button></a></center>
                                <br/>
                                <br/>'; 

            include WOCMAN_DIR."emailhandler.php";


            $myObj = new stdClass();
            $myObj->row = "none";
            $myObj->count = 0;
            $myObj->status = true;
            $myObj->status_code = "Successful";
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }else{
            $myObj = new stdClass();
            $myObj->row = "none";
            $myObj->count = 0;
            $myObj->status = false;
            $myObj->status_code = "Failed to register, try again!";
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = "User already exist!";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }


}elseif($routes == "?workman_login") {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
        $error = "Email Input Violation Error";
    $email = remove_tags(isset($email)?$email:'error');$ee= filter_email($email);$ee= stringLength($ee,5,50);   $customer_email_address=normalize($ee, $url, $error);

    $error = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $psd =  remove_tags(isset($password)?$password:'error');$ee= filter_password($psd);   $ee= stringLength($ee,8,50);$cusomer_password=normalize($ee, $url, $error);

     $check = $mysqli->query("SELECT * FROM $tbl_workmen WHERE email = '$customer_email_address' ");
    if ($check->num_rows == 1) {
        $row_fetch = $check->fetch_assoc();
        $psd = $row_fetch['password'];
        $userId = $row_fetch['id'];
        unset($row_fetch['id']);
        if (password_verify($cusomer_password, $psd) == 1) {
            $general->updateToken($tbl_workmen,wocman_token_column,getToken(120),$userId);

            $getcheck = $mysqli->query("SELECT * FROM $tbl_workmen WHERE id = '$userId' ");
            $row_get = $getcheck->fetch_assoc();
            unset($row_get['id']);

            $myObj = new stdClass();
            $myObj->row = $row_get;
            $myObj->count = $check->num_rows;
            $myObj->status = "workman_logedin";
            $myObj->status_code = 202;
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }else{
            $myObj = new stdClass();
            $myObj->row = "none";
            $myObj->count = 0;
            $myObj->status = true;
            $myObj->status_code = "Invalid Password";
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Invalid login credentials";
        
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
}elseif($routes == "?workman_setupaccount"){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
    $error = "Firstname Input Violation Error";
    $fn =  remove_tags(isset($firstname)?$firstname:'error');$ee= filter_string($fn);  $ee= stringLength($ee,4,50); $workman_firstname=normalize($ee, $url, $error);
    $error = "Lastname Input Violation Error";
    $ln =  remove_tags(isset($lastname)?$lastname:'error');$ee= filter_string($ln);  $ee= stringLength($ee,4,50); $workman_lastname=normalize($ee, $url, $error);
    $error = "Username Input Violation Error";
    $un =  remove_tags(isset($username)?$username:'error');$ee= filter_string($un);  $ee= stringLength($ee,4,50); $workman_username=normalize($ee, $url, $error);
    $error = "Phone number Violation Error";
    $phone =  remove_tags(isset($phone)?$phone:'error');$ee= filter_string($phone);  $ee= stringLength($ee,4,15); $workman_phone=normalize($ee, $url, $error);
    $error = "Country  Violation Error";
    $cn =  remove_tags(isset($country)?$country:'error');$ee= filter_string($cn);  $ee= stringLength($ee,2,15); $workman_country=normalize($ee, $url, $error);
    $error = "City  Violation Error";
    $ct =  remove_tags(isset($city)?$city:'error');$ee= filter_string($ct);  $ee= stringLength($ee,2,15); $workman_city=normalize($ee, $url, $error);
    $checks = $mysqli->query("SELECT * FROM $tbl_workmen WHERE `".wocman_token_column."` = '$uuidToken' ");
    if ($checks->num_rows == 1) {
        $row_fetch = $checks->fetch_assoc();
        $userId = $row_fetch['id'];
        unset($row_fetch['id']);
        unset($row_fetch['password']);
        if($mysqli->query("UPDATE  $tbl_workmen SET `fname` = '$workman_firstname', `lname` = '$workman_lastname', `uname` = '$workman_username', `phone` = '$workman_phone', `country` = '$workman_country', `city` = '$workman_city' WHERE `".wocman_token_column."` = '$uuidToken'  ")){

            $getcheck = $mysqli->query("SELECT * FROM $tbl_workmen WHERE id = '$userId' ");
            $row_get = $getcheck->fetch_assoc();
            unset($row_get['id']);
            unset($row_get['password']);
            $myObj = new stdClass();
            $myObj->row = $row_get;
            $myObj->count = $checks->num_rows;
            $myObj->status = "User Setup Was Successful!";
            $myObj->status_code = 202;
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }else{
            $myObj = new stdClass();
            $myObj->row = "none";
            $myObj->count = 0;
            $myObj->status = true;
            $myObj->status_code = "Could not complete process, try again!";
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = true;
        $myObj->status_code = "User Not Found";
        $myJSON = json_encode($myObj);
        echo $myJSON;   
    }

}elseif($routes == "?workman_setupProfileServices"){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});

    $checks = $mysqli->query("SELECT * FROM $tbl_services  ");
    if ($checks->num_rows > 0) {
        $row_fetch = $checks->fetch_assoc();

        $myObj = new stdClass();
        $myObj->row = $row_fetch;
        $myObj->count = $checks->num_rows;
        $myObj->status = "Services Found";
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = "none";
        $myObj->status = "Services Not Found";
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    
}elseif($routes == "?workman_setupProfileServiceType"){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
    // var_dump($service_id);
    $service_id = isset($service_id)?$service_id:'';
    $checks = $mysqli->query("SELECT * FROM $tbl_services_type WHERE `service_id` = '$service_id'  ");
    if ($checks->num_rows > 0) {
        $getall = [];
        while($row_fetch = $checks->fetch_assoc()){
            array_push($getall, $row_fetch);
        }
        $myObj = new stdClass();
        $myObj->row = $getall;
        $myObj->count = $checks->num_rows;
        $myObj->status = "Service Type Found";
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = "none";
        $myObj->status = "Service Type Not Found";
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
}elseif($routes == "?workman_setupprofile"){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
     $service_id = isset($service_id)?$service_id:'';
      $service_type_id = isset($service_type_id)?$service_type_id:'';
      $scale = isset($scale)?$scale:'';
    $checks = $mysqli->query("SELECT * FROM $tbl_services WHERE `id` = '$service_id'  ");
    if ($checks->num_rows > 0) {
        $check = $mysqli->query("SELECT * FROM $tbl_services_type WHERE `id` = '$service_type_id'  ");
        if ($check->num_rows > 0) {
            $id =(int)(((array)$general->getByUuid($tbl_workmen,wocman_token_column,$uuidToken))['id']);
            // var_dump($id);

            $checks_1 = $mysqli->query("SELECT * FROM $tbl_workman_services_type WHERE `service_type_id` = '$service_type_id' AND `service_id` = '$service_id' AND  `workman_id` = '$id' ");
            if ($checks_1->num_rows > 0) {
                $myObj = new stdClass();
                $myObj->row = "none";
                $myObj->count = "none";
                $myObj->status = "Workman already have a Service and a service type";
                $myObj->status_code = 202;
            
                $myJSON = json_encode($myObj);
                echo $myJSON;
            }else{

                if($mysqli->query("INSERT  INTO $tbl_workman_services_type(`service_type_id`, `service_id`, `workman_id`, `scale`) VALUES('$service_type_id', '$service_id', '$id', '$scale') ")){
                    $myObj = new stdClass();
                    $myObj->row = "none";
                    $myObj->count = "none";
                    $myObj->status = "Service Save Successful!";
                    $myObj->status_code = 202;
                
                    $myJSON = json_encode($myObj);
                    echo $myJSON;
                }else{
                    $myObj = new stdClass();
                    $myObj->row = "none";
                    $myObj->count = "none";
                    $myObj->status = "Could not proceed, try again!";
                    $myObj->status_code = 202;
                
                    $myJSON = json_encode($myObj);
                    echo $myJSON;
                }
            }
        }else{
            $myObj = new stdClass();
            $myObj->row = "none";
            $myObj->count = "none";
            $myObj->status = "Service  Not Found";
            $myObj->status_code = 202;
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = "none";
        $myObj->status = "Service Type Not Found";
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    
}elseif($routes == "?workman_upload") {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
        $workman_id = $uuidToken;
      $image[] = $_FILES['certificate'];
      $target_dir = "../uploads/workman_qualification/";
      $size = 2000000;
      $extentions = ['jpg','png','jpeg','pdf',];
      $newimage = getToken(12);
      $url = '';
      $image = image($image[0]['name'],$image[0]['type'],$image[0]['tmp_name'],$image[0]['error'],$image[0]['size'],$target_dir,$size,$extentions,$newimage);
      if (!empty($image) AND trim($image) != 'error') {
         compress_image($image, $image, 90);
          $image = str_replace('../', '', $image);
          $mysqli->query("UPDATE $tbl_workmen SET `qualification` = '$qualification', `qualification_link` = '$image' WHERE `".wocman_token_column."` = '$workman_id' ");
            $myObj = new stdClass();
            $myObj->row = 'none';
            $myObj->count = 'nono';
            $myObj->status = true;
            $myObj->status_code = "Uploaded Successfully";
           
            $myJSON = json_encode($myObj);
            echo $myJSON;
      }else{

            $myObj = new stdClass();
            $myObj->row = "none";
            $myObj->count = 0;
            $myObj->status = false;
            $myObj->status_code = "Invalid file type";
            
            $myJSON = json_encode($myObj);
            echo $myJSON;
      }
       
}elseif($routes == "?workman_upload_photo") {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }else{
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }
    extract(${"_".$_SERVER['REQUEST_METHOD']});
            $workman_id = $uuidToken;
              $image[] = $_FILES['photo'];
              $target_dir = "../uploads/workmanPhoto/";
              $size = 2000000;
              $extentions = ['jpg','png','jpeg',];
              $newimage = getToken(12);
              $url = '';
              $image = image($image[0]['name'],$image[0]['type'],$image[0]['tmp_name'],$image[0]['error'],$image[0]['size'],$target_dir,$size,$extentions,$newimage);
              if (!empty($image) AND trim($image) != 'error') {
                 compress_image($image, $image, 90);
                  $image = str_replace('../', '', $image);
                  $mysqli->query("UPDATE $tbl_workmen SET `image` = '$image' WHERE `".wocman_token_column."` = '$workman_id' ");
                    $myObj = new stdClass();
                    $myObj->row = 'none';
                    $myObj->count = 'nono';
                    $myObj->status = true;
                    $myObj->status_code = "Uploaded Successfully";
                   
                    $myJSON = json_encode($myObj);
                    echo $myJSON;
              }else{

                    $myObj = new stdClass();
                    $myObj->row = "none";
                    $myObj->count = 0;
                    $myObj->status = false;
                    $myObj->status_code = "Invalid file type";
                    
                    $myJSON = json_encode($myObj);
                    echo $myJSON;
              }
       
}elseif($routes == "?logout"){
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $myObj = new stdClass();
        $myObj->row = null;
        $myObj->count = null;
        $myObj->status = null;
        $myObj->status_code = null;
        $myJSON = json_encode($myObj);
        echo $myJSON;
        return false;
    }else{
        
    }
    session_unset();
    session_destroy();
    echo json_encode(['status' => "logout", 'status_code' => 'Logged out']);
}else{  

    echo json_encode(["status" => null]);
    return false;
}
exit();

?>