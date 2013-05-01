<?php
$config = include __DIR__ . '/config.php';

//autoload do composer
include __DIR__. '/../vendor/autoload.php';
$Opauth = new Opauth( $config );
