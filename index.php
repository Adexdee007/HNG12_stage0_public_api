<?php

// public_api.php

// headers that allows CORS and return JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Function to get the current datetime in ISO 8601 format
function getCurrentDateTime() {
    return gmdate("Y-m-d\\TH:i:s\\Z");
}

// Defining the response
$response = [
    "email" => "dammyfor2020@gmail.com",  // Replace with your actual email
    "current_datetime" => getCurrentDateTime(),   // Generates ISO 8601 format in UTC
    "github_url" => "https://github.com/Adexdee007/HNG12_stage0_public_api"
    
];

// Return the response as JSON
http_response_code(200); // HTTP 200 OK
echo json_encode($response);


?>
