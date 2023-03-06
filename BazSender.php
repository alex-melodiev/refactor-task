<?php

declare(strict_types=1);

namespace App;

use Entities\ClientEntity;

class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     *
     * @param ClientEntity $clientEntity
     * @return int
     */
    public function send(ClientEntity $clientEntity): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }
}
