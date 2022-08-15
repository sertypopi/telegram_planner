<?php 
$w = stream_get_wrappers();
echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
echo 'wrappers: ', var_export($w);

define('BOT_TOKEN', '5586704631:AAFdhFj6PHMB1QauyCqZsoXTwen2dcEVli');
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

// read incoming info and grab the chatID
$content = file_get_contents("php://input");
echo $content;

$update = json_decode($content, true);
echo $update;
$chatID = $update["message"]["chat"]["id"];
echo $chatID;
$message = $update["message"]["text"];
echo $message;
// compose reply
$reply ="";
switch ($message) {
    case "/start":
        $reply =  "Welcome to Siamaks's bot. Type /help to see commands";
        break;
    case "/test":
        $reply =  "test complete";
        break;
    case "/hi":
        $reply =  "hey there";
        break;
    case "/help":
        $reply =  "commands: /start , /test , /hi , /help ";
        break;
    default:
        $reply =  "NoNo, I don't understand you";
}

// send reply
$sendto =API_URL."sendmessage?chat_id=".$chatID."&text=".$reply;
file_get_contents($sendto);

// Create a debug log.txt to check the response/repy from Telegram in JSON format.
// You can disable it by commenting checkJSON.
checkJSON($chatID,$update);
function checkJSON($chatID,$update){

    $myFile = "log.txt";
    $updateArray = print_r($update,TRUE);
    $fh = fopen($myFile, 'a') or die("can't open file");
    fwrite($fh, $chatID ."nn");
    fwrite($fh, $updateArray."nn");
    fclose($fh);
}