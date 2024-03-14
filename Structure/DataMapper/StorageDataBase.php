<?php


namespace Structure\DataMapper;

class StorageDataBase
{
    private array $data = [];
    /**
     * Class constructor.
     */
    public function __construct(array $data)
    {
        return $this->data = $data;
    }

    public function findById(string $id)
    {
        return $this->data[$id];
    }

    public function save($user)
    {
        $this->data[$user->id] = $user;
        return true;
    }
}
