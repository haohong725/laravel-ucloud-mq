<?php

namespace Umq;

use Illuminate\Queue\QueueManager;
use Illuminate\Support\ServiceProvider;

class UmqServiceProvider extends ServiceProvider
{
    public function register()
    {
        /* @var QueueManager $manager */
        $manager = $this->app['queue'];

        $manager->addConnector('umq', function () {
            return new UmqConnector();
        });

        $queue = $manager->connection('umq');

        $queue->push('444');

        dd(33);
    }
}
