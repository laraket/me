<?php 

namespace Laraket\Me\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Me Facade
 *
 * @category Facade
 * @package  Laraket\Me
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
class MeFacade extends Facade
{
    /**
     * Get Facade Accessor
     *
     * @return void
     */
    public static function getFacadeAccessor()
    {
        return 'me';
    }
}