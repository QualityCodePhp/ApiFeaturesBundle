<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use QualityCode\ApiFeaturesBundle\Tests\App\AppKernel;
use Symfony\Component\HttpFoundation\Request;

/** @var Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../../vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$kernel = new AppKernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
