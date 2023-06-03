<?php
include 'config/db.php';
$row = array(
    'firstname' => '',
    'lastname' => '',
    'roll_num' => '',
    'gender' => '',
);
if(!empty($_GET['rollnum']))
{
   
    $sql = "insert into student SET firstname='".$_GET['firstname']. "', lastname='". $_GET['lastname']. "', roll_num='".$_GET['rollnum']. "', gender='".$_GET['gender']."';" ;
    $result = $conn->query($sql);
    if($result)
    {
        echo "Added Succesfully";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <div class="goback">
                <a href="students.php">GO BACK TO Students</a>
            </div>
        </div>
    </form>
</body>
</html>