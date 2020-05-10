<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <?php
    include 'tools.php';
    ?>
    <title>Document</title>
</head>
<body>
    <?php
    preShow($GET);
    preShow($_POST);     // ie echo a string
    preShow($_SESSION);


    php2js($priceOject, 'pricesArrayJS');
    ?>
</body>
</html>