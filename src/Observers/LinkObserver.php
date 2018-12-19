<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace 569616226\Laracms\Observers;

use 569616226\Laracms\Models\Link;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 友情链接观察者
 *
 * Class LinkObserver
 * @package 569616226\Laracms\Observers
 */
class LinkObserver
{
    public function creating(Link $link)
    {
        //
    }

    public function updating(Link $link)
    {
        //
    }
}