<?php

namespace Modules\Example\Services\Contracts;

interface ExampleService
{
    public function doSomething(\Modules\Example\Dtos\SomeKindOfDto $dto): void;
}
