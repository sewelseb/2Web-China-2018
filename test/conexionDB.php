<?php
try{
    $pdo = new PDO('mysql:','root','root');
}
catch (PDOException $e)
{
    die('Data base connexion error');
}
