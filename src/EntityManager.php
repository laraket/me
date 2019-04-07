<?php 

namespace Laraket\Me;

/**
 * Entity Manager
 *
 * @category Manager
 * @package  Laraket\Me
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 * @link     https://github.com/swooliy/laraket/me
 */
class EntityManager
{
    protected $entity;

    /**
     * Constrcutor
     *
     * @param Entity $entity entity
     */
    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Save
     *
     * @param obj $entity entity
     * 
     * @return void
     */
    public function save($entity)
    {

        return $this->entity->save((array) $entity);
    }

    /**
     * __call
     *
     * @param string $method method
     * @param mixed  $params params
     * 
     * @return void
     */
    public function __call($method, $params)
    {
        return $this->entity->$method($params);
    }

}