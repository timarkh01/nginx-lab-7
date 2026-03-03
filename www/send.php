<?php
require 'vendor/autoload.php';
require 'QueueManager.php';

$data = [
    'name' => $_POST['name'] ?? $_GET['name'] ?? 'Тест',
    'timestamp' => date('Y-m-d H:i:s'),
    'rand' => rand(1, 100)
];

$q = new QueueManager();
$q->publish($data);

echo "✅ Сообщение отправлено в очередь!";