<?php

require_once __DIR__ . "/../app/modules/room/Room.php";
require_once __DIR__ . "/../app/modules/scheduler/Scheduler.php";

$room_1 = new Room("Room 1");
$room_2 = new Room("Room 2");
$room_3 = new Room("Room 3");

$roomsArr = [];
$roomsArr[] = $room_1;
$roomsArr[] = $room_2;
$roomsArr[] = $room_3;

$scheduler = new Scheduler($roomsArr);

$room_booked = $scheduler->book(10, 40);
error_log($room_booked); // Room 1

$room_booked = $scheduler->book(30, 50);
error_log($room_booked); // Room 2

$room_booked = $scheduler->book(40, 80);
error_log($room_booked); // Room 1

$room_booked = $scheduler->book(60, 80);
error_log($room_booked); // Room 2

$room_booked = $scheduler->book(70, 90);
error_log($room_booked); // Room 3

$room_booked = $scheduler->book(50, 70);
error_log($room_booked); // Room 3

$room_booked = $scheduler->book(60, 100);
error_log($room_booked); // no rooms available