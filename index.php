<?php

use App\Service\ExceptionService;

require 'vendor/autoload.php';

\Sentry\init([
    'dsn' => 'https://3a00fc26ae8bb0e0962c4e7ed95dc933@o711518.ingest.us.sentry.io/4506906351828992',
]);

ExceptionService::throw('Oh no');
