<?php
include_once __DIR__ . '../../database/dbh.class.php';

class Visit extends Dbh
{

    // VISIT MODEL

    // SETTERS

    // Set Visit
    public function setVisit($customer_id, $seller_id, $listing_id, $datetime, $status)
    {
        $sql = "INSERT INTO visits (customer_id, seller_id, property_id, datetime, status) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$customer_id, $seller_id, $listing_id, $datetime, $status]);
    }

    // Delete Visit By ID
    public function deleteVisitById($id)
    {
        $sql = "DELETE FROM visits WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update Visit By ID
    public function editVisitById($customer_id, $seller_id, $listing_id, $datetime, $status, $id)
    {
        $sql = "UPDATE visits SET customer_id = ?, seller_id = ?, listing_id = ?, datetime = ?, status = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$customer_id, $seller_id, $listing_id, $datetime, $status, $id]);
    }

    // Update Visit Status By ID
    public function editVisitStatusById($status, $id)
    {
        $sql = "UPDATE visits SET status = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$status, $id]);
    }

    // GETTERS

    // Get all Visits
    public function getAllVisits()
    {
        $sql = "SELECT * FROM visits";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get Visit by ID
    public function getVisitById($id)
    {
        $sql = "SELECT * FROM visits WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get All Visits by Listing ID
    public function getVisitsByListingId($listing_id)
    {
        $sql = "SELECT * FROM visits WHERE listing_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$listing_id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get All Visits by Customer ID
    public function getVisitsByCustomerIdAndPropertyId($customer_id, $property_id)
    {
        $sql = "SELECT * FROM visits WHERE customer_id = ? AND property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$customer_id, $property_id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get All Visits by User ID And Status
    public function getAllVisitsByUserIdAndStatus($user_id, $status)
    {
        $sql = "SELECT * FROM visits WHERE customer_id = ? AND status = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $status]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get All Visits by Seller ID
    public function getVisitsBySellerId($seller_id)
    {
        $sql = "SELECT * FROM visits WHERE seller_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$seller_id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    
}
