<?php

namespace SimpleTimer\Interface;

/**
 * TimerのInterface
 * 
 * @package SimpleTimer\Interface
 */
interface TimerInterface
{
    /*----------------------------------------*
     * Start
     *----------------------------------------*/

    /**
     * 計測開始
     *
     * @return static
     */
    public function start(): static;

    /**
     * 計測開始時のタイムスタンプを取得する
     * 
     * @return float
     */
    public function startTimeStamp(): float;

    /**
     * 計測開始時刻を取得する
     * 
     * @param string|null $format
     * @return string
     */
    public function startDateTime(string $format = null): string;



    /*----------------------------------------*
     * Stop
     *----------------------------------------*/

    /**
     * 計測終了
     *
     * @return static
     */
    public function stop(): static;

    /**
     * 計測終了時のタイムスタンプを取得する
     * 
     * @return float
     */
    public function stopTimeStamp(): float;

    /**
     * 計測終了時刻を取得する
     * 
     * @param string|null $format
     * @return string
     */
    public function stopDateTime(string $format = null): string;



    /*----------------------------------------*
     * Elapsed
     *----------------------------------------*/

    /**
     * 経過時間を秒単位で取得する
     * 
     * @return float
     */
    public function elapsedSeconds(): float;

    /**
     * 経過時間をミリ秒単位で取得する
     * 
     * @return float
     */
    public function elapsedMilliseconds(): float;

    /**
     * 計測時間を分単位で取得する
     * 
     * @return float
     */
    public function elapsedMinutes(): float;

    /**
     * 計測時間を時間単位で取得する
     * 
     * @return float
     */
    public function elapsedHours(): float;



    /*----------------------------------------*
     * Split
     *----------------------------------------*/

    /**
     * スプリットタイムを記録する
     *
     * @return static
     */
    public function split(): static;

    /**
     * スプリットタイムの一覧を取得する
     * 
     * @return array<int, float>
     */
    public function splitTimestamps(): array;

    /**
     * 各スプリットタイムの経過時間の一覧を取得する
     * 
     * @return array<int, float>
     */
    public function splitElapsedSeconds(): array;

    /**
     * スプリットタイムの記録時刻一覧を取得する
     * 
     * @param string|null $format
     * @return array<int, string>
     */
    public function splitDateTimes(string $format = null): array;



    /*----------------------------------------*
     * Lap
     *----------------------------------------*/

    /**
     * ラップタイムを秒単位で記録する
     *
     * @return static
     */
    public function lap(): static;

    /**
     * ラップタイムの一覧を秒単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapSeconds(): array;

    /**
     * ラップタイムの一覧をミリ秒単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapMilliseconds(): array;

    /**
     * ラップタイムの一覧を分単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapMinutes(): array;

    /**
     * ラップタイムの一覧を時間単位で取得する
     * 
     * @return array<int, float>
     */
    public function lapHours(): array;
}
