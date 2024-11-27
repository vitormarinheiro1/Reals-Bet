<x-layout title="Listagem de Usuários Cadastrados">

    <a href="{{ route('users.create') }}" class="btn btn-primary mt-4">
        Cadastrar usuário
    </a>


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
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primay">Editar</a>
                        <a href="#" class="btn btn-primay">Inativar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>