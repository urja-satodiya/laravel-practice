<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact->name], key($contact->id))
        <button wire:click="removeContact('{{ $contact->name }}')">Remove</button>
    @endforeach

    <hr>
    {{ Now() }}
</div>