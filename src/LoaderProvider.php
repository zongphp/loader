<?php namespace zongphp\loader;

use zongphp\framework\build\Provider;

class LoaderProvider extends Provider
{
    //延迟加载
    public $defer = false;

    public function boot()
    {
        Loader::bootstrap();
    }

    public function register()
    {
        $this->app->single('Loader', function () {
            return new Loader();
        });
    }
}
