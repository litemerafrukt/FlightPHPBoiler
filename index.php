<?php

require 'vendor/autoload.php';


/**
 * Landing page/start page.
 */
Flight::route('/', function () {
    $page = '/';
    $title = 'Me';
    Flight::render('index', [], 'content');
    Flight::render('layout', compact('page', 'title', 'content'));
});

Flight::route('/code', function () {
    $page = '/code';
    $title = 'Kod';
    Flight::render('code', [], 'content');
    Flight::render('layout', compact('page', 'title', 'content'));
});

Flight::route('/contact', function () {
    $page = '/contact';
    $title = 'Kontakt';
    Flight::render('contact', [], 'content');
    Flight::render('layout', compact('page', 'title', 'content'));
});

Flight::route('/about', function () {
    $page = '/about';
    $title = 'Om';
    Flight::render('about', [], 'content');
    Flight::render('layout', compact('page', 'title', 'content'));
});

Flight::start();
