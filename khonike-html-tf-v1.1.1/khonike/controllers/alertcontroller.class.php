<?php

class AlertController extends Alert {
    
    // USERS CONTROLLER
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
    // Create Alert
    public function createAlert($user_id, $search_criteria, $status) {
        $this->setAlert($user_id, $search_criteria, $status);
    }

    // Delete Alert
    public function deleteAlert($id) {
        $this->deleteAlertById($id);
    }

    // Update Alert
    public function updateAlertById($user_id, $search_criteria, $status, $id) {
        $this->editAlertById($user_id, $search_criteria, $status, $id);
    }


}