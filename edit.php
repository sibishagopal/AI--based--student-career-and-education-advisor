<?php
include("db.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $interest = $_POST['interest'];
    $subject = $_POST['subject'];

    mysqli_query($conn, "UPDATE students SET
    name='$name',
    department='$department',
    interest='$interest',
    subject='$subject'
    WHERE id=$id");

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Edit Student</h2>

<form method="POST">
    Name:<br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

    Department:<br>
    <input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>

    Interest:<br>
    <input type="text" name="interest" value="<?php echo $row['interest']; ?>"><br><br>

    Favourite Subject:<br>
    <input type="text" name="subject" value="<?php echo $row['subject']; ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>

</div>

</body>
</html>