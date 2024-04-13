<?php

namespace App\Livewire\Produk;

use Livewire\Component;

class ProdukEdit extends Component
{
    public $modal = 'produk-modal-edit';
    public function render()
    {
        return view('livewire.produk.produk-edit');
    }
}
