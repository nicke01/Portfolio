<?php 

use Mailgun\Mailgun;

require_once 'mailgun-settings.php';

//if (isset($_GET['hash']))
//{
   $hash = $mailgunOptIn->validateHash($secret, $_GET['hash']);
    
    if($hash)
    {
        $list = $hash['MainList'];
        $email = $hash['receptientAddress'];
        
        $mailgun->put('lists/' . $listAddress . '/members' . $email, [
            'subscribed'=> 'yes'    
        ]);
    }
    
   header("Location: https://restberry.ru/thanks-for-subscribing.html");
//}