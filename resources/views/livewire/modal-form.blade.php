<div>
    <x-button wire:click="$set('isOpen', true)">
        nuevo usuario
    </x-button>

    <x-dialog-modal wire:model="isOpen">
        <x-slot name="title">
        hola
        </x-slot>
        <x-slot name="content">
            como 
        </x-slot>
        <x-slot name="footer">
            estas
        </x-slot>
    </x-dialog-modal>
</div>