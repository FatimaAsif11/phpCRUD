<?php
include 'config/db.php';
$username = "";
if (!empty($_GET['username'])) {
    $uname = $_GET['username'];
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
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
                echo  $uname ?>
            </div>
            <div class="logout">
                <a href="http://localhost/phpCRUD/">Log Out</a>
            </div>
        </div>
        <div class="content">
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <table>
                        <tr>
                            <td class="row"><?php echo $row["roll_num"] ?></td>
                            <td class="row"><?php echo $row["firstname"] ?></td>
                            <td class="row"><?php echo $row["lastname"] ?></td>
                            <td class="row"><?php echo $row["gender"] ?></td>
                            <td class="row"><a href="http://localhost/phpCRUD/edit.php?id=<?php echo $row["id"] ?>">EDIT</a> </td>
                            <td class="row"><a href=""> Delete</a></td>

                        </tr>
                    </table>
            <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>