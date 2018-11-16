<?php
    require_once('./classes/Post.class.php');
    require_once('./classes/User.class.php');

    $myPost = new Post();
    $myUser = new User();

    var_dump($myPost);
    var_dump($myUser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>My super blog</H1>    
</body>
</html>