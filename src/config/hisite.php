<?php

return [
    'components' => [
        'themeManager' => [
            'sailor' => [
                'class' => \hiqdev\themes\sailor\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes:sailor' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/sailor/messages',
                ],
            ],
        ],
    ],
];

