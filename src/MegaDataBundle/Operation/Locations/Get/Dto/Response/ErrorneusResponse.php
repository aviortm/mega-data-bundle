<?php

namespace MegaDataBundle\Operation\Locations\Get\Dto\Response;

use MegaDataBundle\Operation\Response\Error;

final class ErrorneusResponse extends BaseResponse
{
    /**
     * @var Error
     */
    private $data;

    /**
     * @return Error|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Error|null $data
     * @return static
     */
    public function setData(Error $data = null)
    {
        $this->data = $data;

        return $this;
    }
}
