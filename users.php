<?php
$username = "";
if (!empty($_GET['username'])) {
    $username = $_GET['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Users</title>
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="user">
                <?php
                echo  $username ?>
            </div>
            <div class="logout">
                <a href="http://localhost/php_crud/">Log Out</a>
            </div>
        </div>
    </div>
</body>

</html>