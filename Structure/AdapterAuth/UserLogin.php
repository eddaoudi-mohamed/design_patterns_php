<?php

namespace Structure\AdapterAuth;


class UserLogin
{

    private $auth;
    public function __construct(adapterInterface $auth)
    {
        $this->auth = $auth;
    }


    public function start(array $params)
    {
        $this->auth->Login($params);
    }
}
