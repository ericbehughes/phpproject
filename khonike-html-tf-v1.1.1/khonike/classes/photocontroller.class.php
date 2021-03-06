<?php

class PhotoController extends Photo {
    
    // USERS CONTROLLER

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