<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/core/Core.php';

$dataArray = array();
foreach ($user->getAllData() as $key => $data) {
    $dataArray[] = array(
        "db_id" => $data->id,
        "username" => $data->username,
        "email" => $data->email,
        "password" => $data->password
    );
}

header("Content-type: application/json");
echo json_encode(array("data" => $dataArray), JSON_PRETTY_PRINT);
