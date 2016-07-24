<?php

require_once("database.php");
require_once("timeslot.php");

class Exam {
    var $id;
    var $name;
    var $instructor_id;
    var $date_created;

    function Exam($name, $instructor_id) {
        $this->name = $name;
        $this->instructor_id = $instructor_id;
        $this->timeslots = array();
    }

    public function add_timeslot($starttime, $endtime, $max_seats) {
        $timeslot = new Timeslot($starttime, $endtime, $max_seats);
        $this->timeslots[] = $timeslot;
    }

    public function create() {
        $db = new Database();
        $mysqli = $db->get_connection();

        if (!($stmt = $mysqli->prepare("INSERT INTO exam (name, instructor_id) VALUES (?,?)"))) {
            echo("Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        $stmt->bind_param('si', $this->name, $this->instructor_id);
        $stmt->execute();
        
        // FIXME this isn't getting the inserted ID
        $this->id = $->insert_id;
        $stmt->close();

        // Loop over each timeslot and insert into DB
        foreach ($this->timeslots as $timeslot) {
            $stmt = $mysqli->prepare("INSERT INTO timeslot (id, start_datetime, end_datetime, max_seats) VALUES (?,?,?,?)");
            $stmt->bind_param('sssi',$this->id,$timeslot->starttime,$timeslot->endtime,$timeslot->max_seats);
            $stmt->execute();
            $stmt->close();
        }

        $mysqli->close();
    }

}

?>
