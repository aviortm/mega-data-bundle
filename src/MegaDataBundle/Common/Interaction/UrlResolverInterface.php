<?php

namespace MegaDataBundle\Common\Interaction;

use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface;
use Psr\Http\Message\UriInterface;

interface UrlResolverInterface
{
    /**
     * @param RequestInterface $request
     * @return UriInterface
     */
    public function resolve(RequestInterface $request): UriInterface;
}
