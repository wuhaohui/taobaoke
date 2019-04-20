<?php
/**
 * Created by PhpStorm.
 * User: wuhaohui
 * Date: 2019-04-20
 * Time: 13:05
 */

namespace haohui;


use Illuminate\Support\ServiceProvider;

class TaobaokeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config' => config_path()]);
        }
    }
}
