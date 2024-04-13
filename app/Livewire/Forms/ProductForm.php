<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;

    #[Locked]
    public $id;

    #[Rule('required|min:3', as: 'Name')]
    public $name;

    public $slug;

    #[Rule('required', as: 'Desc')]
    public $desc;

    #[Rule('nullable|mimes:jpg,png,jpeg|max:2048', as: 'Img')]
    public $img;

    public function setProduct(Product $product)
    {
        $this->product = $product;

        $this->name = $product->name;
        $this->desc = $product->desc;
        $this->img = $product->img;

        $this->slug = Str::slug($product->name);
    }

    public function store()
    {
        $this->slug = Str::slug($this->name);
        Product::create($this->except(['product']));

        $this->reset();
    }

    public function update()
    {
        // Set slug berdasarkan nama produk yang diinputkan
        $this->slug = Str::slug($this->name);

        $this->product->update($this->except(['product']));
    }
}
