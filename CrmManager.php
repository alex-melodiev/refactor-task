<?php

declare(strict_types=1);

namespace App;

use App\Dtos\SenderCredentialsDto;
use Entities\ClientEntity;
use InvalidArgumentException;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    private BazSender $client;
    private SenderCredentialsDto $settings;

    public function __construct(array $settings)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->settings = new SenderCredentialsDto($settings['user'], $settings['passwd']);
        $this->client = new BazSender();
    }

    /**
     * Sends the person to a crm
     *
     * @param ClientEntity $clientEntity
     * @return int
     */
    public function sendPerson(ClientEntity $clientEntity): int
    {
        $this->client->setCredentials($this->settings);

        return $this->client->send($clientEntity);
    }
}
