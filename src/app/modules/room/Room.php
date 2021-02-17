<?php

require_once __DIR__ . "/../meeting/Meeting.php";

class Room {

    private string $roomName;
    private array $meetings; // Meeting[]

    public function __construct(string $roomName) {
        $this->roomName = $roomName;
        $this->meetings = [];
    }

    public function getRoomName() {
        return $this->roomName;
    }

    public function book(int $start, int $end): bool {
        foreach ($this->meetings as $meeting) {
            if (
                $meeting->getStart() < $end &&
                $meeting->getEnd() > $start
            ) {
                return false;
            }
        }

        $meeting = new Meeting($start, $end, $this);
        $this->meetings[] = $meeting;

        return true;
    }

}