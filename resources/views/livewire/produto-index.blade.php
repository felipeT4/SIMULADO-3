<div>
    <h2 class="text-center py-5">Lista de Materiais</h2>
     <table class="table table-striped mx-auto" style="width: 50rem; height: 5rem">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Preço de custo</th>
                <th>Preço de venda</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->marca }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td>{{ $produto->p_custo }}</td>
                    <td>{{ $produto->p_venda }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->quantidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
