<?php

require_once("database.php");

class Exam {
    var $id;
    var $name;
    var $instructor_id;
    var $max_seats;
    var $date_created;

    function Exam($name, $instructor_id, $max_seats) {
        $this->name = $name;
        $this->instructor_id = $instructor_id;
        $this->max_seats = $max_seats;
    }

    public function create() {
        $db = new Database();
        $mysqli = $db->get_connection();

if (!($stmt = $mysqli->prepare("SELECT COUNT(*) FROM exam"))) {
             echo("Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error);
         }


        if (!($stmt = $mysqli->prepare("INSERT INTO exam (name, instructor_id, max_seats) VALUES (?,?,?)"))) {
            echo("Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        $stmt->bind_param('sii', $this->name, $this->instructor_id, $this->max_seats);
        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

}

?>
