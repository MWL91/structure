<?php

namespace Modules\AnotherExample\Services\Contracts;

interface AnotherExampleService
{

    public function doSomethingElse(\Modules\AnotherExample\Dtos\SomeKindOfDto $dto): void;
}
