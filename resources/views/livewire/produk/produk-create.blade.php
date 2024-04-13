<div>
    <x-button @click="$dispatch('{{ $modal }}', { open: true })" type="button">Create Produk</x-button>

    <x-modal-form maxWidth="xl" :$modal submit="save">

        <x-slot name="title">Form Create Produk</x-slot>

        <x-slot name="content">
            <div class="col-span-12 mb-4">
                <x-label for="form.name" value="Name" />
                <x-input id="form.name" wire:model="form.name" type="text" class="mt-1 w-full"
                    autocomplate="form.name" />
                <x-input-error for="form.name" class="mt-1" />
            </div>

            <div class="col-span-12 mb-4">
                <x-label for="form.desc" value="Deskripsi" />
                <x-input id="form.desc" wire:model="form.desc" type="text" class="mt-1 w-full"
                    autocomplate="form.desc" />
                <x-input-error for="form.desc" class="mt-1" />
            </div>

            <div class="col-span-12 mb-4">
                <x-label for="form.img" value="Gambar" />
                <x-input id="form.img" wire:model="form.img" type="file" class="mt-1 w-full"
                    autocomplate="form.img" />
                <x-input-error for="form.img" class="mt-1" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$dispatch('{{ $modal }}', { open: false })" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>

    </x-modal-form>
</div>
