<x-layout title="Listagem de Afiliados Cadastrados">

    <a href="{{ route('affiliates.create') }}" class="btn btn-primary mt-4">
        Cadastrar Afiliado
    </a>
    
    <div class="table-responsive">
        <table class="table table-hover table-responsive">
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
                        <td>{{ preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $affiliate->cpf) }}</td>
                        <td>{{ (new DateTimeImmutable($affiliate->birth_date))->format('d/m/Y') }}</td>
                        <td>{{ $affiliate->email }}</td>
                        <td>{{ $affiliate->phone }}</td>
                        <td>{{ $affiliate->address }}</td>
                        <td>{{ $affiliate->city }}</td>
                        <td>{{ $affiliate->state }}</td>
                        <td>
                            <span class="d-flex">
                                <a href="{{ route('affiliates.edit', $affiliate->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('affiliates.toggle-active', $affiliate->id) }}" method="POST"
                                    class="ms-2">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-{{ $affiliate->active ? 'danger' : 'success' }}">
                                        {{ $affiliate->active ? 'Inativar' : 'Ativar' }}
                                    </button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>