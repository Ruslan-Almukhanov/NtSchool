<?php

require_once('../vendor/autoload.php');

require_once '../config/database.php';
require_once '../config/view.php';
require_once '../config/router.php';
require_once '../config/container.php';

$serverRequest = \GuzzleHttp\Psr7\ServerRequest::fromGlobals();
$matcher = $routerContainer->getMatcher();

if ($result = $matcher->match($serverRequest)) {
    foreach ($result->attributes as $name => $attribute) {
        $serverRequest = $serverRequest->withAttribute($name, $attribute);
    }

    $action = $container->get($result->handler);

    $response = new \GuzzleHttp\Psr7\Response();
    $response->getBody()->write(call_user_func($action, $serverRequest));
    echo $response->getBody();
}
