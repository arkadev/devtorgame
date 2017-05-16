<?php
require_once('application/libraries/User.php');
/**
 * require 'package/class.php';
 * use @test

 */
class UserTest extends PHPUnit_Framework_TestCase
{

    function test_it_should_construct()
    {
        $user = new User('root','123');
        $this->assertInstanceOf(User::class, $user);
    }

}
