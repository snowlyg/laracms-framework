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
use snowlyg\Laracms\Transformers\BlockTransformer;
use snowlyg\Laracms\Models\Block;

/**
 * 区块控制器
 *
 * Class BlockController
 * @package snowlyg\Laracms\Http\Controllers\Api\V1
 */
class BlockController extends Controller
{
    /**
     * 详情
     *
     * @param int $block_id
     * @return \Dingo\Api\Http\Response
     */
    public function show($block_id = 0)
    {
        $block = get_block($block_id);
        if( !$block ){ abort(404); }
        return $this->response->item($block, new BlockTransformer());
    }
}
