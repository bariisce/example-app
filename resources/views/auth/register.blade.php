<h2>Kullanıcı Eklme</h2>

<form action="{{ route('register') }}" method="POST">
    @csrf

    <div>
        <label for="name">Ad</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">E-posta</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Şifre</label>
        <input type="password" id="password" name="password" required>
        @error('password')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Şifre Tekrar</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>



    <button type="submit">Kaydol</button>
</form>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
