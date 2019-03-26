<?php
/**
 * Sailor theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-sailor
 * @package   yii2-theme-sailor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

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
