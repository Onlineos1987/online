
<?php
header('Content-Type: application/json');

// Update this to whatever you want at any time
$real_json_url = "https://raw.githubusercontent.com/Onlineos1987/online/main/uploads/Songs.json";

// Returning a small json with the "real_url"
echo json_encode(['real_url' => $real_json_url]);


