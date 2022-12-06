<?php

header("Content-Type: application/json");

$unix_time = mktime(11, 59, 59, 12, 24, 2022);
$current_time = time();

$diff = $unix_time - $current_time;

if (1 > $diff) {
    echo json_encode(
        array(
            "message" => "Event is already expired"
        ),
        JSON_PRETTY_PRINT
    );
} else {
    $w = $diff / 604800 % 4;
    $d = $diff / 86400 % 7;
    $h = $diff / 3600 % 24;
    $m = $diff / 60 % 60;
    $s = $diff % 60;

    echo json_encode(
        array(
            "formattedTime" => "{$w} weeks, {$d} days, {$h} hours, {$m} minutes and {$s} secs away!"
        ),
        JSON_PRETTY_PRINT
    );
}
