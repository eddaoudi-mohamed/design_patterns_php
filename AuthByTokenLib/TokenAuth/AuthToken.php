<?php

namespace TokenAuth;


class AuthToken
{

    public function TokenLogin($key, $token)
    {
        return $key . "-" . $token;
    }
}
