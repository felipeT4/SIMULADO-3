<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
        public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $p_custo;
    public $p_venda;

    public function mount($id){

        $produto = Produto::find($id);

        $this -> nome = $produto -> nome;
        $this -> nome = $produto -> descricao;
        $this -> nome = $produto -> marca;
        $this -> nome = $produto -> categoria;
        $this -> nome = $produto -> p_custo;
        $this -> nome = $produto -> p_venda;
        
    

        }
    public function render()
    {
        return view('livewire.produto-edit');
    }
}
