<?php

class PropertyController extends Property {
    
    // Property CONTROLLER

    // Create a Property
    public function createProperty($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision) {
        $this->setProperty($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision);
    }

    // Delete Property
    public function deleteProperty($id) {
        $this->deletePropertyById($id);
    }

    // Update Property
    public function updatePropertyById($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id) {
        $this->editPropertyById($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id);
    }


}