<?php

namespace MegaDataBundle\Common\Interaction;

use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface as ApiRequestInterface;
use Psr\Http\Message\RequestInterface;

interface RequestTransformInterface
{
    /**
     * @param ApiRequestInterface $request
     * @return RequestInterface
     */
    public function transform(ApiRequestInterface $request): RequestInterface;
}
