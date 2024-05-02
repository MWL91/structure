<?php

namespace Modules\AnotherExample\Services;

use Modules\Shared\Dtos\Birthday;

class AnotherImplementationOfService implements Contracts\AnotherExampleService
{
    public function doSomethingElse(Birthday $dto): void
    {
        // Do something else with the DTO
    }
}
