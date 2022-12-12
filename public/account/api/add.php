<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['id']) && $advertisement = $ads->getData($_GET['id'])) {
            echo json_encode(
                $advertisement,
                JSON_PRETTY_PRINT
            );
        }
        break;
    default:
        echo json_encode(
            array(
                "status" => "Error",
                "message" => "Invalid action"
            ),
            JSON_PRETTY_PRINT
        );
        break;
}
