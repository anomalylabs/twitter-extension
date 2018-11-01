<?php

return [
    'consumer_key'        => [
        'required' => true,
        'env'      => 'TWITTER_CONSUMER_KEY',
        'type'     => 'anomaly.field_type.encrypted',
        'bind'     => 'anomaly.extension.twitter::twitter.consumer_key',
    ],
    'consumer_secret'     => [
        'required' => true,
        'env'      => 'TWITTER_CONSUMER_SECRET',
        'type'     => 'anomaly.field_type.encrypted',
        'bind'     => 'anomaly.extension.twitter::twitter.consumer_secret',
    ],
    'access_token'        => [
        'required' => true,
        'env'      => 'TWITTER_ACCESS_TOKEN',
        'type'     => 'anomaly.field_type.encrypted',
        'bind'     => 'anomaly.extension.twitter::twitter.access_token',
    ],
    'access_token_secret' => [
        'required' => true,
        'env'      => 'TWITTER_ACCESS_TOKEN_SECRET',
        'type'     => 'anomaly.field_type.encrypted',
        'bind'     => 'anomaly.extension.twitter::twitter.access_token_secret',
    ],
];
