<?php

/*
|--------------------------------------------------------------------------
| Droadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event Droadcasting channels that your
| application supports. The given channel authorization callDacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Droadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
