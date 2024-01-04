<?php

namespace SimpleTimer\Trait;

/**
 * Timerのスプリットタイムを管理する
 * 
 * @package SimpleTimer\Trait
 * 
 * @method float now()
 * @method string formatTimestamp(float $timestamp, ?string $format)
 * @method float startTimeStamp()
 */
trait Split
{
    /**
     * スプリットタイムのタイムスタンプ一覧
     *
     * @var array<int, float>
     */
    private array $splitTimestamps = [];


    /**
     * スプリットタイムのタイムスタンプを記録する
     *
     * @param float $timestamp
     * @return void
     */
    protected function setSplitTimestamp(float $timestamp): void
    {
        $this->splitTimestamps[] = $timestamp;
    }

    /**
     * スプリットタイムを記録する
     *
     * @return static
     */
    public function split(): static
    {
        $this->setSplitTimestamp($this->now());

        return $this;
    }

    /**
     * スプリットタイムの一覧を取得する
     * 
     * @return array<int, float>
     */
    public function splitTimestamps(): array
    {
        return $this->splitTimestamps;
    }

    /**
     * 各スプリットタイムの経過時間の一覧を取得する
     * 
     * @return array<int, float>
     */
    public function splitElapsedSeconds(): array
    {
        $splitElapsedSeconds = [];

        $startTimestamp = $this->startTimeStamp();
        $splitTimestamps = $this->splitTimestamps();

        for ($i = 0; $i < count($splitTimestamps); $i++) {
            $splitElapsedSeconds[$i] = $splitTimestamps[$i] - $startTimestamp;
        }

        return $splitElapsedSeconds;
    }

    /**
     * スプリットタイムの記録時刻一覧を取得する
     * 
     * @param string|null $format
     * @return array<int, string>
     */
    public function splitDateTimes(string $format = null): array
    {
        return array_map(fn ($timestamp) => $this->formatTimestamp($timestamp, $format), $this->splitTimestamps());
    }
}
