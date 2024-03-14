<?php

use App\Service\ExceptionService;

require 'vendor/autoload.php';

\Sentry\init([
    'dsn' => 'https://3a00fc26ae8bb0e0962c4e7ed95dc933@o711518.ingest.us.sentry.io/4506906351828992',
    'release' => trim(exec('git describe --tags --abbrev=0')),
]);

ExceptionService::throw('Oh no!');
ExceptionService::throw('Oh no, again?');
