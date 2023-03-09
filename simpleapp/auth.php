<?php
session_start();

var_dump($_POST);

if(getLoginStatus()){
    header('Location: dashboard.php');
    exit;
}else{
    header('Location: index.php');
    exit;
}

function getLoginStatus()
{
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        return true;
    }
    return false;
}
