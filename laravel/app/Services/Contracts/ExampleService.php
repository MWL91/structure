<?php

namespace App\Services\Contracts;

interface ExampleService
{
    public function doSomething(\App\Dtos\SomeKindOfDto $dto): void;
}
