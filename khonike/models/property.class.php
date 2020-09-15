<?php
include_once __DIR__ . '../../database/dbh.class.php';

class Property extends Dbh {

    // Property MODEL

    
    // SETTERS

    // Set Property
    public function setProperty($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $seller_id) {
        $sql = "INSERT INTO property (features, parking_space_total, price, property_type, public_remarks, structure, bathroom_total, bedrooms_total, architectural_style, constructed_date, exterior_finish, flooring_type, bath_total, renovated_date, stories_total, size_exterior, size_interior, address, city, province, postal_code, country, community_name, neighbourhood, subdivision, seller_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $seller_id]);
    }

    // Delete Property By ID
    public function deletePropertyById($id) {
        $sql = "DELETE FROM property WHERE property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update Property By ID
    public function editPropertyById($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id) {
        $sql = "UPDATE property SET features = ?, parking_space_total = ?, price = ?, property_type = ?, public_remarks = ?, structure = ?, bathroom_total = ?, bedrooms_total = ?, architectural_style = ?, constructed_date = ?, exterior_finish = ?, flooring_type = ?, bath_total = ?, renovated_date = ?, stories_total = ?, size_exterior = ?, size_interior = ?, address = ?, city = ?, province = ?, postal_code = ?, country = ?, community_name = ?, neighbourhood = ?, subdivision = ?  WHERE property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id]);
    }

    // GETTERS

    // Get all properties
    public function getAllproperties() {
        $sql = "SELECT * FROM property";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get property by ID
    public function getpropertyById($id) {
        $sql = "SELECT * FROM property WHERE property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get property by MAX ID
    public function getpropertyByMaxId() {
        $sql = "SELECT MAX(property_id) from property";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get properties by Seller ID
    public function getpropertyBySellerId($id) {
        $sql = "SELECT * FROM property WHERE seller_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    




}