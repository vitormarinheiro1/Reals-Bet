<form action="{{ $action }}" method="post">
    @csrf
    @if ($update)
    @method('PUT')
    @endif
    <div class="mb-3">
    <label class="form-label" for="name">Nome:</label>
    <input class="form-control" type="text" id="name" name="name" @isset($name)value="{{ $name }}"@endisset>

    <label class="form-label" for="email">E-mail:</label>
    <input class="form-control" type="text" id="email" name="email" @isset($email)value="{{ $email }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Alterar</button>
</form>