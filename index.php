<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// Define the response array
$response = [
    "email" => "dammyfor2020@gmail.com",  // Replace with your actual email
    "current_datetime" => gmdate("c"),   // Generates ISO 8601 format in UTC
    "github_url" => "https://github.com/Adexdee007/HNG12_stage0_public_api"
];

// Return the response as JSON
echo json_encode($response, JSON_PRETTY_PRINT);
?>
