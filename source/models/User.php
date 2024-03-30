<?php

class AuthController
{
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = User::findUserByUsername($username);

            if ($user && $user->getPassword() === $password) {
              
                echo "Logged in successfully!";
            } else {
                echo "Login failed. Check username and/or password.";
            }
        }

        require_once "views/auth/login.php";
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $success = User::registerUser($username, $email, $password);

            if ($success) {
                echo "Registration successful!";
            } else {
                echo "Registration failed. Please try again.";
            }
        }

        require_once "views/auth/register.php";
    }
}

?>