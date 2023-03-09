<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav></nav>
    </header>
    <div class="container">
        <main>
            <section>
                <form class="form_register" action="reg.php" method="post">
                    <legend>
                        <h3> Register</h3>
                    </legend>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                    <label for="password2">Password2</label>
                    <input type="text" name="password2" id="password2">
                <button type="submit">Send</button> 
                </form>
            </section>
            <section>
                <form class="form_register" action="auth.php" method="post">
                    <legend>
                        <h3>Login</h3>
                    </legend>
                    
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                    
                <button type="submit">Send</button> 
                </form>
            </section>
        </main>
    </div>
</body>
</html>