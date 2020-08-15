<?php

class PhotoController extends Photo {
    
    // USERS CONTROLLER
    // reads
    public function showAllPhotos() {
        $results = $this->getAllPhotos();

        return $results;
    }


        // Show Photo by ID
        public function showPhotoById($id) {
        $results = $this->getPhotoById($id);

        return $results;
    }

    // Show Photos by Listing ID
    public function showAllPhotosByListingId($listing_id) {
        $results = $this->getAllPhotosByListingId($listing_id);

        return $results;
    }
    // Create a Photo
    public function createPhoto($listing_id, $sequence_id, $description, $photos) {
        $this->setPhoto($listing_id, $sequence_id, $description, $photos);
    }

    // Delete Photo
    public function deletePhoto($id) {
        $this->deletePhotoById($id);
    }

    // Update Photo
    public function updatePhotoById($listing_id, $sequence_id, $description, $photos, $photo_id) {
        $this->editPhotoById($listing_id, $sequence_id, $description, $photos, $photo_id);
    }


}