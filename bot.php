<?php

include "config.php";


$link = isset($_REQUEST['link'])?$_REQUEST['link']:null;

if (!is_null($link)){
    echo send_link($bot,$link,$content);
    die();
}