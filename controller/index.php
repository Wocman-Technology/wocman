<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Justice
 *
 */

require '../database/xc4f_config.php';

require WOCMAN_DIR.'database/'.WOCMAN_PREFIX_FILE.'mysqli.php';
require WOCMAN_DIR.WOCMAN_PREFIX_FILE.'clean.php';
require WOCMAN_DIR.WOCMAN_PREFIX_FILE.'function.php';


$_SESSION['token']  = isset($_SESSION['token'])?$_SESSION['token']:getToken(120);


$rout = getCurrentUri();
$route = explode("&", $rout);
$routes = $route[0];

$invalid_url = website_link;
$url = website_link;

if ($routes == "?customer_register") {
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
    $email = remove_tags($email);$ee= filter_email($email);$ee= stringLength($ee,5,50);   $customer_email_address=normalize($ee, $url, $error);

    $error = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $psd =  remove_tags($password);$ee= filter_password($psd);   $ee= stringLength($ee,8,50);$cusomer_password=normalize($ee, $url, $error);

    $error = "Name Input Violation Error";
    $fn =  remove_tags($name);$ee= filter_string($fn);  $ee= stringLength($ee,4,50); $customer_name=normalize($ee, $url, $error);

    $error = "Phone number Violation Error";
    $phone =  remove_tags($phone);$ee= filter_string($phone);  $ee= stringLength($ee,4,15); $customer_phone=normalize($ee, $url, $error);

    $type = "Customer";

    if($mysqli->query("INSERT INTO $tbl_temp(`email`,`name`,`phone`,`password`,`type`) VALUES('$customer_email_address','$customer_name','$customer_phone','$cusomer_password','$type') ")){

    //$customer_email_address = "ugbogoguJ@yahoo.com";
    //$cusomer_password = "adfg34DFDGfgd";

    $key = password_hash($cusomer_password, PASSWORD_DEFAULT);

    $url_email = website_link."verify/?url=".$key.WOCMAN_SPLIT.$customer_email_address.WOCMAN_SPLIT.$type;
    var_dump($url_email); 

    $bodyTitle = "Wocman Customer Account Confirmatoin";
    $subject = "Account Confirmatoin";
    $bodyText = '<h3>Welcome, '. $customer_name.'!</h3>
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
    $myObj->status_code = "failed to register";
    $myJSON = json_encode($myObj);
    echo $myJSON;
    }
    
}elseif($routes == "?workman_register") {
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
    $email = remove_tags($email);$ee= filter_email($email);$ee= stringLength($ee,5,50);   $customer_email_address=normalize($ee, $url, $error);

    $error = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $psd =  remove_tags($password);$ee= filter_password($psd);   $ee= stringLength($ee,8,50);$cusomer_password=normalize($ee, $url, $error);

    $error = "Name Input Violation Error";
    $fn =  remove_tags($name);$ee= filter_string($fn);  $ee= stringLength($ee,4,50); $customer_name=normalize($ee, $url, $error);

    $error = "Phone number Violation Error";
    $phone =  remove_tags($phone);$ee= filter_string($phone);  $ee= stringLength($ee,4,15); $customer_phone=normalize($ee, $url, $error);

    $error = "Qualification Input Violation Error";
    $fn =  remove_tags($qualfication);$ee= filter_string($fn);  $ee= stringLength($ee,1,50); $customer_qualfication=normalize($ee, $url, $error);

    $error = "Phone number Violation Error";
    $phone =  remove_tags($location);$ee= filter_string($phone);  $ee= stringLength($ee,4,15); $customer_location=normalize($ee, $url, $error);

    $type = "Workman";

    if($mysqli->query("INSERT INTO $tbl_temp(`email`,`name`,`phone`,`password`,`type`,`qualification`,`location`) VALUES('$customer_email_address','$customer_name','$customer_phone','$cusomer_password','$type','$customer_qualfication','$customer_location') ")){

    //$customer_email_address = "ugbogoguJ@yahoo.com";
    //$cusomer_password = "adfg34DFDGfgd";

    $key = password_hash($cusomer_password, PASSWORD_DEFAULT);

    $url_email = website_link."verify/?url=".$key.WOCMAN_SPLIT.$customer_email_address.WOCMAN_SPLIT.$type;
    var_dump($url_email); 

    $bodyTitle = "Wocman Technology Account Confirmatoin";
    $subject = "Workman Account Confirmatoin";
    $bodyText = '<h3>Welcome, '. $customer_name.'!</h3>
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
    $myObj->status_code = "failed to register";
    $myJSON = json_encode($myObj);
    echo $myJSON;
    }
}elseif($routes == "?customer_login") {
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
    $email = remove_tags($email);$ee= filter_email($email);$ee= stringLength($ee,5,50);   $customer_email_address=normalize($ee, $url, $error);

    $error = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $psd =  remove_tags($password);$ee= filter_password($psd);   $ee= stringLength($ee,8,50);$cusomer_password=normalize($ee, $url, $error);

     $check = $mysqli->query("SELECT * FROM $tbl_customer WHERE email = '$customer_email_address' ");
    if ($check->num_rows == 1) {
        $row_fetch = $check->fetch_assoc();
        $psd = $row_fetch['password'];
        if (password_verify($cusomer_password, $psd) == 1) {
            $myObj = new stdClass();
            $myObj->row = $row_fetch;
            $myObj->count = $check->num_rows;
            $myObj->status = true;
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
    $email = remove_tags($email);$ee= filter_email($email);$ee= stringLength($ee,5,50);   $customer_email_address=normalize($ee, $url, $error);

    $error = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $psd =  remove_tags($password);$ee= filter_password($psd);   $ee= stringLength($ee,8,50);$cusomer_password=normalize($ee, $url, $error);

     $check = $mysqli->query("SELECT * FROM $tbl_workmen WHERE email = '$customer_email_address' ");
    if ($check->num_rows == 1) {
        $row_fetch = $check->fetch_assoc();
        $psd = $row_fetch['password'];
        if (password_verify($cusomer_password, $psd) == 1) {
            $myObj = new stdClass();
            $myObj->row = $row_fetch;
            $myObj->count = $check->num_rows;
            $myObj->status = true;
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
    
}elseif($routes == "?delete_qualification") {
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

     $error = "Identity Violation Error";
    $delete_id =  remove_tags($delete_id);$ee= filter_string($delete_id);  $ee= stringLength($ee,1,15); $wocman_delete=normalize($ee, $url, $error);

    $check = $mysqli->query("SELECT * FROM $tbl_qualification WHERE id='$wocman_delete' ");
    if ($check->num_rows > 0) {

    if ($mysqli->query("DELETE FROM $tbl_qualification WHERE id='$wocman_delete' ")) {
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = true;
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "Qualification was not deleted";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "Qualification was not found";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
}elseif($routes == "?update_qualification") {
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
    extract($_FILES);
    if (isset($upload_image) && !empty($upload_image)) {

        $image[] = $upload_image;
        $target_dir = WOCMAN_DIR."uploads";
        $size = 1000000;
        $extentions = ['jpg','png','jpeg','gif',];
        $newimage = $title;
        $images = image($image[0]['name'],$image[0]['type'],$image[0]['tmp_name'],$image[0]['error'],$image[0]['size'],$target_dir,$size,$extentions,$newimage);
        $error = $_SESSION['message'];
        $ee= remove_tags($image);$ee= filter_string($ee);  $ee= stringLength($ee,1,50); $image=normalize($ee, $url, $error);
       
        // var_dump($images);return false;
        $image = $images;
    }else{
        $image = '';
    }
    $wocman_update = $update_id;

    $check = $mysqli->query("SELECT * FROM $tbl_qualification WHERE id='$wocman_update' ");
    if ($check->num_rows > 0) {

         if ($mysqli->query("UPDATE  $tbl_qualification SET title = '$title', description = '$description', image = '$image' WHERE id='$wocman_update' ")) {
            $myObj = new stdClass();
            $myObj->row = '';
            $myObj->count = '';
            $myObj->status = true;
            $myObj->status_code = 202;
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }else{
            $myObj = new stdClass();
            $myObj->row = '';
            $myObj->count = '';
            $myObj->status = false;
            $myObj->status_code = "Qualification was not Updated";
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }

    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "Qualification was not Found";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

}elseif($routes == "?create_qualification") {
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

    $error = "Title Violation Error";
    $title =  remove_tags($title);$ee= filter_string($title);  $ee= stringLength($ee,1,15); $wocman_title=normalize($ee, $url, $error);

    $error = "Description  Violation Error";
    $fn =  remove_tags($description);$ee= filter_string($fn);  $ee= stringLength($ee,1,50); $wocman_description=normalize($ee, $url, $error);
     $check = $mysqli->query("SELECT * FROM $tbl_qualification WHERE title='$wocman_title' ");
    if ($check->num_rows < 1) {

    if ($mysqli->query("INSERT INTO $tbl_qualification(`title`,`description`) VALUES('$wocman_title','$wocman_description') ")) {
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = true;
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "Qualification was not saved";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
     }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "Qualification already exist";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

}elseif($routes == "?qualification") {
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
    extract(${"_".$_SERVER['REQUEST_METHOD']});
    $check = $mysqli->query("SELECT * FROM $tbl_qualification ");
    if ($check->num_rows > 0) {
        $data = [];
        while($row_fetch = $check->fetch_assoc()){
            array_push($data, $row_fetch);
        }
        $myObj = new stdClass();
        $myObj->row = $data;
        $myObj->count = $check->num_rows;
        $myObj->status = true;
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = true;
        $myObj->status_code = "No data found from the table";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    
}elseif($routes == "?delete_location") {
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

     $error = "Identity Violation Error";
    $delete_id =  remove_tags($delete_id);$ee= filter_string($delete_id);  $ee= stringLength($ee,1,15); $wocman_delete=normalize($ee, $url, $error);

    $check = $mysqli->query("SELECT * FROM $tbl_location WHERE id='$wocman_delete' ");
    if ($check->num_rows > 0) {

    if ($mysqli->query("DELETE FROM $tbl_location WHERE id='$wocman_delete' ")) {
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = true;
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "location was not deleted";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "location was not found";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
}elseif($routes == "?update_location") {
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
   
    $wocman_update = $update_id;

    $check = $mysqli->query("SELECT * FROM $tbl_location WHERE id='$wocman_update' ");
    if ($check->num_rows > 0) {

         if ($mysqli->query("UPDATE  $tbl_location SET title = '$title', description = '$description' WHERE id='$wocman_update' ")) {
            $myObj = new stdClass();
            $myObj->row = '';
            $myObj->count = '';
            $myObj->status = true;
            $myObj->status_code = 202;
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }else{
            $myObj = new stdClass();
            $myObj->row = '';
            $myObj->count = '';
            $myObj->status = false;
            $myObj->status_code = "location was not Updated";
        
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }

    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "location was not Found";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

}elseif($routes == "?create_location") {
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

    $error = "Title Violation Error";
    $title =  remove_tags($title);$ee= filter_string($title);  $ee= stringLength($ee,1,15); $wocman_title=normalize($ee, $url, $error);

    $error = "Description  Violation Error";
    $fn =  remove_tags($description);$ee= filter_string($fn);  $ee= stringLength($ee,1,50); $wocman_description=normalize($ee, $url, $error);
     $check = $mysqli->query("SELECT * FROM $tbl_location WHERE title='$wocman_title' ");
    if ($check->num_rows < 1) {

    if ($mysqli->query("INSERT INTO $tbl_location(`title`,`description`) VALUES('$wocman_title','$wocman_description') ")) {
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = true;
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "location was not saved";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
     }else{
        $myObj = new stdClass();
        $myObj->row = '';
        $myObj->count = '';
        $myObj->status = false;
        $myObj->status_code = "location already exist";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

}elseif($routes == "?location") {
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
    extract(${"_".$_SERVER['REQUEST_METHOD']});
    $check = $mysqli->query("SELECT * FROM $tbl_location ");
    if ($check->num_rows > 0) {
        $data = [];
        while($row_fetch = $check->fetch_assoc()){
            array_push($data, $row_fetch);
        }
        $myObj = new stdClass();
        $myObj->row = $data;
        $myObj->count = $check->num_rows;
        $myObj->status = true;
        $myObj->status_code = 202;
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = true;
        $myObj->status_code = "No data found from the table";
    
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    
}elseif($routes == "?tokennizer_wocman"){
    echo json_encode(['status' => $_SESSION['token']]);
}else{  
    ?><script type="text/javascript">window.location='<?php echo $invalid_url; ?>';</script><?php
}

?>