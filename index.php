<?php

use function Sentry\captureException;

require 'vendor/autoload.php';

\Sentry\init([
    'dsn' => 'https://3a00fc26ae8bb0e0962c4e7ed95dc933@o711518.ingest.us.sentry.io/4506906351828992',
]);

throw new Exception('Oh no');
