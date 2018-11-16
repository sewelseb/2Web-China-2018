<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Count</H1>
    <?php require('mesnu.php'); ?>
    <?php
        // echo __DIR__;
        $directory = opendir(__DIR__);
        $total = 0;
        while($file = readdir($directory)){
            if(is_file($file)){
                echo $file.": ".filesize($file)."charcaters<br />";
                $total += filesize($file);
            }
        }
        echo "total : ".$total."characters";
            
    ?>
</body>
</html>