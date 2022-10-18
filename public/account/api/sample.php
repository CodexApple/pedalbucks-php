<?php

header("Content-type: application/json");

echo json_encode(array(
    "address" => "bsit.pillarina.kristofer@gmail.com",
    "status" => "valid",
    "sub_status" => "",
    "free_email" => true,
    "did_you_mean" => null,
    "account" => "bsit.pillarina.kristofer",
    "domain" => "gmail.com",
    "domain_age_days" => "9912",
    "smtp_provider" => "google",
    "mx_found" => "true",
    "mx_record" => "gmail-smtp-in.l.google.com",
    "firstname" => null,
    "lastname" => null,
    "gender" => null,
    "country" => null,
    "region" => null,
    "city" => null,
    "zipcode" => null,
    "processed_at" => "2022-10-01 18:00:37.125"
), JSON_PRETTY_PRINT);
