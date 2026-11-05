<?php

namespace App\Modules\Categories\Services;

use App\Modules\Categories\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    /**
     * @return Collection<int, Category>
     */
    public function list(): Collection
    {
        return Category::query()->orderBy('name')->get();
    }

    /**
     * Throws ModelNotFoundException (→ 404) if the id does not exist.
     */
    public function find(int $id): Category
    {
        return Category::findOrFail($id);
    }

    public function create(array $data): Category
    {
        return Category::create($data);
    }

    public function update(int $id, array $data): Category
    {
        $category = $this->find($id);
        $category->update($data);

        return $category;
    }

    public function delete(int $id): void
    {
        $this->find($id)->delete();
    }
}
