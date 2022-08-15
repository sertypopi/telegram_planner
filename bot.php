<?php 
    //$initial_api_bot = "https://api.telegram.org/bot5586704631:AAFdhFj6PHMB1QauyCqZsoXTwen2dcEVlig/getMe";

    $get_bot_info = file_get_contents('php://input');
    $info_bot_jsone = json_decode($get_bot_info, true);

    $chat_id = $info_bot_jsone['message']['chat']['id'];
    $message = $info_bot_jsone['message']['text'];

    $token = '5586704631:AAFdhFj6PHMB1QauyCqZsoXTwen2dcEVlig';

    public function sendMessage($token, $id, $message)

    {
        file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".message);

    }

    swith ($message)
    {
        case '/start':
            $message = "добавим дело?";
            sendMessage($token, $id, $message.KeyboardMenu());
            break;

        //case '/count_time':
            


        default:
            sendMessage($token, $id, $message.KeyboardMenu());


    }

    public function getUpdate()
    {

    }






    ?>
