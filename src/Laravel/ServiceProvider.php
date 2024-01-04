<?php

namespace SimpleTimer\Laravel;

use Illuminate\Support\ServiceProvider as Provider;

use SimpleTimer\Laravel\TimerManager;
use SimpleTimer\Laravel\Facade\Timer;

/**
 * ServiceProvider
 * Facadeの登録を行う
 * 
 * @package SimpleTimer\Laravel
 */
class ServiceProvider extends Provider
{
    /**
     * アプリケーションの起動時に実行する
     * FacadeとManagerの紐づけを行う
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Timer::class, function () {
            return new TimerManager();
        });
    }
}
