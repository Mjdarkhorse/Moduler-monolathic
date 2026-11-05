<?php

namespace App\Modules\Categories\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Http\Requests\StoreCategoryRequest;
use App\Modules\Categories\Http\Requests\UpdateCategoryRequest;
use App\Modules\Categories\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function __construct(
        private CategoryService $categoryService,
    ) {
    }

    // GET /api/categories
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->categoryService->list(),
        ]);
    }

    // POST /api/categories
    public function store(StoreCategoryRequest $request): JsonResponse
    {
        $category = $this->categoryService->create($request->validated());

        return response()->json(['data' => $category], 201);
    }

    // GET /api/categories/{id}
    public function show(int $id): JsonResponse
    {
        return response()->json([
            'data' => $this->categoryService->find($id),
        ]);
    }

    // PUT or PATCH /api/categories/{id}
    public function update(UpdateCategoryRequest $request, int $id): JsonResponse
    {
        $category = $this->categoryService->update($id, $request->validated());

        return response()->json(['data' => $category]);
    }

    // DELETE /api/categories/{id}
    public function destroy(int $id): Response
    {
        $this->categoryService->delete($id);

        return response()->noContent();
    }
}
