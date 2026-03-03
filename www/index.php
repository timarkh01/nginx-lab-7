<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная 7 — RabbitMQ</title>
</head>
<body>
    <h1>Отправка сообщений в RabbitMQ</h1>
    <form method="POST" action="send.php">
        <input type="text" name="name" placeholder="Введите имя" required>
        <button type="submit">Отправить</button>
    </form>

    <h2>Последние обработанные сообщения</h2>
    <pre>
<?php
if (file_exists('processed_rabbit.log')) {
    $lines = array_slice(file('processed_rabbit.log'), -5);
    foreach ($lines as $line) {
        echo htmlspecialchars($line);
    }
} else {
    echo "Файл лога пока пуст.";
}
?>
    </pre>
</body>
</html>