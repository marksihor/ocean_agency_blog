<?php

namespace App\Http\Controllers\Api\Public\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Post $post): JsonResponse
    {
        $collection = Comment::ofPost($post->id)->paginate();

        return $this->success($collection);
    }

    public function store(CommentStoreRequest $request, Post $post): JsonResponse
    {
        $comment = Comment::create(
            array_merge(
                $request->validated(),
                ['post_id' => $post->id, 'user_id' => auth()->id()]
            )
        );

        return $this->success($comment);
    }
}
