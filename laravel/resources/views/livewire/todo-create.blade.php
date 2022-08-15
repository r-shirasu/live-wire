<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<div>
    <form wire:submit.prevent="save">
        <div>
            <input type="text" wire:model="title">
        </div>
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
        <div>
            <textarea wire:model="content"></textarea>
        </div>



        <button type="submit">保存</button>
    </form>
</div>

