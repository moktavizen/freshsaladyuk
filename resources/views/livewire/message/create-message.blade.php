<div class='my-8 py-8'>
    <form wire:submit="create" class='flex flex-col'>
        {{ $this->form }}

        <button type="submit" class='my-8 rounded-md bg-lime-600 px-20 py-3 text-white mx-auto'>
            Submit
        </button>
    </form>

    <x-filament-actions::modals />
</div>
