<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Fecha de Creacion</th>
        <th>Fecha de Edicion</th>
    </tr>

    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
