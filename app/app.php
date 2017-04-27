<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));

// register DAO author
$app['dao.author'] = function($app) {
	$authorDAO = new MyBooks\DAO\AuthorDAO($app['db']);
	
	return $authorDAO;
};

// register DAO book
$app['dao.book'] = function($app) {
	$bookDAO = new MyBooks\DAO\BookDAO($app['db']);
	$bookDAO->setAuthorDAO($app['dao.author']);
	
	return $bookDAO;
};
