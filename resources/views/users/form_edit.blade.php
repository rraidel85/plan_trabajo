<form action="{{ route('users.update', $user) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
               value="{{ old('name', $user->name) }}" id="name" name="name">
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Correo</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
               value="{{ old('email', $user->email) }}" id="email" name="email">
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input type="password"
               class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
               id="password" name="password">
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="">Confirmar Contraseña</label>
        <input type="password"
               class="form-control {{ $errors->has('confirm-password') ? 'is-invalid' : '' }}"
               id="confirm-password" name="confirm-password">
        @if ($errors->has('confirm-password'))
            <div class="invalid-feedback">
                {{ $errors->first('confirm-password') }}
            </div>
        @endif
    </div>

    <input type="submit" class="btn btn-primary" value="Enviar">
</form>

