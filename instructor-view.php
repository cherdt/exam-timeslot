<!DOCTYPE html>
<html>
<head>
<title>Instructor View</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>

<h1>Instructor View</h1>

<form action="instructor-view.php" method="POST">
    <label>Exam name: <input type="text" name="name"></label>
    <input type="submit" name="submit" value="create exam">
</form>

<?php

    if (isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="create exam") {

        require_once("exam.php");
    
        $exam = new Exam($_REQUEST["name"],1,35);
        $exam->create();
        echo "<p>Exam created!</p>";
    }
?>


</body>
</html>
