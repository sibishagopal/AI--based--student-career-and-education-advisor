</body>
</html><?php
include("db.php");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Records</h2>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
       <th>Career</th>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Interest</th>
            <th>Subject</th>
            <th>Career</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['interest']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['career']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo
             $row['id']; ?>">Edit</a> |
               <a href="delete.php?id=<?php echo 
             $row['id']; ?>">Delete</a>
           </td>
        </tr>
        <?php
        }
        ?>

    </table>
<br><br>

<a href="index.php">
    <button>Back to Home</button>
</a>
</div>
</body>
</html>

