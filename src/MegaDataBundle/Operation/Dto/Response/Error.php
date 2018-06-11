<?php

namespace MegaDataBundle\Operation\Response;

use JMS\Serializer\Annotation as JMS;

final class Error
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $message;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $code;

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return static
     */
    public function setMessage(string $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return static
     */
    public function setCode(string $code = null)
    {
        $this->code = $code;

        return $this;
    }
}
