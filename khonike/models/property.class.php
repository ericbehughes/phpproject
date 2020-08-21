<?php 

class Property extends Dbh {

    // Property MODEL

    
    // SETTERS

    // Set Property
    protected function setProperty($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision) {
        $sql = "INSERT INTO property (features, parking_space_total, price, property_type, public_remarks, structure, bathroom_total, bedrooms_total, architectural_style, constructed_date, exterior_finish, flooring_type, bath_total, renovated_date, stories_total, size_exterior, size_interior, address, city, province, postal_code, country, community_name, neighbourhood, subdivision) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision]);
    }

    // Delete Property By ID
    protected function deletePropertyById($id) {
        $sql = "DELETE FROM property WHERE property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update Property By ID
    protected function editPropertyById($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id) {
        $sql = "UPDATE property SET features = ?, parking_space_total = ?, price = ?, property_type = ?, public_remarks = ?, structure = ?, bathroom_total = ?, bedrooms_total = ?, architectural_style = ?, constructed_date = ?, exterior_finish = ?, flooring_type = ?, bath_total = ?, renovated_date = ?, stories_total = ?, size_exterior = ?, size_interior = ?, address = ?, city = ?, province = ?, postal_code = ?, country = ?, community_name = ?, neighbourhood = ?, subdivision = ?  WHERE property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id]);
    }

    // GETTERS

    // Get all properties
    protected function getAllproperties() {
        $sql = "SELECT * FROM property";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get property by ID
    protected function getpropertyById($id) {
        $sql = "SELECT * FROM property WHERE property_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    




}