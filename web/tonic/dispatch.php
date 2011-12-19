<?php

// load Tonic library
require_once 'lib/tonic.php';

require_once 'servers.php';
require_once 'messages.php';
require_once 'jobs.php';
require_once 'notifications.php';
require_once 'users.php';
// handle request
$request = new Request(array('baseUri' => '/app/tonic'));
try {
    $resource = $request->loadResource();
    $response = $resource->exec($request);

} catch (ResponseException $e) {
    switch ($e->getCode()) {
    case Response::UNAUTHORIZED:
        $response = $e->response($request);
        $response->addHeader('WWW-Authenticate', 'Basic realm="Tonic"');
        break;
    default:
        $response = $e->response($request);
    }
}
$response->output();
?>
