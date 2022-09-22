<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';

header("Content-type: application/json");

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['user']) && $userDetails = $user->getData($_GET['user'])) {
            echo json_encode(
                array(
                    'API_ACCESS_LOG' => 'Success',
                    'Status' => '200',
                    'Method' => 'Get User by ID',
                    'Username' => $userDetails->username,
                    'Email' => $userDetails->email
                ),
                JSON_PRETTY_PRINT
            );
        }
        break;

    case "POST":
        switch ($_POST['submit']) {
            case "LoginBtn":
                if ($userDetails = $auth->authUser($_POST['uuid'], $_POST['password'])) {
                    echo json_encode(
                        array(
                            'API_ACCESS_LOG' => 'Success',
                            'Status' => '200',
                            'Method' => 'User Login',
                            'Login' => 'True',
                            'Username' => $userDetails->username,
                            'Password' => $userDetails->password
                        ),
                        JSON_PRETTY_PRINT
                    );
                } else {
                    echo json_encode(
                        array(
                            'API_ACCESS_LOG' => 'Success',
                            'Status' => '200',
                            'Login' => 'False',
                            'Error' => 'Login Failed',
                            'Description' => 'Wrong Username or Password, Invalid Credentials',
                        ),
                        JSON_PRETTY_PRINT
                    );
                }
                break;
            case "UploadBtn":
                break;
            default:
                echo json_encode(
                    array(
                        'API_ACCESS_LOG' => 'Success',
                        'Status' => '200',
                        'Action' => 'Undefined',
                        'Error' => 'Undefined Action',
                        'Description' => 'An error occured with the POST validation, Please contact the Developer',
                    ),
                    JSON_PRETTY_PRINT
                );
                break;
        }
        break;

    default:
        echo json_encode(
            array(
                'Request Method' => 'Error Request Method'
            ),
            JSON_PRETTY_PRINT
        );
        break;
}
