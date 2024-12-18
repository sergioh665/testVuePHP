<?php

namespace Config;

use CodeIgniter\Filters\Cors;
use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'cors' => Cors::class,
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
    ];

    public $globals = [
        'before' => [],
        'after'  => [
            'toolbar',
            'honeypot',
        ],
    ];

    public $methods = [];

    public $filters = [];
}
