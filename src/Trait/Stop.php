<?php

namespace SimpleTimer\Trait;

/**
 * Timerの計測終了時を管理する
 * 
 * @package SimpleTimer\Trait
 * 
 * @method float now()
 * @method string formatTimestamp(float $timestamp, ?string $format)
 * 
 * @method void setSplitTimestamp(float $timestamp)
 * @method void setLapSecond(float $timestamp)
 */
trait Stop
{
    /**
     * 計測終了時のタイムスタンプ
     *
     * @var float
     */
    private float $stopTimestamp = 0;


    /**
     * 計測終了時のタイムスタンプを記録する
     *
     * @param float $timestamp
     * @return void
     */
    protected function setStopTimestamp(float $timestamp): void
    {
        $this->stopTimestamp = $timestamp;
    }

    /**
     * 計測終了
     *
     * @return static
     */
    public function stop(): static
    {
        $stopTimestamp = $this->now();

        $this->setStopTimestamp($stopTimestamp);

        $this->setSplitTimestamp($stopTimestamp);

        $this->setLapSecond($stopTimestamp);

        return $this;
    }

    /**
     * 計測終了時のタイムスタンプを取得する
     * 
     * @return float
     */
    public function stopTimeStamp(): float
    {
        return $this->stopTimestamp;
    }

    /**
     * 計測終了時刻を取得する
     * 
     * @param string|null $format
     * @return string
     */
    public function stopDateTime(string $format = null): string
    {
        return $this->formatTimestamp($this->stopTimeStamp(), $format);
    }
}
