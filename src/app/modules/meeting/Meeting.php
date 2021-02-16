<?php

require_once __DIR__ . "/../room/Room.php";

class Meeting {

    private int $start;
    private int $end;
    private Room $room;

    public function __construct(
        int $start,
        int $end,
        Room $room
    ) {
        $this->start = $start;
        $this->end = $end;
        $this->room = $room;
    }

    public function getStart() {
        return $this->start;
    }

    public function getEnd() {
        return $this->end;
    }

}