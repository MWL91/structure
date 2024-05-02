<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\AnotherExample\Services\Contracts\AnotherExampleService;
use Modules\Example\Services\Contracts\ExampleService;
use Modules\Shared\Dtos\Birthday;

final class ExampleController extends Controller
{
    public function __construct(
        private ExampleService $exampleService,
        private AnotherExampleService $anotherExampleService
    )
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $dto = new class('John Doe', 30) implements Birthday {
            public function __construct(
                private string $name,
                private int $age
            )
            {
            }

            public function getName(): string
            {
                return $this->name;
            }

            public function getAge(): int
            {
                return $this->age;
            }
        };

        $this->exampleService->doSomething($dto);
        $this->anotherExampleService->doSomethingElse($dto);

        return response()->json(['message' => 'Success']);
    }
}
