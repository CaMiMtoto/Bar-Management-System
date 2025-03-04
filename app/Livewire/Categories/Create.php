<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\Categories\CategoryForm;
use Flux\Flux;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public CategoryForm $form;

    public function save()
    {
        $this->form->store();
        Flux::modal("category_modal")->close();
        return $this->redirect(route('admin.categories'));
    }

    public function render(): \Illuminate\Contracts\View\View|Application|Factory|View
    {
        return view('livewire.categories.create');
    }
}
