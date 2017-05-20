<?php

/**
 * @author jhonvegamas@gmail.com
 */
class User
{

    /**
     * Nombre del usuario
     * @var type string
     */
    private $name;
    /**
     * Contraseña del usuario
     * @var type string
     */
    private $password;

    /**
     * Clase Usuario
     * @param type $name
     * @param type $password
     */
    function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * Trae la contraseña del usuario
     * @return type string
     */
    function getPassword()
    {
        return $this->password;
    }

    /**
     * Trae el nombre del usuario
     * @return type string
     */
    function getName()
    {
        return $this->name;
    }

}
