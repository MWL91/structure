<?php

namespace Modules\AnotherExample\Services\Contracts;

use Modules\Shared\Dtos\Birthday;

interface AnotherExampleService
{

    public function doSomethingElse(Birthday $dto): void;
}
