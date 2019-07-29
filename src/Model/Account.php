<?php

namespace Bank\Model;

final class Account
{
    const INITIAL_BALANCE = 0.00;


    /**
     * @var int
     */
    private $number;


    /**
     * @var string
     */
    private $owner;


    /**
     * @var float
     */
    private $balance;


    /**
     * @param int    $number
     * @param string $owner
     * @param float  $balance
     */
    public function __construct($number, $owner, $balance)
    {
        $this->number = $number;
        $this->owner = $owner;
        $this->balance = $balance;
    }


    /**
     * @param int    $number
     * @param string $owner
     * @return Account
     */
    public static function open(int $number, string $owner): Account
    {
        return new self(
            $number,
            $owner,
            self::INITIAL_BALANCE
        );
    }


    /**
     * @param float $amount
     */
    public function withdraw(float $amount): void
    {
        if ($this->balance <= $amount) {
            throw new AccountException('the account has no funds');
        }

        $this->balance -= $amount;
    }


    /**
     * @param float $amount
     */
    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }


    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
}
