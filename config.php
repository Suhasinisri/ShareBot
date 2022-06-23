<?php
require "Telegram.php";
require "TelegramErrorLogger.php";
$configFile = file_get_contents(__DIR__ . '/cereditional.json');
$config = json_decode($configFile);
$token = $config->5359458897:AAGwwm_vpw7tJk-gtb0AgC_DF29fhcswnZk;
$chnl_id = $config->5348405228;

define("TOKEN", $token);
define("CHANNEL_ID", $chnl_id);

$bot = new Telegram(5359458897:AAGwwm_vpw7tJk-gtb0AgC_DF29fhcswnZk);
$content = array(
    'chat_id' =>5348405228,
    'text' => '',
    'disable_notification' => true
);
function send_link($link)
{
    global $content;
    global $bot;
    $content['text'] = $link;

    return $bot->sendMessage($content);
}
