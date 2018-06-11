<?php

namespace MegaDataBundle\Common\Interaction;

use GuzzleHttp\Psr7\Request;
use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface as ApiRequestInterface;
use Psr\Http\Message\RequestInterface;

final class RequestTransformer implements RequestTransformInterface
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var UrlResolverInterface
     */
    private $urlResolver;

    /**
     * @param string $method
     * @param UrlResolverInterface $urlResolver
     */
    public function __construct(
        $method,
        UrlResolverInterface $urlResolver
    ) {
        $this->method = $method;
        $this->urlResolver = $urlResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(ApiRequestInterface $request): RequestInterface
    {
        return
            new Request(
                $this->method,
                $this->urlResolver->resolve($request)
            );
    }
}
