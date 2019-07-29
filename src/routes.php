<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Bank\Command\OpenNewAccount;
use Bank\Drivers\InMemoryAccountRepository;
use Bank\Drivers\InMemoryDatabase;
use Bank\Services\AccountCreatingService;

return function (App $app) {
    $container = $app->getContainer();

    $app->post('/account', function (Request $request, Response $response, array $args) use ($container) {
        $payload = json_decode($request->getBody()->getContents(), true);

        try {
            $command = new OpenNewAccount($payload['number'], $payload['owner']);

            $accountService = new AccountCreatingService(new InMemoryAccountRepository(new InMemoryDatabase()));

            $service = $accountService->handle($command);

            return $response->withStatus(201);
        } catch (Throwable $ex) {
            return $response->withJson($ex->getMessage())->withStatus(500);
        }
    });
};
