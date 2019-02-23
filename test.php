<?php

$path = 'http://newcodeng.com/';
if (@file_get_contents($path) === false) {
    echo 'false';
    die();
}

echo 'true';

?>