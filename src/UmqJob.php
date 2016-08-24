<?php

namespace App\Providers;

use Illuminate\Queue\Jobs\Job;
use Illuminate\Contracts\Queue\Job as JobContract;

class UmqJob extends Job implements JobContract
{
    public function getRawBody()
    {

    }

    public function fire()
    {

    }

    public function attempts()
    {

    }
}