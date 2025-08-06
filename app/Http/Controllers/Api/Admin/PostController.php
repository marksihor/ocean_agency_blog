<?php

namespace App\Http\Controllers\Api\Admin;

use App\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
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

    public function store(PostStoreRequest $request): JsonResponse
    {
        $post = Post::create($request->validated());

        return $this->success($post);
    }

    public function update(PostUpdateRequest $request, Post $post): JsonResponse
    {
        $post->update($request->validated());

        return $this->success($post);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return $this->success($post);
    }
}
