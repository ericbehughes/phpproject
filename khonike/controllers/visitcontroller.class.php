<?php
include_once __DIR__ . '../../models/visit.class.php';

class VisitController
{

    // VISIT CONTROLLER
    
    // Constructor
    public $Visit = null;
    function __construct()
    {
        $this->Visit = new Visit();
    }

    // Create Visit
    public function createVisit($customer_id, $seller_id, $listing_id, $datetime, $status)
    {
        $this->Visit->setVisit($customer_id, $seller_id, $listing_id, $datetime, $status);
    }

    // Delete Visit
    public function deleteVisit($id)
    {
        $this->Visit->deleteVisitById($id);
    }

    // Update Visit
    public function updateVisitById($customer_id, $seller_id, $listing_id, $datetime, $status, $id)
    {
        $this->Visit->editVisitById($customer_id, $seller_id, $listing_id, $datetime, $status, $id);
    }

    // Update Visit Status By ID
    public function updateVisitStatusById($status, $id)
    {
        $this->Visit->editVisitStatusById($status, $id);
    }



    // Show all Visits
    public function showAllVisits()
    {
        $results = $this->Visit->getAllVisits();

        return $results;
    }


    // Show Visit by ID
    public function showVisitById($id)
    {
        $results = $this->Visit->getVisitById($id);

        return $results;
    }

    // Show All Visits by Listing ID
    public function showVisitsByListingId($listing_id)
    {
        $results = $this->Visit->getVisitsByListingId($listing_id);

        return $results;
    }

    // Show All Visits by Customer ID
    public function showVisitsByCustomerIdAndPropertyId($customer_id, $property_id)
    {
        $results = $this->Visit->getVisitsByCustomerIdAndPropertyId($customer_id, $property_id);

        return $results;
    }

    // Show All Visits by User ID and Status
    public function showAllVisitsByUserIdAndStatus($user_id, $status)
    {
        $results = $this->Visit->getAllVisitsByUserIdAndStatus($user_id, $status);

        return $results;
    }

    // Show All Visits by Seller ID
    public function showVisitsBySellerId($seller_id)
    {
        $results = $this->Visit->getVisitsBySellerId($seller_id);

        return $results;
    }
}
