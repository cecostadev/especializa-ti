<h1>Detalhes do ticket: {{ $support->id }}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }} </li>
</ul>

<form action="{{ route('support.remove', $support->id) }}" method="post">
    @csrf()
    @method('delete')

    <button type="submit">Remover Ticket</button>
</form>