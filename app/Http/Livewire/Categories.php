<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.category.categories')
        ->extends('layouts.theme.app')
        ->section('content');
    }
}
