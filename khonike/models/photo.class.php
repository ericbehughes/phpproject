<?php 

class Photo extends Dbh {

    // PHOTO MODEL

    // GETTERS

    // Get all Photos
    protected function getAllPhotos() {
        $sql = "SELECT * FROM property_photos";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get Photo by ID
    protected function getPhotoById($id) {
        $sql = "SELECT * FROM property_photos WHERE photo_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get Photo by Listing ID
    protected function getAllPhotosByListingId($listing_id) {
        $sql = "SELECT * FROM property_photos WHERE listing_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id]);

        $results = $stmt->fetchAll();
        return $results;
    }


    

    // SETTERS

    // Set Photo
    protected function setPhoto($listing_id, $sequence_id, $description, $photos) {
        $sql = "INSERT INTO property_photos (listing_id, sequence_id, description, photos) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $sequence_id, $description, $photos]);
    }

    // Delete Photo By ID
    protected function deletePhotoById($photo_id) {
        $sql = "DELETE FROM property_photos WHERE photo_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$photo_id]);
    }

    // Update Photo By ID
    protected function editPhotoById($listing_id, $sequence_id, $description, $photos, $photo_id) {
        $sql = "UPDATE property_photos SET listing_id = ?, sequence_id = ?, description = ?, photos = ? WHERE photo_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id, $sequence_id, $description, $photos, $photo_id]);
    }



}