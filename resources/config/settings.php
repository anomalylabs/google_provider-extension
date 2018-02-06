<?php

return [
    'client_id'         => [
        'required' => true,
        'env'      => 'GOOGLE_CLIENT_ID',
        'bind'     => 'services.google.client_id',
        'type'     => 'anomaly.field_type.encrypted',
    ],
    'client_secret'     => [
        'required' => true,
        'env'      => 'GOOGLE_CLIENT_SECRET',
        'bind'     => 'services.google.client_secret',
        'type'     => 'anomaly.field_type.encrypted',
    ],
    'scope'             => [
        'bind' => 'services.google.scope',
        'type' => 'anomaly.field_type.tags',
    ],
    'application_scope' => [
        'bind' => 'services.google.application_scope',
        'type' => 'anomaly.field_type.tags',
    ],
];
