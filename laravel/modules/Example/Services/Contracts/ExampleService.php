<?php

namespace Modules\Example\Services\Contracts;

use Modules\Shared\Dtos\Birthday;

interface ExampleService
{
    public function doSomething(Birthday $dto): void;
}
