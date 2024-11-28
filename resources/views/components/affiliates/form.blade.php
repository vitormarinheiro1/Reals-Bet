<form action="{{ $action }}" method="post">
    @csrf
    @if ($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label class="form-label" for="name">Nome:</label>
        <input class="form-control" type="text" id="name" name="name" @isset($name)value="{{ $name }}"@endisset required>

        <label class="form-label" for="cpf">CPF:</label>
        <input class="form-control" type="number" id="cpf" name="cpf" @isset($cpf)value="{{ $cpf }}"@endisset required>

        <label class="form-label" for="birth_date">Data Nascimento:</label>
        <input class="form-control" type="date" id="birth_date" name="birth_date" @isset($birth_date)value="{{ $birth_date }}"@endisset required>

        <label class="form-label" for="email">E-mail:</label>
        <input class="form-control" type="email" id="email" name="email" @isset($email)value="{{ $email }}"@endisset required>

        <label class="form-label" for="phone">Telefone:</label>
        <input class="form-control" type="number" id="phone" name="phone" @isset($phone)value="{{ $phone }}"@endisset required>

        <label class="form-label" for="address">Endereço:</label>
        <input class="form-control" type="text" id="address" name="address" @isset($address)value="{{ $address }}"@endisset required>

        <!-- SELECT Estado -->
        <label class="form-label" for="state">Estado:</label>
        <select class="form-control" id="state" name="state" required>
            <option value="">Selecione o Estado</option>
            <!-- Os estados serão carregados via AJAX -->
        </select>

        <!-- SELECT Cidade -->
        <label class="form-label" for="city">Cidade:</label>
        <select class="form-control" id="city" name="city" required>
            <option value="">Selecione a Cidade</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar dados</button>
</form>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Função para carregar os estados
    function loadStates() {
        fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
            .then(response => response.json())
            .then(data => {
                const stateSelect = document.getElementById('state');
                data.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state.sigla;
                    option.textContent = state.nome;
                    stateSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar os estados:', error));
    }

    // Função para carregar as cidades com base no estado
    function loadCities(stateSigla) {
        fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${stateSigla}/municipios`)
            .then(response => response.json())
            .then(data => {
                const citySelect = document.getElementById('city');
                citySelect.innerHTML = '<option value="">Selecione a Cidade</option>'; // Limpar cidades existentes
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.nome;
                    option.textContent = city.nome;
                    citySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar as cidades:', error));
    }

    // Carregar os estados quando a página for carregada
    loadStates();

    // Quando o estado for alterado, carregar as cidades
    document.getElementById('state').addEventListener('change', function () {
        const stateSigla = this.value;
        if (stateSigla) {
            loadCities(stateSigla);
        } else {
            document.getElementById('city').innerHTML = '<option value="">Selecione a Cidade</option>';
        }
    });
});
</script>
