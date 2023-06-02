<?php

if (isset($_GET['username'])) {

    $username = $_GET['username'];
    $password = $_GET['password'];

    if ($username == 'admin' && $password == 'abcd') {
        echo "Values Matched";
        header('Location: http://localhost/php_crud/users.php?username='.$username);
        exit;
    } else {
        echo "Values Mismatched: USER name or Password is wrong";
    }
}
?>
<html>
<title>Login</title>
<head>

</head>

<body>
    <div class="container">
        <form action="">
            <div class="field_group">
                <label>User Name</label>
                <input type="text" name="username" />
            </div>
            <div class="field_group">
                <label>Password </label>
                <input type="password" name="password" />
            </div>
            <div class="field_group">
                <input type="submit" name="" value="Submit" />
            </div>
        </form>
    </div>
</body>

</html>