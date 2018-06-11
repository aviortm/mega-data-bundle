<?php

namespace MegaDataBundle\Dto;

use JMS\Serializer\Annotation as JMS;

final class Locations
{
    /**
     * @var Location[]
     *
     * @JMS\Type("array<MegaDataBundle\Dto\Location>")
     */
    private $locations;

    /**
     * @return Location[]|null
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param Location[]|null $locations
     * @return static
     */
    public function setLocations(array $locations = null)
    {
        $this->locations = $locations;

        return $this;
    }
}
