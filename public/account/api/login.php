<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "loginBtn":
                if ($userDetails = $auth->authUser($response->uuid, $response->password)) {
                    $userTaskDetails = $userTask->getData("readActiveTask", $userDetails->uuid, 0);
                    $dataWallet = $wallet->getData($userDetails->uuid);
                    $taskDetails = $task->getData($userTaskDetails->task_id);
                    echo json_encode(
                        array(
                            "status" => "Success",
                            "uuid" => $userDetails->uuid,
                            "username" => $userDetails->username,
                            "email" => $userDetails->email,
                            "taskID" => $taskDetails->id,
                            "taskName" => $taskDetails->task_name,
                            "taskDescription" => $taskDetails->task_description,
                            "distanceRequired" => $taskDetails->task_distance,
                            "difficulty" => $taskDetails->task_difficulty,
                            "reward" => $taskDetails->task_reward,
                            "challengeMode" => $stringUtils->translateContent($taskDetails->is_challenge),
                            "distanceProgress" => $userTaskDetails->distance,
                            "userTaskActive" => $stringUtils->translateContent($userTaskDetails->is_active),
                            "userTaskChallenge" => $stringUtils->translateContent($userTaskDetails->is_challenge),
                            "userTaskExpired" => $stringUtils->translateContent($userTaskDetails->is_expired),
                            "userTaskCompleted" => $stringUtils->translateContent($userTaskDetails->is_completed),
                            "userTaskRedeemed" => $stringUtils->translateContent($userTaskDetails->is_redeemed),
                            "userTaskArchive" => $stringUtils->translateContent($userTaskDetails->is_archive),
                            "uuid" => $dataWallet->user_uuid,
                            "userPoints" => $dataWallet->user_points
                        ),
                        JSON_PRETTY_PRINT
                    );
                } else {
                    echo json_encode(
                        array(
                            "status" => "Error",
                            "message" => "Invalid credentials"
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
