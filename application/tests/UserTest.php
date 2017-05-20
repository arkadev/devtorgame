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
    
    function test_it_should_have_a_name_user()
    {
        $user = new User('root', '123');
        $name = $user->getName();
        $this->assertEquals('root', $name);
    }
    
    function test_it_should_have_a_password_user()
    {
        $user = new User('root', '123');
        $pass = $user->getPassword();
        $this->assertEquals('123', $pass);
    }

}
