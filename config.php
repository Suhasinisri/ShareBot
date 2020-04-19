<?php

$configFile = file_get_contents(__DIR__.'/cereditional.json');
$config = json_decode($configFile);
$token = $config->token;
$chnl_id = $config->channel_id;

define("TOKEN",$token);
define("CHANNEL_ID",$chnl_id);

$bot = new Telegram(TOKEN);
$content = array();
$content['chat_id'] = CHANNEL_ID;
$content['text'] = '';
$content['disable_notification']=true;
function send_link($bot,$link,$content) {
    $content['text'] = $link;
    return $bot->sendMessage($content);
}