<?php
include 'config/db.php';
$row = array(
    'firstname' => '',
    'lastname' => '',
    'roll_num' => '',
    'gender' => '',
);
$editid = "";
if(!empty($_GET['rollnum']))
{
   
    $sql = "update student SET firstname='".$_GET['firstname']. "', lastname='". $_GET['lastname']. "', roll_num='".$_GET['rollnum']. "', gender='".$_GET['gender']."'  WHERE id=" . $_GET['id'].";" ;
    $result = $conn->query($sql);
    if($result)
    {
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
            <div class="field_group">
                <input type="hidden" value="<?php echo $row['id'] ?>" name="id" />
            </div>
            <div class="field_group">
                <input type="submit" name="" value="Update" />
            </div>
        </div>
    </form>

</body>

</html>