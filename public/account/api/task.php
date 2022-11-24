<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';
header("Content-Type: application/json");

$rawData = file_get_contents("php://input");
$response = json_decode($rawData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        switch ($response->submit) {
            case "acceptBtn":
                if (empty($userTask->getData("readActiveTask", $response->uuid, 0))) {
                    if (!empty($response->id)) {
                        if ($userTask->saveData($response->uuid, $response->id)) {
                            $userTaskDetails = $userTask->getData("readActiveTask", $response->uuid, 0);
                            $taskDetails = $task->getData($userTaskDetails->task_id);
                            echo json_encode(
                                array(
                                    "status" => "Success",
                                    "message" => "Successfully accepted the Task!",
                                    "activeTask" => array(
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
                                    )
                                ),
                                JSON_PRETTY_PRINT
                            );
                        }
                    }
                } else {
                    if ($userTask->getData("readInactiveTask", $response->uuid, $response->id)) {
                        if ($userTask->updateData("updateOldTask", $response->uuid, $response->id, 0)) {
                            if ($userTask->updateData("updateNewTask", $response->uuid, $response->id, 0)) {
                                $userTaskDetails = $userTask->getData("readActiveTask", $response->uuid, 0);
                                $taskDetails = $task->getData($userTaskDetails->task_id);
                                echo json_encode(
                                    array(
                                        "status" => "Success",
                                        "message" => "Successfully switched to old task!",
                                        "activeTask" => array(
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
                                        )
                                    ),
                                    JSON_PRETTY_PRINT
                                );
                            }
                        }
                    } else {
                        if ($userTask->updateData("updateOldTask", $response->uuid, $response->id, 0)) {
                            if ($userTask->saveData($response->uuid, $response->id)) {
                                $userTaskDetails = $userTask->getData("readActiveTask", $response->uuid, 0);
                                $taskDetails = $task->getData($userTaskDetails->task_id);
                                echo json_encode(
                                    array(
                                        "status" => "Success",
                                        "message" => "Successfully accepted the Task!",
                                        "activeTask" => array(
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
                                        )
                                    ),
                                    JSON_PRETTY_PRINT
                                );
                            }
                        }
                    }
                }
                break;
            case "updateBtn":
                if ($userTaskDetails = $userTask->getData("readActiveTask", $response->uuid, 0)) {
                    $taskDetails = $task->getData($userTaskDetails->task_id);
                    $distanceAccumulated = ($userTaskDetails->distance + $response->distance);

                    if ($userTask->updateData("updateTask", $response->uuid, 0, $distanceAccumulated)) {
                        if ($distanceAccumulated >= $taskDetails->task_distance) {
                            $userTask->updateData("completeTask", $response->uuid, 0, 0);

                            echo json_encode(array(
                                "status" => "success",
                                "message" => "Task successfully completed!"
                            ), JSON_PRETTY_PRINT);

                            return;
                        }

                        echo json_encode(array(
                            "status" => "success",
                            "message" => "Task distance updated successfully"
                        ), JSON_PRETTY_PRINT);
                    }
                } else {
                    echo json_encode(array(
                        "status" => "failed",
                        "message" => "Please accept a task from the task list."
                    ), JSON_PRETTY_PRINT);
                }
                break;
            case "claimBtn":
                if ($userTaskDetails = $userTask->getData("readActiveTask", $response->uuid, 0)) {
                    $taskDetails = $task->getData($userTaskDetails->task_id);
                    if ($userTaskDetails->is_completed = 1) {
                        if ($dataWallet = $wallet->getData($response->uuid)) {
                            $currentWallet = $dataWallet->user_points;
                            $newWallet = $currentWallet + $taskDetails->task_reward;
                            $wallet->updateData($response->uuid, $newWallet);
                            $userTask->updateData("updateOldTask", $response->uuid, 0, 0);

                            echo json_encode(array(
                                "status" => "success",
                                "message" => "Coins have been added successfully to your wallet."
                            ), JSON_PRETTY_PRINT);
                            return;
                        }
                    }
                }
                break;
        }
        break;
    case "GET":
        if (isset($_GET['task_id']) && $taskDetails = $task->getData($_GET['task_id'])) {
            if ($taskDetails->is_expired == 0) {
                echo json_encode(
                    array(
                        "taskID" => $taskDetails->id,
                        "taskName" => $taskDetails->task_name,
                        "taskDescription" => $taskDetails->task_description,
                        "distanceRequired" => $taskDetails->task_distance,
                        "taskDifficulty" => $data->task_difficulty,
                        "reward" => $taskDetails->task_reward,
                        "challengeMode" => $stringUtils->translateContent($taskDetails->is_challenge)
                    ),
                    JSON_PRETTY_PRINT
                );
            }
        } else if (isset($_GET['task_id']) && $_GET['task_id'] == "all") {
            $taskDetails = $task->getAllData();
            $array = array();
            foreach ($taskDetails as $key => $data) {
                if ($data->is_expired == 0) {
                    $array[] = array(
                        "taskID" => $data->id,
                        "taskName" => $data->task_name,
                        "taskDescription" => $data->task_description,
                        "distanceRequired" => $data->task_distance,
                        "difficulty" => $data->task_difficulty,
                        "reward" => $data->task_reward,
                        "challengeMode" => $stringUtils->translateContent($data->is_challenge)
                    );
                }
            }
            echo json_encode(
                $array,
                JSON_PRETTY_PRINT
            );
        } else if ($_GET['task_id'] == "active" && $userTaskDetails = $userTask->getData("readActiveTask", $_GET['uuid'], 0)) {
            $taskDetails = $task->getData($userTaskDetails->task_id);
            echo json_encode(
                array(
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
                ),
                JSON_PRETTY_PRINT
            );
        } else if ($_GET['task_id'] == "inprogress" && $userTasks = $userTask->getData("readInProgressTask", $_GET['uuid'], 0)) {
            $userTasksDetailed = array();
            foreach ($userTasks as $userTaskDetails) {
                $taskDetails = $task->getData($userTaskDetails->task_id);
                array_push($userTasksDetailed, array(
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
                ));
            }
            echo json_encode($userTasksDetailed, JSON_PRETTY_PRINT);
        } else if ($_GET['task_id'] == "completed" && $userTasks = $userTask->getData("readCompletedTask", $_GET['uuid'], 0)) {
            $userTasksDetailed = array();
            foreach ($userTasks as $userTaskDetails) {
                $taskDetails = $task->getData($userTaskDetails->task_id);
                array_push($userTasksDetailed, array(
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
                ));
            }
            echo json_encode($userTasksDetailed, JSON_PRETTY_PRINT);
        } else {
            echo json_encode(
                array(
                    "status" => "Error",
                    "message" => "Invalid action"
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
