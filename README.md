# exam-timeslot
A demo web app for creating &amp; signing up for exam timeslots

## Comments
I did not make it very far in this project. I decided to use PHP because
it was already available in my home development environment.

## Database
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


## Classes

 
