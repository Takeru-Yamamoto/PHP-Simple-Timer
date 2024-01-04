<?php

namespace SimpleTimer\Proxy\Interface;

use SimpleTimer\Interface\TimerInterface;

/**
 * Proxyを経由してstaticにアクセスされるManagerのInterface
 * 
 * @package SimpleTimer\Proxy\Interface
 */
interface ManagerInterface
{
    /**
     * Timerのインスタンスを生成する
     *
     * @return \SimpleTimer\Interface\TimerInterface
     */
    public function make(): TimerInterface;

    /**
     * Timerのインスタンスを生成し、計測を開始する
     *
     * @return \SimpleTimer\Interface\TimerInterface
     */
    public function start(): TimerInterface;
}
