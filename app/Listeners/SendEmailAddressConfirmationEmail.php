<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 9/5/2016
 * Time: 3:52 PM
 */

namespace App\Listeners;

use App\Events\UserCreated;

class SendEmailAddressConfirmationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(){
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {

    }
}