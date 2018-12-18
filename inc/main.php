<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 'home' ;

switch ($page) {
    case 'download':
        require '../inc/key.php';
        if (isset($_POST['key'], $_POST['email']) && check_key($_POST['key'], $_POST['email'])) {
            require '../inc/download.php';
        } else {
            echo '<span class="invalidKeyError">invalid key pair, try again?</span><br>';
            require '../inc/home.php';
        }
        break;

    case 'letThereBeKeys':
        require '../inc/keyGen.php';
        break;

    default:
        require '../inc/home.php';
        break;
}
