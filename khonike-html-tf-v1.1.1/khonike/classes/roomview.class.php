<?php

class RoomView extends Room {

    // ROOM VIEW

    // Show All Rooms
    public function showAllRooms() {
        $results = $this->getAllRooms();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


     // Show Room by ID
     public function showRoomById($id) {
        $results = $this->getRoomById($id);

        return $results;
    }

    // Show All Rooms by Property ID
    public function showRoomsByPropertyId($username) {
        $results = $this->getRoomsByPropertyId($username);

        return $results;
    }



}