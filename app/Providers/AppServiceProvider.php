<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Pageconfig;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $page_conf = Pageconfig::getAll();
        //设置页面数据共享
        view()->share('pageconfig',$page_conf);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
