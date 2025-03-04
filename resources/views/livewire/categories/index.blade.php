<div>
    @push('breadcrumbs')
        <flux:breadcrumbs class="mb-6">
            <flux:breadcrumbs.item href="{{ route('dashboard') }}" wire:navigate="dashboard" separator="slash">Home
            </flux:breadcrumbs.item>
            <flux:breadcrumbs.item separator="slash">Categories</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    @endpush
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="flex flex-col items-center lg:flex-row lg:justify-between">
        <div>
            <h1 class="text-2xl font-bold mb-1">
                Categories
            </h1>
            <p class="text-sm text-gray-500">
                Below is a list of all categories.
            </p>
        </div>
        <div class="flex items-center">

            <flux:modal.trigger name="category_modal">
                <flux:button size="sm" variant="primary" icon-leading="plus" class="cursor-pointer">
                    New Category
                </flux:button>
            </flux:modal.trigger>

        </div>
    </div>

    <div>
        <div class="flex items-end justify-between my-4">
            <div>
                <flux:select size="sm" placeholder="Page Size" wire:model.live="perPage">
                    <flux:select.option>10</flux:select.option>
                    <flux:select.option>20</flux:select.option>
                    <flux:select.option>30</flux:select.option>
                    <flux:select.option>50</flux:select.option>
                    <flux:select.option>100</flux:select.option>
                </flux:select>
            </div>
            <div>
                <flux:input kbd="⌘K" size="sm" wire:model.live.debounce="search" icon="magnifying-glass"
                            placeholder="Search..."/>
            </div>
        </div>


        <div class="relative overflow-x-auto shadow-xs border border-gray-200 dark:border-gray-700   sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Created At</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Products</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Options</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="bg-white  dark:bg-gray-800 {{$loop->last ? '' : 'border-b dark:border-gray-700 border-gray-200'}} hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-1">
                            {{$category->created_at->format('Y-m-d ,H:i')}}
                        </td>
                        <td class="px-6 py-1">{{$category->name}} </td>
                        <td class="px-6 py-1">1</td>
                        <td class="px-6 py-1 text-right">
                            <flux:dropdown>
                                <flux:button icon-trailing="chevron-down" size="sm" variant="ghost">Options
                                </flux:button>
                                <flux:menu>
                                    <flux:menu.item icon="pencil-square" kbd="⌘S">Save</flux:menu.item>
                                    <flux:menu.item icon="document-duplicate" kbd="⌘D">Duplicate</flux:menu.item>
                                    <flux:menu.item icon="trash" variant="danger" kbd="⌘⌫">Delete</flux:menu.item>
                                </flux:menu>
                            </flux:dropdown>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $categories->links() }}
        </div>

    </div>


    <livewire:categories.create/>

</div>
