<?php

class UsersController{
    
    // USERS CONTROLLER

    public $Users;

    function __construct($user)
    {
        $Users = $user;
    }


    // Create a User
    public function createUser($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status) {
        $this->Users->set
    }


    // Delete User
    public function deleteUser($id) {
        $Users->deleteUserById($id);
    }

    // Update User
    public function updateUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id) {
        $Users->editUserById($username, $password, $fullname, $email, $dob, $phone, $address, $level, $status, $id);
    }

    // LOGIN METHODS

    // Check if User Exists
    public function checkIfUserExists($username, $email)
    {
        $results = $Users->getUserByUsernameOrEmail($username, $email);

        return $results;
    }

    // Show User by Username And Password
    public function showUserByUsernameAndPassword($username, $password)
    {
        $results = $Users->getUserByUsernameAndPassword($username, $password);

        return $results;
    }

    // Show All Users
    public function showAllUsers()
    {
        $results = $Users->getAllUsers();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


    // Show User by ID
    public function showUserById($id)
    {
        $results = $Users->getUserById($id);

        return $results;
    }

    // Show User by Username
    public function showUserByUsername($username)
    {
        $results = $Users->getUserByUsername($username);

        return $results;
    }

}



