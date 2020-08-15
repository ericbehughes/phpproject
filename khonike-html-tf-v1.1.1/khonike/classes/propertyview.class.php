<?php

class PropertyView extends Property {

    // Property VIEW

    // Show All Properties
    public function showAllProperties() {
        $results = $this->getAllproperties();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


     // Show Property by ID
     public function showPropertyById($id) {
        $results = $this->getpropertyById($id);

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }

}