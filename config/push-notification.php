<?php

return array(

    'appNameIOS'     => array(
        'environment' => env('PUSH_ENV', 'development'),
        'certificate' => app_path().''.env('PUSH_CERT_PATH', '/resources/certs/apns.development.pem'),
        'passPhrase'  => env('PUSH_PASSWORD', ''),
        'service'     =>'apns'
    )
);
