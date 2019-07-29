<?php

namespace Bank\Services;

use Bank\Command\PerformDeposit;

class DepositService implements Service
{
    /**
     * @param PerformDeposit $command
     */
    public function handle(PerformDeposit $command): void
    {
        // @todo
    }
}
