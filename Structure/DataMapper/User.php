<?php

namespace Structure\DataMapper;


class User
{
    public string $id;
    public string $username;
    public string $password;
    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }
}
