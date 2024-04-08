<div>
    <x-dialog-modal wire:model.live="modalCustomerDelete">
        <x-slot name="title">
            Form DeleteCustomer
        </x-slot>

        <x-slot name="content">

            <p class="text-lg">Apakah Anda ingin menghapus customer dengan ID: <strong>{{ $id }}</strong> dana
                Name:
                <strong>{{ $name }}</strong>?
            </p>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerDelete', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-danger-button @click="$wire.del()" class="ms-3" wire:loading.attr="disabled">
                Hapus
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
