<?php 

namespace Laraket\Me;

use Illuminate\Support\ServiceProvider;

/**
 * Me Service Provider
 *
 * @category Service
 * @package  Laraket\Me
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
class MeServiceProvider extends ServiceProvider
{
    /**
     * Boot
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            'me', 
            function ($app) {
                return new EntityManager($app->make(Entity::class));
            }
        );

        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");

        if (!class_exists('Me')) {
            class_alias('Me', Facades\MeFacade::class);
        }
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
    }
}