<x-layout title="Listagem de Usuários Cadastrados">

    <a href="{{ route('users.create') }}" class="btn btn-primary mt-4 mb-2">
        Cadastrar usuário
    </a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <div class="table-responsive">
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="{{ $user->active ? '' : 'table-danger' }}">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="d-flex">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('users.toggle-active', $user->id) }}" method="POST"
                                    class="ms-2">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-{{ $user->active ? 'danger' : 'success' }}">
                                        {{ $user->active ? 'Inativar' : 'Ativar' }}
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