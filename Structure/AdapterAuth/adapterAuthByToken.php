<?php

namespace Structure\AdapterAuth;

use TokenAuth\AuthToken;

class adapterAuthByToken implements adapterInterface
{

    private $authenticator;
    /**
     * Class constructor.
     */
    public function __construct(AuthToken $autenticator)
    {
        $this->authenticator = $autenticator;
    }

    public function Login(array $params)
    {
        $this->authenticator->TokenLogin($params['key'], $params['token']);
    }
}
