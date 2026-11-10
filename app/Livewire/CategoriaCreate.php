<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;

    public function store(){
        Categoria::create([
        'nome' => $this -> nome,
        ]);
         session()->flash(
    'success',
    'Categoria cadastrada com sucesso!'
);

return redirect()->route('produtos');
    }
    public function render()
    {
        return view('livewire.categoria-create');
    }
}
