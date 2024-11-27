<x-layout title="Adicionar Comissão">
        <form method="POST" action="{{ route('commissions.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="affiliate_id">Afiliado:</label>
                <select class="form-control" id="affiliate_id" name="affiliate_id" required>
                    <option value="">Selecione o Afiliado</option>
                    @foreach ($commissions as $commission)
                        <option value="{{ $commission->affiliate->id}}">{{ $commission->affiliate->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="value">Valor:</label>
                <input class="form-control" type="number" step="0.01" id="value" name="value" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="date">Data:</label>
                <input class="form-control" type="date" id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Comissão</button>
        </form>
</x-layout>