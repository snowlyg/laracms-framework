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
use 569616226\Laracms\Models\Slide;

/**
 * 幻灯授权策略
 *
 * Class SlidePolicy
 * @package 569616226\Laracms\Policies
 */
class SlidePolicy extends Policy
{
    public function index(User $user, Slide $slide)
    {
        return $user->can("manage_slide");
    }

    public function manage(User $user, Slide $slide)
    {
        return $user->can("manage_slide");
    }

    public function create(User $user, Slide $slide)
    {
        return $user->can("manage_slide");
    }

    public function update(User $user, Slide $slide)
    {
        return $user->can("manage_slide");
    }

    public function destroy(User $user, Slide $slide)
    {
        return $user->can("manage_slide");
    }
}
