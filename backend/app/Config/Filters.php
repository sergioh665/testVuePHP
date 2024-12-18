<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'cors'     => \App\Filters\Cors::class,
    ];

    public $globals = [
        'before' => [
            'cors',
        ],
        'after'  => [
            'toolbar',
            'honeypot',
        ],
    ];

    public $methods = [];

    public $filters = [];
}
