<?php
session_start();

echo  '<br>';

function register(array $data)
{
    $values = [
        'id' => uniqid(),
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        'date' => (new DateTime()) -> format('Y-m-d H:i:s')
    ];
    return $values;
}
$user = register($_POST);

setLoginStatus($user);


function setLoginStatus(array $data){
    $token = password_hash($data['email'], PASSWORD_DEFAULT);
    $_SESSION['username'] = $data['username'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['date'] = $data['date'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['token'] = $token;
    $_SESSION['loggedin'] = true;
    storeUserToCookies();
}

function storeUserToCookies(){

    var_dump($_SESSION);
    setcookie('login', 
    $_SESSION['token'], 
    [
        'expires' => time() + 3600,
        'samesite' => 'Lax'
    ]);
    // setcookie(
    //     'login', 
    //     $_SESSION['token'],
        //  [
        //      'expires' => time() + 3600,
        //      'samesite' => 'Lax'
        //  ]);
}


