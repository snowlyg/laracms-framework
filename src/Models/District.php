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

namespace snowlyg\Laracms\Models;

/**
 * 中国行政区
 *
 * Class Block
 * @package snowlyg\Laracms\Models
 */
class District extends Model
{
    protected $fillable = ['id','citycode', 'adcode', 'name', 'level', 'center', 'parent'];
}
