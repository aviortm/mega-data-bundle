<?php

namespace MegaDataBundle\Common\Interaction;

use MegaDataBundle\Operation\Locations\Get\Dto\Request\Request;
use MegaDataBundle\Operation\Locations\Get\Dto\Response\BaseResponse;

interface ProtocolInterface
{
    /**
     * @param Request $request
     * @return BaseResponse
     */
    public function locations(Request $request): BaseResponse;
}
