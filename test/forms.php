<?php
    session_start();

    if(!isset($_SESSION['username']) || !isset($_SESSION['password'])
        || $_SESSION['username'] != "plop" || $_SESSION['password'] != "123") {
            header('location:login.php');
    }

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
    if (isset($_POST['word']))
    {
        $textToTranslate = $_POST['word'];
        $textToTranslateAsArray = str_split($textToTranslate);
        $newArray = [];
        foreach ($textToTranslateAsArray as $letter){
            $newArray[] = $translateArray[$letter];
        }
        $results = implode("", $newArray);
        
    } 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <H1>Translator:</H1>
    <div>
        Hello <?php echo $_SESSION["username"]; ?>
    </div>
    <div>
        <a href="logout.php">
            logout
        </a>
    </div>
    <form action="forms.php" method="POST">
        <input type="text" name="word" placeholder="word">
        <input type="submit" value="Translate">
    </form>
    <div>
        <?php
            if(isset($results))
            {
                ?>
                    <h3>The translation is <?php echo($results); ?></h3>
                <?php
            }
        ?>

        <?php
            if(isset($results))
            {
                    echo '<h3>The translation is '.$results.' </h3>';
            }
        ?>
    </div>
</body>
</html>