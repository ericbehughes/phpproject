<?php
include_once __DIR__ . '../../models/property.class.php';


// Property CONTROLLER
class PropertyController
{

    // Constructor
    public $Property = null;
    function __construct()
    {
        $this->Property = new Property();
    }

    // SETTERS

    // Create a Property
    public function createProperty($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $seller_id)
    {

        $this->Property->setProperty($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $seller_id);
    }

    // Delete Property
    public function deleteProperty($id)
    {
        $this->Property->deletePropertyById($id);
    }

    // Update Property
    public function updatePropertyById($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id)
    {

        $this->Property->editPropertyById($features, $parking_space_total, $price, $property_type, $public_remarks, $structure, $bathroom_total, $bedrooms_total, $architectural_style, $constructed_date, $exterior_finish, $flooring_type, $bath_total, $renovated_date, $stories_total, $size_exterior, $size_interior, $address, $city, $province, $postal_code, $country, $community_name, $neighbourhood, $subdivision, $id);
    }


    // GETTERS

    // Show All Properties
    public function showAllProperties()
    {
        $results = $this->Property->getAllproperties();
        return $results;
    }


    // Show Property by ID
    public function showPropertyById($id)
    {
        $results = $this->Property->getpropertyById($id);
        return $results;
    }

    // Show Property by Max ID
    public function showPropertyByMaxId()
    {
        $results = $this->Property->getpropertyByMaxId();
        return $results;
    }

    // Show Property by Seller ID
    public function showPropertyBySellerId($id)
    {
        $results = $this->Property->getpropertyBySellerId($id);
        return $results;
    }

    // Show Rooms by Property ID
    public function showRoomsById($property_id)
    {
        $results = $this->Property->getRoomsById($property_id);
        return $results;
    }
}
