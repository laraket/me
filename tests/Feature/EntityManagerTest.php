<?php 

namespace Laraket\Me\Tests\Feature;

use Me;
use Laraket\Me\Tests\IntegrationTest;
use Laraket\Me\Tests\Fixtures\BusinessMe;

class EntityManagerTest extends IntegrationTest 
{

    /**
     * Test save
     *
     * @return void
     */
    public function test_entity_save()
    {
        $businessMe = new BusinessMe;
        $businessMe->name = 'business one';
        $businessMe->description = 'business description';

        Me::save($businessMe);
    }
}