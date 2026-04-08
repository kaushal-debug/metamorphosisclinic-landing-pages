<?php

function getPageData($conn, $slug) {
    $stmt = $conn->prepare("SELECT * FROM pages WHERE slug = ?");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function jsonDecode($data) {
    return json_decode($data, true);
}

function home_url() {
    return 'https://appointment.metamorphosis-clinic.com';
}
