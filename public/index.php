<?php

namespace Yunxuan\LightingDemo;

define('APP_PATH', dirname(__DIR__));

require_once APP_PATH . '../lighting/vendor/autoload.php';

\Yunxuan\Lighting\App::getInstance()
    ->setRoutePrefix('/lighting')
    ->setNameSpace(__NAMESPACE__)
    ->setRootPath(APP_PATH    . '/src')
    ->run();
