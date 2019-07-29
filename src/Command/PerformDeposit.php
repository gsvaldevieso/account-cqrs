<?php

namespace Bank\Command;

final class PerformDeposit implements Command
{
    /**
     * @var string
     */
    private $description;


    /**
     * @var int
     */
    private $accountNumber;


    /**
     * @var float
     */
    private $amount;


    /**
     * @param string $description
     * @param int    $accountNumber
     * @param float  $amount
     */
    public function __construct($description, $accountNumber, $amount)
    {
        $this->description = $description;
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
    }


    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }


    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
