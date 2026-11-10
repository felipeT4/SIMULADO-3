<div>
    <h2 class="text-center p-5"> Nova Categoria </h2>

<div class="card px-4 mx-auto mt-5 shadow " style="width: 60rem; height: 30rem">
   
  <form wire:submit.prevent='store'>

  <div class="mb-3 col-6 p-5">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" wire:model="nome" placeholder="Nome da categoria" aria-describedby="nome">
  </div>

 


 <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn-solid theme-accent" type="submit">Salvar</button>
 
</div>
</form>
</div>
</div>
