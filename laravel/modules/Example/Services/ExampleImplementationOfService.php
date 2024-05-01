<?php

namespace Modules\Example\Services;

class ExampleImplementationOfService implements Contracts\ExampleService
{
    public function doSomething(\Modules\Example\Dtos\SomeKindOfDto $dto): void
    {
        // Do something with the DTO
    }
}
