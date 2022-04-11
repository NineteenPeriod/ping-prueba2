{{-- Care about people's approval and you will be their prisoner. --}}
<div>
    <h1>Counter</h1>
    <div>
        <button wire:loading.class="border-red-500 " class="border-2 px-5 rounded" wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
    </div>
</div>