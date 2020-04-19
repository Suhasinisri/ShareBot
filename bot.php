<?php

include "config.php";


$link = isset($_REQUEST['link']) ? $_REQUEST['link'] : null;

if (!is_null($link)) {
    header('Content-Type: application/json');
     echo json_encode(send_link($bot, $link, $content),JSON_PRETTY_PRINT,JSON);

    die();
}