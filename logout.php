<?php
    require_once('app/init.php');
    require_once('app/class/google_auth.php');

    $aut = new GoogleAuth();
    $aut->logout();
    header('Location: index.php');

?>