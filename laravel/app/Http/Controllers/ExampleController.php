<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\AnotherExample\Services\Contracts\AnotherExampleService;
use Modules\Example\Services\Contracts\ExampleService;

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
        $this->exampleService->doSomething(
            new \Modules\Example\Dtos\SomeKindOfDto('John Doe', 30)
        );
        $this->anotherExampleService->doSomethingElse(
            new \Modules\AnotherExample\Dtos\SomeKindOfDto('John Doe', 30)
        );

        return response()->json(['message' => 'Success']);
    }
}
