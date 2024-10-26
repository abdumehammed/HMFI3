<?php

function sendMessage($apiKey, $to, $message) {
    // AfroMessage API URL
    $url = "https://afromessage.com/api/send";
    
    // Construct the query parameters
    $params = [
        'apiKey' => $apiKey,
        'to' => $to,
        'message' => $message
    ];

    // Build the full URL with the query string
    $fullUrl = $url . '?' . http_build_query($params);
    
    // Initialize a cURL session
    $ch = curl_init();
    
    // Set the cURL options
    curl_setopt($ch, CURLOPT_URL, $fullUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // To get the response as a string
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);           // Optional: Set a timeout

    // Execute the GET request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo "cURL error: " . curl_error($ch);
    } else {
        // Parse and display the response
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpCode == 200) {
            echo "Message sent successfully!\n";
            echo "Response: " . $response;
        } else {
            echo "Failed to send message. HTTP Status Code: " . $httpCode . "\n";
            echo "Error Response: " . $response;
        }
    }

    // Close the cURL session
    curl_close($ch);
}

// Example usage of the sendMessage function

$apiKey = "eyJhbGciOiJIUzI1NiJ9.eyJpZGVudGlmaWVyIjoiY2Q3ejNSc3BMaXkzZWlFNUh0NTFyWVQwMUsxUUg3aHYiLCJleHAiOjE4ODQwNzIxMTUsImlhdCI6MTcyNjMwNTcxNSwianRpIjoiMzA5YmQyMjgtM2M2ZS00MzczLTlkMzAtNzUxMjc5OTU3M2JiIn0.ZHGi8o37pRW_Jfrx7IAzM2IDhvK82km9thgAFhi8r6E	";  // Replace with your actual API key
$to = "+251913692903";  // Replace with the recipient's phone number
$message = "Hello, this is a test message from Hararmfi API!";  // Replace with your message

sendMessage($apiKey, $to, $message);

?>
