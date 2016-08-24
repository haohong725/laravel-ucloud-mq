<?php

namespace App\Providers;

use Illuminate\Queue\Connectors\ConnectorInterface;

class UmqConnector implements ConnectorInterface
{
    public function connect(array $config)
    {
        return new UmqQueue( $this->createConnection( $config ), $config );
    }

    public function createConnection(array $config)
    {

    }
}
