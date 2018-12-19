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
use 569616226\Laracms\Models\Navigation;

/**
 * 导航授权策略
 *
 * Class NavigationPolicy
 * @package 569616226\Laracms\Policies
 */
class NavigationPolicy extends Policy
{
    public function index(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }

    public function create(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }

    public function update(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }

    public function destroy(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }
}
