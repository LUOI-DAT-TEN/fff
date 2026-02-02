<?php
// Cho phép frontend gọi API (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Lấy dữ liệu JSON từ frontend
$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"] ?? "Bạn";

// Trả dữ liệu về frontend
$response = [
    "message" => "Xin chào $name, backend PHP đã nhận dữ liệu!"
];

echo json_encode($response);
