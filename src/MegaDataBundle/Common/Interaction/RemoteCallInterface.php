<?php

namespace MegaDataBundle\Common\Interaction;

use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface;
use MegaDataBundle\Common\Interaction\Exception\RemoteCallException;

interface RemoteCallInterface
{
    /**
     * @param RequestInterface $apiRequest
     * @return ResponseInterface
     * @throws RemoteCallException
     */
    public function invoke(RequestInterface $apiRequest): ResponseInterface;
}
