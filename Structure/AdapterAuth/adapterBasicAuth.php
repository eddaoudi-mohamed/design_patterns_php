<?php

namespace Structure\AdapterAuth;

use BasicAuth\Auth;

class adapterBasicAuth implements adapterInterface
{
    private $authenticator;
    public function __construct(Auth $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function Login(array $params)
    {
        $this->authenticator->LoginAuth($params['name'], $params['password']);
    }
}
