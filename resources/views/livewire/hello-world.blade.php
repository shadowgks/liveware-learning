<div>
    @foreach ($contacts as $item)
    <div>
        @livewire('si-hii', ['name' => $item->name])
        <button wire:click='removeItem({{$item->id}})'>Remove</button>
    </div>
    @endforeach
</div>
