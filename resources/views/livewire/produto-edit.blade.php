<div>
  <form wire:submit="update">
        <input type="text" wire:model="nome">
         <input type="text" wire:model="marca">
       <div class="form-field">

  <label for="fieldSelect" class="form-label">Categoria</label>
  <select class="form-control" id="fieldSelect">
    <option selected>Categoria…</option>
    <option value="1">{{ $produto->categoria->nome }}</option>
    <option value="2">{{ $produto->categoria->nome }}</option>
    <option value="3">{{ $produto->categoria->nome }}</option>
  </select>
</div>

        <input type="number" wire:model="preco">
        <input type="number" wire:model="quantidade">

        <button type="submit">Salvar</button>
    </form>
</div>
