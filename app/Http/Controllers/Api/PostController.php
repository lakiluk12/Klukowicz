<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    public function index(): JsonResponse
    {
        return response()->json(Post::all(), 200);
    }
    public function store(Post $post): JsonResponse
    {
        return response() -> json($post,201);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post, 200);
    }
    public function update(Post $post): JsonResponse
    {
        return response()-> json($post, 201);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post -> delete();
        return response() -> json($post, 204);
    }
}
