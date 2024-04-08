<div>
    <x-dialog-modal wire:model.live="modalCustomerEdit" submit="edit">
        <x-slot name="title">
            Form Update Customer
        </x-slot>

        <x-slot name="content">

            <div class="col-span-12 mb-4">
                <x-label for="form.name" value="Name" />
                <x-input id="form.name" wire:model="form.name" type="text" class="mt-1 w-full"
                    autocomplate="form.name" />
                <x-input-error for="form.name" class="mt-1" />
            </div>

            <div class="col-span-12 mb-4">
                <x-label for="form.email" value="Email" />
                <x-input id="form.email" wire:model="form.email" type="email" class="mt-1 w-full"
                    autocomplate="form.email" />
                <x-input-error for="form.email" class="mt-1" />
            </div>

            <div class="col-span-12 mb-4">
                <x-label for="form.address" value="Address" />
                <x-input id="form.address" wire:model="form.address" type="text" class="mt-1 w-full"
                    autocomplate="form.address" />
                <x-input-error for="form.address" class="mt-1" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerEdit', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
