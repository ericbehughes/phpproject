<?php

class UsersController {
    
    // USERS CONTROLLER

    private $Users = null;
    function __construct()
    {
        $this->Users = new Users();
    }


    // Create a User
    public function createUser($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status) {
        $this->Users->setUser($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status);
    }


    // Delete User
    public function deleteUser($id) {
        $this->Users->deleteUserById($id);
    }

    // Update User
    public function updateUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id) {
        $this->Users->editUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id);
    }

    // LOGIN METHODS

    // Check if User Exists
    public function checkIfUserExists($username, $email)
    {
        $results = $this->Users->getUserByUsernameOrEmail($username, $email);

        return $results;
    }

    // Show User by Username And Password
    public function showUserByUsernameAndPassword($username, $password)
    {
        $results = $this->Users->getUserByUsernameAndPassword($username, $password);

        return $results;
    }

    // Show All Users
    public function showAllUsers()
    {
        $results = $this->Users->getAllUsers();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


    // Show User by ID
    public function showUserById($id)
    {
        $results = $this->Users->getUserById($id);

        return $results;
    }

    // Show User by Username
    public function showUserByUsername($username)
    {
        $results = $this->Users->getUserByUsername($username);

        return $results;
    }

}


