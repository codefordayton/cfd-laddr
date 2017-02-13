<?php

Git::$repositories['laddr'] = [
    'remote' => 'https://github.com/CodeForPhilly/laddr.git',
    'originBranch' => 'releases/v2',
    'workingBranch' => 'releases/v2',
    'localOnly' => true,
    'trees' => [
        'event-handlers',
        'html-templates' => [
            'exclude' => [
                '#^/redirects/#' // exclude redirects library
            ]
        ],
        'locales',
        'php-classes' => [
            'exclude' => [
                '#^/ReCaptcha/#', // exclude ReCaptcha library pulled from google repo
                '#^/Emergence/Redirects/#'
            ]
        ],
        'php-config' => [
            'exclude' => [
                '#^/Site.config.d/redirects.php$#' // exclude redirects library
            ]
        ],
        'php-migrations',
        'site-root' => [
            'exclude' => [
                '#^/redirects.php$#' // exclude redirects library
            ]
        ]
    ]
];