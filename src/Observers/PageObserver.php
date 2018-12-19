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

use snowlyg\Laracms\Models\Page;
use Illuminate\Support\Facades\Auth;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 单页面观察者
 *
 * Class PageObserver
 * @package snowlyg\Laracms\Observers
 */
class PageObserver
{
    public function creating(Page $page)
    {
        //
        $page->object_id = create_object_id();
        $page->status = '1';
        $page->order = 999;
        $page->created_op || $page->created_op = Auth::id();
        $page->updated_op || $page->updated_op = Auth::id();

    }

    public function updating(Page $page)
    {
        $page->updated_op = Auth::id();
    }

    public function saving(Page $page){
        $page->type = 'page';
        // XSS 过滤
//        $page->content = clean($page->content, 'user_article_body');
    }
}