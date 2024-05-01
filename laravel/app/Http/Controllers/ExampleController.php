<?php

namespace App\Http\Controllers;

use App\Dtos\SomeKindOfDto;
use App\Services\Contracts\AnotherExampleService;
use App\Services\Contracts\ExampleService;
use Illuminate\Http\Request;

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
        $dto = new SomeKindOfDto('John Doe', 30);

        $this->exampleService->doSomething($dto);
        $this->anotherExampleService->doSomethingElse($dto);

        return response()->json(['message' => 'Success']);
    }
}
