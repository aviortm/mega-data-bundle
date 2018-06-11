<?php

namespace MegaDataBundle\Common\Interaction;

use GuzzleHttp\Psr7\Uri;
use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface;
use Psr\Http\Message\UriInterface;

class Parameterizable implements UrlResolverInterface
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $queryString;

    /**
     * @param string $baseUrl
     * @param string $queryString
     */
    public function __construct(string $baseUrl, string $queryString)
    {var_dump($baseUrl);
        $this->baseUrl = $baseUrl;
        $this->queryString = $queryString;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(RequestInterface $request): UriInterface
    {
        return new Uri($this->baseUrl);
    }
}
