<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Livewire\Component;

class Search extends Component
{
    public function render()
    {
        $datalist =Books::where('name','like','%'.$this->search.'%')->get();
        return view('livewire.search',['datalist' => $datalist,'query'=>$this->search]);
    }
}
