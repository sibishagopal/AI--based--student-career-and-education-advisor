<?php
include("db.php");
$name = $_POST['name'];
$department = $_POST['department'];
$interest = $_POST['interest'];
$subject = $_POST['subject'];

if($interest=="Coding"){
    $career="Software Engineer";
}
elseif($interest=="AI"){
    $career="AI Engineer";
}
elseif($interest=="Cyber Security"){
    $career="Cyber Security Analyst";
}
else{
    $career="Web Developer";
}

$sql = "INSERT INTO students(name, department, interest, subject, career)
VALUES('$name','$department','$interest','$subject','$career')";

mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Career Suggestion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Career Suggestion</h2>

    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Department:</b> <?php echo $department; ?></p>
    <p><b>Interest:</b> <?php echo $interest; ?></p>
    <p><b>Favourite Subject:</b> <?php echo $subject; ?></p>

    <h3>Recommended Career:</h3>
    <h2><?php echo $career; ?></h2>

</div>

</body>
</html>