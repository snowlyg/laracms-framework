<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace 569616226\Laracms\Policies;

use 569616226\Laracms\Models\User;
use 569616226\Laracms\Models\File;

/**
 * 媒体授权策略
 *
 * Class WechatPolicy
 * @package 569616226\Laracms\Policies
 */
class FilePolicy extends Policy
{
    public function images(User $user, File $file)
    {
        return $user->can("manage_images");
    }

    public function annex(User $user, File $file)
    {
        return $user->can("manage_annex");
    }

}
