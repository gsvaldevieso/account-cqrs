<?php

namespace Bank\Services;

use Bank\Command\WithdrawMoney;

class WithdrawService implements Service
{
    /**
     * @param WithdrawMoney $command
     */
    public function handle(WithdrawMoney $command): void
    {
        // @todo
    }
}
