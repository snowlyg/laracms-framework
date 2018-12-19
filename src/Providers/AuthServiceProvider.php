<?php

namespace snowlyg\Laracms\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \snowlyg\Laracms\Models\WechatResponse::class                  => \snowlyg\Laracms\Policies\WechatResponsePolicy::class,
		 \snowlyg\Laracms\Models\WechatMenu::class                      => \snowlyg\Laracms\Policies\WechatMenuPolicy::class,
		 \snowlyg\Laracms\Models\Wechat::class                          => \snowlyg\Laracms\Policies\WechatPolicy::class,
		 \snowlyg\Laracms\Models\Article::class                         => \snowlyg\Laracms\Policies\ArticlePolicy::class,
		 \snowlyg\Laracms\Models\Block::class                           => \snowlyg\Laracms\Policies\BlockPolicy::class,
		 \snowlyg\Laracms\Models\Link::class                            => \snowlyg\Laracms\Policies\LinkPolicy::class,
		 \snowlyg\Laracms\Models\Project::class                         => \snowlyg\Laracms\Policies\ProjectPolicy::class,
		 \snowlyg\Laracms\Models\Slide::class                           => \snowlyg\Laracms\Policies\SlidePolicy::class,
		 \snowlyg\Laracms\Models\Category::class                        => \snowlyg\Laracms\Policies\CategoryPolicy::class,
		 \snowlyg\Laracms\Models\Navigation::class                      => \snowlyg\Laracms\Policies\NavigationPolicy::class,
		 \snowlyg\Laracms\Models\File::class                            => \snowlyg\Laracms\Policies\FilePolicy::class,
		 \snowlyg\Laracms\Models\Setting::class                         => \snowlyg\Laracms\Policies\SettingPolicy::class,
         \snowlyg\Laracms\Models\User::class                            => \snowlyg\Laracms\Policies\UserPolicy::class,
         \snowlyg\Laracms\Models\Page::class                            => \snowlyg\Laracms\Policies\PagePolicy::class,
         \snowlyg\Laracms\Models\Reply::class                           => \snowlyg\Laracms\Policies\ReplyPolicy::class,
         \snowlyg\Laracms\Models\Form::class                            => \snowlyg\Laracms\Policies\FormPolicy::class,

         \Spatie\Permission\Models\Role::class                             => \snowlyg\Laracms\Policies\RolePolicy::class,
         \Spatie\Permission\Models\Permission::class                       => \snowlyg\Laracms\Policies\PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
