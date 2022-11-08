<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        if (!empty($response->submit)) {
            if ($response->id != null) {
                $taskDetails = $task->getData($response->id);
                if ($userTask->saveData($response->uuid, $response->id, $taskDetails->task_distance)) {
                    echo json_encode(
                        array(
                            "status" => "Success",
                            "message" => "Successfully accepted the Task!"
                        ),
                        JSON_PRETTY_PRINT
                    );
                }
            }
        }
        break;
    case "GET":
        if (isset($_GET['task_id']) && $taskDetails = $task->getData($_GET['task_id'])) {
            if ($taskDetails->is_expired == 1) {
                echo json_encode(
                    array(
                        "Task ID" => $taskDetails->id,
                        "Task Name" => $taskDetails->task_name,
                        "Task Description" => $taskDetails->task_description,
                        "Distance Required" => $taskDetails->task_distance,
                        "Reward" => $taskDetails->task_reward,
                        "Challenge Mode" => $stringUtils->translateContent($taskDetails->is_challenge)
                    ),
                    JSON_PRETTY_PRINT
                );
            }
        } else {
            $taskDetails = $task->getAllData();
            $array = array();
            foreach ($taskDetails as $key => $data) {
                if ($data->is_expired == 1) {
                    $array[] = array(
                        "Task Name" => $data->task_name,
                        "Task Description" => $data->task_description,
                        "Distance Required" => $data->task_distance,
                        "Reward" => $data->task_reward,
                        "Challenge Mode" => $stringUtils->translateContent($data->is_challenge)
                    );
                }
            }
            echo json_encode(
                $array,
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
