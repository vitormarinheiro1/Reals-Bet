<x-layout title="Consulta de Comissão de Afiliados">
    <a href="{{ route('commissions.create') }}" class="btn btn-primary mt-4">
        Adicionar Comissão
    </a>

    <div class="table-responsive">
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Afiliado</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commissions as $commission)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $commission->affiliate->name }}</td>
                        <td>{{ $commission->value }}</td>
                        <td>{{ (new DateTimeImmutable($commission->date))->format('d/m/Y') }}</td>
                        <td>
                            <form action="{{ route('commissions.destroy', $commission->id)}}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>