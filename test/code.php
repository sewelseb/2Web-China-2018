<?php
    $translateArray = [
        'A' => 'Y',
        'B' => 'P',
        'C' => 'L',
        'D' => 'T',
        'E' => 'A',
        'F' => 'V',
        'G' => 'K',
        'H' => 'R',
        'I' => 'E',
        'J' => 'z',
        'K' => 'G',
        'L' => 'M',
        'M' => 'S',
        'N' => 'H',
        'O' => 'U',
        'P' => 'B',
        'Q' => 'X',
        'R' => 'N',
        'S' => 'C',
        'T' => 'D',
        'U' => 'I',
        'V' => 'J',
        'W' => 'F',
        'X' => 'Q',
        'Y' => 'O',
        'Z' => 'W'
    ];
    // var_dump($translateArray);
    $textToTranslate = "APRICOT";
    $textToTranslateAsArray = explode('.', $textToTranslate);
    // var_dump($textToTranslateAsArray);
    $newArray = [];
    foreach ($textToTranslateAsArray as $letter){
        $newArray[] = $translateArray[$letter];
    }
    $results = implode("", $newArray);
    echo ($results);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Al-Bhed translator</title>
    <meta charset="utf-8" />
</head>
<body>

</body>
</html>
