<?php

class UsersView extends Users
{

    // USERS VIEW

    // Show All Users
    public function showAllUsers()
    {
        $results = $this->getAllUsers();

        return $results;
        //echo "Username: " . $results[0]['username'] . "<br>Fullname: " . $results[0]['fullname'] . "<br>Email: " . $results[0]['email'];
    }


    // Show User by ID
    public function showUserById($id)
    {
        $results = $this->getUserById($id);

        return $results;
    }

    // Show User by Username
    public function showUserByUsername($username)
    {
        $results = $this->getUserByUsername($username);

        return $results;
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
