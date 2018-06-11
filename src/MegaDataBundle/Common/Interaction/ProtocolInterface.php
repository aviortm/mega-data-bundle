<?php

namespace MegaDataBundle\Common\Interaction;

use MegaDataBundle\Operation\Locations\Get\Dto\Request\Request;
use MegaDataBundle\Operation\Locations\Get\Dto\Response\Response;

interface ProtocolInterface
{
    /**
     * @param Request $request
     * @return Response
     */
    public function locations(Request $request): Response;
}
