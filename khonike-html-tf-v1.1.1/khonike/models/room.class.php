<?php 

class Room extends Dbh {

    // ROOM MODEL

    // GETTERS

    // Get all Rooms
    protected function getAllRooms() {
        $sql = "SELECT * FROM property_rooms";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get Room by ID
    protected function getRoomById($id) {
        $sql = "SELECT * FROM property_rooms WHERE room_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get All Rooms by Property ID
    protected function getRoomsByPropertyId($id) {
        $sql = "SELECT * FROM property_rooms WHERE listing_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    

    // SETTERS

    // Set Room
    protected function setRoom($listing_id, $type, $width, $length, $level, $dimension, $custom_room) {
        $sql = "INSERT INTO property_rooms (listing_id, type, width, length, level, dimension, custom_room) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $type, $width, $length, $level, $dimension, $custom_room]);
    }

    // Delete Room By ID
    protected function deleteRoomById($id) {
        $sql = "DELETE FROM property_rooms WHERE room_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update Room By ID
    protected function editRoomById($listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id) {
        $sql = "UPDATE property_rooms SET listing_id = ?, type = ?, width = ?, length = ?, level = ?, dimension = ?, custom_room = ? WHERE room_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id]);
    }



}