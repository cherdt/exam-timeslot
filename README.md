# exam-timeslot
A demo web app for creating &amp; signing up for exam timeslots

[http://osric.org/exam-timeslot/]

## Comments
I did not make it very far in this project. I decided to use PHP because it is already used and was already available in my home development environment. Although most of my practical web dev experience is in ColdFusion, I did not want to use work-related resources for this project. I definitely see the need to develop greater web development expertise in other languages, as a less-familiar language slowed me down considerably. 

## Database
Rename database.php.SAMPLE to database.php and update the values as needed.

I created 3 MySQL tables. The SQL to re-create the tables is below:

###exam
```
CREATE TABLE `exam` (
 `id` int(11) NOT NULL auto_increment,
 `name` varchar(100) NOT NULL,
 `instructor_id` int(11) NOT NULL,
 `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
```

###timeslot
```
CREATE TABLE `timeslot` (
 `id` int(11) NOT NULL auto_increment,
 `exam_id` int(11) NOT NULL,
 `max_seats` int(11) NOT NULL,
 `start_datetime` datetime NOT NULL,
 `end_datetime` datetime NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
```

###seat
```
CREATE TABLE `seat` (
 `id` int(11) NOT NULL auto_increment,
 `timeslot_id` int(11) NOT NULL,
 `student_id` int(11) NOT NULL,
 `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
```

