<?php

namespace 569616226\Laracms\Providers;

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
		 \569616226\Laracms\Models\WechatResponse::class                  => \569616226\Laracms\Policies\WechatResponsePolicy::class,
		 \569616226\Laracms\Models\WechatMenu::class                      => \569616226\Laracms\Policies\WechatMenuPolicy::class,
		 \569616226\Laracms\Models\Wechat::class                          => \569616226\Laracms\Policies\WechatPolicy::class,
		 \569616226\Laracms\Models\Article::class                         => \569616226\Laracms\Policies\ArticlePolicy::class,
		 \569616226\Laracms\Models\Block::class                           => \569616226\Laracms\Policies\BlockPolicy::class,
		 \569616226\Laracms\Models\Link::class                            => \569616226\Laracms\Policies\LinkPolicy::class,
		 \569616226\Laracms\Models\Project::class                         => \569616226\Laracms\Policies\ProjectPolicy::class,
		 \569616226\Laracms\Models\Slide::class                           => \569616226\Laracms\Policies\SlidePolicy::class,
		 \569616226\Laracms\Models\Category::class                        => \569616226\Laracms\Policies\CategoryPolicy::class,
		 \569616226\Laracms\Models\Navigation::class                      => \569616226\Laracms\Policies\NavigationPolicy::class,
		 \569616226\Laracms\Models\File::class                            => \569616226\Laracms\Policies\FilePolicy::class,
		 \569616226\Laracms\Models\Setting::class                         => \569616226\Laracms\Policies\SettingPolicy::class,
         \569616226\Laracms\Models\User::class                            => \569616226\Laracms\Policies\UserPolicy::class,
         \569616226\Laracms\Models\Page::class                            => \569616226\Laracms\Policies\PagePolicy::class,
         \569616226\Laracms\Models\Reply::class                           => \569616226\Laracms\Policies\ReplyPolicy::class,
         \569616226\Laracms\Models\Form::class                            => \569616226\Laracms\Policies\FormPolicy::class,

         \Spatie\Permission\Models\Role::class                             => \569616226\Laracms\Policies\RolePolicy::class,
         \Spatie\Permission\Models\Permission::class                       => \569616226\Laracms\Policies\PermissionPolicy::class,
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
