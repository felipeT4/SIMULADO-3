<div>



 <h2 class="text-center p-5"> Cadastrar Produto </h2>

<div class="card px-4 mx-auto mt-5 shadow " style="width: 60rem; height: 30rem">
   
  <form wire:submit.prevent='store'>
<div class="grid grid-cols-3">
  <div class="mb-3  p-5">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" wire:model="nome" placeholder="Nome do produto" aria-describedby="nome">
  </div>
  <div class="mb-3 p-5">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" wire:model="marca" placeholder="ex: ....." class="form-control" id="marca">
  </div>
   <div class="mb-3 p-5">
   <label for="fieldSelect" class="form-label">Categoria</label>
  <select class="form-control" id="fieldSelect">

 
    <option selected>Categoria…</option>
    <option value="1">Material</option>
    <option value="2"></option>
    
   
    
  </select>
  </div>
</div>

<div class="grid grid-cols-3">
  <div class="mb-3 p-5">
    <label for="p_custo" class="form-label">Preço de custo</label>
    <input type="text" class="form-control" id="p_custo" wire:model="p_custo" placeholder="R$..." aria-describedby="p_custo">
  </div>
  <div class="mb-3 p-5">
    <label for="p_venda" class="form-label">Preço de venda</label>
    <input type="text" wire:model="p_venda" placeholder="R$..." class="form-control" id="p_venda">
  </div>
</div>

 <div class="mb-3 p-5">
    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" class="form-control" id="descricao" wire:model="descricao" placeholder="Descrição do produto" aria-describedby="descricao">
  </div>
 


 <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn-solid theme-accent" type="submit">Salvar</button>
 
</div>
</form>
</div>
</div>
