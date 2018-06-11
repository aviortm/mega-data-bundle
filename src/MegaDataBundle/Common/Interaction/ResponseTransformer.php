<?php

namespace MegaDataBundle\Common\Interaction;

use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
use MegaDataBundle\Common\Interaction\Exception\RemoteCallException;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface as ApiResponseInterface;
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
     * @param SerializerInterface $serializer
     * @param string $format
     * @param string $requestClass
     */
    public function __construct(SerializerInterface $serializer, string $format, string $requestClass)
    {
        $this->serializer = $serializer;
        $this->format = $format;
        $this->requestClass = $requestClass;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(ResponseInterface $response): ApiResponseInterface
    {var_dump((string) $response->getBody());
        try {
            return
                $this->serializer->deserialize(
                    (string) $response->getBody(),
                    $this->requestClass,
                    $this->format
                );
        } catch (Throwable $e) {
            throw new RemoteCallException('Unable to deserialize response body', 0, $e);
        }
    }
}
