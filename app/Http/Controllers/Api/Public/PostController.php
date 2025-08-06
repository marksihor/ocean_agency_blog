<?php

namespace App\Http\Controllers\Api\Public;

use App\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $collection = Post::filter(new PostFilter($request))->paginate();

        return $this->success($collection);
    }

    public function show(Post $post): JsonResponse
    {
        return $this->success($post);
    }
}
