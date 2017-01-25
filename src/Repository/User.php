<?php

namespace App\Repository;

class User
{
    public function all()
    {
        return [
            ['id' => 1, 'username' => 'john'],
            ['id' => 2, 'username' => 'alice'],
            ['id' => 3, 'username' => 'bob'],
        ];
    }
}
