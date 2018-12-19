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

use EasyWeChat\Factory;
use snowlyg\Laracms\Events\BehaviorLogEvent;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * 微信公众号模型
 *
 * Class Wechat
 * @package snowlyg\Laracms\Models
 */
class Wechat extends Model
{
    use SoftDeletes;
    
    public $table = 'wechat';
    protected $fillable = ['type', 'object_id', 'name', 'account', 'app_id', 'app_secret', 'url', 'token', 'qrcode', 'primary', 'certified'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'name';
    }

    public function app(){

        $config = config('wechat.default');
        $config['app_id'] = $this->app_id;
        $config['secret'] = $this->app_secret;

        return Factory::officialAccount($config);
    }
}
