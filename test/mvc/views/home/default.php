<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default</title>
</head>
<body>
    <H1>Default page</H1>
    <p>
        <strong>firstname:</strong> <?php echo $var['user']->getFirstname(); ?>
        <br/>
        <strong>lastname:</strong> <?php echo $var['user']->getLastname(); ?>
    </p>
</body>
</html>