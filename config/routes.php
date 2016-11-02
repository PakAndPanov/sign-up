<?php

return array(


    'user/register' => 'user/register',

    'user/logout' => 'user/logout',

    'site'=>'site/index',

    'messages/refresh' => 'messages/refresh',

    'id([0-9]+)'=>'profile/index/$1',

    'messages/check'=>'messages/check',

    'messages'=>'messages/index',
    
    'friends/refreshsearchfriends'=>'friends/refreshsearchfriends',

    'friends/add/([0-9]+)' => 'friends/add/$1',
    
    'friends/search' => 'friends/search',

    'friends' => 'friends/index',



    '' => 'user/login', // actionIndex в SiteController

);