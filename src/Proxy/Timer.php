<?php

namespace SimpleTimer\Proxy;

use StaticProxy\StaticProxy;

use SimpleTimer\Proxy\TimerManager;

/**
 * TimerのProxy
 * TimerManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package SimpleTimer\Proxy
 * 
 * @method static \SimpleTimer\Interface\TimerInterface make()
 * @method static \SimpleTimer\Interface\TimerInterface start()
 * 
 * @see \SimpleTimer\Proxy\Interface\ManagerInterface
 */
class Timer extends StaticProxy
{
    /** 
     * TimerManagerの実クラス名を取得する
     * 
     * @return string 
     */
    public static function getRealInstanceName(): string
    {
        return TimerManager::class;
    }
}
