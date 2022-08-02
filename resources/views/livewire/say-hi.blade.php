<div>
   <input type="text" wire:model="contact">
    Hello, {{ $contact }} : {{ Now() }}
    <button wire:click="$refresh">Refresh</button>
</div>
