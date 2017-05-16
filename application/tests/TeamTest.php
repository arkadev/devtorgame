<?php
require_once('application/libraries/Team.php');

class TeamTest extends PHPUnit_Framework_TestCase
{

    function test_it_should_construct(){
        $team = new Team('Team','1');
        $this->assertInstanceOf(Team::class, $team);
    }

    function test_it_should_have_a_team_name()
    {
        $team = new Team('Team','1');
        $name = $team->getName();
        $this->assertEquals('Team_', $name);
    }

    function test_it_should_have_a_tournament_id()
    {
        $team = new Team('Team','1');
        $id = $team->getId_tournament();
        $this->assertEquals('1', $id);
    }

    function test_it_should_have_a_set_name()
    {
        $team = new Team('Team','1');
        $team->setName('Team Unit Test');
        $name = $team->getName();
        $this->assertEquals('Team Unit Test', $name);
    }

}
