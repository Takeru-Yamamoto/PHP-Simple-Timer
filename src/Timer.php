<?php

namespace SimpleTimer;

use SimpleTimer\Interface\TimerInterface;

use SimpleTimer\Trait\Common;
use SimpleTimer\Trait\Start;
use SimpleTimer\Trait\Stop;
use SimpleTimer\Trait\Elapsed;
use SimpleTimer\Trait\Split;
use SimpleTimer\Trait\Lap;

/**
 * 計測開始から計測終了までの経過時間を計測する
 * スプリットタイムとラップタイムの記録も可能
 * 
 * @package SimpleTimer
 */
class Timer implements TimerInterface
{
    use Common;
    use Start;
    use Stop;
    use Elapsed;
    use Split;
    use Lap;
}
