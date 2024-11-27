<form action="{{ $action }}" method="post">
    @csrf
    @if ($update)
    @method('PUT')
    @endif
    <div class="mb-3">
    <label class="form-label" for="name">Nome:</label>
    <input class="form-control" type="text" id="name" name="name" @isset($name)value="{{ $name }}"@endisset>
    
    <label class="form-label" for="cpf">CPF:</label>
    <input class="form-control" type="number" id="cpf" name="cpf" @isset($cpf)value="{{ $cpf }}"@endisset>

    <label class="form-label" for="birth_date">Data Nascimento:</label>
    <input class="form-control" type="date" id="birth_date" name="birth_date" @isset($birth_date)value="{{ $birth_date }}"@endisset>

    <label class="form-label" for="email">E-mail:</label>
    <input class="form-control" type="text" id="email" name="email" @isset($email)value="{{ $email }}"@endisset>

    <label class="form-label" for="phone">Telefone:</label>
    <input class="form-control" type="tel" id="phone" name="phone" @isset($phone)value="{{ $phone }}"@endisset>

    <label class="form-label" for="address">Endereço:</label>
    <input class="form-control" type="text" id="address" name="address" @isset($address)value="{{ $address }}"@endisset>

    <!-- SELECT -->
    <label class="form-label" for="city">Cidade:</label>
    <input class="form-control" type="text" id="city" name="city" @isset($city)value="{{ $city }}"@endisset>

    <label class="form-label" for="state">Estado:</label>
    <input class="form-control" type="text" id="state" name="state" @isset($state)value="{{ $state }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Enviar dados</button>
</form>