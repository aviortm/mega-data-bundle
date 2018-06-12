<?php

namespace MegaDataBundle\Operation\Locations\Get\Dto\Response;

use JMS\Serializer\Annotation as JMS;
use MegaDataBundle\Operation\Dto\Response\Error;

class ErrorneusResponse extends BaseResponse
{
    /**
     * @var Error
     *
     * @JMS\Type(Error::class)
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

    /**
     * {@inheritdoc}
     */
    public function getSuccess()
    {
        return "";
    }
}
