<?php

namespace App\Dtos;

final class SenderCredentialsDto
{
    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(
        public string $username,
        public string $password
    )
    {
        //
    }
}