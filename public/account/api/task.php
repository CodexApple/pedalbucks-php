<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['task_id']) && $taskDetails = $task->getData($_GET['task_id'])) {
            echo json_encode(
                array(
                    "Task Name" => $taskDetails->task_name,
                    "Task Description" => $taskDetails->task_description,
                    "Distance Required" => $taskDetails->task_distance,
                    "Reward" => $taskDetails->task_reward,
                    "Challenge Mode" => $stringUtils->translateContent($taskDetails->is_challenge)
                ),
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
