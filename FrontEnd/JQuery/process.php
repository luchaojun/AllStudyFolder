<?php
// 获取 POST 数据
$name = $_POST['name'];
$age = $_POST['age'];

// 处理数据
$response = [
    'status' => 'success',
    'message' => "你好, $name! 你的年龄是 $age 岁."
];

// 返回 JSON 响应
header('Content-Type: application/json');
echo json_encode($response);
?>