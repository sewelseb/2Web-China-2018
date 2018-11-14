<?php
    $text = 'seb est vieux';
    //var_dump($_GET);
    if (isset($_GET['ageDeSeb']) && $_GET['ageDeSeb']<30)
    {
        $text = 'seb est jeune';
    }
?>
{"age": "<?php echo $_GET['ageDeSeb']; ?>","text": "<?php echo $text; ?>"}