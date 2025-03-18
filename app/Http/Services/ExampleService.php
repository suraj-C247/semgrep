<?php

namespace App\Services;

class ExampleService
{
    public function connect()
    {
        $username = 'admin'; // Hardcoded credentials
        $password = 'admin@123'; // Hardcoded credentials
        // Connection logic
    }

    public function test()
    {
        $dbUser = "root";
        $dbPassword = "password123";
        return "DB User: $dbUser";
    }
}