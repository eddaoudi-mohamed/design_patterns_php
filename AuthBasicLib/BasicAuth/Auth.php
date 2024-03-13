<?php

namespace BasicAuth;

class Auth
{
    public function LoginAuth($name, $password)
    {
        return $name . "-" . $password;
    }
}
