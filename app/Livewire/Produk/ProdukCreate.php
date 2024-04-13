<?php

namespace App\Livewire\Produk;

use App\Livewire\Forms\ProductForm;
use Livewire\Component;

class ProdukCreate extends Component
{
    public ProductForm $form;

    public $modal = 'produk-modal-create';

    public function save()
    {
        $this->validate();

        $simpan = $this->form->store();

        is_null($simpan)
            ? $this->dispatch('notify', title: 'success', message: 'Data Berhasil Disimpan!')
            : $this->dispatch('notify', title: 'failed', message: 'Data Gagal Disimpan!');

        $this->dispatch('dispatch-produk-create-save')->to(ProdukTable::class);
    }

    public function render()
    {
        return view('livewire.produk.produk-create');
    }
}
