<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    snowlyg <snowlyg@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/snowlyg/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace snowlyg\Laracms\Observers;

use snowlyg\Laracms\Models\Link;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 友情链接观察者
 *
 * Class LinkObserver
 * @package snowlyg\Laracms\Observers
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