<?php

namespace MegaDataBundle\Interaction;

use MegaDataBundle\Common\Interaction\RemoteCallInterface;
use MegaDataBundle\Operation\Locations\Get\Dto\Request\Request;
use MegaDataBundle\Operation\Locations\Get\Dto\Response\BaseResponse;

final class Protocol implements ProtocolInterface
{
    /**
     * @var RemoteCallInterface
     */
    private $remoteCall;

    /**
     * @param RemoteCallInterface $remoteCall
     */
    public function __construct(RemoteCallInterface $remoteCall)
    {
        $this->remoteCall = $remoteCall;
    }

    /**
     * {@inheritdoc}
     */
    public function locations(Request $request): BaseResponse
    {
        return $this->remoteCall->invoke($request);
    }
}
