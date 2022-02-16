<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind('path.public', function() {
//            return base_path().'/../public_html';
//        });
//        $this->app->bind('path.public', function() {
//            return realpath(base_path().'/../public_html');
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //prevent the n+ 1 query
//        Model::preventLazyLoading(!app()->isProduction());
        $this->bootEloquentMorphsRelations();
        Paginator::useBootstrap();
    }

    private function bootEloquentMorphsRelations()
    {
        Relation::morphMap([
            Post::TABLE     => Post::class,
            User::TABLE     => User::class,
            Tag::TABLE      => Tag::class,
        ]);

    }
}
