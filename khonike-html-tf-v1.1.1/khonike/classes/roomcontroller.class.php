<?php

class RoomController extends Room {
    
    // ROOM CONTROLLER

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