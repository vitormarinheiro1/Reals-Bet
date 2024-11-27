<x-layout title="Listagem de Afiliados Cadastrados">

    <a href="{{ route('affiliates.create') }}" class="btn btn-primary mt-4">
        Cadastrar Afiliado
    </a>


    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($affiliates as $affiliate)
                <tr class="{{ $affiliate->active ? '' : 'table-danger' }}">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $affiliate->name }}</td>
                    <td>{{ $affiliate->cpf }}</td>
                    <td>{{ $affiliate->birth_date }}</td>
                    <td>{{ $affiliate->email }}</td>
                    <td>{{ $affiliate->phone }}</td>
                    <td>{{ $affiliate->address }}</td>
                    <td>{{ $affiliate->city }}</td>
                    <td>{{ $affiliate->state }}</td>
                    <td>
                        <a href="{{ route('affiliates.edit', $affiliate->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('affiliates.toggle-active', $affiliate->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-{{ $affiliate->active ? 'danger' : 'success' }}">
                                {{ $affiliate->active ? 'Inativar' : 'Ativar' }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>