<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProblemService;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function __construct(
        protected ProblemService $problemService
    ) {}

    public function problemTwoResult(Request $request) {
        $result = $this->problemService->getResultProblemTwo($request->stringValue);

        return response()->json(['result' => $result]);
    }
}
