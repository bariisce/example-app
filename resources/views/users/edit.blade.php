<h2>Kullanıcı Güncelle</h2>

<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Ad</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>
    </div>

    <div>
        <label for="email">E-posta</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>
    </div>

    <div>
        <label for="password">Yeni Parola</label>
        <input type="password" id="password" name="password" minlength="6">
    </div>

    <button type="submit">Güncelle</button>
</form>
