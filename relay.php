<?php
// Third website URL
$third_website_url = "fbi-i.com";

// Get the JSON data sent to this script
$data = file_get_contents("php://input");

// Forward the data to the third website
$options = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => $data,
    ],
];
$context  = stream_context_create($options);
$response = file_get_contents($third_website_url, false, $context);

// Respond to the client
if ($response === FALSE) {
    http_response_code(500);
    echo "Error forwarding to the third website.";
} else {
    http_response_code(200);
    echo "Data relayed to the third website successfully!";
}
?>
