<?php

namespace Bank\Model;

interface AccountRepository
{
    /**
     * @param int $accountNumber
     * @return mixed
     */
    public function pull(int $accountNumber): Account;


    /**
     * @param Account $account
     */
    public function push(Account $account): void;
}
