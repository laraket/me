<?php 

namespace Laraket\Me;

use Illuminate\Database\Eloquent\Model;

/**
 * MeIndex Model
 *
 * @category Model
 * @package  Laraket\Me
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
class MeIndex extends Model
{
    protected $table = 'me_indexs';

    protected $attributes = [
        'id' => '',
        'me_name' => '',
        'me_attributes' => '',
        'status' => 0,
        'creadted' => '',
        'updated_at' => '',
    ];
}