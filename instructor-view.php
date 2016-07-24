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

<style>
    label {
        display:block;
    }
</style>
</head>

<body>

<h1>Instructor View</h1>

<h2>Create a new exam</h2>
<form action="instructor-view.php" method="POST">
    <label>Exam name: <input type="text" name="name"></label>
    <fieldset>
        <legend>Timeslot</legend>
        <label>Start Time: <input type="text" name="start_time_1"></label>
        <label>End Time: <input type="text" name="end_time_1"></label>
        <label>Max Seats: <input type="text" name="max_seats_1"></label>
    </fieldset>
    <input type="submit" name="submit" value="create exam">
</form>

<?php

    if (isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="create exam") {

        require_once("exam.php");
    
        $exam = new Exam($_REQUEST["name"],1);
        $exam->add_timeslot($_REQUEST["start_time_1"],$_REQUEST["end_time_1"],$_REQUEST["max_seats_1"]);
        $exam->create();
        echo "<p>Exam created!</p>";
    }
?>


</body>
</html>
