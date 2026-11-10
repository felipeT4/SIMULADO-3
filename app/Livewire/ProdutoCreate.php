<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $categoria_id;
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $p_custo;
    public $p_venda;

    public function store() {
    Produto::create([
    'categoria_id' => $this -> categoria_id,
    'nome' => $this -> nome,
    'descricao' => $this -> descricao,
    'marca' => $this -> marca,
    'categoria' => $this -> categoria,
    'p_custo' => $this -> p_custo,
    'p_venda' => $this -> p_venda
        ]);

        session()->flash(
    'success',
    'Produto cadastrado com sucesso!'
);

return redirect()->route('produtos');
    }
    public function render()
    {
        return view('livewire.produto-create');
    }
}
