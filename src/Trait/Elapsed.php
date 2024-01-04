<?php

namespace SimpleTimer\Trait;

/**
 * Timerの経過時間を管理する
 * 
 * @package SimpleTimer\Trait
 * 
 * @method float getElapsedSeconds(float $from, float $to)
 * @method float secondsToMilliseconds(float $seconds)
 * @method float secondsToMinutes(float $seconds)
 * @method float secondsToHours(float $seconds)
 * 
 * @method float startTimeStamp()
 * @method float stopTimeStamp()
 */
trait Elapsed
{
    /**
     * 経過時間を秒単位で取得する
     * 
     * @return float
     */
    public function elapsedSeconds(): float
    {
        return $this->getElapsedSeconds($this->startTimeStamp(), $this->stopTimeStamp());
    }

    /**
     * 経過時間をミリ秒単位で取得する
     * 
     * @return float
     */
    public function elapsedMilliseconds(): float
    {
        return $this->secondsToMilliseconds($this->elapsedSeconds());
    }

    /**
     * 計測時間を分単位で取得する
     * 
     * @return float
     */
    public function elapsedMinutes(): float
    {
        return $this->secondsToMinutes($this->elapsedSeconds());
    }

    /**
     * 計測時間を時間単位で取得する
     * 
     * @return float
     */
    public function elapsedHours(): float
    {
        return $this->secondsToHours($this->elapsedSeconds());
    }
}
