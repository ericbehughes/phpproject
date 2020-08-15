<?php

class UsersController extends Users {
    
    // USERS CONTROLLER

    // Create a User
    public function createUser($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status) {
        $this->setUser($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status);
    }


    // Delete User
    public function deleteUser($id) {
        $this->deleteUserById($id);
    }

    // Update User
    public function updateUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id) {
        $this->editUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id);
    }

    // LOGIN METHODS

    // Check if User Exists
    public function checkIfUserExists($username, $email)
    {
        $results = $this->getUserByUsernameOrEmail($username, $email);

        return $results;
    }

    // Show User by Username And Password
    public function showUserByUsernameAndPassword($username, $password)
    {
        $results = $this->getUserByUsernameAndPassword($username, $password);

        return $results;
    }



}