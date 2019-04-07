<?php

namespace Laraket\Me\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Queue\WorkerOptions;
use Illuminate\Support\Facades\Redis;

/**
 * IntegrationTest
 *
 * @category TestCase
 * @package  Laraket\Me\Tests
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
abstract class IntegrationTest extends TestCase
{
    /**
     * Setup the test case.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        // $this->loadLaravelMigrations(['--database' => 'testing']);

        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->artisan('migrate', ['--database' => 'testing'])->run();
    }

    /**
     * Tear down the test case.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        $this->artisan('migrate:reset', ['--database' => 'testing'])->run();
    }

    /**
     * Get the service providers for the package.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'Laraket\Me\MeServiceProvider',
            'Laraket\Me\Tests\Fixtures\BusinessMeServiceProvider',
        ];
    }

     /**
     * Override application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getApplicationAliases($app)
    {
        return [
            'Me' => 'Laraket\Me\Facades\MeFacade',
        ];
    }

    /**
     * Configure the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}