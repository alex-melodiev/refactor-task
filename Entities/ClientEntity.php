<?php

namespace Entities;

use InvalidArgumentException;

class ClientEntity implements Entity
{
    public string $name;
    public int $age;
    public function __construct(array $params)
    {
        if (empty($params['name'])) {
            throw new InvalidArgumentException('Name must be set!');
        }

        if (empty($params['age'])) {
            throw new InvalidArgumentException('Age must be set!');
        }

        $this->name = $params['name'];
        $this->age = $params['age'];
    }
}