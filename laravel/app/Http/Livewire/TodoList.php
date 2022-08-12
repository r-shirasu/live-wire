<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Support\Collection;
use Livewire\Component;

class TodoList extends Component
{
    public Collection $todos;

    public function mount()
    {
        $this->todos = Todo::all();
    }

    public function render()
    {
        return view('livewire.todo-list')
            ->extends("layouts.app");
    }
}
