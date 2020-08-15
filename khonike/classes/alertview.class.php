<?php

class AlertView extends Alert {

    // USERS VIEW

    // Show All Alert
    public function showAllAlerts() {
        $results = $this->getAllAlerts();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


     // Show Alert by ID
     public function showAlertById($id) {
        $results = $this->getAlertById($id);

        return $results;
    }

    // Show Alert by User ID
    public function showAlertByUserId($user_id) {
        $results = $this->getAlertByUserId($user_id);

        return $results;
    }

}