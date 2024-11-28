<form action="{{ $action }}" method="post">
    @csrf
    @if ($update)
    @method('PUT')
    @endif
    <div class="mb-3">
    <label class="form-label" for="name">Nome:</label>
    <input class="form-control" type="text" id="name" name="name" @isset($name)value="{{ $name }}"@endisset>

    <label class="form-label" for="email">E-mail:</label>
    <input class="form-control" type="email" id="email" name="email" @isset($email)value="{{ $email }}"@endisset>

    <label class="form-label" for="password">Senha:</label>
    <input class="form-control" type="password" id="password" name="password" @isset($password)value="{{ $password }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Enviar dados</button>
</form>