<?php
include 'config/db.php';
$row = array(
    'firstname' => '',
    'lastname' => '',
    'roll_num' => '',
    'gender' => '',
);
$firstname = "";
$lastname = "";
$rollnum = "";
$gender = "";
if (!empty($_GET['rollnum'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $rollnum = $_GET['rollnum'];
    $gender = $_GET['gender'];
}

$editid = "";
if (!empty($_GET['add']) && ($_GET['add'] == 1)) {
     $sql = "insert into student (firstname, lastname,roll_num,gender) values ('".$firstname."' , '".$lastname."' , '".$rollnum."'  , '".$gender."' )";
     
    $result = $conn->query($sql);
    if ($result) {
         echo "Added Succesfully";
     }
}else if(!empty($_GET['edit'])) {
    $sql = "update student SET firstname='" . $firstname . "', lastname='" . $lastname . "', roll_num='" . $rollnum . "', gender='" . $gender . "'  WHERE id=" . $_GET['id'] . ";";
    $result = $conn->query($sql);
    if ($result) {
        echo "Updated Succesfully";
    }
}
if (!empty($_GET['id'])) {
    $editid = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id=" . $editid;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    }
}




?>
<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit</title>
</head>

<body>
    <div class="menu">
        <div class="user">
            <?php
            ?>
        </div>
        <div class="logout">
            <a href="http://localhost/phpCRUD/">Log Out</a>
        </div>
    </div>
    <form action="">
        <div class="content">
            <div class="field_group">
                <label>First Name</label>
                <input type="text" value="<?php echo $row['firstname'] ?>" name="firstname" />
            </div>
            <div class="field_group">
                <label>last Name </label>
                <input type="text" value="<?php echo $row['lastname'] ?>" name="lastname" />
            </div>
            <div class="field_group">
                <label>Roll Num</label>
                <input type="text" value="<?php echo $row['roll_num'] ?>" name="rollnum" />
            </div>
            <div class="field_group">
                <label>Gender</label>
                <input type="text" value="<?php echo $row['gender'] ?>" name="gender" />
            </div>
            <?php
            if (!empty($_GET['id'])) {
            ?>
                <div class="field_group">
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id" />
                </div>
                <div class="field_group">
                    <input type="submit" name="" value="Update" />
                </div>
            <?php
            } else{
                ?>
                <div class="field_group">
                    <br/>
                <input type="hidden" name="add" value="1" />
                    <input type="submit" name="" value="ADD Student" />
                </div>
            <?php
            }?>
            <div class="goback">
                <a href="students.php">GO BACK TO Students</a>
            </div>
        </div>
    </form>

</body>

</html>