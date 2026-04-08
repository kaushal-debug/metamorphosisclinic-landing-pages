<?php
$webAppUrl = "https://script.google.com/macros/s/AKfycbxubXalu8vU0vuZ3gySvHSO9EueSul9IWfnkapp8NApWTbATYv4bSqhxxUfShqTEBkxRg/exec"; // keep /exec

$data = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "phone" => $_POST['phone'],
    "location" => $_POST['location'],
    "treatments" => $_POST['treatments'],
    // "message" => $_POST['message'],
    "utm_source" => $_COOKIE['utm_source'] ?? '',
    "utm_medium" => $_COOKIE['utm_medium'] ?? '',
    "utm_campaign" => $_COOKIE['utm_campaign'] ?? '',
    "utm_term" => $_COOKIE['utm_term'] ?? '',
    "utm_content" => $_COOKIE['utm_content'] ?? '',
    "page_url" => $_POST['page_url'],
];

$ch = curl_init($webAppUrl);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// ✅ VERY IMPORTANT FIX
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

if ($httpCode == 200) {
    echo json_encode([
        "status" => "success",
        "message" => "Form submitted successfully"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "http_code" => $httpCode,
        "response" => $response
    ]);
}