<?php

class RoomController extends Room {
    
    // ROOM CONTROLLER
    //reads
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
    // Create Room
    public function createRoom($listing_id, $type, $width, $length, $level, $dimension, $custom_room) {
        $this->setRoom($listing_id, $type, $width, $length, $level, $dimension, $custom_room);
    }

    // Delete Room
    public function deleteRoom($id) {
        $this->deleteRoomById($id);
    }

    // Update Room
    public function updateRoomById($listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id) {
        $this->editRoomById($listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id);
    }
    


}