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

use snowlyg\Laracms\Models\Wechat;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 微信公众号菜单观察者
 *
 * Class WechatObserver
 * @package snowlyg\Laracms\Observers
 */
class WechatObserver
{
    public function creating(Wechat $wechat)
    {
        $wechat->object_id || $wechat->object_id = create_object_id();

    }

    public function saving(Wechat $wechat){
        $wechat->token || $wechat->token = str_random(64);
    }

    public function updating(Wechat $wechat)
    {
        //
    }
}