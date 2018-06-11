<?php

namespace MegaDataBundle\Common\Interaction;

use JMS\Serializer\SerializerInterface;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface;
use MegaDataBundle\Common\Interaction\Exception\RemoteCallException;
use Psr\Http\Message\ResponseInterface as ApiResponseInterface;
use Throwable;

final class ResponseTransformer implements ResponseTransformerInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $requestClass;

    /**
     * {@inheritdoc}
     */
    public function transform(ResponseInterface $request): ApiResponseInterface
    {
        try {
            return
                $this->serializer->deserialize(
                    (string) $request->getBody(),
                    $this->requestClass,
                    $this->format
                );
        } catch (Throwable $e) {
            throw new RemoteCallException('Unable to deserialize response body', 0, $e);
        }
    }
}
