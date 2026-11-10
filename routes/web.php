<?php

use App\Livewire\CategoriaCreate;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto/create', ProdutoCreate::class) -> name('produto.create');
Route::get('/produtos', ProdutoIndex::class) -> name('produtos');
Route::get('/produto/edit/{id}', ProdutoEdit::class) -> name('produto.edit');

Route::get('/categoria/create', CategoriaCreate::class) -> name('categoria.create');