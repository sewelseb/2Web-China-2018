<?php
    require ('conexion.php');

    $monManger = new Manager($pdo);





    /////////////////////////////////
    $_POST['username'] = 'seb OR 1=1';
    $resp = $pdo->query('SELECT username, password FROM users WHERE username='.$_POST['username']);
    if (isset($resp) || is_object($resp))
    {
        $i=0;
        foreach ($resp->fetchAll() as $row)
        {
            if($row['password'] === $_POST['password'])
            {
                $userManager->setUserAsConnected();
            }
            $i++;
            if($i>1)
            {
                throw new Exception('intergrity exception');
            }
        }
    }
    else
    {

    }