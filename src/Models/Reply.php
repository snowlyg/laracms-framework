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

use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * 回复模型
 *
 * Class Reply
 * @package snowlyg\Laracms\Models
 */
class Reply extends Model
{
//    use SoftDeletes;
    protected $fillable = ['content'];
    
//    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
