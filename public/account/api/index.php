<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

if (empty($_SESSION['user'])) {
    echo json_encode(
        array(
            "status" => "Error",
            "message" => "Invalid session data"
        ),
        JSON_PRETTY_PRINT
    );
}
