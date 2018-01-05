<?php

namespace Raomingchao\QiniuAdapter;

use Raomingchao\QiniuAdapter\Providers\QiniuServiceProvider;
use System\Classes\PluginBase;

/**
 * Class Plugin
 * @package Raomingchao\QiniuAdapter
 */
class Plugin extends PluginBase
{

    /**
     * @return void
     */
    public function boot()
    {
        $this->app->register(QiniuServiceProvider::class);
    }

}