<?php

namespace SimpleTimer\Trait;

/**
 * Timerのラップタイムを管理する
 * 
 * @package SimpleTimer\Trait
 * 
 * @method float now()
 * @method string formatTimestamp(float $timestamp, ?string $format)
 * @method float getElapsedSeconds(float $from, float $to)
 * @method float secondsToMilliseconds(float $seconds)
 * @method float secondsToMinutes(float $seconds)
 * @method float secondsToHours(float $seconds)
 * 
 * @method float startTimeStamp()
 */
trait Lap
{
    /**
     * ラップタイムの秒単位一覧
     *
     * @var array<int, float>
     */
    private array $lapSeconds = [];


    /**
     * ラップタイムを秒単位で記録する
     *
     * @param float $timestamp
     * @return void
     */
    protected function setLapSecond(float $timestamp): void
    {
        // lapSecondsが空の場合は、startTimestampからの経過時間を記録する
        // そうでない場合は、直前のlapTimestampからの経過時間を記録する

        $this->lapSeconds[] = match (empty($this->lapSeconds)) {
            true  => $this->getElapsedSeconds($this->startTimeStamp(), $timestamp),
            false => $this->getElapsedSeconds($this->lapSeconds[count($this->lapSeconds) - 1], $timestamp - $this->startTimeStamp()),
        };
    }

    /**
     * ラップタイムを秒単位で記録する
     *
     * @return static
     */
    public function lap(): static
    {
        $this->setLapSecond($this->now());

        return $this;
    }

    /**
     * ラップタイムの一覧を秒単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapSeconds(): array
    {
        return $this->lapSeconds;
    }

    /**
     * ラップタイムの一覧をミリ秒単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapMilliseconds(): array
    {
        return array_map(fn ($lapSecond) => $this->secondsToMilliseconds($lapSecond), $this->lapSeconds());
    }

    /**
     * ラップタイムの一覧を分単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapMinutes(): array
    {
        return array_map(fn ($lapSecond) => $this->secondsToMinutes($lapSecond), $this->lapSeconds());
    }

    /**
     * ラップタイムの一覧を時間単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapHours(): array
    {
        return array_map(fn ($lapSecond) => $this->secondsToHours($lapSecond), $this->lapSeconds());
    }
}
