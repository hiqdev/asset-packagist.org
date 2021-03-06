<?php
/**
 * asset-packagist.org
 *
 * @link      http://asset-packagist.org/
 * @package   asset-packagist.org
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'cookieValidationKey'   => null,

    'debug.enabled'         => false,
    'debug.allowedIps'      => ['127.0.0.1'],

    'db.password'           => null,

    'sentry.enabled'        => false,
    'monitoring.flag'       => hiqdev\yii2\monitoring\Module::FLAG_DOMAIN,
    'monitoring.email.to'   => null,
    'monitoring.email.from' => null,
];
