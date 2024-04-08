<div class="relative overflow-x-auto mt-6">
    <x-select wire:model.live="paginate" class="text-sm mb-2">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </x-select>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">#</th>
                <th scope="col" class="px-4 py-3">Action</th>
                <th @click="$wire.sortField('id')" scope="col" class="px-4 py-3 cursor-pointer text-center">
                    Id <x-sort :$sortDirection :$sortBy :field="'id'" />
                </th>
                <th @click="$wire.sortField('name')" scope="col" class="px-4 py-3 cursor-pointer">
                    Name <x-sort :$sortDirection :$sortBy :field="'name'" />
                </th>
                <th @click="$wire.sortField('email')" scope="col" class="px-4 py-3 cursor-pointer">
                    Email <x-sort :$sortDirection :$sortBy :field="'email'" />
                </th>
                <th @click="$wire.sortField('address')" scope="col" class="px-4 py-3 cursor-pointer">
                    Address <x-sort :$sortDirection :$sortBy :field="'address'" />
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-50 text-gray-700 border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="col" class="px-4 py-2"></td>
                <td scope="col" class="px-4 py-2">Search</td>
                <td scope="col" class="px-4 py-2">
                    <x-input type="search" wire:model.live="form.id" class="w-full text-sm" />
                </td>
                <td scope="col" class="px-4 py-2">
                    <x-input type="search" wire:model.live="form.name" class="w-full text-sm" />
                </td>
                <td scope="col" class="px-4 py-2">
                    <x-input type="search" wire:model.live="form.email" class="w-full text-sm" />
                </td>
                <td scope="col" class="px-4 py-2">
                    <x-input type="search" wire:model.live="form.address" class="w-full text-sm" />
                </td>
            </tr>
            @forelse ($data as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-4 py-3 text-center">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 w-44">
                        <x-button-sm class="mr-1" type="button"
                            @click="$dispatch('dispatch-customer-table-edit', {id: '{{ $item->id }}'})">Edit</x-button-sm>
                        <x-button-danger-sm
                            @click="$dispatch('dispatch-customer-table-delete', {id: '{{ $item->id }}', name: '{{ $item->name }}'})">Delete</x-button-danger-sm>
                    </td>
                    <td class="px-4 py-3 text-center w-28">{{ $item->id }}</td>
                    <td class="px-4 py-3">{{ $item->name }}</td>
                    <td class="px-4 py-3">{{ $item->email }}</td>
                    <td class="px-4 py-3">{{ $item->address }}</td>
                </tr>
            @empty
                Belum Ada Data
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">{{ $data->onEachSide(1)->links() }}</div>
</div>
