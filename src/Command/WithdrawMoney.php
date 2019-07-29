<?php

namespace Bank\Command;

final class WithdrawMoney implements Command
{
    /**
     * @var int
     */
    private $accountNumber;


    /**
     * @var float
     */
    private $amount;


    /**
     * @param int   $accountNumber
     * @param float $amount
     */
    public function __construct($accountNumber, $amount)
    {
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
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
