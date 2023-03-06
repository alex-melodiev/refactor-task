<?php

declare(strict_types=1);

namespace App;

use App\Dtos\SenderCredentialsDto;
use Entities\ClientEntity;

abstract class Sender
{
    protected SenderCredentialsDto $credentials;

    public function setCredentials(SenderCredentialsDto $credentialsDto): void
    {
        $this->credentials = $credentialsDto;
    }

    abstract function send(ClientEntity $data): int;
}