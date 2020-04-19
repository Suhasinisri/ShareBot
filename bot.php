<?php

include "config.php";


$link = isset($_REQUEST['link']) ? $_REQUEST['link'] : null;

if (!is_null($link)) {
    header('Content-Type: application/json');
    echo json_encode(send_link($link), JSON_PRETTY_PRINT);

    die();
}