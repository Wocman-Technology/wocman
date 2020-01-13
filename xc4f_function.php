<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Ugbogu Justice, 08138184872
 *
*/

//used in personality
function image($name,$type,$temp_name,$error,$imagesize,$target_dir,$size,$extentions,$newimage){
    // if(empty($name) OR empty($type) OR empty($temp_name) ){
    //     $_SESSION['message'] = "No image Found";
    //     return "error";
    // }
    $target_file = $target_dir . basename($name);
    $uploadOk = 1;
    // Check if image file is a actual image or fake image

    if($imagesize !== false) 
    {
        $uploadOk = 1;
    } else 
    {
        $_SESSION['message'] ="File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) 
    {
        unlink($target_file);
        $uploadOk = 1;
    }
    // Check file size
    if ($imagesize > $size) 
    {
        $_SESSION['message'] = "Sorry, your profile Picture is too large.";
        $uploadOk = 0;
    }
    
    $type=pathinfo($target_file,PATHINFO_EXTENSION);
    $n = mergeOptions(strtolower($type), $extentions);
    // return $n;
    if($n === "error"){
        $_SESSION['message'] ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }else{
    //   $nn = mergeOptions($type, $extentions);
    //   if($nn == "error"){
    //      $_SESSION['message']  = "Your image seems a direct camera photo, kindly change your image extension to lower case character by re-saving the image using any graphics application";
    //      $uploadOk = 0;
    //   }
    }

   
   
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) 
    {
        $locate="error";
        return $locate;
    // if everything is ok, try to upload file
    } else
    {
        $newImageName=$newimage.".".strtolower($type);
        // Check if file already exists
        $path=($target_dir.$newImageName);
        if (file_exists($path)) 
        {
            unlink($path);
            if (move_uploaded_file($temp_name, $path)) 
            {
                $locate=$target_dir.$newImageName;
            } else 
            {
                $locate="error";
            }
        }else
        {
            if (move_uploaded_file($temp_name, $path)) 
            {
                $locate=$target_dir.$newImageName;
            } else 
            {
                $locate="error";
            }
        }
        return $locate;
    }
}

function mergeOptions($option,$merge){
    $_SESSION['get'] = 0;
    foreach ($merge as $set) {
        
        if($option != $set){
            $_SESSION['get'] = $_SESSION['get'] + 0;
        }else{
            $_SESSION['get'] = $_SESSION['get'] + 1;
        }

    }
    if($_SESSION['get'] > 0){
        return $option;
    }else{
        return "error";
    }
}
  function compress_image($source, $destination, $quality){
        $info = getimagesize($source);
        if ($info['mime'] == 'image/jpeg') {
          $image = imagecreatefromjpeg($source);
        }elseif ($info['mime'] == 'image/gif') {
          $image = imagecreatefromgif($source);
        }elseif ($info['mime'] == 'image/png') {
          $image = imagecreatefrompng($source);
        }
        imagejpeg($image, $destination, $quality);

        return $destination;
    }
function route($method,$url,$name){
    if (trim($url,"?") == $name) {
        
        if ($method == 'POST') {
            $field_string = '';
            $push = [];
            foreach ($_POST as $key => $value) {
                $field_string .= $key.'='.urlencode($value).'&';
                $field_strings = $key.'='.$value;
                array_push($push, $field_strings);
            }
            rtrim($field_string, '&');
            define("route", website_link."controller/".$url);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, route);
            curl_setopt($ch, CURLOPT_POST, count($push));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }else{
            define("route", website_link."controller/".$url);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, route);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }
    }else{
        return "Invalid Route";
    }
}
/**
 * 
 //setting up parameters
*/
class General
{
    
    private $host = server;
    private $database = serverDatabase;
    private $user = serverUser;
    private $password = serverPassword;   
    
    function __construct() {
        $this->conn = $this->connectDB();
    }
    
    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    public function verifyCustomer($tbl,$column,$data){
        //purify parameters
            $data = mysqli_real_escape_string($this->conn, $data);
        //query session 
            if ($_SESSION['routes_Auth_wocman_cutomer'] !=  $data) {
                return false;
            }
        //query the database
            $sql = $this->conn->query("SELECT * FROM $tbl WHERE `$column` = '$data' ");
            $countNumberOfReturns = $sql->num_rows;

        //return variables
            if ($countNumberOfReturns != 1) {
                return false;
            }else{
                return true;
            }

    }
    public function verifyWocman($tbl,$column,$data){
        //purify parameters
            $data = mysqli_real_escape_string($this->conn, $data);
        //query session 
            if ($_SESSION['routes_Auth_wocman_admin'] !=  $data) {
                return false;
            }
        //query the database
            $sql = $this->conn->query("SELECT * FROM $tbl WHERE `$column` = '$data' ");
            $countNumberOfReturns = $sql->num_rows;

        //return variables
            if ($countNumberOfReturns != 1) {
                return false;
            }else{
                return true;
            }
    }
    public function verifyWorkman($tbl,$column,$data){
        //purify parameters
            $data = mysqli_real_escape_string($this->conn, $data);
        //query session 
            if ($_SESSION['routes_Auth_wocman_workman'] !=  $data) {
                return false;
            }
        //query the database
            $sql = $this->conn->query("SELECT * FROM $tbl WHERE `$column` = '$data' ");
            $countNumberOfReturns = $sql->num_rows;

        //return variables
            if ($countNumberOfReturns != 1) {
                return false;
            }else{
                return true;
            }
    }
    public function updateToken($tbl,$column,$data,$id){
        //query the database
        $sql = $this->conn->query("UPDATE  `$tbl` SET `$column` = '$data' WHERE `id` = '$id' ");  
    }
}

$general = new General();
?>