<?php
    include('./utils/GetParametersManager.php');
    include('./utils/DataBaseConection.php');

    $getParamManager = new GetParametersManager();

    $var = $getParamManager->loadController();
    $getParamManager->loadView($var);

    