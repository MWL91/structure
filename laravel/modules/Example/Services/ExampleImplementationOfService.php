<?php

namespace Modules\Example\Services;


use Modules\Shared\Dtos\Birthday;

class ExampleImplementationOfService implements Contracts\ExampleService
{
    public function doSomething(Birthday $dto): void
    {
        // Do something with the DTO
    }
}
