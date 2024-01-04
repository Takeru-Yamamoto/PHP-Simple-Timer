<?php

namespace SimpleTimer\Trait;

/**
 * Timerの計測開始時を管理する
 * 
 * @package SimpleTimer\Trait
 * 
 * @method float now()
 * @method string formatTimestamp(float $timestamp, ?string $format)
 */
trait Start
{
    /**
     * 計測開始時のタイムスタンプ
     *
     * @var float
     */
    private float $startTimestamp = 0;


    /**
     * 計測開始時のタイムスタンプを記録する
     *
     * @param float $timestamp
     * @return void
     */
    protected function setStartTimestamp(float $timestamp): void
    {
        $this->startTimestamp = $timestamp;
    }

    /**
     * 計測開始
     *
     * @return static
     */
    public function start(): static
    {
        $this->setStartTimestamp($this->now());

        return $this;
    }

    /**
     * 計測開始時のタイムスタンプを取得する
     * 
     * @return float
     */
    public function startTimeStamp(): float
    {
        return $this->startTimestamp;
    }

    /**
     * 計測開始時刻を取得する
     * 
     * @param string|null $format
     * @return string
     */
    public function startDateTime(string $format = null): string
    {
        return $this->formatTimestamp($this->startTimeStamp(), $format);
    }
}
