<table id="table-user" class="table table-striped mt-2">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info"><i
                        class="fas fa-pencil-alt"></i></a>
                <form action="{{ route('users.destroy', $user->id) }}" class="d-inline" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
