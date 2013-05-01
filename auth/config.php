<?php
return $config = array(
    'path' => '/auth/',
    'callback_url' => '{path}callback.php',
    'security_salt' => 'sdhfiusdfsdiuhfdsuifdsmngh1209123i0123mnbdbjsa',
    'Strategy' => array(
        'Facebook' => array(
            'app_id' => 'APP_ID',
            'app_secret' => 'APP_SECRET'
        ),
        'Twitter' => array(
            'key' => 'APP_KEY',
            'secret' => 'APP_SECRET'
        ),
    )
);