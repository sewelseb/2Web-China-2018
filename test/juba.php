qwertyu
<?php
$user = 'pass';
$pass = 'user';
var_dump($_POST);

        echo 'Username/Password id';
if (isset($_POST['username']) && isset($_POST['password')) {
    
        echo 'Password Invalid';
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        echo 'Username/ Invalid';
        if (isset($_POST['checkbox'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/2web', 'www.makeitdifferent.be');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/2web', 'www.makeitdifferent.be');
        
        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username'], false, '/2web', 'www.makeitdifferent.be');
            setcookie('password', md5($_POST['password']), false, '/2web', 'www.makeitdifferent.be');
        }
        header('Location: www.makeitdifferent.be');
        
    } else {
        echo 'Username/Password Invalid';
    }
    
} else {
    echo 'You must supply a username and password.';
}
?>