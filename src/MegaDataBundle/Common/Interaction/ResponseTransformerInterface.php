<?php

namespace MegaDataBundle\Common\Interaction;

use MegaDataBundle\Common\Interaction\Exception\RemoteCallException;
use Psr\Http\Message\ResponseInterface;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface as ApiResponseInterface;

interface ResponseTransformerInterface
{
    /**
     * @param ResponseInterface $response
     * @return ApiResponseInterface
     * @throws RemoteCallException
     */
    public function transform(ResponseInterface $response): ApiResponseInterface;
}
