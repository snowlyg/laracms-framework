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
use snowlyg\Laracms\Transformers\PermissionTransformer;

/**
 * 权限控制器
 *
 * Class PermissionsController
 * @package snowlyg\Laracms\Http\Controllers\Api\V1
 */
class PermissionsController extends Controller
{
    /**
     * 列表
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $permissions = $this->user()->getAllPermissions();

        return $this->response->collection($permissions, new PermissionTransformer());
    }
}
