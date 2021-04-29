<?php

use Slim\App;

return function (App $app) {
    $settings = $app->getContainer()->get('settings');

    $app->addErrorMiddleware(true, true, true);

    $app->addErrorMiddleware(
        $settings['displayErrorDetails'],
        $settings['logErrors'],
        $settings['logErrorDetails']
    );
};
