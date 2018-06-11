<?php

namespace MegaDataBundle\Operation\Locations\Get\Dto\Response;

use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface;

final class Response implements ResponseInterface
{
    /**
     * @var Location[]
     */
    private $data;
}
