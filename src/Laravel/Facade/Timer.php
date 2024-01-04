<?php

namespace SimpleTimer\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * TimerのFacade
 * TimerManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package SimpleTimer\Laravel\Facade
 * 
 * @method static \SimpleTimer\Laravel\Interface\TimerInterface make()
 * @method static \SimpleTimer\Laravel\Interface\TimerInterface start()
 * 
 * @see \SimpleTimer\Laravel\Interface\ManagerInterface
 */
class Timer extends Facade
{
    /** 
     * TimerManagerにアクセスするためのFacadeの名前を取得する
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
