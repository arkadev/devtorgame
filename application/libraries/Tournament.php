<?php

/**
 * @author jhonvegamas@gmail.com
 */
class Tournament
{

    private $name;
    private $description;
    private $image_url;
    private $color;

    function __construct($name, $description, $image_url, $color)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->color = $color;
    }

    public function getTournament()
    {
        $data = array(
            $this->name,
            $this->description,
            $this->image_url,
            $this->color
        );
        return $data;
    }

    public function getName()
    {
        return $this->name;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getImage_url()
    {
        return $this->image_url;
    }

    function getColor()
    {
        return $this->color;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setDescription($description)
    {
        $this->description = $description;
    }

    function setImage_url($image_url)
    {
        $this->image_url = $image_url;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

}
