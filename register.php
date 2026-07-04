<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Details</h2>

    <form action="result.php" method="POST">

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Department:</label><br>
        <input type="text" name="department" required><br><br>

        <label>Interest:</label><br>
        <select name="interest">
            <option>Coding</option>
            <option>AI</option>
            <option>Cyber Security</option>
            <option>Web Development</option>
        </select><br><br>

        <label>Favourite Subject:</label><br>
        <input type="text" name="subject" required><br><br>

        <input type="submit" value="Get Career Suggestion">

    </form>

</div>

</body>
</html>