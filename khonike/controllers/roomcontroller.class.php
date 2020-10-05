<?php
include_once __DIR__ . '../../models/room.class.php';

class RoomController
{

    // ROOM CONTROLLER
    
    // Constructor
    public $Room = null;
    function __construct()
    {
        $this->Room = new Room();
    }

    // Create Room
    public function createRoom($listing_id, $type, $width, $length, $level, $dimension, $custom_room)
    {
        $this->Room->setRoom($listing_id, $type, $width, $length, $level, $dimension, $custom_room);
    }

    // Delete Room
    public function deleteRoom($id)
    {
        $this->Room->deleteRoomById($id);
    }

    // Update Room
    public function updateRoomById($listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id)
    {
        $this->Room->editRoomById($listing_id, $type, $width, $length, $level, $dimension, $custom_room, $id);
    }



    // Show all Rooms
    public function showAllRooms()
    {
        $results = $this->Room->getAllRooms();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


    // Show Room by ID
    public function showRoomById($id)
    {
        $results = $this->Room->getRoomById($id);

        return $results;
    }

    // Show All Rooms by Property ID
    public function showRoomsByPropertyId($username)
    {
        $results = $this->Room->getRoomsByPropertyId($username);

        return $results;
    }
}
