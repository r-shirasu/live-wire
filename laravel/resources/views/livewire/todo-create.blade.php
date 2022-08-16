<div class="mb-4">
    @livewire('header')
    <div class="m-8">
        <form wire:submit.prevent="save">
            <div class="m-4">
                <div class="mb-4">
                    <label>
                        <input class="text-grey-darker mr-4 w-full appearance-none rounded border py-2 px-3 shadow"
                            placeholder="Todo Title" wire:model="title">
                    </label>
                </div>
                <div class="mt-4 mb-4">
                    <label>
                        <textarea class="text-grey-darker w-full appearance-none rounded border-none shadow" placeholder="Todo content"
                            wire:model="content"></textarea>
                    </label>
                </div>
                <div class="flex justify-center">
                    <button
                        class="flex-no-shrink rounded border-2 border-teal-400 p-2 text-teal-400 hover:bg-teal-400 hover:text-white"
                        type="submit">Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
