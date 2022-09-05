<?php

use App\Core\{Router, Request};

require 'vendor/autoload.php';

require 'core/bootstrap.php';

//die(var_dump($app));

Router::load('app/routes.php')
    -> direct(Request::uri(), Request::method());