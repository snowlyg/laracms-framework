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

namespace 569616226\Laracms\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use 569616226\Laracms\Models\Setting;
use 569616226\Laracms\Handlers\AdministratorMenuHandler;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
	    // 注册模型观察者
		\569616226\Laracms\Models\User::observe(                  \569616226\Laracms\Observers\UserObserver::class);
		\569616226\Laracms\Models\WechatMenu::observe(            \569616226\Laracms\Observers\WechatMenuObserver::class);
		\569616226\Laracms\Models\Wechat::observe(                \569616226\Laracms\Observers\WechatObserver::class);
		\569616226\Laracms\Models\Block::observe(                 \569616226\Laracms\Observers\BlockObserver::class);
		\569616226\Laracms\Models\Link::observe(                  \569616226\Laracms\Observers\LinkObserver::class);
		\569616226\Laracms\Models\Project::observe(               \569616226\Laracms\Observers\ProjectObserver::class);
		\569616226\Laracms\Models\Category::observe(              \569616226\Laracms\Observers\CategoryObserver::class);
		\569616226\Laracms\Models\Navigation::observe(            \569616226\Laracms\Observers\NavigationObserver::class);
		\569616226\Laracms\Models\Page::observe(                  \569616226\Laracms\Observers\PageObserver::class);
		\569616226\Laracms\Models\Article::observe(               \569616226\Laracms\Observers\ArticleObserver::class);
		\569616226\Laracms\Models\Slide::observe(                 \569616226\Laracms\Observers\SlideObserver::class);
		\569616226\Laracms\Models\File::observe(                  \569616226\Laracms\Observers\FileObserver::class);
		\569616226\Laracms\Models\WechatResponse::observe(        \569616226\Laracms\Observers\WechatResponseObserver::class);
		\569616226\Laracms\Models\Reply::observe(                 \569616226\Laracms\Observers\ReplyObserver::class);
		\569616226\Laracms\Models\Log::observe(                   \569616226\Laracms\Observers\LogObserver::class);
		\569616226\Laracms\Models\MultipleFile::observe(          \569616226\Laracms\Observers\MultipleFileObserver::class);
		\569616226\Laracms\Models\Form::observe(                  \569616226\Laracms\Observers\FormObserver::class);

        // 设置时区
        \Carbon\Carbon::setLocale('zh');


        // 检测是否在命令行模式
        if ($this->app->runningInConsole()) {
           // 命令行模式
        }
        else{
            // 非命令行模式
            Setting::afflux();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
