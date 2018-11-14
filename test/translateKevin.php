<html>
<head>
    <title>AL-Bhed translator</title>
    <meta charset="utf-8">
</head>
<body>
<h1>AL-Bhed translator</h1>
<form id="form" action="translateKevin.php" method="post">
    <label>
        word to translate :
        <input type="text" name="word"/>
    </label>
    <input type="submit" name="submit"/>
</form>
</body>
</html>

<?php
if(!isset($_POST['word']))
{
    die();
}

$word = $_POST['word'];
$associationTable = array
(
    'A' => 'Y',
    'B' => 'P',
    'C' => 'L',
    'D' => 'T',
    'E' => 'A',
    'F' => 'V',
    'G' => 'K',
    'H' => 'R',
    'I' => 'E',
    'J' => 'Z',
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
);

$translatedWord = translate($word, $associationTable);
if (!empty($translatedWord))
{
    echo 'The translated word for ' . $word . ' is ' . $translatedWord;
}

function translate($word, $associationTable)
{
    $translatedWord = "";
    foreach (str_split($word) as $letter)
    {
        $translatedWord .= $associationTable[$letter];
    }
    return $translatedWord;
}
?>