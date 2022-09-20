<?php

namespace app\controllers;

use TelegramBot\Api\Client;
use TelegramBot\Api\Exception;
use Yii;
use yii\log\Logger;
use yii\web\Controller;

class BotController extends Controller
{
    protected $client;

    public function __construct($id, $module, Client $client, $config = [])
    {
        $this->client = new Client(TOKEN);
        parent::__construct($id, $module, $config);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionTest()
    {
        $this->client->sendMessage(127833669, 'Ghbdtn!');
        $bot = $this->client;
        try {
            $this->start();

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

            $this->client->run();
        } catch (Exception $e) {
            $error = $e->getMessage();
            Yii::getLogger()->log($error, Logger::LEVEL_ERROR);
        }
    }

    public function start()
    {
        $this->client->command('start', function ($message) {
            $answer = 'Добро пожаловать!';
            $this->client->sendMessage($message->getChat()->getId(), $answer);
        });
    }
}