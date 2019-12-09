<?php


/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Justice
 *
 */
 
class error_report 
{
    public $error;
    public $error1;

    function __construct($error,$error1,$error2)
    {
        $this->error=$error;
        $this->error1=$error1;
        $this->error2=$error2;
    }
    function error(){
        ini_set('display_errors', $this->error1);
        ini_set('display_startup_errors', $this->error2);
        error_reporting($this->error);
    }
}
//setting up error[error_reporting,display_errors,display_startup_errors]
// $error_reporting = new error_report(E_ALL,1,1);
 $error_reporting = new error_report(0,0,0);

 
function form_token($token){
    if (!(isset($token)) OR !(isset($_SESSION['csrf_token'])) OR ($token != $_SESSION['csrf_token'])){
        return false;
    }else{
        return true;
    }
}

function check_token($token,$loc){
    $return = form_token($token);
    // var_dump($return);
    if($return == false){
    ?><script>window.location="<?php echo $loc;?>";</script><?php
    die();
    }
}


function remove_tags($html){
    if(!isset($html) OR empty($html)){
        return 'error';
    }else{
        $html = remove_phptages($html);
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        $tags_to_remove = array('script','style','iframe','link');
        foreach ($tags_to_remove as $tag) {
          $element = $dom->getElementsByTagName($tag);
          foreach ($element as $item) {
            $item->parentNode->removeChild($item);
          }
        }
        $clean = $dom->SaveHTML();
        return  $clean;
    }
}
function remove_phptages($key){
    if(!isset($key) OR empty($key)){
        return 'error';
    }else{
        $clean4 = preg_replace(array('/<(\?|\%)\=?(php)?/','/(\%|\?)>/'), array('',''), $key); 
        return $clean4;
    }
}
function filter_string($string){
    if (!filter_var($string, FILTER_SANITIZE_STRING) === false) {
      $stirped = strip_tags($string);
      return trim($stirped);
    }else{
      return 'error';
    }
}
function filter_int($int){
    $t = strip_tags($int);
    if (filter_var($t, FILTER_VALIDATE_INT) === 0 OR !filter_var($t, FILTER_VALIDATE_INT) === false) {
        $stirped = strip_tags($t);
      return trim((int)$stirped);
    }else{
      return 'error';
    }
}
function filter_email($email){
    $email = trim($email);
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
       $stirped = strip_tags($email);
      return trim($stirped);
    } else {
       return 'error';
    }
}


function filter_password($password){
    // Validate password strength
    $password = trim($password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        //'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'
        return 'error';
    }else{
         $stirped = strip_tags($password);
      return trim($stirped);
         
    }
}
function stringLength($len,$min,$max){
    $returnValue = strlen($len);
    if((int)$returnValue <= $max AND (int)$returnValue >= $min){
        return $len;
    }else{
        return 'error';
    }
}

function normalize($key, $url, $error){
    if($key === 'error' OR $key === null OR !isset($key)  OR $key === '?>' OR $key === ''){
      ?><script type="text/javascript">
      window.location="<?php echo $url; ?>?error=<?php echo $error; ?>";
      </script><?php
        $_SESSION['message'] = $error;
      die();
    }else{
      return trim($key);
    }
}

function crypto_rand_secure($min, $max){
    $range = $max - $min;
    if($range < 1) return $min;
    $log = ceil(log($range, 2));
    $bytes = (int)($log / 8) + 1;
    $bits = (int)$log + 1;
    $filter = (int) (1 << $bits) - 1;
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter;
    }while($rnd > $range);
    return $min + $rnd;
}

function getToken($lengh){
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet .= "0123456789";
    $max = strlen($codeAlphabet);
    for($i=0; $i < $lengh; $i++){
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }
    return $token;
}

function getCurrentUri(){
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -01)).'/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    // return $uri;
    $route = explode('/', $uri);
    if (!($route[0])) {
        $uri = '';
    }else{
        $routes = explode('/', $uri);
        $uri = $routes[0];
    }
    return $uri;
}
?>