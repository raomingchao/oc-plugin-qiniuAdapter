<?php

namespace Raomingchao\QiniuAdapter\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;


/**
 * Class DropboxServiceProvider
 * @package Renatio\DropboxAdapter\Providers
 */
class QiniuServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('qiniu', function ($app, $config) {

            $accessKey = 'xxxxxx';
            $secretKey = 'xxxxxx';
            $bucket = 'test-bucket-name';
            $domain = 'xxxx.bkt.clouddn.com'; // or with protocol: https://xxxx.bkt.clouddn.com
            return new Filesystem(new QiniuAdapter($accessKey, $secretKey, $bucket, $domain));

        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
//
    }

}