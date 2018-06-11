<?php

namespace MegaDataBundle\Operation\Dto\Traits;

use MegaDataBundle\Enumeration\ResponseType;

trait SuccessfulResponseType
{
    /**
     * @return ResponseType
     */
    public function getType(): ResponseType
    {
        return ResponseType::successful();
    }
}
