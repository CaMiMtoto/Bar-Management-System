<flux:modal name="category_modal" class="md:w-96">
    <form wire:submit.prevent="save" class="space-y-6">
        @csrf
        <div>
            <flux:heading size="lg">
                Category
            </flux:heading>
            <flux:subheading>
                Fill in the details below to create a new category.
            </flux:subheading>
        </div>

        <flux:input label="Name" placeholder="Name" wire:model="form.name"/>

        <flux:textarea label="Description" placeholder="Description" wire:model="form.description"/>

        <div class="flex">
            <flux:spacer/>

            <flux:button type="submit" variant="primary">Save changes</flux:button>
            <flux:button type="button" class="ml-4" x-on:click="$flux.modal('category_modal').close()">Cancel
            </flux:button>
        </div>
    </form>
</flux:modal>
