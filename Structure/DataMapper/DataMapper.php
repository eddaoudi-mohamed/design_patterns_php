<?php

namespace Structure\DataMapper;

class DataMapper
{
    public StorageDataBase $storage;
    public function __construct(StorageDataBase $storage)
    {
        $this->storage = $storage;
    }

    public function findById(string $id)
    {

        return $this->storage->findById($id);
    }

    public function save(User $user)
    {
        $this->storage->save(['id' => $user->id, 'username' => $user->username, "password" => $user->password]);
    }
}
