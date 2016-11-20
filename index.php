<?php

require 'vendor/autoload.php';

/**
 * Landing page/start page.
 */
Flight::route('/', function () {
    $title = 'FlightPHP boilerplate';
    Flight::render('index', [], 'content');
    Flight::render('layout', compact('title', 'content'));
});

Flight::start();
