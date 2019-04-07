<?php 

namespace Laraket\Me;

use Illuminate\Database\Eloquent\Model; 

/**
 * Entity
 *
 * @category Model
 * @package  Laraket\Me
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
class Entity extends Model
{
    protected $table = 'entities';

    protected $attributes = [
        'id' => '',
        'entity_type' => '',
        'entity_content' => '',
        'status' => 0,
    ];
    
}