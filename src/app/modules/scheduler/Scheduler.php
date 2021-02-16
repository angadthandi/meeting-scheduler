<?php

require_once __DIR__ . "/../room/Room.php";

class Scheduler {

    private array $rooms; // Room[]

    public function __construct(array $rooms) {
        $this->rooms = $rooms;
    }

    public function book(int $start, int $end): bool {
        foreach ($this->rooms as $room) {
            $booked = $room->book($start, $end);
            if ($booked) {
                return true;
            }
        }

        return false;
    }

}