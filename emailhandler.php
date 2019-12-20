<?php


/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Justice
 *
 */

    /*$emailaddress = $email;
    $emailSubject = $subject;
    $bodyTitle = "";
    $bodyText = '<h3>Welcome, '. $name.'!</h3>
                            We indeed are glad that you have chosen to create an account with us. Please, you have just one step to complete the process. We require our clients to validate their accounts before creation to ensure continued security.
                            <br/>
                            All you have to do is to click on the link below to activate your account so you get access to our numerous services.
                            <br/>
                            <br/>
                            <center>
                                <a href="https://www.ndifre.com/activate.php?add='. $emailaddress .'&rlink='. $link .'&type=tutor"><button style="padding:10px;background-color:#022F8E;color:white;border:0px;font-family:\'Manjari\',sans-serif;outline:none;font-weight:bold">Activate Account</button></a></center>
                            <br/>
                            <br/>';
                            */
function emailHandler($emailaddress,$subject,$bodyTitle,$bodyText)
{
   

    $headers = "MIME-Version:1.0\n";
    $headers .= "Content-type:text/html\n";
    $headers .= "From: Ugbogu Justice <".website_email.">\n";
    $headers .= "Return-Path: ".website_email."\n";
    $headers .= "Reply-To: $emailaddress\n";
    $body = '<center>
        <style>
            @import url(\'https://fonts.googleapis.com/css?family=Manjari&display=swap\');
            .activate {
                
            }
        </style>
        <div style="padding:20px;background-color:#f2f2f2;border-radius:5px;margin-top:20px;font-family:\'Manjari\',sans-serif;">
            <font family="trebuchet MS">
                <table style="width:100%;text-align:left">
                    <tr>
                        <td style="background-color:#022F8E;padding:15px">
                            <h2 style="color:white">'.$bodyTitle.'</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:white;color:gray;padding:15px">
                            '.$bodyText.'
                        </td>
                    </tr>
                </table><br/>
            </font><br/>
        </div><br/>
    </center>';
           
   if(mail($emailaddress,$subject,$body,$headers)){
    $_SESSION['message'] = "Congratulation, an email has been sent to you, kindly visit your mail box and click on the button to activate your account.";
   }else{
    $_SESSION['message'] = "Mail pusher activation failed on registration, contact us.";
   }
}
?>