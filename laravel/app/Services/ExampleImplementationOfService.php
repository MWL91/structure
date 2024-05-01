<?php

namespace App\Services;

class ExampleImplementationOfService implements Contracts\ExampleService
{
    public function doSomething(\App\Dtos\SomeKindOfDto $dto): void
    {
        // Do something with the DTO
    }
}
