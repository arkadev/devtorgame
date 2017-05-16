<?php

require_once('application/libraries/Tournament.php');

/**
 * require 'package/class.php';
 * use @test
 * $this->assertInstanceOf(Object::class, $object);
 */
class TournamentTest extends PHPUnit_Framework_TestCase
{

    function test_it_should_construct()
    {
        $tournament = new Tournament('UPTC', 'Torneo de la U', '/img/foto.png', '#ffff');
        $this->assertInstanceOf(Tournament::class, $tournament);
    }
    
    function test_is_should_equal_tournament(){
        
    }

}
