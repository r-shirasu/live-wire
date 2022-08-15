<div class="mb-4">
    @livewire('header')
    <div class="m-8">
        <form wire:submit.prevent="save">
            <div class="m-4">
                <div class="mb-4">
                    <label>
                        <input
                            class="shadow appearance-none border rounded w-full text-grey-darker py-2 px-3 mr-4"
                            placeholder="Todo Title" wire:model="title">
                    </label>
                </div>
                <div class="mt-4 mb-4">
                    <label>
                                <textarea class="shadow appearance-none border-none rounded w-full text-grey-darker"
                                          placeholder="Todo content" wire:model="content"></textarea>
                    </label>
                </div>
                <div class="flex justify-center">
                    <button
                        class="flex-no-shrink p-2 border-2 rounded text-teal-400 border-teal-400 hover:text-white hover:bg-teal-400"
                        type="submit">Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

