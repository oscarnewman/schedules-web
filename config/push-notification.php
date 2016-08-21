<?php

return array(

    'schedules-ios'     => array(
        'environment' => env('PUSH_ENV', 'development'),
        'certificate' => resource_path(env('PUSH_CERT_PATH', 'certs/apns.development.pem')),
        'passPhrase'  => env('PUSH_PASSWORD', ''),
        'service'     =>'apns'
    )
);
