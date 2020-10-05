<?php
include_once __DIR__ . '../../database/dbh.class.php';

class Room extends Dbh
{

    // ROOM MODEL

    // SETTERS

    // Set Room
    public function setRoom($listing_id, $type, $width, $length, $level, $dimension, $custom_room)
    {
        $sql = "INSERT INTO property_rooms (listing_id, type, width, length, level, dimension, custom_room) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $type, $width, $length, $level, $dimension, $custom_room]);
    }

    // Delete Room By ID
    public function deleteRoomById($id)
    {
        $sql = "DELETE FROM property_rooms WHERE room_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update Room By ID
    public function editRoomById($listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id)
    {
        $sql = "UPDATE property_rooms SET listing_id = ?, type = ?, width = ?, length = ?, level = ?, dimension = ?, custom_room = ? WHERE room_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id]);
    }

    // GETTERS

    // Get all Rooms
    public function getAllRooms()
    {
        $sql = "SELECT * FROM property_rooms";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get Room by ID
    public function getRoomById($id)
    {
        $sql = "SELECT * FROM property_rooms WHERE room_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get All Rooms by Property ID
    public function getRoomsByPropertyId($id)
    {
        $sql = "SELECT * FROM property_rooms WHERE listing_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }
}
