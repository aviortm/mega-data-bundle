<?php

namespace MegaDataBundle\Enumeration;

class ResponseType
{
    const SUCCESSFUL = 1;

    const ERRONEOUS = 2;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param mixed $value
     * @return static
     */
    final public static function create($value)
    {
        return new static($value);
    }

    /**
     * @return ResponseType
     */
    public static function successful()
    {
        return new self(self::SUCCESSFUL);
    }

    /**
     * @return ResponseType
     */
    public static function erroneous()
    {
        return new self(self::ERRONEOUS);
    }

    /**
     * @return boolean
     */
    public function isSuccessful()
    {
        return $this->value === self::SUCCESSFUL;
    }

    /**
     * @return boolean
     */
    public function isErroneous()
    {
        return $this->value === self::ERRONEOUS;
    }
}
