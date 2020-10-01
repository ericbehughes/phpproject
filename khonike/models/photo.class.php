<?php
include_once __DIR__ . '../../database/dbh.class.php';

// PHOTO MODEL

class Photo extends Dbh {

    // SETTERS

    // Set Photo
    public function setPhoto($listing_id, $sequence_id, $description, $photos) {
        $sql = "INSERT INTO property_photos (listing_id, sequence_id, description, photos) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $sequence_id, $description, $photos]);
    }

    // Delete Photo By ID
    public function deletePhotoById($photo_id) {
        $sql = "DELETE FROM property_photos WHERE photo_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$photo_id]);
    }

    // Update Photo By ID
    public function editPhotoById($listing_id, $sequence_id, $description, $photos, $photo_id) {
        $sql = "UPDATE property_photos SET listing_id = ?, sequence_id = ?, description = ?, photos = ? WHERE photo_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $sequence_id, $description, $photos, $photo_id]);
    }


    // GETTERS

    // Get all Photos
    public function getAllPhotos() {
        $sql = "SELECT * FROM property_photos";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get Photo by ID
    public function getPhotoById($id) {
        $sql = "SELECT * FROM property_photos WHERE photo_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get Sequence Photos by Listing ID
    public function getAllPhotosByListingIdAndSequence1($listing_id) {
        $sql = "SELECT * FROM property_photos WHERE listing_id = ? AND sequence_id = 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get Photos by Listing ID
    public function getAllPhotosByListingId($listing_id) {
        $sql = "SELECT * FROM property_photos WHERE listing_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    

}