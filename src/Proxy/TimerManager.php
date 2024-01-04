<?php

namespace SimpleTimer\Proxy;

use SimpleTimer\Proxy\Interface\ManagerInterface;

use SimpleTimer\Timer;

/**
 * Proxyを経由してstaticにアクセスされるManager
 * 
 * @package SimpleTimer\Proxy
 */
class TimerManager implements ManagerInterface
{
    /**
     * Timerのインスタンスを生成する
     *
     * @return \SimpleTimer\Timer
     */
    public function make(): Timer
    {
        return new Timer();
    }

    /**
     * Timerのインスタンスを生成し、計測を開始する
     *
     * @return \SimpleTimer\Timer
     */
    public function start(): Timer
    {
        return $this->make()->start();
    }
}
