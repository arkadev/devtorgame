<?php

/**
 * @author jhonvegamas@gmail.com
 */
class Team
{

    /**
     * Nombre del equipo
     * @var type string
     */
    private $name;

    function __construct($name = '')
    {
        $this->name = $name;
    }

    /**
     * Trae el nombre del equipo
     * @return type string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Cambia el nombre del equipo
     * @param type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
