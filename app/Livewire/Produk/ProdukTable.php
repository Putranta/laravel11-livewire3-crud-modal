<?php

namespace App\Livewire\Produk;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use App\Traits\withSorting;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukTable extends Component
{
    use WithPagination;
    use withSorting;

    public ProductForm $form;

    public
        $paginate = 5,
        $sortBy = "products.id",
        $sortDirection = "desc";

    #[On('dispatch-produk-create-save')]
    #[On('dispatch-produk-create-edit')]
    #[On('dispatch-produk-delete-del')]
    public function render()
    {
        return view('livewire.produk.produk-table', [
            'data'  => Product::where('id', 'like', '%' . $this->form->id . '%')
                ->where('name', 'like', '%' . $this->form->name . '%')
                ->where('desc', 'like', '%' . $this->form->desc . '%')
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->paginate)
        ]);
    }
}
