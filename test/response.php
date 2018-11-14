<?php
    //echo ($_GET['language']);
    switch ($_GET['language']){
        case "html":
            echo "you chose HTML";
            break;
        case "css":
            echo "you chose CSS";
            break;
        case "js":
            echo "you chose JavaScript";
            break;
        case "php":
            echo "you chose PHP";
            break;
        default:
            echo "sorry, I did not understand";
            break;
    }
        
?>