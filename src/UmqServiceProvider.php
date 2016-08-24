<?php

namespace App\Providers;

use Illuminate\Queue\QueueManager;

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
        $queue->push('222');
        dd(33);
    }
}
