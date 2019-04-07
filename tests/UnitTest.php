<?php

namespace Laraket\Me\Tests;

use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * UnitTestCase
 *
 * @category TestCase
 * @package  Laraket\Me\Tests
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
abstract class UnitTest extends TestCase
{
    /**
     * Tear down
     *
     * @return void
     */
    public function tearDown(): void
    {
        Mockery::close();
    }
}
