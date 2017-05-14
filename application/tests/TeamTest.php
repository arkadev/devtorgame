<?php
require_once('application/libraries/Team.php');
//require '../libraries/Team.php';

class TeamTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    function it_should_have_a_first_name()
    {
        $team = new Team('Team');
        $name = $team->getName();
        $this->assertEquals('Team', $name);
    }
    
    /** @test */
    function it_should_have_a_set_name()
    {
        $team = new Team('Team');
        $team->setName('Team Unit Test');
        $name = $team->getName();
        $this->assertEquals('Team Unit Test', $name);
    }

}
