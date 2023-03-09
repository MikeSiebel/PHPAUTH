<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav></nav>
    </header>
    <div class="container">
        <div class="main">
            <div class="section">
                <h2>Hello, <?php echo $_SESSION['username']; ?></h2>
            </div>
        </div>
    </div>
    
</body>
</html>