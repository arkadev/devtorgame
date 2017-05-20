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

    /**
     * Id del torneo al que esta asociado el equipo
     * @var type string
     */
    private $id_tournament;

    function __construct($name, $id_tournament)
    {
        $this->name = $name;
        $this->id_tournament = $id_tournament;
    }

    /**
     * Trae el id del torneo al que esta asociado el equipo
     * @return type string
     */
    public function getId_tournament()
    {
        return $this->id_tournament;
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
