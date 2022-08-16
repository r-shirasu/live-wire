<div class="mb-5 flex justify-between">
    <h1 class="text-3xl font-bold">Todo List</h1>
    <button class="flex-no-shrink rounded border-2 border-blue-400 p-2 text-blue-400 hover:bg-blue-400 hover:text-white"
        onclick=location.href="{{ route('todos.create') }}">NewTodo Create
    </button>
</div>
<div class="mt-5">
    <ul>
        @foreach ($todos as $todo)
            <li class="flex justify-between" wire:key="{{ $todo->id }}">
                <div>
                    <a>{{ $todo->title }}</a>
                    <a>{{ $todo->content }}</a>
                </div>
                <div>
                    <button
                        class="text-red border-red ml-2 justify-end rounded border-2 p-2 hover:bg-teal-400 hover:text-white"
                        onclick=location.href="{{ route('todos.show', ['todo' => $todo->id]) }}">Edit
                    </button>
                    <button
                        class="text-red border-red ml-2 justify-end rounded border-2 p-2 hover:bg-red-400 hover:text-white"
                        wire:click="delete({{ $todo->id }})">Remove
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
