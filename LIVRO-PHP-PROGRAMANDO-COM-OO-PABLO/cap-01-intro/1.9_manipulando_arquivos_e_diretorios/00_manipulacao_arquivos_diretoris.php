<?php

$fd = fopen(__FILE__, "r");

$line = 1;

while (!feof($fd)) {
    $buffer = fgets($fd, 3);

    if ($line > 1) {
        echo $buffer;
    }

    $line ++;
}

fclose($fd);
