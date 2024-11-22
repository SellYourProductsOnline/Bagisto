<?php

namespace Sypo\Test\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Sypo\Test\Models\Test::class,
    ];
}