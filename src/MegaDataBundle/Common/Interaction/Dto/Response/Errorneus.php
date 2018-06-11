<?php

namespace MegaDataBundle\Common\Interaction\Dto\Response;

use MegaDataBundle\Enumeration\ResponseType;

final class Errorneus implements ResponseInterface
{
    /**
     * @return ResponseType
     */
    public function getType(): ResponseType
    {
        return ResponseType::erroneous();
    }
}
