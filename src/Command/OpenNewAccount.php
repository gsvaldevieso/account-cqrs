<?php

namespace Bank\Command;

final class OpenNewAccount implements Command
{
    /**
     * @var int
     */
    private $number;


    /**
     * @var string
     */
    private $owner;


    /**
     * @param int    $number
     * @param string $owner
     */
    public function __construct(int $number, string $owner)
    {
        $this->number = $number;
        $this->owner = $owner;
    }


    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }


    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
