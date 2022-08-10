<?php 
    $initial_api_bot = ";

    $get_bot_info = file_get_contents('php://input');
    $info_bot_jsone = json_decode($get_bot_info, true);

    $chat_id = $info_bot_jsone['message']['chat']['id'];
    $message = $info_bot_jsone['message']['text'];

    ?>
