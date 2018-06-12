<?php

namespace MegaDataBundle\Operation\Locations\Get\Dto\Response;

use JMS\Serializer\Annotation as JMS;
use MegaDataBundle\Common\Interaction\Dto\Response\ResponseInterface;

/**
 * @JMS\Discriminator(
 *     field = "success",
 *     map = {
 *      "": ErrorneusResponse::class,
 *      true: Response::class
 *      }
 * )
 */
abstract class BaseResponse implements ResponseInterface
{
    /**
     * @return bool
     */
    abstract public function getSuccess();
}
