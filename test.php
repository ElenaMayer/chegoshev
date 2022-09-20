<?php
saveLog(222);
require '../vendor/autoload.php';

$token = "5283029335:AAEFRXUl3nX0jjsTKxF_Zy4zs5HortPu2Rc";
$bot = new \TelegramBot\Api\Client($token);

try {
    // команда для start
    $bot->command('start', function ($message) use ($bot) {
        $answer = 'Добро пожаловать!';

        $bot->sendMessage($message->getChat()->getId(), $answer);
    });

    // команда для помощи
    $bot->command('help', function ($message) use ($bot) {

        $answer = 'Команды:
            /help - вывод справки';
        $bot->sendMessage($message->getChat()->getId(), $answer);
    });

    $bot->command('test', function ($message) use ($bot) {
        $answer = 'Тест';
        $bot->sendMessage($message->getChat()->getId(), $answer);
    });

    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $error = $e->getMessage();
    saveLog($error);
}

function saveLog($msg)
{
    $log  = date("F j, Y, g:i a").PHP_EOL.
        $msg.PHP_EOL.
        "-------------------------".PHP_EOL;
    file_put_contents('../log/'.date("j.n.Y").'.log', $log, FILE_APPEND);
}



