<?php 

class Users extends Dbh {

    // USERS MODEL

    // GETTERS

    // Get all Users
    protected function getAllUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    // Get User by ID
    protected function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get User by Username
    protected function getUserByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // LOGIN METHODS

    // Check if User exists by Username or Email
    protected function getUserByUsernameOrEmail($username, $email) {
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email]);

        $results = $stmt->fetchAll();
        return $results;
    }

    // Get User by Username AND Password
    protected function getUserByUsernameAndPassword($username, $password) {
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password]);

        $results = $stmt->fetchAll();
        return $results;
    }

    

    // SETTERS

    // Set User
    protected function setUser($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status) {
        $sql = "INSERT INTO users (username, password, fullname, email, dob, phone, address, level, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password, $fullname, $email, $dob, $phone, $address, $level, $status]);
    }

    // Delete User By ID
    protected function deleteUserById($id) {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // Update User By ID
    protected function editUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id) {
        $sql = "UPDATE users SET username = ?, password = ?, fullname = ?, email = ?, dob = ?, phone = ?, address = ?, level = ?, status = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id]);
    }



}