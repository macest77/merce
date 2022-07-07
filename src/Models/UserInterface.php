<?php 

namespace Merce\Models;

interface UserInterface
{
    /**
     * Method to check password for specific login
     * 
     * @param string $login
     * @param string $password
     * @return bool true if password and users are correct
     */
    public function basicAuth(string $login, string $password) : bool;
}