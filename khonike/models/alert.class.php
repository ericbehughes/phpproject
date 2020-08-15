<?php 

class Alert extends Dbh {

    // ALERTS MODEL

    // GETTERS

    // Get all Alerts
    protected function getAllAlerts() {
        $sql = "SELECT * FROM alerts";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get Alert by ID
    protected function getAlertById($id) {
        $sql = "SELECT * FROM alerts WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get Alert by User ID
    protected function getAlertByUserId($user_id) {
        $sql = "SELECT * FROM alerts WHERE user_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);

        $results = $stmt->fetchAll();
        return $results;
    }
    

    // SETTERS

    // Set Alert
    protected function setAlert($user_id, $search_criteria, $status) {
        $sql = "INSERT INTO alerts (user_id, search_criteria, status) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $search_criteria, $status]);
    }

    // Delete Alert By ID
    protected function deleteAlertById($id) {
        $sql = "DELETE FROM alerts WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update Alert By ID
    protected function editAlertById($user_id, $search_criteria, $status, $id) {
        $sql = "UPDATE alerts SET user_id = ?, search_criteria = ?, status = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $search_criteria, $status, $id]);
    }



}