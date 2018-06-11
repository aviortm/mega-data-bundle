<?php

namespace MegaDataBundle\Operation\Locations\Get\Dto\Response;

use JMS\Serializer\Annotation as JMS;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface;

/**
 * @JMS\Discriminator(
 *     field = "type",
 *     map = {
 *      "true": SuccessfulResponse::class,
 *      "false": ErrorneusResponse::class
 *      }
 * )
 */
abstract class BaseResponse implements ResponseInterface
{
    /**
     * @var bool
     */
    private $success;

    /**
     * @return bool|null
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool|null $success
     * @return static
     */
    public function setSuccess(bool $success = null)
    {
        $this->success = $success;

        return $this;
    }
}
