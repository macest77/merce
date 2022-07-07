<?php

namespace Merce\Models;

class User implements UserInterface
{
    public function basicAuth(string $login, string $password) : bool
    {
        $db_password = 'ba595b3cf9b577f241942bac4245e663';//hashed admin password
        $password = md5($password);//temporarily
        //insert DB connection fetching hashed password for given login
        if ($db_password === $password) 
            return true;

        return false;
    }
}