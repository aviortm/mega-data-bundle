<?php

namespace MegaDataBundle\Dto;

use JMS\Serializer\Annotation as JMS;

final class Coordinates
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $lat;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $long;

    /**
     * @return string|null
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param string|null $lat
     * @return static
     */
    public function setLat(string $lat = null)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param string|null $long
     * @return static
     */
    public function setLong(string $long = null)
    {
        $this->long = $long;

        return $this;
    }
}
