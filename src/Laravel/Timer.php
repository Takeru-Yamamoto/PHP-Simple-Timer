<?php

namespace SimpleTimer\Laravel;

use SimpleTimer\Laravel\Interface\TimerInterface;

use SimpleTimer\Timer as SimpleTimer;

/**
 * \SimpleTimer\Timerを継承し、Laravel用に拡張したTimer
 * 
 * @package SimpleTimer\Laravel
 */
class Timer extends SimpleTimer implements TimerInterface
{
}
