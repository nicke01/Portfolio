<?php

use Mailgun\Mailgun;

// Enter your Mailgun API key here
/*
|--------------------------------------------------------------------------
| Mailgun Settings
|--------------------------------------------------------------------------
|
| Register for Free on Mailgun.com for sending transactional emails.
| Mailgun is powerful API email service by rackspace.
| It is easy to use. Just signup on mailgun.com and
| follow steps to get API key & domain name.
|
*/

$mailgunKey = '373588cd7e10cf65e49d75f7828f1ed0-060550c6-353b1281'; //Will be like key-........
$mailgunPub = "pubkey-4fb398e0f2e1a1daac2546ae9a1724fa";
$domain = 'mail.restberry.ru'; //You can use sandbox domain provided by mailgun
$listAddress = 'mainlist@mail.restberry.ru';

// Your details to receive email from end-user
$corpEmail = 'support@restberry.ru';//Chage this email id to yours where you want to receive email
$mg = new Mailgun($mailgunKey);
$mailgunOptIn = $mg->OptInHandler(); 
$secret = 'RY';

// Following settings will be used to send email to end-user who submits contact us form.
// We will be sending 'Thank You' email to end-user.
$fromName = 'Restberry'; //Sender's Name

date_default_timezone_set('Russia/Moskow');
$date = date('Y-m-d');

