<h2>Kullanıcılar</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>E-posta</th>
            <th>Oluşturma Tarihi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
