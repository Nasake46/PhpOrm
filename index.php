<?php

use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;

AppFactory::setSlimHttpDecoratorsAutomaticDetection(false);
ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);

$app = AppFactory::create();

// ...