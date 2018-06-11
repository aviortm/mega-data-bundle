<?php

namespace MegaDataBundle\Dto;

use JMS\Serializer\Annotation as JMS;

final class Location
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $name;

    /**
     * @var Coordinates
     *
     * @JMS\Type(Coordinates::class)
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
