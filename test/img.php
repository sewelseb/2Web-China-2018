<?php
    if(isset($_FILES['sendedPic']))
    {
        var_dump($_FILES);
        $path = 'img/';
        $path .= $_FILES['sendedPic']['name'];
        move_uploaded_file($_FILES['sendedPic']['tmp_name'], $path);
    }

if(isset($_FILES['sendedPic']))
{
    ?>
        <img src="<?php echo $path; ?>">
    <?php
}

?>

<form method="POST" action="img.php" enctype="multipart/form-data">
    <input name="sendedPic" type="file">
    <input type="submit">
</form>


