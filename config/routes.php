<?php

return array(


    'user/register' => 'user/register',

    'user/logout' => 'user/logout',

    'site'=>'site/index',

    'id([0-9]+)'=>'profile/index/$1',

    'messages/unreadenMsg' => 'messages/unreadenMsg',

    'messages/refresh' => 'messages/refresh',

    'messages/check'=>'messages/check',

    'messages'=>'messages/index',

    'friends/delete/([0-9]+)' => 'friends/delete/$1',
    
    'friends/refreshsearchfriends'=>'friends/refreshsearchfriends',

    'friends/add/([0-9]+)' => 'friends/add/$1',
    
    'friends/search' => 'friends/search',

    'friends' => 'friends/index',



    '' => 'user/login', // actionIndex в SiteController

);