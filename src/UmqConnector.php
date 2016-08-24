<?php

namespace Umq;

use Illuminate\Queue\Connectors\ConnectorInterface;
use Umq\SDK\UmqClient;

class UmqConnector implements ConnectorInterface
{
    public function connect(array $config)
    {
        return new UmqQueue($this->getUmqClient($config));
    }

    public function getUmqClient($config)
    {
        return new UmqClient($config);
    }
}
