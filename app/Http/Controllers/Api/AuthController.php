<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function registration(RegistrationRequest $request): JsonResponse
    {
        $user = User::create($request->validated());

        return $this->success($user);
    }
}
