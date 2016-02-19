<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | HipChat API Token
    |--------------------------------------------------------------------------
    |
    | Required API Token from HipChat
    |
    */
    'api_token' => env('HIPCHAT_TOKEN'),


    /*
    |--------------------------------------------------------------------------
    | HipChat API App Name
    |--------------------------------------------------------------------------
    |
    | Choose a name you want to be displayed on HipChat
    | Length: from 1 to 15 characters
    |
    */
    'app_name' => env('APP_NAME', 'Laravel'),


    /*
    |--------------------------------------------------------------------------
    | HipChat Default Room
    |--------------------------------------------------------------------------
    |
    | If Not specified, you will have to always use
    | HipChat::setRoom('roomName');
    | when a room name is required
    |
    */
    'default_room' => env('HIPCHAT_DEFAULT_ROOM', 'dev'), // this is optional
);
