<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-03-17
 * Time: 09:59
 */
    $translate = array(
        'a' => 'y',
        'b' => 'p',
        'c' => 'l',
        'd' => 't'
    );

    $word = 'a.b.d.c';
    $resTab=array();
    foreach (explode('.', $word) as $letter)
    {
        $resTab[] = $translate[$letter];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Al-Bhed translator</title>
    <meta charset="utf-8" />
</head>
<body>
    <?php
        echo implode('', $resTab);
    ?>
</body>
</html>
