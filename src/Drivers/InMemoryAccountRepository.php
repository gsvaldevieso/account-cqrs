<?php

namespace Bank\Drivers;

use Bank\Model\Account;
use Bank\Model\AccountRepository;

final class InMemoryAccountRepository implements AccountRepository
{
    /**
     * @var KeyValueDatabase
     */
    private $database;


    /**
     * @param KeyValueDatabase $database
     */
    public function __construct(KeyValueDatabase $database)
    {
        $this->database = $database;
    }


    /**
     * @param int $accountNumber
     * @return mixed
     */
    public function pull(int $accountNumber): Account
    {
        /** @var Account $account */
        $account = $this->database->get($accountNumber);

        return $account;
    }


    /**
     * @param Account $account
     */
    public function push(Account $account): void
    {
        $this->database->set($account->getNumber(), $account);
    }
}
