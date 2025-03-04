<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Url]
    public $search = '';

    public int $perPage = 10;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $categories = Category::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate($this->perPage);
        return view('livewire.categories.index',compact('categories'));
    }
}
