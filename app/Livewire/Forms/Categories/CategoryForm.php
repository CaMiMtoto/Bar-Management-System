<?php

namespace App\Livewire\Forms\Categories;

use App\Models\Category;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category;

    public string $name = '';

    public string $description = '';

    protected function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('categories')->ignore($this->category->id ?? null),
            ],
            'description' => 'nullable|max:255',
        ];
    }

    public function setCategory(Category $category): void
    {
        $this->name = $category->name;
        $this->description = $category->description;
    }

    public function store(): void
    {
        $this->validate();
        Category::query()
            ->create($this->only('name', 'description'));
        $this->reset();
    }

    public function update(): void
    {
        $this->validate();
        $this->category->update($this->all());
    }
}
