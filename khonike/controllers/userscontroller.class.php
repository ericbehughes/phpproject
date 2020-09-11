<?php
include_once '../../models/users.class.php';
//var_dump(file_exists('../../models/users.class.php'));

// USERS CONTROLLER
class UsersController {
    

    // Contructor
    public $Users = null;
    function __construct()
    {
        $this->Users = new Users();
    }

    // Setters

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


    // Getters

    // Show All Users
    public function showAllUsers()
    {
        $results = $this->Users->getAllUsers();
        return $results;
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

    // Update Password
    public function updatePassword($password, $id) {

        $results = $this->Users->editPassword($password, $id);
        return $results;
    }

}



