<?php

namespace MegaDataBundle\Dto;

final class Location
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Coordinates
     */
    private $coordinates;

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return static
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Coordinates|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param Coordinates|null $coordinates
     * @return static
     */
    public function setCoordinates(Coordinates $coordinates = null)
    {
        $this->coordinates = $coordinates;

        return $this;
    }
}
