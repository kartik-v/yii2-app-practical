<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            // unique CSRF cookie parameter for backend (set by kartik-v/yii2-app-practical)
            'csrfParam' => '_backendCsrf',
        ],
        // unique identity cookie configuration for backend (set by kartik-v/yii2-app-practical)
        'user' => [
            'identityCookie' => [
                'name' => '_backendUser', // unique for backend
                'path' => '/backend/web' // set it to correct path for backend app.
            ]
        ],
        // unique session configuration for backend (set by kartik-v/yii2-app-practical)
        'session' => [
            'name' => '_backendSessionId', // unique for backend
            'savePath' => __DIR__ . '/../runtime/sessions' // set it to correct path for backend app.
        ]],
        // url manager to access frontend
        'urlManagerFE' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/practical', // change to your app base folder name
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ],
];
