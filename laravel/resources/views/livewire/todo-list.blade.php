<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="flex justify-between mb-5">
            <h1 class="text-3xl font-bold">Todo List</h1>
            <button
                class="flex-no-shrink p-2 border-2 rounded text-blue-400 border-blue-400 hover:text-white hover:bg-blue-400"
                onclick=location.href="{{ route('todos.create') }}">NewTodo Create
            </button>
        </div>
        <div class="mt-5">
            <ul>
                @foreach($todos as $todo)
                    <li class="flex justify-between" wire:key="{{ $todo->id }}">
                        <div>
                            <a>{{ $todo->title }}</a>
                            <a>{{ $todo->content }}</a>
                        </div>
                        <div>
                            <button
                                class="justify-end p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-teal-400"
                                onclick=location.href="{{ route('todos.show', ['todo' => $todo->id]) }}">Edit
                            </button>
                            <button
                                class="justify-end p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red-400"
                                wire:click="delete({{ $todo->id }})">Remove
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
