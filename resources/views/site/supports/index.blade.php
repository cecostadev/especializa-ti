<h1>Lista de Suportes</h1>

<a href="{{ route('support.create') }}">Novo Ticket</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Açoes</th>
    </thead>
    <tbody>
        @foreach($supports['data'] as $support)
            <tr>
                <td>{{ $support['subject'] }}</td>
                <td>{{ $support['status'] }}</td>
                <td>{{ $support['body'] }}</td>
                <td> 
                    <a href="{{route('support.show', $support['id'])}}">Detalhes</a>
                    <a href="{{route('support.edit', $support['id'])}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

