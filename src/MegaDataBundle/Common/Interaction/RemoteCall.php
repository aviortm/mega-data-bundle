<?php

namespace MegaDataBundle\Common\Interaction;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\TransferException;
use MegaDataBundle\Common\Interaction\Dto\Request\RequestInterface as ApiRequestInterface;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface as ApiResponseInterface;
use MegaDataBundle\Common\Interaction\Exception\RemoteCallException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RemoteCall implements RemoteCallInterface
{
    /**
     * @var ClientInterface
     */
    private $transport;

    /**
     * @var RequestTransformInterface
     */
    private $requestTransform;

    /**
     * @var ResponseTransformerInterface
     */
    private $responseTransformer;

    /**
     * @param ClientInterface $transport
     * @param RequestTransformInterface $requestAssembler
     * @param ResponseTransformerInterface $responseParser
     */
    public function __construct(
        ClientInterface $transport,
        RequestTransformInterface $requestAssembler,
        ResponseTransformerInterface $responseParser
    ) {
        $this->transport = $transport;
        $this->requestTransform = $requestAssembler;
        $this->responseTransformer = $responseParser;
    }

    /**
     * {@inheritdoc}
     */
    public function invoke(ApiRequestInterface $apiRequest): ApiResponseInterface
    {
        $httpRequest = $this->requestTransform->transform($apiRequest);

        try {
            $httpResponse = $this->send($httpRequest);
            var_dump($httpResponse);
        } catch (TransferException $e) {
            throw new RemoteCallException('Remote call exception occurred', 0, $e);
        }

        return $this->responseTransformer->transform($httpResponse);
    }

    /**
     * @param RequestInterface $httpRequest
     * @return ResponseInterface
     * @throws BadResponseException
     */
    private function send(RequestInterface $httpRequest): ResponseInterface
    {
        try {
            return $this->transport->send($httpRequest);
        } catch (BadResponseException $e) {
            if (!$e->hasResponse()) {
                throw $e;
            }

            return $e->getResponse();
        }
    }
}
