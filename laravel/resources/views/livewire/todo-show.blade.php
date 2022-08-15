<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold">Todo List</h1>
                <button
                    class="flex-no-shrink p-2 border-2 rounded text-orange-400 border-orange-400 hover:text-white hover:bg-orange-400"
                    onclick=location.href="{{ route('todos') }}">Show Todos
                </button>
            </div>
            <div class="m-8">
                <form wire:submit.prevent="update">
                    <div class="m-4">
                        <div class="mb-4">
                            <label>
                                <input
                                    class="shadow appearance-none border rounded w-full text-grey-darker py-2 px-3 mr-4"
                                    placeholder="Todo Title" wire:model="todo.title">
                            </label>
                        </div>
                        <div class="mt-4 mb-4">
                            <label>
                                <textarea class="shadow appearance-none border-none rounded w-full text-grey-darker"
                                          placeholder="Todo content" wire:model="todo.content"></textarea>
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <button
                                class="flex-no-shrink p-2 border-2 rounded text-teal-400 border-teal-400 hover:text-white hover:bg-teal-400 mx-auto"
                                type="submit">Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
