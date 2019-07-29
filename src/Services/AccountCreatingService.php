<?php

namespace Bank\Services;

use Bank\Command\OpenNewAccount;
use Bank\Model\Account;
use Bank\Model\AccountRepository;

final class AccountCreatingService implements Service
{
    /**
     * @var AccountRepository
     */
    private $accountRepository;


    /**
     * @param AccountRepository $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }


    /**
     * @param OpenNewAccount $command
     */
    public function handle(OpenNewAccount $command): void
    {
        $account = Account::open($command->getNumber(), $command->getOwner());

        $this->accountRepository->push($account);
    }
}
