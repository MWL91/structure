<?php

namespace Modules\Shared\Dtos;

interface Birthday
{
    public function getName(): string;
    public function getAge(): int;
}
