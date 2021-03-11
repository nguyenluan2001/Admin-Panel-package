<?php
namespace Luan\AdminPanel;
use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    function boot()
    {
        $this->loadViewsFrom(__DIR__."/views","adpanel");
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->publishes([
            __DIR__."/AdminPanel"=>app_path("Http/Controllers/AdminPanel"),
            __DIR__."/routes/web.php"=>base_path("routes/web.php")
        ]);

    }
    function register()
    {

    }
}