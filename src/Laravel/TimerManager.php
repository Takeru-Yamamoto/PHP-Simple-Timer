<?php

namespace SimpleTimer\Laravel;

use SimpleTimer\Laravel\Interface\ManagerInterface;
use SimpleTimer\Proxy\TimerManager as SimpleTimerManager;

use SimpleTimer\Laravel\Timer;

/**
 * Facadeを経由してstaticにアクセスされるManager
 * 
 * @package SimpleTimer\Laravel
 */
class TimerManager extends SimpleTimerManager implements ManagerInterface
{
    /**
     * Timerのインスタンスを生成する
     *
     * @return \SimpleTimer\Laravel\Timer
     */
    public function make(): Timer
    {
        return new Timer();
    }
}
