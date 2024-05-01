<?php

namespace Modules\AnotherExample\Services;

class AnotherImplementationOfService implements Contracts\AnotherExampleService
{
    public function doSomethingElse(\Modules\AnotherExample\Dtos\SomeKindOfDto $dto): void
    {
        // Do something else with the DTO
    }
}
