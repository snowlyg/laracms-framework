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

namespace snowlyg\Laracms\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use snowlyg\Laracms\Models\Setting;
use snowlyg\Laracms\Handlers\AdministratorMenuHandler;


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
		\snowlyg\Laracms\Models\User::observe(                  \snowlyg\Laracms\Observers\UserObserver::class);
		\snowlyg\Laracms\Models\WechatMenu::observe(            \snowlyg\Laracms\Observers\WechatMenuObserver::class);
		\snowlyg\Laracms\Models\Wechat::observe(                \snowlyg\Laracms\Observers\WechatObserver::class);
		\snowlyg\Laracms\Models\Block::observe(                 \snowlyg\Laracms\Observers\BlockObserver::class);
		\snowlyg\Laracms\Models\Link::observe(                  \snowlyg\Laracms\Observers\LinkObserver::class);
		\snowlyg\Laracms\Models\Project::observe(               \snowlyg\Laracms\Observers\ProjectObserver::class);
		\snowlyg\Laracms\Models\Category::observe(              \snowlyg\Laracms\Observers\CategoryObserver::class);
		\snowlyg\Laracms\Models\Navigation::observe(            \snowlyg\Laracms\Observers\NavigationObserver::class);
		\snowlyg\Laracms\Models\Page::observe(                  \snowlyg\Laracms\Observers\PageObserver::class);
		\snowlyg\Laracms\Models\Article::observe(               \snowlyg\Laracms\Observers\ArticleObserver::class);
		\snowlyg\Laracms\Models\Slide::observe(                 \snowlyg\Laracms\Observers\SlideObserver::class);
		\snowlyg\Laracms\Models\File::observe(                  \snowlyg\Laracms\Observers\FileObserver::class);
		\snowlyg\Laracms\Models\WechatResponse::observe(        \snowlyg\Laracms\Observers\WechatResponseObserver::class);
		\snowlyg\Laracms\Models\Reply::observe(                 \snowlyg\Laracms\Observers\ReplyObserver::class);
		\snowlyg\Laracms\Models\Log::observe(                   \snowlyg\Laracms\Observers\LogObserver::class);
		\snowlyg\Laracms\Models\MultipleFile::observe(          \snowlyg\Laracms\Observers\MultipleFileObserver::class);
		\snowlyg\Laracms\Models\Form::observe(                  \snowlyg\Laracms\Observers\FormObserver::class);

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
