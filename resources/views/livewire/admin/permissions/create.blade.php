<div>
    <x-modal>
        <x-slot name="trigger">
            <button class="btn btn-primary" @click="on = true">{{ __('Add Permission') }}</button>
        </x-slot>

        <x-slot name="title">{{ __('Add Permission') }}</x-slot>

       
        <x-slot name="content">
            <x-form.input wire:model="module" :label="__('Module')" name="module" required />
            <x-form.input wire:model="permission" :label="__('Permission')" name="permission" required />
        </x-slot>

        <x-slot name="footer">
            <button class="btn" @click="on = false">{{ __('Cancel') }}</button>
            <button class="btn btn-primary" wire:click="store">{{ __('Create Permission') }}</button>
        </x-slot>

    </x-modal>
</div>