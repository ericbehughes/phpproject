<?php

class PhotoView extends Photo {

    // PHOTOS VIEW

    // Show All Photos
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

}