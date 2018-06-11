<?php

namespace MegaDataBundle\Operation\Locations\Get\Dto\Response;

use JMS\Serializer\Annotation as JMS;
use MegaDataBundle\Dto\Locations;

final class Response extends BaseResponse
{
    /**
     * @var Locations
     *
     * @JMS\Type(Locations::class)
     */
    private $data;

    /**
     * @return Locations|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Locations|null $data
     * @return static
     */
    public function setData(Locations $data = null)
    {
        $this->data = $data;

        return $this;
    }
}
