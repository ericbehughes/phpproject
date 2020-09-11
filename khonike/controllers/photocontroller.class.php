<?php
include_once '../../models/photo.class.php';

// PHOTO CONTROLLER
class PhotoController
{

    // Contructor
    public $Photo = null;
    function __construct()
    {
        $this->Photo = new Photo();
    }

    // SETTERS

    // Create a Photo
    public function createPhoto($listing_id, $sequence_id, $description, $photos)
    {
        $this->Photo->setPhoto($listing_id, $sequence_id, $description, $photos);
    }

    // Delete Photo
    public function deletePhoto($id)
    {
        $this->Photo->deletePhotoById($id);
    }

    // Update Photo
    public function updatePhotoById($listing_id, $sequence_id, $description, $photos, $photo_id)
    {
        $this->Photo->editPhotoById($listing_id, $sequence_id, $description, $photos, $photo_id);
    }

    // GETTERS

    public function showAllPhotos()
    {
        $results = $this->getAllPhotos();
        return $results;
    }

    // Show Photo by ID
    public function showPhotoById($id)
    {
        $results = $this->getPhotoById($id);
        return $results;
    }

    // Show Photos by Listing ID
    public function showAllPhotosByListingId($listing_id)
    {
        $results = $this->getAllPhotosByListingId($listing_id);
        return $results;
    }
}
