<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    snowlyg <snowlyg@gmail.com>
 * @date      2018/09/25 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/snowlyg/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace snowlyg\Laracms\Observers;

use Ip;
use Request;
use snowlyg\Laracms\Models\Form;
use Illuminate\Support\Facades\Auth;


// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 表单观察者
 *
 * Class LinkObserver
 * @package snowlyg\Laracms\Observers
 */
class FormObserver
{
    public function creating(Form $form)
    {
        $ip                 = Request::ip();
        $location           = Ip::find($ip);
        $location           = is_array($location) && !empty($location) ? trim(implode(' ', array_slice($location,0,4))) : '未知';
        
        $form->object_id    = create_object_id();
        $form->user_id      = Auth::id();
        $form->status       = '1';
        $form->ip           = $ip;
        $form->location     = $location;
    
        $form->data = $form->data ?? '{}';
        if( is_array($form->data) ){
            $form->data = json_encode($form->data, JSON_UNESCAPED_UNICODE);
        }
    
    }

    public function updating(Form $form)
    {
    
    }
}