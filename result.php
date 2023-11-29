<?php
$result = require __DIR__ . '/calc.php';
?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    Результат вычислений:
    <br><br>
    <?= $result ?>
</body>
</html>