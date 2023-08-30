<?php

namespace App\listeners;

use App\Events\ChangePassword;

class SendUpdatePasswordNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChangePassword $event): void
    {

    }
}
