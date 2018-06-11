<?php

namespace MegaDataBundle\Common\Interaction;

use GuzzleHttp\Psr7\Uri;
use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface;
use Psr\Http\Message\UriInterface;

class BaseUrl implements UrlResolverInterface
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @param string $baseUrl
     */
    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(RequestInterface $request): UriInterface
    {
        return new Uri($this->baseUrl);
    }
}
