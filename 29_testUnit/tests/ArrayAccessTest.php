<?php

use Game\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_offset_get()
    {
        $user = new UserTest([
            'name' => 'Johan Freitez',
            'email' => 'johanfreitez@gmail.com',
            'website' => 'https://styde.net',
        ]);

        $this->assertSame('Johan Freitez', $user['name']);//$user->name

        $this->assertSame('johanfreitez@gmail.com', $user['name']); //$user->email

        $this->assertSame('https://styde.net', $user['website']); // $user->website
    }

    public function test_offset_exists()
    {
        $user = new UserTest([
            'name' => 'Johan Freitez',
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

    /** @test **/
    function it_set_and_get_values_with_array_access()
    {
        $user = new UserTest;

        $user['name'] = 'Johan Freitez';

        $this->assertSame('Johan Freitez', $user['name']);
    }

    /** @test **/
    function it_can_set_and_unset_properties_with_array_access()
    {
        $user = new UserTest;

        $user['name'] = 'Johan Freitez';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);        

        $this->assertFalse(isset($user['name']));
    }

}

class UserTest extends Model implements ArrayAccess {

    // isset - empty
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    // unset
    public function offsetUnset($offset)
    {
        unset ($this->$offset);
    }

}








