<?php

namespace SimpleTimer\Trait;

/**
 * Timerの共通部分を管理する
 * 
 * @package SimpleTimer\Trait
 */
trait Common
{
    /**
     * タイムスタンプのフォーマット
     *
     * @var string
     */
    protected string $format = "Y-m-d H:i:s";


    /**
     * 現在のタイムスタンプを取得する
     *
     * @return float
     */
    protected function now(): float
    {
        return microtime(true);
    }

    /**
     * タイムスタンプをフォーマットする
     *
     * @param float $timestamp
     * @param string|null $format
     * @return string
     */
    protected function formatTimestamp(float $timestamp, ?string $format): string
    {
        if(is_null($format)) $format = $this->format;

        return date($format, $timestamp);
    }

    /**
     * 経過時間を秒単位で取得する
     *
     * @param float $from
     * @param float $to
     * @return float
     */
    protected function getElapsedSeconds(float $from, float $to): float
    {
        return $to - $from;
    }

    /**
     * 秒単位をミリ秒単位に変換する
     * 
     * @param float $seconds
     * @return float
     */
    protected function secondsToMilliseconds(float $seconds): float
    {
        return $seconds * 1000;
    }

    /**
     * 秒単位を分単位に変換する
     * 
     * @param float $seconds
     * @return float
     */
    protected function secondsToMinutes(float $seconds): float
    {
        return $seconds / 60;
    }

    /**
     * 秒単位を時間単位に変換する
     * 
     * @param float $seconds
     * @return float
     */
    protected function secondsToHours(float $seconds): float
    {
        return $this->secondsToMinutes($seconds) / 60;
    }
}
