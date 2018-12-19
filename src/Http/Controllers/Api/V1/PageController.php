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

namespace snowlyg\Laracms\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use snowlyg\Laracms\Http\Controllers\Api\Controller;
use snowlyg\Laracms\Transformers\PageTransformer;
use snowlyg\Laracms\Models\Page;

/**
 * 页面控制器
 *
 * Class PageController
 * @package snowlyg\Laracms\Http\Controllers\Api\V1
 */
class PageController extends Controller
{
    /**
     * 详情
     *
     * @param int $page_id
     * @return \Dingo\Api\Http\Response
     */
    public function show($page_id = 0)
    {
        $page = Page::where('id', intval($page_id))->where('status', '1')->first();
        if(!$page->id){ abort(404); }
        return $this->response->item($page, new PageTransformer());
    }

    /**
     * 关于我们
     *
     * @return mixed
     */
    public function about(){
        return $this->response->array(['content' => config("system.common.company.content") ]);
    }
}
