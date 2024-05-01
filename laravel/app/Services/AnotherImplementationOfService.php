<?php

namespace App\Services;

class AnotherImplementationOfService implements Contracts\AnotherExampleService
{
    public function doSomethingElse(\App\Dtos\SomeKindOfDto $dto): void
    {
        // Do something else with the DTO
    }
}
