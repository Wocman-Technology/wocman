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

$routes = getCurrentUri();

$invalid_url = website_link;
$url = website_link;
$routes = $_GET['url'];
$x = explode(WOCMAN_SPLIT, $routes);
$woc_token = getToken(120);
if ($x[2] == "Workman") {
    $check = $mysqli->query("SELECT * FROM $tbl_temp WHERE email = '$x[1]' ");
    if ($check->num_rows == 1) {
        $row_fetch = $check->fetch_assoc();

        $psd = $row_fetch['password'];
        $type = $row_fetch['type'];
        $email =$row_fetch['email'];
        $name =$row_fetch['name'];
        $phone =$row_fetch['phone'];
        $qualification =$row_fetch['qualification'];
        $location = $row_fetch['location'];

        if(password_verify($psd, trim($x[0],'?')) == 1 && $type == $x[2]){

             $checks = $mysqli->query("SELECT * FROM $tbl_workmen WHERE email = '$x[1]' ");
            if ($checks->num_rows < 1) {

            if($mysqli->query("INSERT INTO $tbl_workmen(`email`,`name`,`phone`,`password`,`qualification`,`location`,`active`,`".wocman_token_column."`) VALUES('$email','$name','$phone','".trim($x[0],'?')."','$qualification','$location','1', '$woc_token') ")){
                $mysqli->query("DELETE FROM $tbl_temp WHERE id='".$row_fetch['id']."' ");

        $url_email = website_link."/workman_login";
        $bodyTitle = "Wocman  Account Verified";
        $subject = "Account Verification";
        $bodyText = '<h3>Welcome, '. $row_fetch['name'].'!</h3>
                                Account verification was successful, join millions of others to build, renovate and restore the world.
                                <br/>
                                Kindly login to proceed with services.

                                <br/>Welcome!
                                <br/>
                                <center>
                                    <a href="'.$url_email.'"><button style="padding:10px;background-color:#022F8E;color:white;border:0px;font-family:\'Manjari\',sans-serif;outline:none;font-weight:bold">Login Now</button></a></center>
                                <br/>Wocman Technology
                                
                                <br/>
                                <br/>'; 

        include WOCMAN_DIR."emailhandler.php";
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = true;
        $myObj->status_code = 202;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
         // var_dump($mysqli -> error);
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Could not seed data";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

    }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "User Already verified";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    

    }

        }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Invalid link";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    

        }
    }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Could not resolve data";
        $myJSON = json_encode($myObj);
        echo $myJSON;

    }

    //normalize('error',  $url, $error);
    
}elseif($x[2] == "Customer") {
    
     $check = $mysqli->query("SELECT * FROM $tbl_temp WHERE email = '$x[1]' ");
    if ($check->num_rows == 1) {
        $row_fetch = $check->fetch_assoc();
        $psd = $row_fetch['password'];
        $type = $row_fetch['type'];
        if(password_verify($psd, trim($x[0],'?')) == 1 && $type == $x[2]){

            
             $checks = $mysqli->query("SELECT * FROM $tbl_workmen WHERE email = '$x[1]' ");
            if ($checks->num_rows < 1) {

            if($mysqli->query("INSERT INTO $tbl_customer(`email`,`name`,`phone`,`password`,`".wocman_token_column."`) VALUES('".$row_fetch['email']."','".$row_fetch['name']."','".$row_fetch['phone']."','".trim($x[0],'?')."','$woc_token') ")){
 $mysqli->query("DELETE FROM $tbl_temp WHERE id='".$row_fetch['id']."' ");

        $url_email = website_link."/customer_login";
        $bodyTitle = "Wocman Customer Account Verified";
        $subject = "Account Verification";
        $bodyText = '<h3>Welcome, '. $row_fetch['name'].'!</h3>
                                Account vrification was successful, join millions of others to build, removate and restore the world.
                                <br/>
                                Kindly login to proceed with services.

                                <br/>Welcome!
                                <br/>
                                <center>
                                    <a href="'.$url_email.'"><button style="padding:10px;background-color:#022F8E;color:white;border:0px;font-family:\'Manjari\',sans-serif;outline:none;font-weight:bold">Login Now</button></a>
                                </center>
                                <br/>Wocman Technology
                                
                                <br/>
                                <br/>'; 

        include WOCMAN_DIR."emailhandler.php";

             $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = true;
        $myObj->status_code = 202;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
         // var_dump($mysqli -> error);
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Could not seed data";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

    }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "User Already verified";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    

    }

        }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Invalid link";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    

        }
    }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Could not resolve data";
        $myJSON = json_encode($myObj);
        echo $myJSON;

    }


    //normalize('error',  $url, $error);
}elseif ($x[2] == "Wocman") {
    $check = $mysqli->query("SELECT * FROM $tbl_temp WHERE email = '$x[1]' ");
    if ($check->num_rows == 1) {
        $row_fetch = $check->fetch_assoc();

        $psd = $row_fetch['password'];
        $type = $row_fetch['type'];
        $email =$row_fetch['email'];
        $name =$row_fetch['name'];
        $phone =$row_fetch['phone'];
        $secret_key = wocman_secret;

        if(password_verify($psd, trim($x[0],'?')) == 1 && $type == $x[2]){

             $checks = $mysqli->query("SELECT * FROM $tbl_wocman WHERE email = '$x[1]' ");
            if ($checks->num_rows < 1) {

            if($mysqli->query("INSERT INTO $tbl_wocman(`email`,`name`,`phone`,`password`,`".wocman_token_column."`) VALUES('$email','$name','$phone','".trim($x[0],'?')."', '$woc_token') ")){
                $mysqli->query("DELETE FROM $tbl_temp WHERE id='".$row_fetch['id']."' ");

        $url_email = website_link."/wocman_login";
        $bodyTitle = "Wocman  Account Verified";
        $subject = "Account Verification";
        $bodyText = '<h3>Welcome, '. $row_fetch['name'].'!</h3>
                                Account verification was successful, join millions of others to build, renovate and restore the world.
                                <br/>
                                Kindly login to proceed with services.

                                <br/>Welcome!
                                <br/>
                                <center>
                                    <a href="'.$url_email.'"><button style="padding:10px;background-color:#022F8E;color:white;border:0px;font-family:\'Manjari\',sans-serif;outline:none;font-weight:bold">Login Now</button></a></center>
                                <br/>Wocman Technology
                                
                                <br/>
                                <br/>'; 

        include WOCMAN_DIR."emailhandler.php";
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = true;
        $myObj->status_code = 202;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
         // var_dump($mysqli -> error);
        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Could not seed data";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

    }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "User Already verified";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    

    }

        }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Invalid link";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    

        }
    }else{

        $myObj = new stdClass();
        $myObj->row = "none";
        $myObj->count = 0;
        $myObj->status = false;
        $myObj->status_code = "Could not resolve data";
        $myJSON = json_encode($myObj);
        echo $myJSON;

    }

    //normalize('error',  $url, $error);
    
}else{  
    ?><script type="text/javascript">window.location='<?php echo $invalid_url; ?>';</script><?php
}

?>