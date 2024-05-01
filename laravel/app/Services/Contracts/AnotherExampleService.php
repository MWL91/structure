<?php

namespace App\Services\Contracts;

interface AnotherExampleService
{

    public function doSomethingElse(\App\Dtos\SomeKindOfDto $dto): void;
}
