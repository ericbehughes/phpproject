<?php

class AlertController extends Alert {
    
    // USERS CONTROLLER

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